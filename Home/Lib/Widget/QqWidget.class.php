<?php
class QqWidget extends Widget{
	public function render($data){
		$qq_name=explode(",",C('QQ_NAME'));
		$qq_account=explode(",",C('QQ_ACCOUNT'));
		$data['online_qq']=array_combine($qq_name,$qq_account);
		
		$contents=$this->renderFile('qq',$data);
		return $contents;
	}
}
?>