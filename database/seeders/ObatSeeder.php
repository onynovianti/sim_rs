<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        DB::table('obats')->insert(
            [ // OBAT
            'nama' => 'Anestesia',
            'deskripsi' => 'Ketamin dari tiopental digunakan sebagai agens anestia umum intravena',
            'jumlah' => $faker->numberBetween(1,100),
            'harga' => 41000,
            'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
            'created_at' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now'),
            'updated_at' => date('Y-m-d H:i:s')
            ]
        );
    }
}
