<?php
class ImgWidget extends Widget
{
    public function render($data)
    {
        $list = M('list')->where(['id' => $data['id']])->find();
		return $this->renderFile('index',['list' => $list]);
	}
}