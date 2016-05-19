<?php
namespace Admin\Model;

class Category {

	public function findLimit($firstRow, $listRows) {
		$c = M("book_category")
			->join('attachment ON attachment.id = book_category.attachment_id' )
			->field('book_category.id, name, create_time, description, attachment_id, location');
		return $c->limit($firstRow, $listRows)->select();
	}


	public function findCategoryByName($name) {
		$c = M("book_category");
		return $c->where('name = ' .  $name)->find();
	}


	public function findCategoryById($id) {
		$c = M("book_category");
		return $c->join('attachment ON attachment.id = book_category.attachment_id' )
			      ->field('book_category.id, name, create_time, description, attachment_id, location')
				  ->where('book_category.id = ' .  $id)->find();
	}


	public function add($data) {
		$c = M("book_category");
		return $c->add($data);
	}


	public function update($data) {
		$c = M("book_category");
		$c->save($data);
	}


	public function deleteById($id) {
	    $c = M("book_category");
	    return $c->where("id=".$id)->delete();
	}

	// count
	public function count() {
		$c = M("book_category");
		return $c->count();
	}


}