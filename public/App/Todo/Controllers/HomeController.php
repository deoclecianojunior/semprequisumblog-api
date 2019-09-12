<?php
namespace App\Todo\Controllers;

use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

/**
 * Controls the data flow into a home object and updates the view whenever data changes.
 */
class HomeController
{
 	
 	/**
 	 * { function_description }
 	 *
 	 * @param      Request   $request   The request
 	 * @param      Response  $response  The response
 	 * @param      Array     $args      The arguments
 	 *
 	 * @return     <type>    ( description_of_the_return_value )
 	 */
 	public function index(Request $request, Response $response, Array $args) 
    {
    	return $response->withJson($args);
    }

    /**
     * { item_description }
     */
    public function new(Request $request, Response $response, Array $args) 
    {
    	return $response->withJson($args);
    }

    public function create(Request $request, Response $response, Array $args) 
    {
      return $response
      		->withStatus(200)
      		->withJson($request->getParams());
    }

    public function edit(Request $request, Response $response, Array $args) 
    {
    	return $response->withJson($args);
    }

    public function update(Request $request, Response $response, Array $args) 
    {
    	return $response->withJson($request->getParams());
    }
}