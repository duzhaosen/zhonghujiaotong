<?php
class AbouttextWidget extends Widget{
	public function render($data){
		$aboutdata=M('List')->field('id,url,contents')->where("id = ".$data['id']." and type='page'")->find();
		$len=$data['len'];		
		$abouttext=strip_tags($aboutdata['contents']);
		$abouttext=strlen($abouttext)<=$len ? $abouttext : (mb_substr($abouttext,0,$len,'utf-8')."...");
		$data['contents']=$abouttext;
		$data['url']=$aboutdata['url'];
		$content=$this->renderFile('abouttext',$data);
		return $content;
	}	
}
?>