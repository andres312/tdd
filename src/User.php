<?php

namespace App;

class User
{
    public $nombre;
    protected $password;

    public function __construct($nombre, $password = 'defaultPassword')
    {
        $this->nombre = $nombre;
        $this->password = $password;
    }
}