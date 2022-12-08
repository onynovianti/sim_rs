<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 147; $i++){
            DB::table('transaksis')->insert(
                [ // ADMIN
                'dokter_id' => $faker->numberBetween(1,11),
                'pasien_id' => $faker->numberBetween(1,100),
                'obat_id' => $faker->numberBetween(1,29),
                'status' => $faker->numberBetween(0,1),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
                ]
            );
        }
    }
}
