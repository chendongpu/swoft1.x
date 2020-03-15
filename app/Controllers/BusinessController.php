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

use App\Models\Logic\BusinessLogic;
use \Swoft\Bean\Annotation\Inject;
use App\Models\Validate\UserValidate;
use Swoft\Http\Message\Server\Response;
use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;
use Swoft\Http\Server\Bean\Annotation\RequestMethod;
// use Swoft\View\Bean\Annotation\View;
// use Swoft\Http\Message\Server\Response;

/**
 * Class BusinessController
 * @Controller(prefix="/business")
 * @package App\Controllers
 */
class BusinessController{


    /**
     * @Inject()
     * @var BusinessLogic
     */
    private $businessLogic;

    /**
     * this is a example action. access uri path: /business
     * @RequestMapping(route="/business", method=RequestMethod::GET)
     * @return Response
     */
    public function index(Response $response)
    {
        $data=[
          'email'=>"2323178881@qq.com",
          'nickname'=>'sandy',
          'password'=>'123456',
          'passwords'=>'123456',
        ];
        $this->businessLogic->create($data);
        return $response->json(["code"=>200,"message"=>"success"]);
    }
}
