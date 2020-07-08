<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getNewsSeederData());

    }

    private function getNewsSeederData()
    {
        $data = [];
        $fakerNews = Faker\Factory::create('ru_RU');
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'title' => $fakerNews->sentence(),
                'author' => 1,
                'body' => $fakerNews->sentence()
            ];
        }
        return $data;
    }
}
