<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Controllers;

use App\Middlewares\TestAuthMiddleware;
use Swoft\Http\Message\Bean\Annotation\Middleware;
use Firebase\JWT\JWT;
use Swoft\Http\Message\Server\Request;
use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;
use Swoft\Http\Server\Bean\Annotation\RequestMethod;
// use Swoft\View\Bean\Annotation\View;
// use Swoft\Http\Message\Server\Response;

/**
 * Class AccountController
 * @Controller(prefix="/account")
 * @package App\Controllers
 */
class AccountController{


    /**
     * this is a example action. access uri path: /account/login
     * @RequestMapping(route="login", method=RequestMethod::GET)
     * @return string
     */
    public function login():string
    {
       $key=\config('jwt.key');
       $exp=\config('jwt.exp');
        $tokenParam=[
            "userId"=>1,
            "iss" => "http://example.org",
            "aud" => "http://example.com",
            'iat'=>time(),
            'nbf'=>time(),
            'exp'=>time()+$exp
        ];
       $token = JWT::encode($tokenParam, $key);




       return $token;
    }

    /**
     * this is a example action. access uri path: /account/get_message
     * @RequestMapping(route="get_message", method=RequestMethod::POST)
     * @Middleware(TestAuthMiddleware::class)
     * @param Request $request
     * @return array
     */
    public function get_message(Request $request):array {
        return  $request->userInfo;
    }
}
