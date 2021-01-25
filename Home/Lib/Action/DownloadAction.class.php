<?php
// +----------------------------------------------------------------------
// | 微梦企业网站系统PHP版
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2014 http://wmweb.cc All rights reserved.
// +----------------------------------------------------------------------
// | Sale (  )
// +----------------------------------------------------------------------
// | Author: jianglingfeng <jianglingfeng1123@163.com>
// +----------------------------------------------------------------------
class DownloadAction extends CommonAction{
	public function index(){
		$id=$this->_get('id','intval');
		$this->doDown($id,"id =%d");	
	}

	public function html(){
		$url=$this->_get('url');
		$this->doDown($url,"url ='%s'");
	}

	protected function doDown($var,$where){
		$db=M('Download');
		$down=$db->field('id,bid,pid,name,title,keywords,description,contents,filename,time,link_url')->where($where,array($var))->find();
		if ($down) {
			if($down['link_url'] !=""){
				 header("location:{$down['link_url']}");exit;
			}
			$down['contents']=$this->doInside($down['contents']);
			$this->down=$down;
			$this->downlist=M('list')->field('id,pid,bid,type,name,description')->find($down[pid]);
			$this->related=$db->field('id,url,name,time,description')->where("pid = $down[pid] and id <> $down[id]")->select();
		} else {
			$this->_empty();
			exit;
		}
		
		$this->prevnext=$this->prevnext('Download',$down[id],'name','');		
		$this->display('index');	
	}

	public function tags(){
		$this->doTags('Download');
	}


}
?>