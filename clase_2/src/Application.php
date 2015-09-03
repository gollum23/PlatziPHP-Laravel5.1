<?php
namespace PlatziPHP;


use Illuminate\Contracts\Container\Container;
use Illuminate\Events\Dispatcher;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use PlatziPHP\Http\Controllers\HomeController;

class Application
{
    private $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function run()
    {
        // Crear Router
        $router = new Router(
            new Dispatcher($this->container),
            $this->container
        );

        // Definición de rutas
        $router->get('/', HomeController::class . '@index');
        $router->get('/post/{id}', HomeController::class . '@show');

        // Responder con el request URI
        $response = $router->dispatch(Request::capture());

        // Enviar el response
        $response->send();

    }
}