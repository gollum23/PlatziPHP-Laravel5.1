<?php
namespace PlatziPHP\Infrastructure;


use Illuminate\Support\Collection;
use PlatziPHP\Domain\Post;

class PostRepository
{


    public function all()
    {
        $pdo = $this->getPDO();

        $statement = $pdo->prepare(
            'SELECT * FROM posts'
        );

        $statement->execute();

        return $this->mapToPost($statement->fetchAll());
    }

    public function find($id)
    {
        $pdo = $this->getPDO();

        $statement = $pdo->prepare(
            'SELECT * FROM post WHERE id = :id'
        );

        $statement->bindParam(':id', $id, \PDO::PARAM_INT);

        $statement->execute();
    }

    /**
     * @return \PDO
     */
    private function getPDO()
    {
        $pdo = new \PDO(
            'mysql:host=127.0.0.1;dbname=php_laravel',
            'gollum23',
            'B@QQME1K'
        );

        return $pdo;
    }

    private function mapToPost(array $results)
    {
        $posts = new Collection();

        foreach ($results as $result)
        {
            $post = new Post(
                $result['author_id'],
                $result['title'],
                $result['body'],
                $result['id']
            );

            $posts->push($post);
        }

        return $posts;
    }
}