<?php
namespace PlatziPHP\Infrastructure;


use Illuminate\Support\Collection;
use PlatziPHP\Domain\Post;

class PostRepository
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

        return $this->mapToPost($statement->fetchAll());
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