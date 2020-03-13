<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/13
 * Time: 12:18
 */

namespace App\Bean;

use \Swoft\Bean\Annotation\Bean;

/**
 * @Bean()
 */
class Sandy
{

    private $name;
    public function __construct()
    {
        echo "Sandy".time()."\n";
    }

    public function setName(string $name){
        $this->name = $name;
        return $this;
    }

    public function getName():string{
        return $this->name;
    }


}