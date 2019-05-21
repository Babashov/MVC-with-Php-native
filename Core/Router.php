<?php
/**
 * Created by PhpStorm.
 * User: babasov
 * Date: 11.03.2019
 * Time: 19:07
 */

class Router
{
    protected $routes = [];
    protected $params = [];

    public function AddRoute($route,$params)
    {
        $this->routes[$route] = $params;
    }

    public function GetRoute()
    {
        return $this->routes;
    }

    public function match($url)
    {
        foreach ($this->routes as $route=>$params)
        {
            if($url == $route)
            {
                $this->params = $params;
                return true;
            }
        }

        return false;
    }

    public function GetParams()
    {
        return $this->params;
    }

}