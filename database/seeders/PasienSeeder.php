<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 100; $i++){
            DB::table('pasiens')->insert(
                [ // ADMIN
                'namaLengkap' => $faker->name,
                'alamat' => $faker->address,
                'noHp' => $faker->phoneNumber,
                'jenisKelamin' => $faker->numberBetween(0,1),
                'tanggalLahir' => $faker->dateTimeThisCentury->format('Y-m-d'),
                'created_at' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
                ]
            );
        }
    }
}
