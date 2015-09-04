<?php
namespace PlatziPHP\Domain;

class Author extends User
{
    public function __construct($anemail, $password, $key)
    {
        parent::__construct($anemail, $password);
        if ($key != 'AUTOR_DE_PLATZI') {
            throw new \InvalidArgumentException("Invalid key given.");
        }
    }
    public function getLastName()
    {
        return $this->lastName;
    }
}