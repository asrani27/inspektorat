<?php

use Illuminate\Database\Seeder;
use App\FrontPage;

class FrontPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s = new FrontPage;
        $s->title = 'Nama SKPD';
        $s->description = 'Dekripsi alamat DLL';
        $s->wallpaper = 'inspektorat.png';
        $s->logo = 'logobjm.png';
        $s->save();
    }
}
