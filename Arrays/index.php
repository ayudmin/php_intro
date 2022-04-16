<?php 


class Post

{
    public $title;

    public $published;

    public function __construct($title, $published)

    {

        $this->title = $title;

        $this->published = $published;
    }

}

$posts  = [

    new Post('My first Post', true),
    new Post('My second Post', true),
    new Post('My third Post', true),
    new Post('My fourth Post', false),
];

$unpublishedPosts = array_filter($posts, function($post){

    return !$post->published;
});

var_dump($unpublishedPosts);