<?php

namespace App\BLL\Front;
use App\DAL\UserDAL;

class UserBLL
{
	public static function CheckExistUserPhoneNumber($phone_number)
	{
		return UserDAL::CheckExistUserPhoneNumber($phone_number);
	}

	public static function AddUserByPhoneNumber($phone_number, $password)
	{
		return UserDAL::AddUserByPhoneNumber($phone_number, $password);
	}
}
