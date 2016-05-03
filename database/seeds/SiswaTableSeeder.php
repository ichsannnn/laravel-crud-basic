<?php

use Illuminate\Database\Seeder;
use App\Siswa;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = new Siswa;
        $siswa->nis = '10578';
        $siswa->nama = 'Ichsan Firdaus';
        $siswa->kelas = 'XI-RPL';
        $siswa->save();
    }
}
