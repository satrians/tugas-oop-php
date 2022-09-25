<?php
class BaseClass
{
    public function monyet()
    {
        echo "Monyet merupakan salah satu dari jenis Hewan,";
    }
}

class Monyet extends BaseClass
{
    function ucapan2()
    {
        echo "\n Monyet mempunyai kemampuan untuk berjalan";
    }
    function ucapan3()
    {
        echo "\n Makan dan Bersuara";
    }
    function ucapan4()
    {
        echo "\n tapi suatu saat si Monyet dilatih akan bisa Berkendara seperti naik sepeda yang tidak dipunyai oleh hewan lainnya";
    }
}

$Monyet = new monyet;
$Monyet->monyet();
$Monyet->ucapan2();
$Monyet->ucapan3();
$Monyet->ucapan4();
