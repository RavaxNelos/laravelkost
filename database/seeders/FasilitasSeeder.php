<?php

namespace Database\Seeders;

use App\Models\Fasilitas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'nama' => 'AC Panasonic',
                'gambar' => 'interior2.jpg',
                'tipe' => 'Kamar',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, cumque sunt explicabo voluptatibus qui minima dignissimos dolor. Impedit neque, magnam quos in maiores, harum aperiam aliquid hic recusandae odio ipsam!'
            ],
            [
                'nama' => 'Kasur',
                'gambar' => 'interior7.jpg',
                'tipe' => 'Kamar',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, cumque sunt explicabo voluptatibus qui minima dignissimos dolor. Impedit neque, magnam quos in maiores, harum aperiam aliquid hic recusandae odio ipsam!',
            ],
            [
                'nama' => 'Meja',
                'gambar' => 'interior9.jpg',
                'tipe' => 'Kamar',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, cumque sunt explicabo voluptatibus qui minima dignissimos dolor. Impedit neque, magnam quos in maiores, harum aperiam aliquid hic recusandae odio ipsam!'
            ],
            [
                'nama' => 'TV',
                'gambar' => 'interior4.jpg',
                'tipe' => 'Kamar',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, cumque sunt explicabo voluptatibus qui minima dignissimos dolor. Impedit neque, magnam quos in maiores, harum aperiam aliquid hic recusandae odio ipsam!'
            ],
            [
                'nama' => 'Lemari',
                'gambar' => 'interior6.jpg',
                'tipe' => 'Kamar',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, cumque sunt explicabo voluptatibus qui minima dignissimos dolor. Impedit neque, magnam quos in maiores, harum aperiam aliquid hic recusandae odio ipsam!'
            ],
        ];

        foreach ($datas as $data) {

            Fasilitas::create([
                'nama' => $data['nama'],
                'gambar' => $data['gambar'],
                'tipe' => $data['tipe'],
                'deskripsi' => $data['deskripsi'],
            ]);

        }
    }
}
