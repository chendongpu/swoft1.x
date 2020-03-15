<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/15
 * Time: 9:48
 */

namespace App\Exception;


use Swoft\Bean\Annotation\ExceptionHandler;
use Swoft\Bean\Annotation\Handler;
use Swoft\Http\Message\Server\Response;

/**
 * @ExceptionHandler()
 */
class ExceptionHandlers
{
    /**
     * @Handler(ValidateException::class)
     * @param Response $response
     * @param \Throwable $throwable
     * @return Response
     */

    public function ValidateException(Response $response,\Throwable $throwable){
        return $response->json(["code"=>100,"msg"=>$throwable->getMessage()]);
    }


}