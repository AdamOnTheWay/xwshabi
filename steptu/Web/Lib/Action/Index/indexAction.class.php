<?php

//主页
class indexAction extends Action{


	//显示主页
	public function index(){
		// var_dump(md5("123"));

		if(IS_POST){
			//dump($_POST);
		$mudidi = I('destination');
		$ruzhu = I('intime');
		$lidian = I('outtime');
		$brand = I('brand');
		$data['status']=1;
		if($mudidi!=''){
			$data['destination'] = array('LIKE',"%". I('destination')."%");
		}
		if($brand!=''){
			$data['hotelName'] = array('LIKE',"%". I('brand')."%");
		}
		if($ruzhu!=''){
			$data['startTime'] = array('EGT',I('intime'));
		}
		if($jiezhiri!=''){
			$data['endTime'] = array('ELT',I('outtime'));
		}
//dump($data);


		$hotel = M('hotel')->where($data)->order("id DESC")->limit("4")->select();

///dump($hotel);
 //die();
 $name = M('hotel')->where(array('status'=>1))->order("id DESC")->distinct(true)->field('hotelName')->select();
 $this->assign('hdn',$name);
		$this->assign('hs',$hotel);
		$this->assign('note',$this->travelNote());
		$this->assign('season',$this->discountSeason());
		$this->display();
	}

		$hotel = M('hotel')->where(array('status'=>1))->order("id DESC")->limit("7")->select();
		$name = M('hotel')->where(array('status'=>1))->order("id DESC")->distinct(true)->field('hotelName')->select();
		$note1 = M('note')->order("id DESC")->find();
		$this->assign('hds',$hotel);
		$this->assign('hdn',$name);
		$this->assign('note',$this->travelNote());
		$this->assign('note1',$note1);
		$this->assign('season',$this->discountSeason());
		$this->display();

}

public function index2(){

	if(IS_POST){

	//dump($_POST);
	$mudidi = I('destination');
	$ruzhu = I('intime');
	$lidian = I('outtime');
	$brand = I('brand');
	$data['status']=1;
	if($mudidi!=''){
		$data['destination'] = array('LIKE',"%". I('destination')."%");
	}
	if($brand!=''){
		$data['hotelName'] = array('LIKE',"%". I('brand')."%");
	}
	if($ruzhu!=''){
		$data['startTime'] = array('EGT',I('intime'));
	}
	if($jiezhiri!=''){
		$data['endTime'] = array('ELT',I('outtime'));
	}
//dump($data);


	$hotel = M('hotel')->where($data)->order("id DESC")->limit("4")->select();

 //dump($hotel);
 $name = M('hotel')->where(array('status'=>1))->order("id DESC")->distinct(true)->field('hotelName')->select();
 $this->assign('hdn',$name);
	$this->assign('hs',$hotel);
	$this->assign('note',$this->travelNote());
	$this->assign('season',$this->discountSeason());
	$this->display();
}

	$hotel = M('hotel')->where(array('status'=>1))->order("id DESC")->limit("7")->select();
	$name = M('hotel')->where(array('status'=>1))->order("id DESC")->distinct(true)->field('hotelName')->select();
	$this->assign('hdn',$name);
	$this->assign('hds',$hotel);
	$this->assign('note',$this->travelNote());
	$this->assign('season',$this->discountSeason());
	//$this->display();
}



	//搜索功能
	public function searchHotel(){

	}

	//旅游志
	public function travelNote(){
		$note = M('travelnote')->limit("5")->select();
		return $note;
	}

	//优惠季
	public function discountSeason(){
		$season= M('travelscency')->where(array('ifdiscount'=>1))->order("id DESC")->select();
		return $season;
	}

	//搜索旁边的酒店信息
	public function discountHotel(){

	}

	public function aboutUs(){
		// var_dump("expression");
		$data = M('information');
		$this->aboutUs = $data->field('aboutUs')->find('0');
		$this->display();
	}

	public function contactUs(){
		$this->contactUs = M('information')->field('contactUs')->find('0');
		$this->display();
	}
	public function cooperation(){
		$data = M('information');
		$this->coopration =$data->field('cooperation')->find('0');
		$this->display();
	}
	public function userLaws(){
		$data = M('information');
		$this->usrLaws = $data->field('userLaws')->find(0);
		$this->display();
	}

	public function recruit(){
		$data = M('information');
		$this->recruit = $data->field('recruit')->find(0);
		$this->display();
	}

}



?>
