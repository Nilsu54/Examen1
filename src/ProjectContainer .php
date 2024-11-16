<?php

class ProjectContainer extends \Emeset\Container
{

    public function __construct($config){
        $this->sql = new Db($config);
        $this->config = $config;
    }
    public function songs(){
        return new songs($this->sql->get());
    }
}