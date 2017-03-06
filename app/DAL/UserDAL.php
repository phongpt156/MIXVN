<?php

namespace App\DAL;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserDAL
{
	public static function CheckExistUserPhoneNumber($phone_number)
	{
		return DB::table('user as u')
				->where('u.phone_number', '=', $phone_number)
				->count();
	}

	public static function AddUserByPhoneNumber($phone_number, $password)
	{
		if(UserDAL::CheckExistUserPhoneNumber($phone_number) === 0)
		{
			return DB::table('user')
				->insert([
					['phone_number' => $phone_number, 'password' => Hash::make($password)]
				]);
		}
		return 0;
	}
}
