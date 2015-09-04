<?php
use PlatziPHP\Domain\Author;
use PlatziPHP\Domain\Post;

class PostTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    function it_gives_us_the_author_name()
    {
        $author = new Author(
            'any@email.com',
            'platzi',
            'AUTOR_DE_PLATZI'
        );
        $author->setName('Diego', 'Forero');
        $post = new Post($author, 'A title', 'A post body');
        $this->assertEquals(
            'by Diego Forero',
            $post->getAuthor()
        );
    }
}
