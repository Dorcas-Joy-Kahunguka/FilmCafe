<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $tags = [

            ['tag_name' => 'action'],
            ['tag_name' => 'drama'],
            ['tag_name' => 'documentary'],
            ['tag_name' => 'comedy'],
            
        ];

        foreach ($tags as $key => $tag) {

            Tag::create($tag);
            
        }
        
    }
}