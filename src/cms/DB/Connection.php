<?php


namespace App\cms\DB;


class Connection
{
    protected $link;
    private $dsn, $username, $password;

    public function __contruct($dsn, $username, $password)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
    }

    private function connect()
    {
        $this->link = new \PDO($this->dsn, $this->username, $this->password);
    }

    public function __sleep()
    {
        return array('dsn', 'username', 'password');
    }

    public function __wakeup()
    {
        $this->connect();
    }


}