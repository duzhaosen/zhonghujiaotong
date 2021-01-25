<?php
class AdWidget extends Widget{
	public function render($data){
		$f = M('Ad');

		if(isset($data['id']) && $data['id']!=''){
			$data['id'] = array_map("intval",explode(',',$data['id']));
			$result = $f->where("id IN (".join(',',$data['id']).")")->order('sort asc')->select();
		} else {
			$result = $f->order('sort asc')->select();
		}
//		print_r($result);
		$content=$this->renderFile('ad',array('ad'=>$result));
		return $content;
	}
}
?>