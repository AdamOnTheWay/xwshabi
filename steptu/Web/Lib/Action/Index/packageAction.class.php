<?php

/**
*
*/
class packageAction extends Action
{

	public function package()
	{
		$id = $_GET['id'];

		$data = M('travelscency')->where(array('id'=>$id))->find();
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
		// var_dump($data);

		

		$id = M('order');
		$this->assign("data",$data);
		
		$this->display();
	}

	public function checkMonney(){
		if(cookie('userid') == ''){
			$this->show("<script>alert('请登录');</script>","utf-8");
			die();
		}

		if(1){  // 付款成功
		$data = I("post.");
		$save['time'] = date("Y-m-d");
		$save['content'] = $data['title'];
		$save['scencyOrHotelId'] = $data['id'];
		$save['class'] = 1;
		$save['userId'] = cookie('userid');
		$save['status'] = '评价';
		$save['price'] = $data['money'];
		$save['checkOrder'] = 0;
		$save['name'] = $data['name'];
		$save['phone'] = $data['phone'];
		M('order')->add($save);

		$this->display("order_4");
		}else{// 付款失败
			$this->show('付款失败');
		}
	}

	public function order_3()
	{	
		$data = I("post.");
		// var_dump($data);
		$this->assign("data",$data);
		$this->display();
	}
	public function order_4()
	{
		$this->display();
	}

}
