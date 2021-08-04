<?php

include_once(__DIR__ . "/error.inc.php");


class RedisUtils
{
    private $host;
    private $port;
    private $password;
    private $db;
    protected $redis = null;


    public function __construct($host = null, $port = 6379, $password = "", $db = 0)
    {
        Utils::checkNotEmptyStr($host, "host");
        $this->host = $host;
        $this->port = $port;
        $this->password = $password;
        $this->db = $db;
    }

    protected function getRedis()
    {
        if (!Utils::notEmptyStr($this->redis)) {
            $this->setRedis();
        }
        return $this->redis;
    }

    protected function setRedis()
    {
        if (!Utils::notEmptyStr($this->host) || !Utils::notEmptyStr($this->port) || !Utils::notEmptyStr($this->password) || !Utils::notEmptyStr($this->db)) {
            throw new ParameterError("invalid host or port or password or db");
        }
        $redis = new Redis();
        $redis->connect($this->host,$this->￥)
            
    }
}
