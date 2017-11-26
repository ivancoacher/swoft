<?php

namespace App\Controllers;

use Swoft\Bean\Annotation\Controller;
use Swoft\Bean\Annotation\RequestMapping;
use Swoft\Service\Service;

/**
 * rpc controller test
 *
 * @Controller(prefix="rpc")
 * @uses      RpcController
 * @version   2017年11月27日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class RpcController
{
    /**
     * @RequestMapping(route="call")
     * @return array
     */
    public function call()
    {
        $result = Service::call("user", 'User::getUserInfo', [2, 6, 8]);
        return ['call', $result];
    }
}