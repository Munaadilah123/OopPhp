<?php

class Models
{
    protected $email = ["munaaa@gmail.com"];
    private $password = "pokoe lho";

    public function getPassword()
    {
        return $this->password;
    }
}
class User extends Models
{
    public function getModels()
    {
        return $this->email;
    }
}


$models = new Models;
echo $models->getPassword();

