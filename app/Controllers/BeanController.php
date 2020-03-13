<?php


namespace App\Controllers;

use App\Bean\Sandy;
use Swoft\App;
use Swoft\Http\Server\Bean\Annotation\Controller;
use \Swoft\Bean\Annotation\Inject;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;

/**
 * Class BeanController
 * @Controller()
 */
class BeanController
{
    /**
     * @RequestMapping("/bean")
     */
    public function index()
    {
        $sandy =App::getBean(Sandy::class);
        $sandy->setName("My name is sandy".time());
        return $sandy->getName();
    }


    /**
     * @Inject()
     * @var Sandy
     */
    private $sandy;

    /**
     * @RequestMapping(route="/bean1/{age}")
     * @param int $age
     * @return string
     */
    public function getBean(int $age)
    {
        $this->sandy->setName("My name is sandy".time());
        return $this->sandy->getName()." age:".$age;
    }

    /**
     * @RequestMapping("/listen")
     */
    public function listen()
    {
        \Swoft::trigger("sandy",null,"sandy","age",["sex"=>"男"]);
    }
}