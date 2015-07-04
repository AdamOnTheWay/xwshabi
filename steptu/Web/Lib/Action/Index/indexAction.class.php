<?php

//主页
class indexAction extends Action{


	//显示主页
	public function index(){
		$hotel = M('hotel')->where(array('status'=>1))->limit("5")->order("id DESC")->select();
		$this->assign('hotel',$hotel);
		if(IS_POST){
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

		$hotel = M('hotel')->where($data)->order("id DESC")->limit("5")->select();
		$this->assign('hotel',$hotel);
	}
		$this->assign('note',$this->travelNote());
		$this->assign('season',$this->discountSeason());
		$this->display();
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

}



?>
