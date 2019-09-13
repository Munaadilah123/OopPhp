<?php 

class Pegawai
{
    public function setPegawai($setPegawai)
    {
        return $this->pegawai = $setPegawai;
    }

    public function getPegawai()
{
    return $this->pegawai;
}
}

$user = new Pegawai;
echo $user->setPegawai("apa aja");
// echo $user->getPegawai();