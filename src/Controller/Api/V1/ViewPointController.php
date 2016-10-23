<?php

namespace App\Controller\Api\V1;

use Slim\Http\Request;
use Slim\Http\Response;
use App\Controller\BaseController;

/**
 * View point controller
 */
class ViewPointController extends BaseController
{
    /**
     * Index action
     * 
     * @param \Slim\Http\Request $req
     * @param \Slim\Http\Response $res
     * @param array $args
     * @return \Slim\Http\Response
     */
    public function index(Request $req, Response $res, array $args)
    {
        return $res->withJson(['test' => true]);
    }

}
