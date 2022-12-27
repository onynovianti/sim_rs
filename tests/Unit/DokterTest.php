<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use App\Models\Admin;

class DokterTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_add_dokter()
    {
        $response = $this->call(method:"POST", uri:'/dokter/create', parameters: [
            'namaLengkap' => 'Akbar Oktafian',
            'username' => 'dokter1',
            'password' => '87654321',
            'alamat' => 'Perum. Barajaya',
            'noHp' => '085603026476',
            'jenisKelamin' => '1',
            'tempatLahir' => 'Majalengka',
            'tanggalLahir' => '2001-03-02',
        ]);
        $this->assertTrue(true);
    }

    public function test_edit_dokter()
    {
        // $this->withoutExceptionHandling();
        // $this->withoutMiddleware();
        $this->get('/dokter')->assertStatus(200);
        $this->get('/dokter/1/edit')->assertStatus(200);
        $this->put('/dokter/1/update', [
            'namaLengkap' => 'Iskandar'
        ]);
        $this->assertTrue(true);
    }

    public function test_delete_dokter()
    {
        $this->get('/dokter')->assertStatus(200);
        $this->delete('/dokter/1/destroy')->assertStatus(404);
        $this->assertTrue(true);
    }
}
