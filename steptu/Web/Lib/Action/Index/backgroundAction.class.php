<?php
	class backgroundAction extends Action{



		public function background(){
			$this->display();
		}

		public function fenyemian(){
			$this->display();
		}
		public function haohuajiudianguanli(){
			$this->display();
		}
        public function jiudiandingdan(){
			$this->display();
		}
		public function lvyouchaoshijiudian(){
			$this->display();
		}
		public function taocandingdan(){
			$this->display();
		}
		public function taocanguanli(){
			$this->display();
		}
		public function yonghuguanli(){
			if(I('yonghuid')!=''){
				$data['id'] = array('LIKE',"%".I('yonghuid')."%");
			}
			if(I('yonghuming')!=''){
				$data['name'] = array('LIKE',"%". I('yonghuming')."%");
			}
			if(I('youxiang')!=''){
				$data['email'] = array('LIKE',"%". I('youxiang')."%");
			}
			if(I('xingbie')!=''){
				$data['sex'] = array('LIKE',"%". I('xingbie')."%");
			}
			if(I('chushengriqi')!=''){
				$data['birthday'] = array('LIKE',"%". I('chushengriqi')."%");
			}
			if(I('qq')!=''){
				$data['qq'] = array('LIKE',"%". I('qq')."%");
			}
			if(I('xianjuzhudizhi')!=''){
				$data['address'] = array('LIKE',"%". I('xianjuzhudizhi')."%");
			}

			$user = M('usertable')->where($data)->select();
			$this->assign('user',$user);


			$this->display();
		}
		public function taocanxiangqing(){
			$this->display();
		}
     public function lvyouchaoshixinxiguanli(){
			$this->display();
		}
		public function shouyeguanli(){
			$this->display();
		}

	}



?>
