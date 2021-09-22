<?php

namespace Database\Seeders;

use App\Models\Rekening;
use Illuminate\Database\Seeder;

class RekeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rekening1 = new Rekening();
        $rekening1->nomor_rekening = '0340 0110 2960 506';
        $rekening1->nama_bank = 'BRI';
        $rekening1->atas_nama = 'Arga Widya Samudera';
        $rekening1->save();

        $rekening2 = new Rekening();
        $rekening2->nomor_rekening = '55000 64597';
        $rekening2->nama_bank = 'BCA';
        $rekening2->atas_nama = 'Farhan Fadhlurrohman';
        $rekening2->save();
    }
}
