<?php


	//旅游超市


	class travelStoreAction extends Action{
		public function smsousuojieguo(){
			if(IS_POST){
				$mudidi = I('zhusousuomudidi');
				$ruzhuriqi = I('smruzhuri');
				$tuifang = I('smtuifangri');
				$p0 = I('p0');
				$p1 = I('p1');
				$p2 = I('p2');
				$p3 = I('p3');
				$p4 = I('p4');

				if(p0==''&&$p1==''&&$p2==''&&p3==''&&p4==''){
					import('ORG.Util.Page');
					$count = M('hotel')->count();
					$page = new Page($count,7);
					$limit = $page->firstRow .','. $page->listRows;

					$content = M('hotel')->order('id DESC')->limit($limit)->select();
					$this->content = $content;
					$this->page = $page->show();
				}

			}else{
				import('ORG.Util.Page');
				$count = M('hotel')->count();
				$page = new Page($count,7);
				$limit = $page->firstRow .','. $page->listRows;

				$content = M('hotel')->order('id DESC')->limit($limit)->select();
				$this->content = $content;
				$this->page = $page->show();
			}
			$this->display();
		}

		public function travelStore(){

			// setcookie('name','yyyy');
			// var_dump($_COOKIE['name']);
			if($_COOKIE['name']==''){
				  // redirect(U('Index/index/index','',''));

			 $id = $_COOKIE['id'];
			 $usr = $_COOKIE['name'];
			$cou = M('order')->where(array('id'=>$id))->count();
			$price = M('order')->where(array('id'=>$id))->sum('price');
			$this->assign('price',$price);
			$this->assign('cou',$cou);
			$this->assign('usr',$usr);

				}
				if(IS_POST){
					$shifadi =array('LIKE',"%".I('smshifadi')."%");
					$mudidi= array('LIKE',"%".I('smmudidi')."%");
					$qishiri= array('EGT',I('smqishiri'));
					$jiezhiri= array('ELT',I('smjiezhiri'));

					if($shifadi!=''){
						$data['startPos'] = array('LIKE',"%".I('smshifadi')."%");
					}
					if($mudidi!=''){
						$data['endPos'] = array('LIKE',"%".I('smmudidi')."%");
					}
					if($qishiri!=''){
						$data['startTime'] = array('EGT',I('smqishiri'));
					}
					if($jiezhiri!=''){
						$data['endTime'] = array('ELT',I('smjiezhiri'));
					}

					$store = M('travelscency')->where($data)->order("id DESC")->select();
					$this->assign("store",$store);

					//

					$smudidi =  array('LIKE',"%".I('chisousuomudidi')."%");
					$dianming = array('LIKE',"%".I('chisousuodianming')."%");

					if($smudidi!=''){
						$eat['area'] = array('LIKE',"%".I('chisousuomudidi')."%");
					}
					if($dianming!=''){
						$eat['storeName'] = array('LIKE',"%".I('chisousuodianming')."%");
					}

					import('ORG.Util.Page');
					$count = M('food')->where($eat)->count();
					$page = new Page($count,3);
					$limit = $page->firstRow .','. $page->listRows;

					$content = M('food')->order('id DESC')->limit($limit)->where($eat)->select();
					$this->content = $content;
					$this->page = $page->show();


				}else{
					$store = M('travelscency')->order("id DESC")->select();
					$this->assign("store",$store);

					import('ORG.Util.Page');
					$count = M('food')->count();
					$page = new Page($count,3);
					$limit = $page->firstRow .','. $page->listRows;

					$content = M('food')->order('id DESC')->limit($limit)->select();
					$this->content = $content;
					$this->page = $page->show();
				}
				$this->display();
			}



		public function living(){
			$mudidi = $_POST['data'];
			//$eat=M('city')->where(array('cityName'=>$mudidi))->select();
			$data['shangyequ'] = M('city')->where(array('cityName'=>$mudidi))->field('business')->select();
			$data['jichang'] =  M('city')->where(array('cityName'=>$mudidi))->field('station')->select();
			$data['xingzhengqu'] = M('city')->where(array('cityName'=>$mudidi))->field('xian')->select();
			$data['jingdian'] = M('city')->where(array('cityName'=>$mudidi))->field('jingdian')->select();;
			$this->ajaxReturn($data);
		}

		public function jiudian(){
			$id = $_GET['id'];
			$data = M('hotel')->where(array('id'=>$id))->find();
			$co = M('comment')->where(array('class'=>0,'travelorhotelId'=>
			$id))->count();
			$co1 = M('comment')->where(array('class'=>0,'travelorhotelId'=>
			$id,'level'=>满意))->count();
			$co2 = M('comment')->where(array('class'=>0,'travelorhotelId'=>
			$id,'level'=>一般))->count();
			$co3 = M('comment')->where(array('class'=>0,'travelorhotelId'=>
			$id,'level'=>不满意))->count();

			$co4 = M('comment')->where(array('class'=>0,'travelorhotelId'=>
			$id))->select();
			$this->assign('hotel',$data);
			$this->assign('co',$co);
			$this->assign('co1',$co1);
			$this->assign('co2',$co2);
			$this->assign('co3',$co3);
			$this->assign('co4',$co4);
			$this->display();

		}

		public function comment(){
			$order = I('data');
			$id=I('id');
			if($order=='all'){
				$comment = M('comment')->where(array('class'=>0,'travelorhotelId'=>$id))->select();
				$comment['re']='quanbu';
					//$this->assign('co4',$comment);
					$this->ajaxreturn($comment);
			}
			if($order=='good'){
				$comment = M('comment')->where(array('class'=>0,'travelorhotelId'=>$id,'level'=>满意))->select();
					//$this->assign('co4',$comment);
					$comment['re']='manyi';
					$this->ajaxreturn($comment);
			}
			if($order=='normal'){
				$comment = M('comment')->where(array('class'=>0,'travelorhotelId'=>$id,'level'=>一般))->select();
					//$this->assign('co4',$comment);
					$comment['re']='yiban';
						$this->ajaxreturn($comment);
			}
			if($order=='bad'){
				$comment = M('comment')->where(array('class'=>0,'travelorhotelId'=>$id,'level'=>不满意))->select();
					//$this->assign('co4',$comment);
					$comment['re']='bumanyi';
						$this->ajaxreturn($comment);
			}
		}

	}


?>
