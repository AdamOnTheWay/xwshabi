<?php


	 //会员中心


	 class vipCenterAction extends Action{

	 	public function handUploadImage()
	 	{
	 		if(cookie("userid") == ''){
	 			$this->show("<script>alert('请先登录');window.history.go(-1);</script>","utf-8");
	 			die();
	 		}

	 		import('ORG.Net.UploadFile');
	 		$file = new UploadFile();
	 		$file->maxSize = 3333333333333;
	 		$file->allowExts = array('jpg','png','jpeg','gif');
	 		$file->savePath = C('HEAD');

	 		if(!$file->upload()){
	 			$data['msg'] = 0;
	 			$data['path'] = $file->getErrorMsg();
	 			
	 			$this->ajaxReturn($data);
	 			
	 		}else{
	 			$info = $file-> getUploadFileInfo();
	 			$image['image'] = C('HEAD_IMAGE').$info[0]['savepath'].$info[0]['savename'];
	 			$user['id'] = cookie('userid'); //cookie得到
	 			unlink(M('usertable')->where($user)->find('image'));
	 			if(M('usertable')->where($user)->save($image)){

		 			$score = M('score');
					$Sc['userid'] = cookie("userid"); //
					$Sc['way'] = 1;
					if ($score->where($Sc)->find()) {
						$data['msg'] = 1;
		 				$data['path'] = C('HEAD_IMAGE').$info[0]['savepath'].$info[0]['savename'];
		 				$this->ajaxReturn($data);
					}else{

						$dataScore['userid'] = cookie("userid");
						$dataScore['piont'] = 10;
						$dataScore['getDate'] = date("Y-m-d");
						$dataScore['time'] = date('Y-m-d',strtotime('+2years',strtotime(date('Y-m-d')))); //获取当前系统时间加上两年
						$dataScore['way'] = 1;

						$score->add($dataScore);

		 				$data['msg'] = 1;
		 				$data['path'] = C('HEAD_IMAGE').$info[0]['savepath'].$info[0]['savename'];
		 				$this->ajaxReturn($data);
					}
	 				
	 			}else{
	 				$data['msg'] = 0;
	 				$data['path'] = '保存出错';
	 				$this->ajaxReturn($data);
	 			}
	 		
			}

	 	}

	 	//处理我的信息显示页面

	 	public function myInformation(){
	 		header("Content-type: text/html; charset=utf-8");
	 		if(cookie("userid") == ''){
	 			$this->show("<script>alert('请先登录');window.history.go(-1);</script>","utf-8");
	 			die();
	 		}



	 		$condition['id'] = cookie("userid"); //最后用cookie得到
	 		$this->user = M('usertable')->where($condition)->find();
	 		$this->display();
	 	}


		//保存用户完善的信息
	 	public function handUserInfo(){
	 		$user = M('usertable');


	 		$data['address'] = I('address');
	 		$data['comment'] = I('comment');
	 		$data['sex'] = I('sex');
	 		$data['qq'] = I('qq');
	 		$data['birthday'] = I('birthday');
	 		if(I('pwd') != ''){
	 			$data['password'] = I('password','','md5');


	 			$conditon['id'] = cookie('userid');
	 			$condition['password'] = I('pwd','','md5'); //得到查询的条件
	 			

	 			 if($user->field('name')->where($condition)->find()){
	 				$user->where('id='.I('id'))->save($data);
			 		
			 		$this->show("<script>alert('修改成功'); window.location.href = '".U('vipCenter/myInformation','','')."';</script>",'UTF-8');
	 			}else{
	 				$this->show("<script>alert('密码错误');window.location.href ='".U('vipCenter/myInformation','','')."';</script>",'UTF-8');
	 			}
	 		}else{
	 			$user->where('id='.I('id'))->save($data);
	 			$this->show("<script>alert('修改成功');window.location.href = '".U('vipCenter/myInformation','','')."';</script>",'UTF-8');
	 		}
	
	 	}

	 	public function myOrders(){  //展示所有的评论
	 		if(cookie("userid") == ''){
	 			$this->show("<script>alert('请先登录');window.history.go(-1);</script>","utf-8");
	 			die();
	 		}
	 		$data = M('order');
	 		import('ORG.Util.Page');
	 		//where 中的条件为session or cookie得到的
	 		$condition['userId'] = cookie("userid");
	 	
	 		$count = $data->where($condition)->count();
	 		$page = new Page($count,2);
	 		$this->show = $page->show();
	 		$this->list = $data->where($condition)->limit($page->firstRow.','.$page->listRows)->order('id desc')->select();

	 		$this->user = M('usertable')->field('id,name,image,phone,email')->where('id='.cookie('userid'))->find();

	 		$this->display();
	 	}

	 	public function myEvaluations(){
	 		if(cookie("userid") == ''){
	 			$this->show("<script>alert('请先登录');window.history.go(-1);</script>","utf-8");
	 			die();
	 		}
	 		$user['id'] = cookie("userid");
	 	
	 		$this->class = I("class");
	 		$this->juge = I('juge',1);


	 		$this->user = M('usertable')->field('id,name,image,phone,email')->where($user)->find();

	 		$condition['userId'] =cookie("userid");
	 		// $condition['scencyId'] 	= I('travelId');
	 		import('ORG.Util.Page');
	 		$count = M('comment')->where($condition)->count();
	 		$page = new Page($count,2);
	 		$this->show = $page->show();


	 		$this->order = M('comment')->where($condition)->limit($page->firstRow.','.$page->listRows)->order('id desc')->select(); 
	 		 //得到评论的id号 ，展示其内容 
	 		$this->travelId = I('travelId');

	 		$this->display();
	 	}
	 	// 保存订单评论
	 	public function orderComment(){  

	 		if(cookie("userid") == ''){
	 			$this->show("<script>alert('请先登录');window.history.go(-1);</script>","utf-8");
	 			die();
	 		}
	 		$orderComment = M('comment');
	 		$data['travelId'] = I('travelId');
	 		$data['userId'] = cookie("userid");
	 		$data['content'] = I('content');
	 		$data['class'] = I("class");
	 		$data['level'] = I('level');
	 		$data['time'] = date('Y-m-d');

	 		$orderComment->add($data);

	 		$this->redirect('myEvaluations',array('travelId'=>$data['travelId'],'class'=>I("class")));
	  	}

	 	public function myTravealBook(){
	 		if(cookie("userid") == ''){
	 			$this->show("<script>alert('请先登录');window.history.go(-1);</script>","utf-8");
	 			die();
	 		}
	 		$this->user = M('usertable')->field('id,name,image,phone,email')->where('id = '.cookie('userid'))->find();


	 		import('ORG.Util.Page');
	 		//where 中的条件为session or cookie得到的
	 		$data = M('letter');
	 		$condition['userId'] = cookie("userid");
	 		$count = $data->where($condition)->count();
	 		$page = new Page($count,3);
	 		$this->show = $page->show();
	 		$this->list = M('letter')->where($condition)->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();

	 		$this->display();
	 	}

	 	//写信
	 	public function DoWriteLetter(){
	 		if(cookie("userid") == ''){
	 			$this->show("<script>alert('请先登录');window.history.go(-1);</script>","utf-8");
	 			die();
	 		}
	 		import('ORG.Net.UploadFile');
	 		$file = new UploadFile();
	 		$file->maxSize = 3333333333333;
	 		$file->allowExts = array('jpg','png','jpeg','gif');
	 		$file->savePath = C('HEAD');

	 		if(!$file->upload()){
	 			$this->ajaxReturn('msg',$file->getErrorMsg());
	 		}else{
	 			$info = $file->getUploadFileInfo();
	 			$data = I('post.');
	 			$data['date'] = date('Y-m-d');
	 			$data['userId'] = cookie("userid");
	 			$data['image'] = C('HEAD_IMAGE').$info[0]['savepath'].$info[0]['savename'];
	 			
	 			M('letter')->add($data);

	 			$this->redirect("myTravealBook");
	 		}
	 	}
	 	

	 	function myGrades(){
			if(cookie("userid") == ''){
	 			$this->show("<script>alert('请先登录');window.history.go(-1);</script>","utf-8");
	 			die();
	 		}
	 		$table = M('score');
	 		$cDate['time'] = array('ELT',date('Y-m-d'));
	 		$table->where($cDate)->delete();
	 		
	 		$condition = array('userid' => cookie("userid")); //这里要用cookie
	 		$this->point = $table->where($condition)->sum('piont');
	 		var_dump($this->point);
	 		$this->score = $table->where($condition)->select();
	 		$this->user = M('usertable')->field('id,name,image,phone,email')->where(array('id' => cookie('userid') ))->find();
	 		$this->display();
	 	}

	 	function Hello(){
	 		if(cookie("userid") == ''){
	 			$this->show("<script>alert('请先登录');window.history.go(-1);</script>","utf-8");
	 			die();
	 		}
	 		$score = M('score');
	 				$Sc['userid'] = cookie("userid"); //
	 				$Sc['way'] = 1;
	 				if ($score->where($Sc)->find()) {
	 					
	 				}else{

	 					$dataScore['userid'] = 1;
	 					$dataScore['piont'] = 10;
	 					$dataScore['getDate'] = date("Y-m-d");
	 					$dataScore["time"] = date('Y-m-d',strtotime('+2years',strtotime(date('Y-m-d')))); //获取当前系统时间加上两年
	 					$dataScore['way'] = 1;

	 					$score->add($dataScore);

	 			}
	 		$this->display('vipCenter');
	 	}

	public function myFelling(){
		if(cookie("userid") == ''){
	 			$this->show("<script>alert('请先登录');window.location.href='".U('Index/index/index')."'","utf-8");
	 			die();
	 		}
		$this->user = M('usertable')->field('id,name,image,phone,email')->where(array('id' => cookie('userid') ))->find();
		$this->display();
	} 	

	public function handFell()
	{	
		import('ORG.Net.UploadFile');
 		$file = new UploadFile();
 		$file->maxSize = 3333333333333;
 		$file->allowExts = array('jpg','png','jpeg','gif');
 		$file->savePath = C('HEAD');

 		if(!$file->upload()){
 			$data['msg'] = 0;
 			$data['path'] = $file->getErrorMsg();
 			
 			$this->ajaxReturn($data);
 			
 		}else{
 			$info = $file-> getUploadFileInfo();
 			$msg['image'] = C('HEAD_IMAGE').$info[0]['savepath'].$info[0]['savename'];
 			$msg['userId'] = cookie('userid');
			$msg['note'] =  I('content');
			$msg['name'] = I('title');
			$msg['time'] = date('Y-m-d');
 			
 			if(M('travelnote')->add($msg)){	 			
 				$data['msg'] = 1;
 				$data['path'] = '保存成功';
 				$this->ajaxReturn($data);
 			}else{
 				$data['msg'] = 0;
 				$data['path'] = '保存出错';
 				$this->ajaxReturn($data);
 			}
 		
		}
	}
}
?>