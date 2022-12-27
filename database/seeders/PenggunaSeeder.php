<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 5; $i++){
            $gender = $faker->randomElement(['male', 'female']);
            DB::table('admins')->insert(
                [ // ADMIN
                'namaLengkap' => $faker->name($gender),
                'username' => $faker->username,
                'password' => bcrypt('narendra'),
                'alamat' => $faker->address,
                'noHp' => $faker->phoneNumber,
                'jenisKelamin' => ($gender == 'male')?0:1,
                'tempatLahir' => $faker->city,
                'tanggalLahir' => $faker->dateTimeThisCentury->format('Y-m-d'),
                'created_at' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
                ]
            );
        }
        for($i = 1; $i <= 12; $i++){
            $gender = $faker->randomElement(['male', 'female']);
            DB::table('apotekers')->insert(
                [ // APOTEKER
                'namaLengkap' => $faker->name($gender),
                'username' => $faker->username,
                'password' => bcrypt('narendra'),
                'alamat' => $faker->address,
                'noHp' => $faker->phoneNumber,
                'jenisKelamin' => ($gender == 'male')?0:1,
                'tempatLahir' => $faker->city,
                'tanggalLahir' => $faker->dateTimeThisCentury->format('Y-m-d'),
                'created_at' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
                ]
            );
        }
        for($i = 1; $i <= 20; $i++){
            $gender = $faker->randomElement(['male', 'female']);
            DB::table('karyawans')->insert(
                [ // ADMIN
                'namaLengkap' => $faker->name($gender),
                'username' => $faker->username,
                'password' => bcrypt('narendra'),
                'alamat' => $faker->address,
                'noHp' => $faker->phoneNumber,
                'jenisKelamin' => ($gender == 'male')?0:1,
                'tempatLahir' => $faker->city,
                'tanggalLahir' => $faker->dateTimeThisCentury->format('Y-m-d'),
                'created_at' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
                ]
            );
        }
        for($i = 1; $i <= 10; $i++){
            $gender = $faker->randomElement(['male', 'female']);
            DB::table('dokters')->insert(
                [ // ADMIN
                'namaLengkap' => $faker->name($gender),
                'username' => $faker->username,
                'password' => bcrypt('narendra'),
                'alamat' => $faker->address,
                'noHp' => $faker->phoneNumber,
                'jenisKelamin' => ($gender == 'male')?0:1,
                'tempatLahir' => $faker->city,
                'tanggalLahir' => $faker->dateTimeThisCentury->format('Y-m-d'),
                'created_at' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
                ]
            );
        }
    }
}
