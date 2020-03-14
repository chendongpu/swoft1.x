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


use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;
use Swoft\Http\Server\Bean\Annotation\RequestMethod;
// use Swoft\View\Bean\Annotation\View;
 use Swoft\Http\Message\Server\Response;
 use Swoft\Http\Message\Server\Request;

/**
 * Class BbcController
 * @Controller(prefix="/bbc")
 * @package App\Controllers
 */
class BbcController{
    /**
     * this is a example action. access uri path: /bbc
     * @RequestMapping(route="/bbc", method=RequestMethod::GET)
     * @return array
     */
    public function index(): array
    {
        return ['item0', 'item1'];
    }

    /**
     * this is a example action. access uri path: /bbc/test
     * @RequestMapping(route="test", method=RequestMethod::GET)
     * @return string
     */
    public function test(): string
    {
        return "hello,world";
    }


    /**
     * this is a example action. access uri path: /bbc/test_request
     * @RequestMapping(route="test_request", method={RequestMethod::GET,RequestMethod::POST})
     * @param Request $request
     * @param Response $response
     * @return array|mixed|string
     */
    public function testRequest(Request $request,Response $response)
    {
        //$name = $request->query('name');//获取GET参数
        //$name = $request->post('name');//获取POST参数
        //$name = $request->input('name');//获取GET或者POST参数
        //$header=$request->header();//获取请求头信息
        //$remote_addr=$request->server('remote_addr');//获取请求客户端的ip地址
        //return $response->redirect("http://www.baidu.com");//重定向
        //return $response->json(["name"=>"sandy","sex"=>"女"]);//响应内容格式为json
        return $response->withAddedHeader("sandy","my name is sandy");//向响应头中加入属性值

    }


}
