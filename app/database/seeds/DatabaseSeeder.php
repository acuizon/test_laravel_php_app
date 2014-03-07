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