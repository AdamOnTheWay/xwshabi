<?php
class registerAction extends Action{

 public function isMobile($str){    //测试电话号码
        return preg_match('/^(1(([35][0-9])|(47)|[8][0126789]))\d{8}$/',$str);    
    } 

    public function isEmail($str) //测试邮箱
    {
       return preg_match("/([a-z0-9]*[-_\.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[\.][a-z]{2,3}([\.][a-z]{2})?/i",$str);
    }

    public function register(){
        $this->display();
    }

    public function registerCheck(){

        if($this->isPost ()){  //是不是post提交
             $data['code']='';
            $data['err']='';
            $data['msg']='';

            if(I['name'] == "" || I['name'] == undefine){
               

                $data['code']=0;
                $data['err']=0;
                $data['msg']='用户名为空';
                $this->ajaxReturn($data,'JSON'); //验证用户名是否为空
                return;


            }elseif(I['password'] == "" || I['password'] == undefine){


                $data['code']=0;
                $data['err']=1;
                $data['msg']='密码为空';
                $this->ajaxReturn($data,'JSON'); //验证密码是否为空

            }elseif(I['userSecondSecurity'] == ""|| I['userSecondSecurity'] == undefine){

                $data['code']=0;
                $data['err']=2;
                $data['msg']='密码为空';
                $this->ajaxReturn($data,'JSON');
                return;



            }elseif(I['phone'] == ""|| I['phone'] == undefine){


                $data['code']=0;
                $data['err']=3;
                $data['msg']='电话为空';
                $this->ajaxReturn($data,'JSON');
                return;

            }elseif(I['email'] == ""|| I['email'] == undefine){


                $data['code']=0;
                $data['err']=4;
                $data['msg']='邮箱为空';
                $this->ajaxReturn($data,'JSON');
                return;

            }elseif(I['userSecondSecurity'] != I['password']){

                $data['code']=0;
                $data['err']=5;
                $data['msg']='两次密码不对';
                $this->ajaxReturn($data,'JSON');
                return;

            }elseif(strlen($_POST['password']) < 6){

                $data['code']=0;
                $data['err']=6;
                $data['msg']='密码太短，请重新设定';
                $this->ajaxReturn($data,'JSON');
                 return;
            }
            elseif (!$this->isMobile($_POST['phone'])) {

                $data['code']=0;
                $data['err']=7;
                $data['msg']='电话号码不符合规范';
                $this->ajaxReturn($data,'JSON');
                return;


            }elseif (!$this->isEmail($_POST['email'])) {


                $data['code']=0;
                $data['err']=8;
                $data['msg']='邮箱不符合规范';
                $this->ajaxReturn($data,'JSON');
                return;
            }
           

            $user = M('usertable');
            $condition['name'] = I('name');
            $test = $user->where($condition)->select();

            if($test != "" || $test != false){

                $data['code']=0;
                $data['err']=9;
                $data['msg']='用户名已存在';
                $this->ajaxReturn($data,'JSON');
                return;

            }else{

                 $array= array(     'name' =>I('name') , 
                                    'password' => I('password','','md5'),
                                    'phone' => I('phone'),
                                    'email' =>  I('email'),
                                    'status' =>  0
                                    );

                $user ->add($array);
                $data['code']=1;
                $data['msg']='成功';
                $condition['name'] = I('name');
                $status = M('usertable')->where($condition)->find();


                cookie('uid',$status['id'],3600); 
                cookie('name',$status['id'],3600); 
                $this->ajaxReturn($data,'JSON');
                return;
            }
        }

        else{
             $this->show("页面无法显示","utf-8");
        }
    }

    public function registerConfirm()
    {

        if(cookie('uid') != ''){
             $this->display();
        }else{
            $this->show("页面错误","utf-8");
        }
    }
   
   public function registerSuccess(){
        if(1){ //验证吗正确
            $con['id'] = cookie('uid');
            $data['statuse'] = 1;
            M('usertable')->where($con)->save($data);
            $this->display();
        }else{
            $this->show("<script>alert('验证码错误,请重新验证');window.location.href='".U('Index/register/registerConfirm','','')."'</script>","utf-8");
        }
   }

}