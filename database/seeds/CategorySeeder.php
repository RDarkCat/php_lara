<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->getCategoriesSeederData());
    }

    private function getCategoriesSeederData()
    {
        $data = [];
        $fakerCategory = Faker\Factory::create('ru_RU');
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'name' => $fakerCategory->word()
            ];
        }
        return $data;
    }
}
