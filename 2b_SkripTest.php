<?php

namespace Tests\Feature\Auth;

namespace App\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class DatabaseDosenTest extends TestCase
{
    use DatabaseTransactions;

    // Function untuk testing insert data dosen ke dalam tabel dosen
    public function test_insert_into_tabel_dosen()
    {
        $dosen = Dosen::create([
            'nipy' => '003',
            'nidn' => '0015118001',
            'nama' => 'Fiftin Noviyanto S.T., M.Cs.',
            'jabfung' => 'L',
            'email_dosen' => '003@tif.uad.ac.id',
            'avatar' => 'fiftin.jpg'
        ]);

        $this->assertEquals('003', $dosen->nipy);
        $this->assertEquals('0015118001', $dosen->nidn);
        $this->assertEquals('Fiftin Noviyanto S.T., M.Cs.', $dosen->nama);
        $this->assertEquals('L', $dosen->jabfung);
        $this->assertEquals('003@tif.uad.ac.id', $dosen->email_dosen);
        $this->assertEquals('fiftin.jpg', $dosen->avatar);
    }
}
