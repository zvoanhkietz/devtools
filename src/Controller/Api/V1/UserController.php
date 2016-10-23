<?php

namespace App\Controller\Api\V1;

use Slim\Http\Request;
use Slim\Http\Response;
use App\Controller\BaseController;

/**
 * User controller
 */
class UserController extends BaseController
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
        $user = $this->ci->db->table('users');
        return $res->withJson(['data' => $user->get()]);
    }

}
