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

class LeftWidget extends Widget {
	public function render( $data ) {

		if ( ! empty( $data ) ) {
			if ( S( 'leftdata' . $data['id'] ) ) {
				$data = S( 'leftdata' . $data['id'] );
			} else {
				$list = M( 'List' );
				$info = $list->field("id,name,url,pid,sort,link,nav")->where(array("id='{$data['id']}'"))->select();
				if($info){
					$data['parentname'] = $info[0]['name'];
				}
				$bwhere['pid'] = array( 'eq', $data['id'] );
				$bigclass = $list->field( "id,name,url,pid,sort,link,nav" )->where( $bwhere )->order( 'sort asc,id asc' )->select();
				$data['bigclass'] = $bigclass;

				//判断是否存在大类
				if ( $bigclass ) {
					foreach ( $bigclass as $k => $v ) {
						$allid .= $v[ id ] . ',';
					}
					$allid = rtrim( $allid, "," );
					$where['pid'] = array( 'in', $allid );
					$smallclass = $list->field( "id,name,url,pid,sort,link,nav" )->where( $where )->order( 'sort asc,id asc' )->select();
					$data['smallclass'] = $smallclass;
					S( 'leftdata' . $data['id'], $data, 3600 * 24 );
				}
			}
		}
		$content = $this->renderFile( 'left', $data );
//print_r($data);exit;
		return $content;
	}


}

?>