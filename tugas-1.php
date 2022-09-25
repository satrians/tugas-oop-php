<?php

class product
{

    public $name = "DVD", $price = 20000, $discount;

    //methode product
    function getPrice()
    {
    }
    function setPrice()
    {
        return $this->price;
    }
    function getName()
    {
    }
    function setName()
    {
        return $this->name;
    }

    function getDiscount()
    {
    }
    function setDiscount()
    {
        return $this->discount;
    }
}

// Inheritance
class CDMusic extends Product
{
    public $artist = "Mozaik",
        $genre = "classical";

    public function setArtist()
    {
        return "Artist = " . $this->artist;
    }

    public function setGenre()
    {
        return "Genre = " . $this->genre;
    }

    public function setName()
    {
        return "Name = " . $this->name;
    }

    public function setPrice()
    {
        return "Price + 10% = Rp" . $this->price + $this->price * 0.1;
    }
    public function setDiscount()
    {
        return "Discount 5% = Rp " . $this->price * 0.05;
    }
    public function total()
    {
        return "Total Price = " . $this->price + $this->price * 0.1 - $this->price * 0.05;
    }
}
echo "CDMusic </br>";
$product = new CDMusic();
echo $product->setName() . "</br>";
echo $product->setArtist() . "</br>";
echo $product->setGenre() . "</br>";
echo $product->setPrice() . "</br>";
echo $product->setDiscount() . "</br>";
echo $product->total() . "</br>";
echo "</br>";

class CDRock extends product
{
    public $capacity = "5",
        $model = "The Pretty Reckles";

    public function setCapacity()
    {
        return "capacity = " . $this->capacity;
    }

    public function setModel()
    {
        return "Model = " . $this->model;
    }

    public function setName()
    {
        return "Name = " . $this->name;
    }

    public function setPrice()
    {
        return "Price + 15% = " . $this->price + $this->price * 0.15;
    }

    public function setDiscount()
    {
        return "Dsicount 0% = " . $this->discount;
    }

    public function total()
    {
        return "Total Price = " . $this->price + $this->price * 0.15 - $this->discount;
    }
}

echo "CDRock </br>";
$product = new CDRock;
echo $product->setName() . "</br>";
echo $product->setCapacity() . "</br>";
echo $product->setModel() . "</br>";
echo $product->setPrice() . "</br>";
echo $product->setDiscount() . "</br>";
echo $product->total() . "</br>";
