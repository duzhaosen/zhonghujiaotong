<?php
class CarWidget extends Widget{
	public function render($data){
        $list = M('list')->where(['pid' => $data['pid']])->order('sort')->select();
		return $this->renderFile('index',['list' => $list,'type' => $data['type']]);
	}
}
?>