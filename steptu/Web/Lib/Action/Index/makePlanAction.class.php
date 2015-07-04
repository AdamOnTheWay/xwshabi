<?php


    //发起活动模块


class makePlanAction extends Action{


	
	public function makePlan(){	
		if(IS_POST){
			 
			$shifa = I('shifadi');
			$mudi = I('mudidi');
			$huodongshijian =I('huodongshijian');
			$fabushijian = I('fabushijian');

			$data = array(
				'startarea' =>$shifa,
				// 'startTime' => $fabushijian,

				// 'intentarea' => $mudidi,
				// 'publishtime' => ''
				);
			import('ORG.Util.Page');
			$count = M('action')->where($data)->count();
			$page = new Page($count,1);
			$limit = $page->firstRow .','. $page->listRows;

			$content = M('action')->order('id DESC')->limit($limit)->where($data)->select();
			$this->content = $content;
			$this->page = $page->show(); 

		}else{

			import('ORG.Util.Page');
			$count = M('action')->where($data)->count();
			$page = new Page($count,6);
			$limit = $page->firstRow .','. $page->listRows;

			$content = M('action')->order('id DESC')->limit($limit)->where($data)->select();
			$this->content = $content;
			$this->page = $page->show(); 

		}
		$this->display();
	}

	function searchPlan(){
		$id = I("id");
		$data = M('action')->find($id);
		$this->ajaxReturn($data);
	}
	public function savePlan(){
		if(!IS_POST) _404('请先登录');
		if($_COOKIE['name']){

		$starttime = I('mphuodongshijian');
		$startarea = I('mpshifadi');
		$des = I('mpmudidi');
		$content = I('mpcontent');
		$max = I('mpcanyurenshu');
		$faqi = I('mpfaqiren');
		$beizhu = I('mpother');

		$data = array(
			'startTime' => $starttime,
			'startarea' => $startarea,
			'intentarea' => $des,
			'content' => $content,
			'maxnumber' => $max,
			'initiator' => $faqi,
			'remark' => $beizhu,
			'publishtime' => date('Y-m-d')				
			);
		$mk = M('action');
		$mk->add($data);
		$this->redirect('Index/makePlan/makePlan');
	}else{
		$this->error('请先登录');
	}
	}


}


?>