<?php
namespace PlatziPHP\Infrastructure;


class Database
{


    public function posts()
    {
        $pdo = new \PDO(
            'mysql:host=127.0.0.1;dbname=php_laravel',
            'gollum23',
            'B@QQME1K'
        );

        $statement = $pdo->prepare(
            'SELECT * FROM posts'
        );

        $statement->execute();

        return $statement->fetchAll();
    }
}