<?php
class loginVerifyAction extends Action{

	//生成验证码
	public function identify(){
		import('ORG.Util.Image');
		//ob_end_clean();
		image::buildImageVerify(4,5,'png',80,25);
	}
		//code:0 代表登录失败
		//code:0 err:2 验证码错误
		//code:0 err:0 帐号或密码错误
		//code:0 err:1 帐号或密码为空
		//code:1 登录成功
	public function loginVerify(){
		$data['code']='';
		$data['err']='';
		$data['msg']='';

		if(!IS_POST) _404('请先登录');//判断是否是以正常方式登录
		//1.I方法第一个参数是前端表单里验证码的name
		//2.判断并返回数据包
		// if(I('','','md5')!= session('identify')){
		// 	$data['code']=0;
		// 	$data['err']=2;
		// 	$data['msg']='验证码错误';
		// 	$this->ajaxReturn($data,'JSON');
		// }
		//1.第一个I方法name参数是前端表单里帐号的name
		//2.M方法里的参数是数据库的表名
		//3.第二个I方法password参数是前端表单里密码的name，以md5格式加密
		$username = I('log','','');
		$user = M('usertable')->where(array('name'=>$username))->find();
		$pwd = I('pwd','','md5');
		if($username==''||$pwd==''){
			$data['code']=0;
			$data['err']=1;
			// $data['msg']='帐号或密码不能为空';
			$this->ajaxReturn($data,'JSON');
		}
	    if(!$user||$user['password']!=$pwd){
			$data['code']=0;
			$data['err']=0;
			$data['msg']='帐号或密码不正确';
			$this->ajaxReturn($data,'JSON');
		}
		if($user&&$user['password']==$pwd)
		{
			$data['code']=1;
			$data['msg']='登录成功';

			cookie('username',$user['name'],3600); 
			cookie('userid',$user['id'],3600);
			$this->ajaxReturn($data,'JSON');
			


		}


	}
//		session('uid',$user['id']);
//		session('username',$user['username']);
//		session('time',date('Y-m-d H:i:s'),$user['time']);
//		session('loginip',$user['loginip']);

	public function tuichudenglu(){

		cookie('username',null);
	}

	}
	?>
