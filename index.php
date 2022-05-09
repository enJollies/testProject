<?php
	require_once __DIR__.'/vendor/autoload.php';
	
	$faker = Faker\Factory::create('ru_RU');

	for($i = 0; $i < 10; $i++){
		
		echo "<p>", $faker->text(100),"</p>";
	}

	echo $faker->inn10();

	echo "Hello, World!";