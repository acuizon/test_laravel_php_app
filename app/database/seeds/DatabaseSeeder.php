<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');

		$this->call('ItemTableSeeder');
		$this->call('RoleUserTableSeeder');
	}

}

class ItemTableSeeder extends Seeder {

	public function run()
	{
		DB::table('items')->delete();

		Item::create(array('name' => 'Item 1', 'description' => 'This is the first item in the list', 'stock' => 3));
		Item::create(array('name' => 'Item 2', 'description' => 'This is the second item in the list', 'stock' => 2));
		Item::create(array('name' => 'Item 3', 'description' => 'This is the third item in the list', 'stock' => 1));
	}

}

class RoleUserTableSeeder extends Seeder {

	public function run() {
		DB::table('roles')->delete();
		DB::table('users')->delete();
		DB::table('role_user')->delete();

		$role = new Role(array('name' => 'Admin'));
		$role->save();

		$user = new User;
		$user->email = 'admin@testphp.com';
		$user->password = Hash::make('adminpass1');
		$user->save();

		$user->roles()->attach($role->id);

		$role2 = Role::create(array('name' => 'Basic'));

		$user2 = new User;
		$user2->email = 'basic@testphp.com';
		$user2->password = Hash::make('basicpass1');
		$user2->save();

		$user2->roles()->save($role2);

	}

}