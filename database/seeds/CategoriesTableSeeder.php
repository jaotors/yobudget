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
        		    'logo_name' => 'logo-food',
        		],
        		[
        		    'type' => 'car',
        		    'logo_name' => 'logo-car',
        		],
        		[
        		    'type' => 'transport',
        		    'logo_name' => 'logo-transport',
        		],
        		[
        		    'type' => 'entertainment',
        		    'logo_name' => 'logo-entertainment',
        		],
        		[
        		    'type' => 'credit',
        		    'logo_name' => 'logo-credit',
        		],
        		[
        		    'type' => 'salary',
        		    'logo_name' => 'logo-salary',
        		],
        		[
        		    'type' => 'tool',
        		    'logo_name' => 'logo-tool',
        		]
        	]
        );
    }
}
