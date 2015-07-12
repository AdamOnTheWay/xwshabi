<?php
	class backgroundAction extends Action{
		public function tcdelete(){
			$id = I('data');
		if(	M('travelscency')->where(array('id'=>I('data')))->delete()){
			$this->ajaxreturn('ok');
		}

	}
	public function hhjddelete(){
		$id = I('data');

	if(	M('hotel')->where(array('id'=>I('data')))->delete()){
		$this->ajaxreturn('ok');
	}
	}
	public function csdelete(){
		$id = I('data');

	if(	M('hotel')->where(array('id'=>I('data')))->delete()){
		$this->ajaxreturn('ok');
	}
	}
public function tcxq(){
	if(I('taocanming')!=''){
		$pkg['name'] = I('taocanming');
	}
	if(I('taocanid')!=''){
		$pkg['id'] = I('taocanid');
	}
	if(I('qishiriqi')!=''){
		$pkg['startTime'] = I('qishiriqi');
	}
	if(I('jiezhiriqi')!=''){
		$pkg['endTime'] = I('jiezhiriqi');
	}
	if(I('shifouyouhui')!=''){
		$pkg['ifdiscount'] = I('shifouyouhui');
	}
	if(I('youhuijia')!=''){
		$pkg['price'] = I('youhuijia');
	}

if(	M('travelscency')->where(array('id'=>I('taocanid')))->save($pkg)){
	$this->success("ok");
}

}
		public function tcadd(){
			if(I('taocanming')!=''){
				$data['name'] = I('taocanming');
			}
			if(I('shifouyouhui')!=''){
				$data['ifdiscount'] = I('shifouyouhui');
			}
			if(I('youxiang')!=''){
				$data['price'] =I('youhuijia');
			}
			if(M('travelscency')->add($data)){
				$this->success('ok');
			}
		}
		public function yhdelete(){
			$id = I('data');

		if(	M('usertable')->where(array('id'=>I('data')))->delete()){
			$this->ajaxreturn('ok');
		}
		}
		public function yhchange(){
			if(I('yonghuid')!=''){
				$data['id'] = I('yonghuid');
			}
			if(I('yonghuming')!=''){
				$data['name'] = I('yonghuming');
			}
			if(I('youxiang')!=''){
				$data['email'] =I('youxiang');
			}
			if(I('mima')!=''){
				$data['password'] = md5(I('mima'));
			}
			if(I('xingbie')!=''){
				$data['sex'] = I('xingbie');
			}
			if(I('chushengriqi')!=''){
				$data['birthday'] =  I('chushengriqi');
			}
			if(I('qq')!=''){
				$data['qq'] = I('qq');
			}
			if(I('xianjuzhudizhi')!=''){
				$data['address'] = I('xianjuzhudizhi');
			}
			if(I('ziwojieshao')!=''){
				$data['comment'] =  I('ziwojieshao');
			}
			if(I('dianhuahaoma')!=''){
				$data['phone'] = I('dianhuahaoma');
			}
			$id = $_POST['data'];
			if(M('usertable')->where(array('id'=>I('yonghuid')))->save($data)){
				$this->success('ok');
			}


		}

		public function background(){
			$this->display();
		}

		public function fenyemian(){
			$this->display();
		}
		public function haohuajiudianguanli(){
			$data['status']=1;
			if(I('haohuajiudianid')!=''){
				$data['id'] = I('haohuajiudianid');
			}
			if(I('haohuajiudianming')!=''){
				$data['hotelName'] = array('LIKE',"%". I('haohuajiudianming')."%");
			}
			if(I('haohuajiudianjiage')!=''){
				$data['price'] = I('haohuajiudianjiage');
			}
			if(I('haohuajiudiansuozaidi')!=''){
				$data['area'] = array('LIKE',"%". I('haohuajiudiansuozaidi')."%");
			}
			import('ORG.Util.Page');
			$count = M('hotel')->where($data)->count();
			$page = new Page($count,5);
			$limit = $page->firstRow .','. $page->listRows;

			$content = M('hotel')->limit($limit)->where($data)->select();
			$this->content = $content;
			$this->page = $page->show();
			$this->display();
		}

		public function jiudianxiangqing(){

			$id = $_GET['id'];
			$data = M('hotel')->where(array('id'=>$id))->find();

			$this->assign('ho',$data);
			$this->display();
		}
        public function jiudiandingdan(){
			$this->display();
		}
		public function lvyouchaoshijiudian(){
			if(I('ID')!=''){
				$data['id'] = I('ID');
			}
			if(I('chengshiming')!=''){
				$data['cityName'] = array('LIKE',"%". I('chengshiming')."%");
			}
			if(I('quxianming')!=''){
				$data['xian'] = I('quxianming');
			}
			if(I('jingdian')!=''){
				$data['jingdian'] = array('LIKE',"%". I('jingdian')."%");
			}
			if(I('jichanghuochezhan')!=''){
				$data['station'] = array('LIKE',"%". I('jichanghuochezhan')."%");
			}
			if(I('shangyequ')!=''){
				$data['business'] = array('LIKE',"%". I('shangyequ')."%");
			}
			import('ORG.Util.Page');
			$count = M('city')->where($data)->count();
			$page = new Page($count,5);
			$limit = $page->firstRow .','. $page->listRows;

			$content = M('city')->limit($limit)->where($data)->select();
			$this->content = $content;
			$this->page = $page->show();
			$this->display();
		}
		public function taocandingdan(){
			$this->display();
		}
		public function taocanguanli(){

			if(I('taocanid')!=''){
				$data['id'] = I('taocanid');
			}
			if(I('taocanming')!=''){
				$data['name'] = array('LIKE',"%". I('taocanming')."%");
			}
			if(I('youhuijia')!=''){
				$data['price'] = I('youhuijia');
			}
			if(I('shifouyouhui')!=''){
				$data['ifdiscount'] = I('shifouyouhui');
			}









			import('ORG.Util.Page');
			$count = M('travelscency')->where($data)->count();
			$page = new Page($count,10);
			$limit = $page->firstRow .','. $page->listRows;

			$content = M('travelscency')->limit($limit)->where($data)->select();
			$this->content = $content;
			$this->page = $page->show();
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




			$id = $_GET['id'];
			$data = M('travelscency')->where(array('id'=>$id))->find();

			$this->assign('tr',$data);
			$this->display();
		}
     public function lvyouchaoshixinxiguanli(){
			 if(I('lvyouchaoshiid')!=''){
 				$data['id'] = I('lvyouchaoshiid');
 			}
 			if(I('lvyouchaoshiming')!=''){
 				$data['gotelName'] = array('LIKE',"%". I('lvyouchaoshiming')."%");
 			}
 			if(I('lvyouchaoshijiage')!=''){
 				$data['price'] = array('LIKE',"%". I('lvyouchaoshijiage')."%");
 			}
 			if(I('lvyouchaoshichengshi')!=''){
 				$data['capital'] = array('LIKE',"%". I('lvyouchaoshichengshi')."%");
 			}
 			if(I('lvyouchaoshiquxian')!=''){
 				$data['destination'] = array('LIKE',"%". I('lvyouchaoshiquxian')."%");
 			}



 			import('ORG.Util.Page');
 			$count = M('hotel')->where($data)->count();
 			$page = new Page($count,5);
 			$limit = $page->firstRow .','. $page->listRows;

 			$content = M('hotel')->limit($limit)->where($data)->select();
 			$this->content = $content;
 			$this->page = $page->show();
 			$this->display();
		}
		public function shouyeguanli(){
			$this->display();
		}

	}



?>
