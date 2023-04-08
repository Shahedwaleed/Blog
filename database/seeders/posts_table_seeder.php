<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//لازم بكل كلاس بنستخدم جدول نعرف اسمو عشان نقدر نتعامل معو
use App\Models\post;
use App\Models\User;
//هادا لكلاس بنعملو لما يكون فيه جداول كتير زي اختصار
class posts_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User:: factory(10)->create(); 
        for($i=1;$i<=100;$i++){
            Post::create([
                'title' => 'posts '.$i,
                'details' => 'post_details '.$i,
                'user_id'=>User::all()->random()->id,
                'category_id' => null,
            ]);
        }
    }
}
//بحطو بال Terminalعشان نرحل عالداتا بيز
//php artisan db:seed --class=posts_table_seeder