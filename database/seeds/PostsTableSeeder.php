<?php

use Illuminate\Database\Seeder;
use App\Post; 
use Illuminate\Support\Str; 

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            for ($i = 1; $i <= 10; $i++) {
                $newPost = new Post(); 
    
                $newPost->title = "Titolo articolo" . $i; 
                $newPost->slug = Str::slug($newPost->title, '-'); 
                $newPost->content = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil numquam, praesentium, quos possimus dolorum, totam optio dolores eveniet cupiditate incidunt laudantium? Numquam placeat fugiat magni aspernatur non illo pariatur hic amet optio aliquam doloribus quam, molestias adipisci beatae libero sequi possimus quis praesentium? Ea molestias nisi, architecto sapiente doloremque facilis repellendus optio magni enim"; 
    
                $newPost->save(); 
            }
        }
    }
}
