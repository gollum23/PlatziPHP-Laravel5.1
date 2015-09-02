<?php
class PostTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    function it_gives_us_the_author_name()
    {
        $author = new \PlatziPHP\Author(
            'any@email.com',
            'platzi',
            'AUTOR_DE_PLATZI'
        );

        $author->setName('Diego', 'Forero');

        $post = new \PlatziPHP\Post($author, 'A title', 'A post body');

        $this->assertEquals(
            'by Diego',
            $post->getAuthor()
        );
    }
}