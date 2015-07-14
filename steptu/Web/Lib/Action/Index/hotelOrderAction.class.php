<?php

/**
* 
*/
class hotelOrderAction extends Action
{
	
	function hotelOrder_1(){

		// $id = I("id");

		$id = 1;  //得到酒店的ID

		$data = M("hotel")->field("hotelName,id")->find($id);

		

		$this->assign("data",$data);

		$this->display();
	}
	public function countMoney()
	{



		$id = I("id");
		$number = I("number");


		$data = M("hotel")->field("price")->find($id);

		$startdate=strtotime(I("start"));
		$enddate=strtotime(I("end"));
		$days=round(($enddate-$startdate)/86400)+1;

		echo $days;

		$money = $number * $data['price'] * $days;  //计算钱

		$this->ajaxReturn($days);
	}
	function hotelOrder_2(){

		var_dump(I('post.'));
		// if($this->isPost ()){
			$save = I('post.');
			$this->assign('save',$save);
			$data = M("hotelName")->select($id);
			$this->display();
		// }else{
		// 	$this->show('页面不存在','utf-8');
		// }

	}
	function hotelOrder_3(){

		if($this->isPost ()){
			$save = I('post.');
			$this->assign('save',$save);
			$id = I("id");

			$data = M("hotelName")->select($id);

			

			$this->display();
		}else{
			$this->show('页面不存在','utf-8');
		}

		
	}
	function hotelOrder_4(){

		$id = I("id");

		$data = M("hotelName")->select($id);

		

		$this->display();
	}
}