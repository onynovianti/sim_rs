<?php



namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Penyakit;
use File;



class PenyakitSeeder extends Seeder

{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()

    {

        Penyakit::truncate();



        $json = File::get("JSON/DiseasesOutput.json");

        $penyakits = json_decode($json);



        foreach ($penyakits as $key => $value) {

            Penyakit::create([

                "penyakit" => $value->text,

            ]);

        }

    }

}
