<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use App\Models\Diagnosa;

class DiagnosaTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_add_record_diagnosa()
    {
        $response = $this->call(method:"POST", uri:'/diagnosa/create', parameters: [
            'namaLengkap' => 'Akbar Oktafian',
        ]);
        $this->assertTrue(true);
    }

    public function test_add_gejala()
    {
        $response = $this->call(method:"POST", uri:'/featureUpdate/1', parameters: [
            'idDiag' => '1',
            'name' => 'Age',
            'value' => '25',
        ]);
        $this->assertTrue(true);
    }

    public function test_add_penyakit()
    {
        $response = $this->call(method:"POST", uri:'/diagnosa/1', parameters: [
            'diagnosisPenyakit' => 'Anemia'
        ]);
        $this->assertTrue(true);
    }

}
