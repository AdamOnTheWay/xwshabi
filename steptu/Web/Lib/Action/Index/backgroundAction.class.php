<?php
	class backgroundAction extends Action{
		public function tcdelete(){
			$id = I('data');
		if(	M('travelscency')->where(array('id'=>I('data')))->delete()){
			$this->ajaxreturn('ok');
		}

	}
	public function chidelete(){
		$id = I('data');
	if(	M('food')->where(array('id'=>I('data')))->delete()){
		$this->ajaxreturn('ok');
	}

}

	public function citydelete(){
		$id = I('data');

	if(	M('city')->where(array('id'=>I('data')))->delete()){
		$this->ajaxreturn('ok');
	}
	}

	public function cityadd(){
		if(I('weizhiid')=='kong'){

		if(I('s_province')!=''){
			$data['pro'] = I('s_province');
		}
		if(I('s_city')!=''){
			$data['cityName'] = I('s_city');
		}
		if(I('s_county')!=''){
			$data['xian'] =I('s_county');
		}
		if(I('jingdian')!=''){
			$data['jingdian'] =array('LIKE',"%". I('jingdian')."%");
		}
		if(I('jichanghuochezhan')!=''){
			$data['station'] =array('LIKE',"%". I('jichanghuochezhan')."%");
		}
		if(I('shangyequ')!=''){
			$data['business'] =array('LIKE',"%". I('shangyequ')."%");
		}

		if(M('city')->add($data)){
			$this->success('添加成功');
		}else{
			$this->error('由于某种原因添加失败');
		}
	}else{

		if(I('s_province')!=''){
			$data['pro'] = I('s_province');
		}
		if(I('s_city')!=''){
			$data['cityName'] = I('s_city');
		}
		if(I('s_county')!=''){
			$data['xian'] =I('s_county');
		}
		if(I('jingdian')!=''){
			$data['jingdian'] =array('LIKE',"%". I('jingdian')."%");
		}
		if(I('jichanghuochezhan')!=''){
			$data['station'] =array('LIKE',"%". I('jichanghuochezhan')."%");
		}
		if(I('shangyequ')!=''){
			$data['business'] =array('LIKE',"%". I('shenagyequ')."%");
		}
		if(M('city')->where(array('id'=>I('weizhiid')))->save($data)){
			$this->success('修改成功');
		}else{
			$this->error('由于某种原因修改失败');
		}

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
		$pkg['startTime'] =I('qishiriqi');
	}
	if(I('jiezhiriqi')!=''){
		$pkg['endTime'] =I('jiezhiriqi');
	}
	if(I('shifouyouhui')!=''){
		$pkg['ifdiscount'] = I('shifouyouhui');
	}
	if(I('youhuijia')!=''){
		$pkg['price'] = I('youhuijia');
	}
	if(I('taocanshuoming')!=''){
		$pkg['descriptionPrice'] = I('taocanshuoming');
	}
	if(I('youhuihuodong')!=''){
		$pkg['discountAction'] =  I('youhuihuodong');
	}
	if(I('chanpintese')!=''){
		$pkg['characteristics'] =  I('chanpintese');
	}
	if(I('xingchengjieshao')!=''){
		$pkg['routeDescription'] =  I('xingchengjieshao');
	}
	if(I('yudingxuzhi')!=''){
		$pkg['bookInformation'] =  I('yudingxuzhi');
	}
	if(I('theme')!=''){
		$pkg['status'] =  I('theme');
	}

if(	M('travelscency')->where(array('id'=>I('taocanid')))->save($pkg)){
	$this->success("ok");
}

}
		public function tcadd(){
			if(I('taocanid')=='kong'){

			if(I('taocanming')!=''){
				$data['name'] = array('LIKE',"%". I('taocanming')."%");
			}
			if(I('shifoushuyu')!=''){
				$data['ifdiscount'] = I('shifoushuyu');
			}
			if(I('youhuijia')!=''){
				$data['price'] =I('youhuijia');
			}
			if(M('travelscency')->add($data)){
				$this->success('添加成功');
			}else{
				$this->error('由于某种原因添加失败');
			}
		}else{

			if(I('taocanming')!=''){
				$data['name'] = array('LIKE',"%". I('taocanming')."%");
			}
			if(I('shifoushuyu')!=''){
				$data['ifdiscount'] = I('shifoushuyu');
			}
			if(I('youhuijia')!=''){
				$data['price'] =I('youhuijia');
			}
			if(M('travelscency')->where(array('id'=>I('taocanid')))->save($data)){
				$this->success('修改成功');
			}else{
				$this->error('由于某种原因修改失败');
			}

		}

		}

		public function hhjdadd(){
			if(I('haohuajiudianid')=='kong'){

			if(I('haohuajiudianming')!=''){
				$data['hotelName'] = I('haohuajiudianming');
			}
			if(I('haohuajiudianjiage')!=''){
				$data['price'] = I('haohuajiudianjiage');
			}
			if(I('s_province')!=''){
				$data['capital'] =I('s_province');
			}
			if(I('s_city')!=''){
				$data['destination'] =I('s_city');
			}
			if(I('s_county')!=''){
				$data['area'] =I('s_county');
			}
			if(I('haohuajutidizhi')!=''){
				$data['xiangxidizhi'] =I('haohuajutidizhi');
			}
			if(I('zuizaokeruzhu')!=''){
				$data['startTime'] =I('zuizaokeruzhu');
			}
			if(I('zuiwanlidian')!=''){
				$data['endTime'] =I('zuiwanlidian');
			}
			$data['status']=1;
			if(M('hotel')->add($data)){
				$this->success('添加成功');
			}else{
				$this->error('由于某种原因添加失败');
			}
		}else{

			if(I('haohuajiudianming')!=''){
				$data['hotelName'] = I('haohuajiudianming');
			}
			if(I('haohuajiudianjiage')!=''){
				$data['price'] = I('haohuajiudianjiage');
			}
			if(I('s_province')!=''){
				$data['capital'] =I('s_province');
			}
			if(I('s_city')!=''){
				$data['destination'] =I('s_city');
			}
			if(I('s_county')!=''){
				$data['area'] =I('s_county');
			}
			if(I('haohuajutidizhi')!=''){
				$data['xiangxidizhi'] =I('haohuajutidizhi');
			}
			if(I('zuizaokeruzhu')!=''){
				$data['startTime'] =I('zuizaokeruzhu');
			}
			if(I('zuiwanlidian')!=''){
				$data['endTime'] =I('zuiwanlidian');
			}
			if(M('hotel')->where(array('id'=>I('haohuajiudianid')))->save($data)){
				$this->success('修改成功');
			}else{
				$this->error('由于某种原因修改失败');
			}

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
			if(I('id') != ''){
				$con["id"] = I('id');
			}
			if(I('time') != ''){
				$con['time'] = I("time");
			}
			if(I('phone') != ''){
				$con['phone'] = I('phone');
			}
			if(I('name') != ''){
				$con['name'] = I('name');
			}
				$con['class'] = 1;

			$data = M('order') ;
			import('ORG.Util.Page');
			$count = $data->where($con)->count();
			$page = new Page($count,5);
			$limit = $page->firstRow .','. $page->listRows;

			$content = $data->limit($limit)->where($con)->select();
			$this->content = $content;
			$this->page = $page->show();
			$this->display();

		}
		public function jiudiandingdan(){
			if(I('id') != ''){
				$con["id"] = I('id');
			}
			if(I('time') != ''){
				$con['time'] = I("time");
			}
			if(I('phone') != ''){
				$con['phone'] = I('phone');
			}
			if(I('name') != ''){
				$con['name'] = I('name');
			}
				$con['class'] = 0;

			$data = M('order') ;
			import('ORG.Util.Page');
			$count = $data->where($con)->count();
			$page = new Page($count,5);
			$limit = $page->firstRow .','. $page->listRows;

			$content = $data->limit($limit)->where($con)->select();
			$this->content = $content;
			$this->page = $page->show();
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
 				$data['hotelName'] = array('LIKE',"%". I('lvyouchaoshiming')."%");
 			}
 			if(I('lvyouchaoshijiage')!=''){
 				$data['price'] =  I('lvyouchaoshijiage');
 			}
 			if(I('lvyouchaoshichengshi')!=''){
 				$data['destination'] = array('LIKE',"%". I('lvyouchaoshichengshi')."%");
 			}
 			if(I('lvyouchaoshiquxian')!=''){
 				$data['area'] = array('LIKE',"%". I('lvyouchaoshiquxian')."%");
 			}
			$data['status']=0;



 			import('ORG.Util.Page');
 			$count = M('hotel')->where($data)->count();
 			$page = new Page($count,5);
 			$limit = $page->firstRow .','. $page->listRows;

 			$content = M('hotel')->limit($limit)->where($data)->select();
 			$this->content = $content;
 			$this->page = $page->show();
 			$this->display();
		}
		public function lvyouadd(){
			if(I('haohuajiudianid')=='kong'){

			if(I('s_province')!=''){
				$data['capital'] = I('s_province');
			}
			if(I('s_city')!=''){
				$data['destination'] = I('s_city');
			}
			if(I('s_county')!=''){
				$data['area'] =I('s_county');
			}
			if(I('haohuajiudianming')!=''){
				$data['hotelName'] =I('haohuajiudianming');
			}
			if(I('haohuajiudianjiage')!=''){
				$data['price'] =I('haohuajiudianjiage');
			}
			if(I('haohuajutidizhi')!=''){
				$data['xiangxidizhi'] =I('haohuajutidizhi');
			}
			if(I('zuizaokeruzhu')!=''){
				$data['startTime'] =I('zuizaokeruzhu');
			}
			if(I('zuiwanlidian')!=''){
				$data['endTime'] =I('zuiwanlidian');
			}
			$data['status']=0;


			if(M('hotel')->add($data)){
				$this->success('添加成功');
			}else{
				$this->error('由于某种原因添加失败');
			}
		}else{


						if(I('s_province')!=''){
							$data['capital'] = I('s_province');
						}
						if(I('s_city')!=''){
							$data['destination'] = I('s_city');
						}
						if(I('s_county')!=''){
							$data['area'] =I('s_county');
						}
						if(I('haohuajiudianming')!=''){
							$data['hotelName'] =I('haohuajiudianming');
						}
						if(I('haohuajiudianjiage')!=''){
							$data['price'] =I('haohuajiudianjiage');
						}
						if(I('haohuajutidizhi')!=''){
							$data['xiangxidizhi'] =I('haohuajutidizhi');
						}
						if(I('zuizaokeruzhu')!=''){
							$data['startTime'] =I('zuizaokeruzhu');
						}
						if(I('zuiwanlidian')!=''){
							$data['endTime'] =I('zuiwanlidian');
						}
			if(M('hotel')->where(array('id'=>I('haohuajiudianid')))->save($data)){
				$this->success('修改成功');
			}else{
				$this->error('由于某种原因修改失败');
			}

		}

		}
		public function shouyeguanli(){
			if(IS_POST){
			import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->maxSize  = 3145728 ;// 设置附件上传大小
			$upload->allowExts  = array('jpg', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath='Web/Tpl/Index/Public/images/travelNote/';// 设置附件上传目录
 		if(!$upload->upload()) {// 上传错误提示错误信息
			$this->error($upload->getErrorMsg());
 		}else{// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();



 		}
		if(I('mpcontent')!=''){
			$data['remark']=I('mpcontent');
		}
		$User = M("note"); // 实例化User对象
		$data['image']='/xwshabi/steptu/'.$info[0]['savepath'].$info[0]['savename'];
		if($User->add($data)){
		$this->success('数据保存成功！');
	}
	}
			$this->display();
		}

		public function faqihuodongguanli(){
			if(I('taocanid')!=''){
				$data['id'] = I('taocanid');
			}
			if(I('leibie')!=''){
				$data['theme'] = array('LIKE',"%". I('leibie')."%");
			}
			if(I('huodongshijian')!=''){
				$data['startTime'] =I('huodongshijian');
			}
			if(I('huodongshifadi')!=''){
				$data['startarea'] =array('LIKE',"%". I('huodongshifadi')."%");
			}
			if(I('huodongmudidi')!=''){
				$data['intentarea'] =array('LIKE',"%". I('huodongmudidi')."%");
			}
			if(I('huodongneirong')!=''){
				$data['content'] =array('LIKE',"%". I('huodongneirong')."%");
			}
			if(I('zuidacanyurenshu')!=''){
				$data['maxnumber'] =I('zuidacanyurenshu');
			}
			if(I('faqiren')!=''){
				$data['initiator'] =array('LIKE',"%". I('faqiren')."%");
			}
			if(I('huodongbeizhu')!=''){
				$data['remark'] =array('LIKE',"%". I('huodongbeizhu')."%");
			}




		 import('ORG.Util.Page');
		 $count = M('action')->where($data)->count();
		 $page = new Page($count,5);
		 $limit = $page->firstRow .','. $page->listRows;

		 $content = M('action')->limit($limit)->where($data)->select();
		 $this->content = $content;
		 $this->page = $page->show();
		 $this->display();


		}




		public function tcxqimage(){
			if(IS_POST){

			import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->maxSize  = 3145728 ;// 设置附件上传大小
			$upload->allowExts  = array('jpg', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath='Web/Tpl/Index/Public/images/travelstore/';// 设置附件上传目录
 		if(!$upload->upload()) {// 上传错误提示错误信息
			$this->error($upload->getErrorMsg());
 		}else{// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();



 		}

		$User = M("travelscency"); // 实例化User对象
		$data['image']='/xwshabi/steptu/'.$info[0]['savepath'].$info[0]['savename'];
		if($User->where(array('id'=>I('taocanid')))->save($data)){
		$this->success('数据保存成功！');
	}
}

}
		public function hhjdimage(){
			if(IS_POST){

			import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->maxSize  = 3145728 ;// 设置附件上传大小
			$upload->allowExts  = array('jpg', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath='Web/Tpl/Index/Public/images/travelstore/';// 设置附件上传目录
 		if(!$upload->upload()) {// 上传错误提示错误信息
			$this->error($upload->getErrorMsg());
 		}else{// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();



 		}

		$User = M("hotel"); // 实例化User对象
		$data['image']='/xwshabi/steptu/'.$info[0]['savepath'].$info[0]['savename'];
		if($User->where(array('id'=>I('haohuajiudianid')))->save($data)){
		$this->success('数据保存成功！');
	}
}

		}


		public function hhjdxq(){


			if(I('haohuajiudianming')!=''){
				$data['hotelName'] = I('haohuajiudianming');
			}
			if(I('haohuajiudianjiage')!=''){
				$data['price'] = I('haohuajiudianjiage');
			}
			if(I('s_province')!=''){
				$data['capital'] =I('s_province');
			}
			if(I('s_city')!=''){
				$data['destination'] =I('s_city');
			}
			if(I('s_county')!=''){
				$data['area'] =I('s_county');
			}
			if(I('haohuajutidizhi')!=''){
				$data['xiangxidizhi'] =I('haohuajutidizhi');
			}
			if(I('zuizaokeruzhu')!=''){
				$data['startTime'] =I('zuizaokeruzhu');
			}
			if(I('zuiwanlidian')!=''){
				$data['endTime'] =I('zuiwanlidian');
			}

			if(I('fangxing1')!=''){
				$data['house1'] =I('fangxing1');
			}
			if(I('fangxing2')!=''){
				$data['house2'] =I('fangxing2');
			}
			if(I('fangxing3')!=''){
				$data['house3'] =I('fangxing3');
			}
			if(I('fangxing4')!=''){
				$data['house4'] =I('fangxing4');
			}
			if(I('fangxing5')!=''){
				$data['house5'] =I('fangxing5');
			}
			if(I('fangxing6')!=''){
				$data['house6'] =I('fangxing6');
			}
			if(I('fangxing7')!=''){
				$data['house7'] =I('fangxing7');
			}
			if(I('fangxing8')!=''){
				$data['house8'] =I('fangxing8');
			}
			if(I('fangxingyuding')!=''){
				$data['intro'] =I('fangxingyuding');
			}
			if(I('jiudianjieshao')!=''){
				$data['comment'] =I('jiudianjieshao');
			}

			$data['status']=1;
			if(M('hotel')->where(array('id'=>I('haohuajiudianid')))->save($data)){
				$this->success('修改成功');
			}else{
				$this->error('由于某种原因修改失败');
			}

		}

		public function hddelete(){
			$id = I('data');
			if(M('action')->where(array('id'=>$id))->delete()){
				$this->ajaxreturn('ok');
			}
		}

		public function hdadd(){
			if(I('taocanid')=='kong'){

			if(I('huodongshijian')!=''){
				$data['startTime'] = I('huodongshijian');
			}
			if(I('theme')!=''){
				$data['theme'] = I('theme');
			}
			if(I('huodongshifadi')!=''){
				$data['startarea'] = I('huodongshifadi');
			}
			if(I('huodongmudidi')!=''){
				$data['intentarea'] =I('huodongmudidi');
			}
			if(I('huodongneirong')!=''){
				$data['content'] =I('huodongneirong');
			}
			if(I('zuidacanyurenshu')!=''){
				$data['maxnumber'] =I('zuidacanyurenshu');
			}
			if(I('faqiren')!=''){
				$data['initiator'] =I('faqiren');
			}
			if(I('huodongbeizhu')!=''){
				$data['remark'] =I('huodongbeizhu');
			}


			if(M('action')->add($data)){
				$this->success('添加成功');
			}else{
				$this->error('由于某种原因添加失败');
			}
		}else{
			if(I('theme')!=''){
			$data['theme'] = I('theme');
		}

			if(I('huodongshijian')!=''){
				$data['startTime'] = I('huodongshijian');
			}
			if(I('huodongshifadi')!=''){
				$data['startarea'] = I('huodongshifadi');
			}
			if(I('huodongmudidi')!=''){
				$data['intentarea'] =I('huodongmudidi');
			}
			if(I('huodongneirong')!=''){
				$data['content'] =I('huodongneirong');
			}
			if(I('zuidacanyurenshu')!=''){
				$data['maxnumber'] =I('zuidacanyurenshu');
			}
			if(I('faqiren')!=''){
				$data['initiator'] =I('faqiren');
			}
			if(I('huodongbeizhu')!=''){
				$data['remark'] =I('huodongbeizhu');
			}
			if(M('action')->where(array('id'=>I('taocanid')))->save($data)){
				$this->success('修改成功');
			}else{
				$this->error('由于某种原因修改失败');
			}

		}
		}

		public function lvyouchaoshiguanli(){
			if(I('chidian')!=''){
				$data['id'] = I('chidian');
			}
			if(I('chidianming')!=''){
				$data['storeName'] = array('LIKE',"%". I('chidianming')."%");
			}
			if(I('chidiandianhua')!=''){
				$data['phone'] =I('chidiandianhua');
			}
			if(I('chidiandizhi')!=''){
				$data['area'] =array('LIKE',"%". I('chidiandizhi')."%");
			}

			import('ORG.Util.Page');
 		 $count = M('food')->where($data)->count();
 		 $page = new Page($count,5);
 		 $limit = $page->firstRow .','. $page->listRows;

 		 $content = M('food')->limit($limit)->where($data)->select();
 		 $this->content = $content;
 		 $this->page = $page->show();
 		 $this->display();
		}

		public function chiadd(){


			if(I('chidianid')=='kong'){

			if(I('taocanming')!=''){
				$data['storeName'] = I('taocanming');
			}
			if(I('youhuijia')!=''){
				$data['area'] = I('youhuijia');
			}
			if(I('phone')!=''){
				$data['phone'] =I('phone');
			}
			if(M('food')->add($data)){
				$this->success('添加成功');
			}else{
				$this->error('由于某种原因添加失败');
			}
		}else{

			if(I('taocanming')!=''){
				$data['storeName'] = I('taocanming');
			}
			if(I('youhuijia')!=''){
				$data['area'] = I('youhuijia');
			}
			if(I('phone')!=''){
				$data['phone'] =I('phone');
			}
			if(M('food')->where(array('id'=>I('chidianid')))->save($data)){
				$this->success('修改成功');
			}else{
				$this->error('由于某种原因修改失败');
			}

		}
		}


		public function guanyuyoujiguanli(){
			$this->display();
		}
		public function addAboutUs(){
			$data['aboutUs'] = I('aboutUs');
			$tabel = M('information');
			if($tabel->where('id=0')->save($data)){
				$this->success("修改成功");
			}else{
				$this->error("出现了某些错误");
			}
			
		}
		public function addcooperation(){
			$data['cooperation'] = I('cooperation');
			$tabel = M('information');
			if($tabel->where('id=0')->save($data)){
				$this->success("修改成功");
			}else{
				$this->error("出现了某些错误");
			}
			
		}
		public function addcontactUs(){
			$data['contactUs'] = I('contactUs');
			$tabel = M('information');
			if($tabel->where('id=0')->save($data)){
				$this->success("修改成功");
			}else{
				$this->error("出现了某些错误");
			}
			
		}
		public function adduserLaws(){
			$data['userLaws'] = I('userLaws');
			$tabel = M('information');
			if($tabel->where('id=0')->save($data)){
				$this->success("修改成功");
			}else{
				$this->error("出现了某些错误");
			}
			
		}
		public function addrecrult(){
			$data['recruit'] = I('recruit');

			$tabel = M('information');
			if($tabel->where('id=0')->save($data)){
				$this->success("修改成功");
			}else{
			
				$this->error("出现了某些错误");
			}
			
		}

		public function lvyouzhiguanli(){
			$travelBook = M('travelbook');
			$letterlist = M('letterlist');
			if(I('travelid')!=''){
				$travel['id'] = I('travelid');
			}
			if(I('travelname')!=''){
				$travel['name'] = array('LIKE',"%". I('travelname')."%");
			}
			if(I('userName')!=''){
				$travel['userName'] =I('userName');
			}
			if(I('content')!=''){
				$travel['content'] =array('LIKE',"%". I('content')."%");
			}


			if(I('letterid')!=''){
				$letter['id'] = I('letterid');
			}
			if(I('theme')!=''){
				$letter['theme'] = array('LIKE',"%". I('theme')."%");
			}
			if(I('name')!=''){
				$letter['name'] =I('name');
			}
			if(I('lettercontent')!=''){
				$letter['content'] =array('LIKE',"%". I('lettercontent')."%");
			}

			import('ORG.Util.Page');
			 $count = $travelBook->where($travel)->count();
			 $min = $letterlist->where($letter)->count();

			 $count = $count > $min ? $count : $min;

			 $page = new Page($count,5);
			 $limit = $page->firstRow .','. $page->listRows;

			 $this->travelContent = $travelBook->limit($limit)->where($travel)->select();
			 $this->letterContent = $letterlist->limit($limit)->where($letter)->select();
			 
			 // var_dump($this->travelContent);
			 // // var_dump($this->letterContent);

			 $this->page = $page->show();
			 $this->display();

		}

		public function deleteTravel(){
			$data = M('travelnote');
			$comment = M('notecomment');
			$comment->where('noteId='.I('id'))->delete();
			if($data->delete(I('id'))){
				$this->success("删除成功");
			}else{
				$this->error("删除失败");
			}
		}

		public function lvyouzhixiangqing(){
			$data = M('travelbook');
			$this->content = $data->find(I('id'));
			$this->display();
		}

		public function deletletter(){
			$data = M('letter');
			if($data->delete(I('id'))){
				$this->success("删除成功");
			}else{
				$this->error("删除失败");
			}
		}
		
		public function weilaidexinxiangqing(){
			$data = M('letterlist');
			$this->content = $data->find(I('id'));
			// var_dump($this->content );
			$this->display();
		}



	}



?>
