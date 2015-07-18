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
		$days = I('roomdate');

		$data = M("hotel")->field("price")->find($id);

		$money = $number * $data['price'] * $days;  //计算钱

		$this->ajaxReturn($money);
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

		// if(cookie('userid') == ''){
		// 	$this->show('<script>alert('请登录');window.location.href='".U('Index/index/index')."'</script>','utf-8');
		// }

		if(1){ //预定成功
			var_dump(I('post.'));
		}

		$data = I('post.');
		$data['time'] = date('Y-m-d');
		$data["userId"] = cookie('userid');
		$data['status'] = '评价';
		$data['class'] = 0;

		M('order')->add($data);

		

		$this->display();
	}
}