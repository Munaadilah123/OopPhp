<?php

class User
{
    public $nama;

    public function getNama($nama)
    {
        return $this->nama = $nama;
    }
}

$user = new User;
echo $user->getNama("Kita hanya Manusia");