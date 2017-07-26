<?php
/**
 * @link https://github.com/linpax/microphp-router
 * @copyright Copyright &copy; 2017 Linpax
 * @license https://github.com/linpax/microphp-router/blob/master/LICENSE
 */

namespace Micro\Router;


interface Router
{
    /**
     * @param string $uri
     * @param string $method Only for HTTP
     * @return mixed
     */
    public function parse($uri, $method = 'GET');
}