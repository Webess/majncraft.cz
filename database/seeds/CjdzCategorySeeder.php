<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CjdzCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cjdz_categories')->truncate();
        DB::table('cjdz_categories')->insert([
            [
                'title' => 'Pravidla',
            ], [
                'title' => 'Co je dobré znát',
            ]
        ]);
    }
}
