<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PrgrammainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table users is empty
        if(\DB::table('programmains')->get()->count() == 0){

            \DB::table('programmains')->insert([

                [
                    'tittle' => 'Halaman Karir',
                    'content' => 'Halaman ini berisi tentang halaman karir',
                    'image' => 'img/tn-01.jpg',
                ],
                [
                    'tittle' => 'Halaman Magang',
                    'content' => 'Halaman ini berisi tentang halaman karir',
                    'image' => 'img/tn-02.jpg',
                ],
                [
                    'tittle' => '>Halaman Kunjungan Industri',
                    'content' => 'Halaman ini berisi tentang halaman karir',
                    'image' => 'img/tn-03.jpg',
                ]

            ]);

        } else { echo "\e[31mTable is not empty, therefore NOT "; }

    }
    }

