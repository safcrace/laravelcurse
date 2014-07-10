<?php

namespace HireMe\Repositories;

use HireMe\entities\Category;

class CategoryRepo {

	public function find($id){
		return Category::find($id);
	}
}