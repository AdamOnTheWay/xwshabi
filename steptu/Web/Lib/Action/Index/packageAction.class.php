<?php

/**
* 
*/
class packageAction extends Action
{
	
	public function package()
	{

		$data = M('travelscency')->select();
			$this->assign('scency',$data);
			$this->display();
		
	}
	public function order_1()
	{
		$id = 1;//应该用I方法得到
		$data = M("travelscency")->field("name,id")->find($id);


		$this->assign("data",$data);
		// var_dump($data);
		
		$this->display();
	}

	public function countMoney(){

		$id = I("id");
		$adult = I("adult");
		$child = I("child");

		$data = M("travelscency")->field("price,childPrice")->find($id);



		$money = $adult * $data['price'] + $data['childPrice'] * $child;  //计算钱

		$this->ajaxReturn($money);
	}
	public function order_2()
	{

		$data = I("post.");
		$this->assign("data",$data);
		var_dump($data);
		$this->display();
	}
	public function order_3()
	{
		$this->display();
	}
	public function order_4()
	{
		$this->display();
	}
}