<?php
namespace PlatziPHP\Domain;

class EntityNotFound extends \OutOfBoundsException
{
    private $id;

    public function __construct($id, $message='', $code = 0, $previus=null)
    {
        $this->id = $id;

        parent::__construct($message, $code, $previus);
    }

    public function id()
    {
        return $this->id;
    }

}