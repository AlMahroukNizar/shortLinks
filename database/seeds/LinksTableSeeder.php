<?php

use Illuminate\Database\Seeder;
use App\Links;
class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Link::class,5)->create();
    }
}
