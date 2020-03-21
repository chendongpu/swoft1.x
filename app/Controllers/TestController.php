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

use App\Lib\DemoInterface;
use App\Lib\TestInterface;
use Swoft\Bean\Annotation\Inject;
use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;
use Swoft\Rpc\Client\Bean\Annotation\Reference;

/**
 * test controller test
 *
 * @Controller(prefix="test")
 */
class TestController
{

    /**
     * @Reference(name="test")
     *
     * @var TestInterface
     */
    private $testService;



    /**
     * @RequestMapping(route="call")
     * @return array
     */
    public function call()
    {
        $result = $this->testService->getStr('-这儿是客户端');


        return [
            'result'  => $result
        ];
    }




}