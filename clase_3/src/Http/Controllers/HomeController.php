<?php
namespace PlatziPHP\Http\Controllers;

use Illuminate\Http\Request;
use PlatziPHP\Domain\Imprint;
use PlatziPHP\Http\Views\View;

class HomeController
{
    private $imprint;

    public function __construct(Imprint $imprint)
    {
        $this->imprint = $imprint;
    }

    public function index(Request $request)
    {
        $posts = $this->imprint->listPublishedPost();

        $first = $posts->first();

        $view =  new View('home',[
            'posts' => $posts,
            'firstPost' => $first
        ]);

        return $view->render();
    }

    public function show($id)
    {
        $post = $this->imprint->findById($id);

        $view = new View('post_detail', [
            'post' => $post
        ]);

        return $view->render();
    }
}