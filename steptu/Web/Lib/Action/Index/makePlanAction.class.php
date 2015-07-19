<?php


    //发起活动模块


class makePlanAction extends Action{



	public function makePlan(){
		if(IS_POST){
			if(I('shifadi')!=''){
				$data['startarea']=array('LIKE','%'.I('shifadi').'%');
			}
			if(I('mudidi')!=''){
				$data['intentarea']=array('LIKE','%'.I('mudidi').'%');
			}
			if(I('huodongshijian')!=''){
				$data['startTime']=array('EGT',I('huodongshijian'));
			}
			if(I('$fabushijian')!=''){
				$data['publishtime']=array('EGT',I('$fabushijian'));
			}
			if(I('huodongleibie2')!=''){
				$data['theme']=array('LIKE','%'.I('huodongleibie2').'%');
			}

			import('ORG.Util.Page');
			$count = M('action')->where($data)->count();
			$page = new Page($count,6);
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

	function myAction(){
		import('ORG.Util.Page');
		$userid['userid'] = cookie('userid');
		$count = M('action')->where($userid)->count();
		$page = new Page($count,6);
		$limit = $page->firstRow .','. $page->listRows;

		$content = M('action')->order('id DESC')->limit($limit)->where($userid)->select();
		$this->content = $content;
		$this->page = $page->show();
		
		
		$this->display('makePlan');
	}

	function myJoin(){

		import('ORG.Util.Page');
		$userid['userid'] = cookie('userid');
		$count = M('myJoin')->where($userid)->count();
		$page = new Page($count,6);
		$limit = $page->firstRow .','. $page->listRows;

		$content = M('myJoin')->order('id DESC')->limit($limit)->where($userid)->select();
		$this->content = $content;
		$this->page = $page->show();
		
		
		$this->display('makePlan');

	}

	function saveAction(){
		$con['actionId'] = I('actionId');
		$con['userid'] = cookie('userid');
		$data = M('actionuser');

		if($data->where($con)->find()){
			$msg['code'] = 0;
			$msg['msg'] = "你已经参加过了";
		}else{
			if($data->where($con)->add()){
				$msg['code'] = 1;
				$msg['msg'] = "参见成功";
			}
			else{
				$msg['code'] = 0;
				$msg['msg'] = "出错";	
			}
		}
		$this->ajaxReturn("msg",$msg);
	}
	public function savePlan(){
		if(!IS_POST) _404('请先登录');
		if(cookie('username') != '' && cookie('username') != null && cookie('username') != undefined){
		$starttime = I('mphuodongshijian');
		$startarea = I('mpshifadi');
		$des = I('mpmudidi');
		$content = I('mpcontent');
		$max = I('mpcanyurenshu');
		$faqi = I('mpfaqiren');
		$beizhu = I('mpother');
		$huodongleibie = I('huodongleibie');
		$data = array(
			'startTime' => $starttime,
			'startarea' => $startarea,
			'intentarea' => $des,
			'content' => $content,
			'maxnumber' => $max,
			'initiator' => $faqi,
			'remark' => $beizhu,
			'theme' => $huodongleibie,
			'publishtime' => date('Y-m-d'),
			'userid' => cookie('userid')
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
