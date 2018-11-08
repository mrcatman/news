<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('news')->delete();
		$id = 1;
		for ($i=1;$i<=5;$i++) {
			for ($j=1;$j<=3;$j++) {
				DB::table('news')->insert([
					'title' => "Новость $id",
					'text' => "Текст новости $id",
					'category_name' => "Категория $j",
				]);
				$id++;
			}
		}
    }
}
