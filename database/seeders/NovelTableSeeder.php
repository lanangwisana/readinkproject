<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NovelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'judul' => 'Malin kundang',
                'Sinopsis' => 'Malin kudang adalah seorang anak yang durhaka kepada ibunya',
                'Genre' => 'Fiksi',
                'tokohUtama' => 'Malin Kundang',
                'tglrilis' => '30/12/2023',
                'penulis' => 'Lanang',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        DB::table('novel')->truncate();
        DB::table('novel')->insert($data);
    }
}
