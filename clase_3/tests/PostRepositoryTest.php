<?php
use PlatziPHP\Domain\Post;
use PlatziPHP\Infrastructure\PostRepository;

class PostRepositoryTest extends PHPUnit_Framework_TestCase
{
    function test_all_posts()
    {
        $posts = new PostRepository();

        $result = $posts->all();

        $this->assertInstanceOf(
            \Illuminate\Support\Collection::class,
            $result
        );

        foreach ($result as $post) {
            $this->assertInstanceOf(
                Post::class,
                $post
            );
        }
    }

    function test_find_a_post_by_id()
    {
        $posts = new PostRepository();

        $post = $posts->find(1);

        $this->assertInstanceOf(
            Post::class,
            $post
        );
    }
}