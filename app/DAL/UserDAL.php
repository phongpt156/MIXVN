<?php

namespace App\DAL;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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

	public static function CheckExistFacebookId($facebook_id)
	{
		return DB::table('user')
				->where('facebook_id', '=', $facebook_id)
				->count();
	}

	public static function AddUserByFacebook($user)
	{
		if(UserDAL::CheckExistFacebookId($user->id) === 0)
		{
			DB::table('user')
			->insert([
				'facebook_id' => $user->id,
				'facebook_link' => $user->profileUrl,
				'name' => $user->name,
				'gender' => $user->user['gender'],
				'avatar' => $user->avatar,
				'avatar_original' => $user->avatar_original
			]);
		}
		$id = DB::table('user')
				->where('facebook_id', '=', $user->id)
				->pluck('id')	
				->first();
		Auth::loginUsingId($id);
	}
}
