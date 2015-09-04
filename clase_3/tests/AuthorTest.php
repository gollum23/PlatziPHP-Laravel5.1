<?php
use PlatziPHP\Domain\Author;

class AuthorTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    function it_should_construct()
    {
        $author = new Author(
            'email@email.com',
            'platzi',
            'AUTOR_DE_PLATZI'
        );
        $this->assertInstanceOf(Author::class, $author);
    }
    /** @test */
    function it_should_fail_when_no_key_is_given()
    {
        $this->setExpectedException(\InvalidArgumentException::class);
        $author = new Author(
            'any@email.com',
            'platzy',
            'DIEGO'
        );
    }
}