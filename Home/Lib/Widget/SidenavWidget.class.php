<?php
class SidenavWidget extends Widget{
	public function render($data){
		if(S('navdata')){
			$data=S('navdata');
		}else{
			$n=M('List');
			$nav=$n->field('id,name,url,pid,type,link')->where('pid=0 and nav=1')->order('sort asc')->select();
			$data['nav']=$nav;
			
			if($nav){
				$snav=$n->field('id,name,url,pid,type,link')->where('pid != 0 and nav=1')->order('sort asc')->select();
				$data['snav']=$snav;
				S('navdata',$data,3600 * 24);
			}
		}
		
		$content=$this->renderFile('sidenav',$data);
		return $content;
	}


}
?>