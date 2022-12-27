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
        DB::table('admins')->insert(
            [ // ADMIN
            'namaLengkap' => 'Narendra Saputra',
            'username' => 'narendra',
            'password' => bcrypt('narendra'),
            'alamat' => $faker->address,
            'noHp' => '081333717238',
            'jenisKelamin' => 0,
            'tempatLahir' => 'Malang',
            'tanggalLahir' => '2000-12-22',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        DB::table('apotekers')->insert(
            [ // APOTEKER
            'namaLengkap' => 'Dicky Mahessa',
            'username' => 'dickyyy',
            'password' => bcrypt('1234567890'),
            'alamat' => $faker->address,
            'noHp' => '081276535467',
            'jenisKelamin' => 0,
            'tempatLahir' => $faker->city,
            'tanggalLahir' => '2001-08-18',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ],
        );
        DB::table('dokters')->insert(
            [ // DOKTER
            'namaLengkap' => 'Ony Novianti',
            'username' => 'onynov',
            'password' => bcrypt('1234567890'),
            'alamat' => $faker->address,
            'noHp' => '08821443534',
            'jenisKelamin' => 1,
            'tempatLahir' => $faker->city,
            'tanggalLahir' => '2001-10-10',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ],
        );
        DB::table('karyawans')->insert(
            [ // KARYAWAN
            'namaLengkap' => 'Nanda Setiawan',
            'username' => 'setiawananda',
            'password' => bcrypt('1234567890'),
            'alamat' => $faker->address,
            'noHp' => '089526545324',
            'jenisKelamin' => 0,
            'tempatLahir' => $faker->city,
            'tanggalLahir' => '2001-06-18',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ]
        );
    }
}
