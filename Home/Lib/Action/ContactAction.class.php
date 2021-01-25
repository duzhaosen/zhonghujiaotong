<?php
class ContactAction extends CommonAction
{
    // 显示关于网页
    public function index()
    {
        $find = M('list')->where(['id'=>181])->find();
		$this->display('index',[
            'list' => $find
        ]);
	}
}