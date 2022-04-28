<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Faker\Factory;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getCategories($id = 0)
    {
        $result = [];
        $faker = Factory::create();
        if($id > 0){
            return  [
                'id'            => $id,
                'title'         => $faker->jobTitle(),
                'description'   => $faker->sentence(30),
                'news'          => $this->getNews($id),
            ];
        }
        for($i = 1; $i<5; $i++){
            $result[] = [
                'id'            => $i,
                'title'         => $faker->jobTitle(),
                'description'   => $faker->sentence(30),
                'news'          => $this->getNews($i),
            ];
        }
        return $result;
    }
    public function getNews($catId = 0, $NewsId = 0)
    {
        $result = [];
        $faker = Factory::create();
        if($catId == 0){
           $catId = rand(1, 5); 
        }
        $cnt = rand(5, 15);
        for($i = 1; $i<$cnt; $i++){
            $result[] = [
                'id'            => $i,
                'cat_id'        => $catId,
                'title'         => $faker->jobTitle(),
                'author'        => $faker->name(),
                'description'   => $faker->sentence(20),
                'text'          => $faker->sentence(255),
                'date'          => now(),
            ];
        }
        if($NewsId > 0){
            return $result[0];
        }
        return $result;
    }
}