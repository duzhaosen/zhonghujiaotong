<?php
class NavNewWidget extends Widget{
	public function render($data){
        $list = M('list')->where(['pid' => $data['pid']])->select();
		return $this->renderFile('navNew',['list' => $list,'type' => $data['type']]);
	}
}
?>