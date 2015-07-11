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
				$data['id'] = I('yonghuid');
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

			import('ORG.Util.Page');
			$count = M('usertable')->where($data)->count();
			$page = new Page($count,10);
			$limit = $page->firstRow .','. $page->listRows;

			$content = M('usertable')->limit($limit)->where($data)->select();
			$this->content = $content;
			$this->page = $page->show();



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
