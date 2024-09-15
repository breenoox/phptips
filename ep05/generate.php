<?php

require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/src/Models/Post.php";

use Faker\Provider\Image;
use Faker\Provider\Lorem;
use src\Models\Post;

for($i = 0; $i < 3; $i++)
{
    $post = new Post();
    $post->title = Lorem::text(80);
    $post->description = Lorem::paragraphs(2, true);
    $post->cover = Image::image("images", 300, 150);

    $post->save();

    if ($post->save()) {
        echo "Post salvo com sucesso!";
    } else {
        echo "Erro ao salvar o post:";
        var_dump($post->fail());
    }
}