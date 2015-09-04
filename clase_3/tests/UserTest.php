<?php
use PlatziPHP\Domain\User;

class UserTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    function it_should_be_able_to_construct()
    {
        $user = new User('fake@email.dev', 'platzi');
        $this->assertInstanceOf(User::class, $user);
    }
    /** @test */
    function it_should_have_a_fist_name()
    {
        $user = new User('email@example.com', 'pass');
        $user->setName('Diego', 'Forero');
        $name = $user->getFirstName();
        $this->assertEquals('Diego', $name);
    }
}
