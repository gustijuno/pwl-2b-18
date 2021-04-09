<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductmainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(\DB::table('productmains')->get()->count() == 0){

            \DB::table('productmains')->insert([

                [
                    'tittle' => 'Marbel Edu Games',
                    'content' => 'Berisi halaman depan',
                    'image' => 'img/tn-01.jpg',
                ],
                [
                    'tittle' => 'Marbel and Friends Kids Games',
                    'content' => 'Berisi tentang game untuk anak-anak',
                    'image' => 'img/tn-02.jpg',
                ],
                [
                    'tittle' => 'Riri Story Books',
                    'content' => 'Halaman ini berisi tentang kumpulan dongeng',
                    'image' => 'img/tn-03.jpg',
                ],
                [
                    'tittle' => 'Kolak Kids Games',
                    'content' => 'Halaman ini berisi games lokal Indonesia',
                    'image' => 'img/tn-04.jpg',
                ]

            ]);

        } else { echo "\e[31mTable is not empty, therefore NOT "; }

    }
    }

