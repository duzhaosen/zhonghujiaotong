<?php
class NewsWidget extends Widget{
	public function render($data){
        $list = M('new')->limit(5)->where(['bid'=>['in',[131,134]]])->order('sort asc')->select();
		return $this->renderFile('news',['list' => $list]);
	}
}
?>