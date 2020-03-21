<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Lib;

use Swoft\Core\ResultInterface;

/**
 * The interface of test service
 *
 * @method ResultInterface deferGetStr(string $str)
 */
interface TestInterface
{

    /**
     * @param string $str
     *
     * @return array
     */
    public function getStr(string $str);

}