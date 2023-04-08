<?php

namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;

use Illuminate\Database\Seeder;
use Nette\Utils\Random;

class DatabaseSeeder extends Seeder
{

    public function run()

    {
        Post::factory(10)->create();
        // PostFactoryلتنفيذ الي داخل كلاس 
        //php artisan db:seed

    }
}

//انشاء seeder
//php artisan make:seed اسم السيد_table_seeder