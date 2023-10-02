<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'ریال',
                'symbol' => 'ريال',
                'iso' => 'IRR',
            ],
            [
                'name' => 'تومان',
                'symbol' => 'تومان',
                'iso' => 'IRT',
            ],
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('unit_prices')->truncate();
        DB::table('unit_prices')->insert($data);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
