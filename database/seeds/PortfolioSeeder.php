<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->insert([
            'col_name' => 'col-sm-6',
            'main_image' => '',
            'modal_image' => ''
        ]);
    }
}
