<?php
// +----------------------------------------------------------------------
// | 微梦企业网站系统PHP版
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2014 http://wmweb.cc All rights reserved.
// +----------------------------------------------------------------------
// | Sale (  )
// +----------------------------------------------------------------------
// | Author: jianglingfeng <jianglingfeng1123@163.com>
// +----------------------------------------------------------------------
class FeedbackAction extends CommonAction{
	public function index(){
		C('TOKEN_ON',true);
		$this->display();
	}
	
	public function check(){
		$code_msg = (C('CNEN')=='cn') ? '验证码错误!' : 'Captcha error!' ;
		$success_msg=(C('CNEN')=='cn') ? '留言成功' : 'Message success' ;

		if($this->_post('button')!="" && $this->isPost()){
			$code=$this->_post('code');
			if($_SESSION['verify']!==md5($code)){
				$this->error($code_msg);
			}
			
			$db=D('Feedback');
			if($data=$db->create()){	
			  $data['title'] = $this->_post('title','htmlspecialchars');
			  $data['name'] = $this->_post('name','htmlspecialchars');
			  $data['tel'] = $this->_post('tel','htmlspecialchars');
			  $data['email'] = $this->_post('email','htmlspecialchars');
			  $data['add'] = $this->_post('add','htmlspecialchars');
			  $data['contents'] = $this->_post('contents','htmlspecialchars');
			  $sendcontents="<h3>系统通知邮件，请勿直接回复！</h3><hr><p>留言标题：".$data['title']."</p><p>联系人：".$data['name']."</p><p>联系电话：".$data['tel']."</p><p>邮箱：".$data['email']."</p><p>联系地址：".$data['add']."</p><p>留言内容：".$data['contents'];
			  if($db->data($data)->add()){
				  
				  if(C('IS_EMAIL')){
				  	switch (C('SEND_WAY')) {
				  		case '1':
				  		if ($this->smtpsendmail($data['title'],$sendcontents)) {
				  			$this->success($success_msg);
				  		}else{
				  			$this->error('留言成功,但邮件发送失败!');
				  		}
				  			break;

				  		case '2':
				  		if ($this->mailfunction($data['title'],$sendcontents)) {
				  			$this->success($success_msg.'!!');
				  		}else{
				  			$this->error('留言成功,但邮件发送失败!!');
				  		}
				  			break;

				  		case '3':
				  		$phpmailer=$this->phpmailersend($data['title'],$sendcontents);
				  		if ($phpmailer===1) {
				  			$this->success($success_msg.'...');
				  		}else{
				  			$this->error('留言成功,但邮件发送失败：'.$phpmailer);
				  		}
				  			break;

				  		default:
				  			exit('邮件发送方式设置错误!');
				  			break;
				  	}
				  }else{
					  $this->success($success_msg);
				  }
				  	  
			   }else{
				  $this->error('错误：留言失败!');  
			   }	
			}else{
			  $this->error($db->getError());
			}
		}else{
			$this->error('非法提交');	
		}		
	}


	
	
}
?>