<?php
namespace Admin\Model;

use Home\Common\Utils\OrderUtil;
class Order {


	public function findOrderByUserId($userId) {
		$o = M('bookstore.order');


		$orders = $o->where("user_uid = '"  . $userId . "'")
			->order('create_time desc')
			->select();

		$orderUtil = new OrderUtil();
		for ($i=0; $i < count($orders); $i++) { 
			$orders[$i]['orderstate'] = $orderUtil->getOrderStatuByCode($orders[$i]['orderstate']);
		}

		return $orders;
	}


	public function findOrderById($id) {
		$o = M('bookstore.order');
		$order = $o->where("id = '"  . $id . "'")->find();
		$orderUtil = new OrderUtil();
		$order['orderstring'] = $orderUtil->getOrderStatuByCode($order['orderstate']);
		return $order;
	}

	public function findWaitOrderByUserId($id) {
		$o = M('bookstore.order');
		return $o->where("id = '"  . $id . "' and orderstate = 0")->find();
	}


	public function findLimit($firstRow, $listRows) {
		$o = M('bookstore.order');
		$orders = $o->limit($firstRow, $listRows)->select();

		$orderUtil = new OrderUtil();
		for ($i=0; $i < count($orders); $i++) { 
			$orders[$i]['orderstring'] = $orderUtil->getOrderStatuByCode($orders[$i]['orderstate']);
		}

		return $orders;
	}


	// add 
	public function add($data) {
		$o = M('bookstore.order');
		return $o->add($data);
	}

	// count
	public function count() {
		$o = M("bookstore.order");
		return $o->count();
	}


	// 修改订单状态
	public function changeOrderState($id, $state) {
		$o = M("bookstore.order");
		$o->where("id=" . $id)->setField("orderState", $state);
	}


	public function getFinishCount() {
		$o = M("bookstore.order");
		return $o->where('orderState = 5')->count();
	}


	public function getWaitCount() {
		$o = M("bookstore.order");
		return $o->where('orderState = 2')->count();
	}

	public function getWaitSendCount() {
		$o = M("bookstore.order");
		return $o->where('orderState = 1')->count();
	}

	public function getWaitPayCount() {
		$o = M("bookstore.order");
		return $o->where('orderState = 0')->count();
	}



	public function getMostOrderUser() {
		$o = M("bookstore.order");
		return $o->query('select name,count(*) as c from bookstore.order group by name order by c desc limit 1');
	}



}