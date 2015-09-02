<?php
class UserTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    function it_should_be_able_to_construct()
    {

        $user = new \PlatziPHP\User('fake@email.dev', 'platzi');

        $this->assertInstanceOf(\PlatziPHP\User::class, $user);
    }

    /** @test */
    function it_should_have_a_fist_name()
    {
        $user = new \PlatziPHP\User('email@example.com', 'pass');

        $user->setName('Diego', 'Forero');

        $name = $user->getFirstName();

        $this->assertEquals('Diego', $name);
    }
}