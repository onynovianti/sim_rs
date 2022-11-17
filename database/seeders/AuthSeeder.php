<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   $faker = Faker::create('id_ID');
        DB::table('admin')->insert([
            'id' => $faker->randomNumber($nbDigits = null, $strict = false),
            'namaLengkap' => 'Narendra Saputra',
            'username' => 'narendra',
            'password' => bcrypt('narendra'),
            'alamat' => $faker->city,
            'noHp' => '081333717238',
            'jenisKelamin' => 0,
            'tempatLahir' => 'Malang',
            'tanggalLahir' => '2000-12-22',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ]);
    }
}
