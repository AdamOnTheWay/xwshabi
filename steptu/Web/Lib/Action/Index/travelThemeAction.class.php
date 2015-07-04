<?php

	
	//主题旅游


	class travelThemeAction extends Action{

		public function travelTheme(){
		
			$class = I('class','城市之间');		//默认为1
			$data = M("travelscency");
			//$class 为1 城市之间 2为学自由 3为年休假  4 为美食游

			//得到所有的开始的地址
		    $this->assign('startPos',$data->distinct(true)->field('startPos')->select());
		    //得到所有目的地地址
		    $this->assign('endPos',$data->distinct(true)->field('endPos')->select());
		    //得到所有目的地地址
		   
			$this->TravelName = $msg;

			$status['status'] = $class;

			$count = $data->where($status)->count();
			import('ORG.Util.Page');
			$page = new Page($count,8);
			$show = $page->show();
			$this->assign('page',$show);


			$list = $data->where($status)->select();
			$this->list = $data ->field('id,name,description,image,price,status')->limit($page->firstRow.','.$page->listRows)->order('id desc')->select();
			$this->assign('list',$list);

			$this->display();

		}


		public function search()
		{	

			

 			import('ORG.Util.Page');
			$data = M('travelscency');

			//得到所有的开始的地址
		    $this->assign('startPos',$data->distinct(true)->field('startPos')->select());
		    //得到所有目的地地址
		    $this->assign('endPos',$data->distinct(true)->field('endPos')->select());
		    //得到所有目的地地址

			$string = '';
			$conditon = array();

			//合并查询字符串
			if(I('startPos') != ''){
				$conditon['startPos'] = array('EQ',I('startPos'));
			
			}
			if(I('endPos') != ''){
				$conditon['endPos'] = array('EQ',I('endPos'));
				
			}
			if(I('price') != ''){

				$str = explode('~', I('price'));

				$conditon['price'] = array('BETWEEN',$str[0].','.$str[1]);

			}
			if(I('startTime') != ''){
				$conditon['startTime'] = array('ELT',I('startTime'));

			}
			if(I('endTime') != ''){
				$conditon['endTime'] = array('EGT',I('endTime'));
				
			}

			//得到分页函数
			$count = $data->where($conditon)->count();
			$page = new Page($count,8);


			//得到数据结果
			$list = $data->field('id,name,description,image,price,status')->where($conditon)->limit($page->firstRow.','.$page->listRows)->order('id desc')->select();
			$this->assign('list',$list);
			$this->display();
		}
	}


?>