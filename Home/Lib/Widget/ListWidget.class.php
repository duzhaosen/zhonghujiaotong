<?php
class ListWidget extends Widget{
	public function render($data){
		$template=strtolower($data['table']);
		$cache_key = md5(serialize($data));
		$num = isset($data['num'])?$data['num']:C('INDEX_NUM');
		if(S('listdata'.$cache_key)){
			$data=S('listdata'.$cache_key);
		}else{
			
			if($result=M('List')->field('name,type')->find($data['id'])){
				//产品推荐判断
				if($result['type']=='product'){
					$where['featured']=array('eq',1);
				}
				if($data['bid']==$data['id']){
					//一级分类条件
					$where['bid']=$data['id'];
				}else{
					//二级分类条件
					if($indb=M('List')->field('id')->where('pid = '.$data['id'])->select()){
					  foreach($indb as $v){
						  $inpid.=$v['id'].',';
					  }
					  $where['pid']=array('in',rtrim($data['id'].",".$inpid,","));
					}else{
						$where['pid']=array('eq',$data['id']);
					}
				}
			}else{
				$topid=M('List')->field('id,type')->where("type='".$template."' and pid =0" )->order('sort')->limit(0,1)->select();
				if($topid[0]['type']=='product'){
					$where['featured']=array('eq',1);
				}
				$where['bid']=array('eq',$topid[0]['id']);
			}
			if(isset($data['featured'])){
				$where['featured'] = intval($data['featured']);
			}

			$article=M($data['table'])->where($where)->order('sort asc')->limit(0,$num)->select();
			$data[$template]=$article;
			S('listdata'.$cache_key,$data,3600 * 24);
        }
        $where['bid'] = ['in',[131,134]];
        $article=M($data['table'])->where($where)->order('sort asc')->limit(0,$num)->select();
		$data[$template]=$article;
		$data['pronum']=$num;
		$content=$this->renderFile($template,$data);
		
		return $content;
	}	
	
	
}
?>