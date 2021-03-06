<?php
namespace Home\Common\Controller;

use Home\Common\Constants\Constant;
use Think\Controller;
use Vendor\Wechat\TPWechat;

class BaseController extends Controller {
	
	protected $options = array('token'=>'bookstore',
				 'encodingaeskey'=>'tk3s8FIGe0MjpQyjT7eiMpwhsXHjzFZ5LrSEuoftIfn',
				 'appid'=>'wx9266bc9da8a1f391',
				 'appsecret'=>'e5394eff409fbe82a7828ba0e8ce3aac');

	private $menu = array ('button' => array (
				0 => array ('name' => "购买书籍", 'sub_button' =>  array (
				    0 => array (
				      'type' => 'view',
				      'name' => '最新上架',
				      'url' =>  'http://bashrc.ngrok.cc/Home/Main/news.html' //Constant::MENU_0_0,
				    ),
				    1 => array (
				      'type' => 'view',
				      'name' => '热销书籍',
				       'url' =>  'http://bashrc.ngrok.cc/Home/Main/hots.html'
				    ),
				    2 => array (
				      'type' => 'view',
				      'name' => '分类浏览',
				      'url' =>  'http://bashrc.ngrok.cc/Home/Main/index.html'
				    ),
				 ),
				),

				1 => array ('name' => '我的订单', 'sub_button' => array (
				 0 => array(
				      'type' => 'view',
				      'name' => '等待付款',
				      'url' => 'http://bashrc.ngrok.cc/Home/Index/orderWaitListAuth.html'
				    ),
				    1 => array (
				      'type' => 'view',
				      'name' => '购物车',
				      'url' => 'http://bashrc.ngrok.cc/Home/Main/cart.html'
				    ),
				    2 => array (
				      'type' => 'view',
				      'name' => '所有订单',
				       'url' => 'http://bashrc.ngrok.cc/Home/Index/orderListAuth.html'
				    ),
				),
				),

				2 => array ('name' => '个人中心', 'sub_button' => array (
				    0 => array (
				      'type' => 'click',
				      'name' => '个人信息',
				      'key' => Constant::MENU_2_1,
				    ),
				),
				),
			    ),
			);


	protected $weChat = null;
	
	public function _initialize() {
		$this->weChat = new TPWechat($this->options);
		// $this->weChat->valid();
		$this->weChat->createMenu($this->menu);	
	}

}
