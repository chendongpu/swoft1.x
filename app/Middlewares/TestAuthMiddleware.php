<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Middlewares;

use Firebase\JWT\JWT;
use Psr\Http\Server\RequestHandlerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Swoft\Bean\Annotation\Bean;
use Swoft\Http\Message\Middleware\MiddlewareInterface;

/**
 * Class TestAuthMiddleware - Custom middleware
 * @Bean()
 * @package App\Middlewares
 */
class TestAuthMiddleware implements MiddlewareInterface
{
    /**
     * @param \Psr\Http\Message\ServerRequestInterface $request
     * @param \Psr\Http\Server\RequestHandlerInterface $handler
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \InvalidArgumentException
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        // before request handle


        $header = $request->getHeaders();

        $jwt = $header["token"][0];

        $key=\config('jwt.key');
        $userInfo=[];
        try {

            JWT::$leeway = 60; // $leeway in seconds

            $decoded = JWT::decode($jwt, $key, array('HS256'));
            $userInfo         = (array) $decoded;

        } catch (\Exception $e) {
            return \response()->json(["msg"=> "授权出错"]);
        }

        $request->userInfo=$userInfo;


        $response = $handler->handle($request);

        // after request handle

        return $response->withAddedHeader('User-Middleware', 'success');
    }
}
