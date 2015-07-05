<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\models\Role;
use App\models\Permission;
use App\models\User;
class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		 $this->call('UserTableSeeder');
	}

}
class UserTableSeeder extends Seeder {

    public function run()
    {
        //DB::table('users')->delete();
        $user=User::create(['name'=>'kensium','email' => 'admin@kensium.com','password' => bcrypt('admin123')]);
	$admin = new Role();
	$admin->name         = 'admin';
	$admin->display_name = 'User Administrator'; // optional
	$admin->description  = 'User is allowed to manage and edit other users'; // optional
	$admin->save();
	$user->attachRole($admin); 
	$enablerole = new Permission();
	$enablerole->name         = 'enable_role';
	$enablerole->display_name = 'Enable roles'; // optional
	// Allow a user to...
	$enablerole->description  = 'Enable roles'; // optional
	$enablerole->save();
	$admin->attachPermission($enablerole);
	 $merchant = new Role();
	 $merchant->name         = 'merchant';
         $merchant->display_name = 'User merchant'; // optional
	 $merchant->description  = 'User is allowed to manage his products'; // optional
	 $merchant->save();
         $itemsync = new Permission();
	 $itemsync->name         = 'itemsync';
	 $itemsync->display_name = 'itemsync'; // optional
	// Allow a user to...
	 $itemsync->description  = 'itemsync'; // optional
	 $itemsync->save();
         $merchant->attachPermission($itemsync);
	$customer = new Role();
	$customer->name         = 'customer';
	$customer->display_name = 'Front end customer'; // optional
	$customer->description  = 'User is allowed to view items in front end'; // optional
	$customer->save();
    }

}
