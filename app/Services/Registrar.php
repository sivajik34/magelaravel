<?php namespace App\Services;

use App\models\User;
use App\models\Userswebsiteinfo;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
			'host' => 'required',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		 $user=User::create([
			'name' => $data['name'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
		]);
		$profile = new Userswebsiteinfo;
		$profile->host = $data['host'];
		$profile->company = $data['company'];
		$profile->country = $data['country'];
		$profile->mobile = $data['mobile'];		
		$user->userswebsiteinfo()->save($profile);
		return $user;
	}

}
