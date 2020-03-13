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
// use Swoft\Http\Message\Server\Response;

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
}
