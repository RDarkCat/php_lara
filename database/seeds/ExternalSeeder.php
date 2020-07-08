<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExternalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('externals')->insert($this->seedExternalsData());
    }

    private function seedExternalsData() {
        $data = [];
        $fakerExternals = Faker\Factory::create('ru_RU');
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'url' => $fakerExternals->url
            ];
        }
        return $data;
    }
}
