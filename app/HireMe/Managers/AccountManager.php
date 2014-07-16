<?php

namespace HireMe\Managers;

class AccountManager extends BaseManager{

		public function getRules()
		{
			$rules	=	[
			'full_name'		=>		'required',
			'email'			=>		'required|email|unique:users,email,' . $this->entity->id,
			'password'		=>		'confirmed',
			'password_confirmation'	=>	''
			];
			return $rules;
		}

}