<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/13
 * Time: 13:55
 */

namespace App\Boot;


use Swoft\Bootstrap\Listeners\Interfaces\WorkerStartInterface;
use Swoft\Bootstrap\SwooleEvent;
use Swoft\Bean\Annotation\ServerListener;
use Swoole\Server;

/**
 * Class SandyListener
 * @package App\Boot
 * @ServerListener(SwooleEvent::ON_WORKER_START)
 */

class SandyListener implements WorkerStartInterface
{
        public function onWorkerStart(Server $server, int $workerId, bool $isWorker)
        {
            // TODO: Implement onWorkerStart() method.
            echo "onWorkerStart:{$workerId}\n";
        }
}