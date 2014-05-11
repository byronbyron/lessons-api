<?php

use Faker\Factory as Faker;

class LessonsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Lesson::create([
                'title' => $faker->sentence(5),
                'body' => $faker->paragraph(4),
                'completed' => $faker->boolean()
			]);
		}
	}

}