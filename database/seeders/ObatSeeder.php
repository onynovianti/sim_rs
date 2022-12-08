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
        DB::table('obats')->insert([
            [ // OBAT
            'nama' => 'Anestesia',
            'deskripsi' => 'Ketamin dari tiopental digunakan sebagai agens anestia umum intravena',
            'jumlah' => $faker->numberBetween(1,100),
            'harga' => $faker->randomNumber(2, true).'000',
            'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
            'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
            'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Antianemia',
                'deskripsi' => 'Pencegahan dan pengobatan anemia',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Antiangina',
                'deskripsi' => 'Nitrat digunakan untuk mengoai dan mencegah serangan angina',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Antiaritmia',
                'deskripsi' => 'Supresi aritmia jantung',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Antikolinergik ',
                'deskripsi' => 'Atropin – Bradiaritmia. Skopolamin – Mual dan muntah sehubungan dengan mabuk perjalanan dan vertigo',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Antikoagulan',
                'deskripsi' => 'Pencegahan dan pengobatan gangguan tromboembolik termasuk trombosis vena profunda, emboli paru, dan fibrilasi atrial dengan embolisasi',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Antidepresan',
                'deskripsi' => 'Digunakan dalam pengobatan berbagai bentuk depresi endogen, sering digabung dengan psikoterapi',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Obat antidiare',
                'deskripsi' => 'Untuk mengendalikan dan menghilangkan gejala diare akut dan kronik non spresifik',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Antiemetik',
                'deskripsi' => 'Digunakan untuk menatalaksanakan mua dan munta akibat berbagai macam penyebab, termasuk pembedahan, anestesia, dan terapi antineoplastik',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Antijamur',
                'deskripsi' => 'Pengobatan infeksi jamur. Infeksi kulit atau membran mukosa dapat dioati dengan preparat topikal atau vaginal',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Agens antiglaukoma',
                'deskripsi' => 'Penatalaksanaan glaukoma. Glaukoa sudut terbuka biasanya diobati dengan medikasi',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Agens antigout',
                'deskripsi' => 'Dalam pengobatan gout aktif (kolkisin) dan pencegahan serangan kambuhan (alopurinol, probenesid)',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Antihistamin',
                'deskripsi' => 'Menghilangkan gejala yang berhubungan dengan alergi, termasuk rinitis, urtikaria dan angiodema, dan sebagai terapi adjuvan pada reaksi anafilaksis',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Agens hipertensi',
                'deskripsi' => 'Pengobatan hipertensi dengan berbagai penyebab; paling sering hipertensi esensial',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Antiinfeksi',
                'deskripsi' => 'Pengobtaan dan profilaksis berbagaiinfeksi bakteri',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Antineoplastik',
                'deskripsi' => 'Digunakan dalam pengobatan berbagai bentuk tumr padat, limfoma dan leukimia. Juga digunakan untuk beberapa gangguan autoimun seperti artritis reumatoid ',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Obat antiparkinson',
                'deskripsi' => 'Digunakan dalam pengobatan parkinsonisme dengan berbagai penyebab; degeneratif, toksik, infektif, neoplastik, atau akibat obat',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Agens antipsikotik',
                'deskripsi' => 'Pengobatan psikosis akut dan kronis, terutama bila disertai dengan peningkatan aktivitas psikomotor',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Antipiretik',
                'deskripsi' => 'Digunakan untu menurunkan demam dengan berbagai penyebab (infeksi, inflamasi, dan neoplasma)',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Antitiroid',
                'deskripsi' => 'Mempersiapkan asien yang akan menjalani tiroidektomi atau pada mereka yang tindakan tiroidektomi dikontraindikasikan',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Antituberkulosis',
                'deskripsi' => 'Digunakan dalam pengobatan dan pencegahan tuberkulosis dan penyakit lain akibat mikrobakterium',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Antitusif',
                'deskripsi' => 'Digunakan untuk mengurangi gejala batuk akibat berbagai sebab termasuk nfeksi virus pada saluran napas atas',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Agens antiulkus',
                'deskripsi' => 'Pengobatan dan pencegahan ulus peptikum dan keadaan hipersekresi lambung seperti Sindrom Zollinger-Ellison',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Bronkodilator',
                'deskripsi' => 'Digunakan dalam pengobatan obstruksi saluran panas reversibel akibat asma atau PPOM',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Stimulan sistem saraf pusat',
                'deskripsi' => 'Digunakan untuk terapi narkolepsi dan terapi adjuvan dalam penatalaksanaan gangguan pemusatan perhatian',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Diuretik',
                'deskripsi' => 'Tiazid dan diuretik loop digunakan sendiri atau dalam kombinasi pengobatan hipertensi ata adema akibat gagal jantung',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Elektrolit/pengatur elektrolit',
                'deskripsi' => 'Digunakan untuk menegah atau mengobati defisiensi atau kelebihan elektrolit',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Glukokortiroid',
                'deskripsi' => 'Digunakan sebagai doses pengganti (20 mg hidrokorsiton atau yang setara) untuk menangani insufisiensi adrenokortikal',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [ // OBAT
                'nama' => 'Hormon',
                'deskripsi' => 'Kombinasi hormon (estrogen dan progresteron) digunakan sebagaiagens kontrasepsi ora',
                'jumlah' => $faker->numberBetween(1,100),
                'harga' => $faker->randomNumber(2, true).'000',
                'tanggalKadaluarsa' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+5 years'),
                'created_at' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = 'now'),
                'updated_at' => date('Y-m-d H:i:s')
            ]]
        );
    }
}
