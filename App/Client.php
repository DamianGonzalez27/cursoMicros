<?php namespace App;

use App\Controllers\UsuariosController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class Client
{

    private Request $request;
    private UsuariosController $controller;

    public function __construct()
    {
        $this->request = Request::createFromGlobals();
        $this->controller = new UsuariosController;
    }

    public function run()
    {
        $response = null;
        $arrayPath = explode("/", $this->request->getPathInfo());

        switch($this->request->server->get('REQUEST_METHOD'))
        {
            case 'GET': 

                if(isset($arrayPath[2]))
                    $response = new JsonResponse($this->controller->show($arrayPath[2]), 200);
                else
                    $response = new JsonResponse($this->controller->index(), 200);
            break;

            case 'POST': 
                $response = new JsonResponse($this->controller->create(json_decode($this->request->getContent(), true)), 200);
            break;

            case 'PUT': 
                $response = new JsonResponse($this->controller->update($arrayPath[2], json_decode($this->request->getContent(), true)), 200);
            break;

            case 'DELETE': 
                $response = new JsonResponse($this->controller->delete($arrayPath[2]), 200);
            break;
        }

        $response->send();
    }

}