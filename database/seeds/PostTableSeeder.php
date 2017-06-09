<?php

use Illuminate\Database\Seeder;


class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	


    	for($i = 1 ; $i <= 3; $i++){
    		$titulo = str_random(20);
    		DB::table('posts')->insert([
	            'titulo' => $titulo,
	            'texto' => str_random(10),
	            'slug' => str_slug($titulo, '-'),
	            'tags' => str_random(10),
	            'created_at' => new \DateTime(),
	            'updated_at' => new \DateTime()
	        ]);
    	}
         
    }
}

