<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//
		DB::table('categories')->insert(
			[
				[
					'type' => 'food',
					'logo_name' => 'fa-food',
				],
				[
					'type' => 'car',
					'logo_name' => 'fa-car',
				],
				[
					'type' => 'transport',
					'logo_name' => 'fa-subway',
				],
				[
					'type' => 'entertainment',
					'logo_name' => 'fa-beer',
				],
				[
					'type' => 'credit',
					'logo_name' => 'fa-credit-card-alt',
				],
				[
					'type' => 'salary',
					'logo_name' => 'fa-money',
				],
				[
					'type' => 'tool',
					'logo_name' => 'fa-wrench',
				]
			]
		);
	}
}
