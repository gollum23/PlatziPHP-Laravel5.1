<?php
class PostRepositoryTest extends PHPUnit_Framework_TestCase
{
    function test_connection_doesnt_explode()
    {
        $db = new \PlatziPHP\Infrastructure\PostRepository();

        $result = $db->posts();

        $this->assertInstanceOf(
            \Illuminate\Support\Collection::class,
            $result
        );

        foreach ($result as $post) {
            $this->assertInstanceOf(
                \PlatziPHP\Domain\Post::class,
                $post
            );
        }
    }
}