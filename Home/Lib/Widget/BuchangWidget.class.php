<?php
class BuchangWidget extends Widget {
	public function render($data){
        $list = M('list')->where(['pid' => $data['pid']])->select();
		return $this->renderFile('index',['list' => $list,'type' => $data['type']]);
	}
}
?>