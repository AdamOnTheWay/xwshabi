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

        if($this->isPost ()){  //是不是post提交
             $data['code']='';
            $data['err']='';
            $data['msg']='';

            if($_POST['name'] == "" || $_POST['name'] == undefine){
               

                $data['code']=0;
                $data['err']=0;
                $data['msg']='用户名为空';
                $this->ajaxReturn($data,'JSON'); //验证用户名是否为空
                return;


            }elseif($_POST['password'] == "" || $_POST['password'] == undefine){


                $data['code']=0;
                $data['err']=1;
                $data['msg']='密码为空';
                $this->ajaxReturn($data,'JSON'); //验证密码是否为空

            }elseif($_POST['userSecondSecurity'] == ""|| $_POST['userSecondSecurity'] == undefine){

                $data['code']=0;
                $data['err']=2;
                $data['msg']='密码为空';
                $this->ajaxReturn($data,'JSON');
                return;



            }elseif($_POST['phone'] == ""|| $_POST['phone'] == undefine){


                $data['code']=0;
                $data['err']=3;
                $data['msg']='电话为空';
                $this->ajaxReturn($data,'JSON');
                return;

            }elseif($_POST['email'] == ""|| $_POST['email'] == undefine){


                $data['code']=0;
                $data['err']=4;
                $data['msg']='邮箱为空';
                $this->ajaxReturn($data,'JSON');
                return;

            }elseif($_POST['userSecondSecurity'] != $_POST['password']){

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
            $test = $user->where("name = '{$_POST['name']}'")->select();

            if($test != "" || $test != false){

                $data['code']=0;
                $data['err']=9;
                $data['msg']='用户名已存在';
                $this->ajaxReturn($data,'JSON');
                return;

            }else{

                 $array= array(     'name' =>$_POST['name'] , 
                                    'password' => I('password','','md5'),
                                    'phone' => $_POST['phone'],
                                    'email' =>  $_POST['email']);

                $user ->add($array);
                $data['code']=1;
                $data['msg']='成功';

                $user = M("usertable")->where('name = '.$_POST['name'])->find();


                session('uid',$user['id']);
                session('username',$user['username']);
                session('time',date('Y-m-d H:i:s')); 
                $this->ajaxReturn($data,'JSON');
                return;
            }
        }

        else{
             _404('你没有按规定方式执行');
        }
    }

   

}