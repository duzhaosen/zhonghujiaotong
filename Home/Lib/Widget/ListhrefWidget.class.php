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

class ListhrefWidget extends Widget{

	public function render($data){
		if ($data['link']!='') {
			$linkvar = (stripos($data['link'],"http://")!== false) ? $data['link'] : __APP__.$data['link'];
			return $linkvar;
		} else {
			if (C('URL_MODEL')==2) {
				if (!$data['url']) {
				    $data['url']=M('List')->where(array('id'=>$data['id']))->getField('url');
				}
				return U('/'.$data['url']);
			}else{
				return U('List/index',array('id'=>$data['id']));
			}
		}		
	}
	

}
?> 