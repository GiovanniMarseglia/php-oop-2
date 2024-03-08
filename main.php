<?php


class product{
    public $name;
    public $prezzo;
    public $type;
    public $img;
    public $animal; 
    
    

    public function __construct($_name, $_prezzo, $_type, $_img, $_animal){

        $this->name = $_name;
        $this->prezzo = $_prezzo;
        $this->type = $_type;
        $this->img = $_img;
        $this->animal = $_animal;

    }

    
}

class food extends product{
    public $calories;
}


class game extends product{
    public $namegenre;
}





$productdata = array(
    (object) array('name' => 'Collare', 'prezzo' => '12', 'type'=>'Product', 'img'=>'https://picsum.photos/500/200','animal'=>'dog'),
    (object) array('name' => 'Crocchette 1kg', 'prezzo' => '12', 'type'=>'Food', 'img'=>'https://picsum.photos/500/200','animal'=>'dog','calories'=>'500' ),
    (object) array('name' => 'Palla da tennis', 'prezzo' => '10', 'type'=>'Game', 'img'=>'https://picsum.photos/500/200','animal'=>'cat','genre'=>'ball'),
);

$product_istance=array();


foreach($productdata as $element){



    if (isset($element->calories)) {
        $products = new food($element->name, $element->prezzo, $element->type, $element->img, $element->animal);
        $products->calories = $element->calories;
        $product_istance[] = $products;
    } else if (isset($element->genre)){

        $products = new game($element->name, $element->prezzo, $element->type, $element->img, $element->animal);
        $products->namegenre = $element->genre;
        $product_istance[] = $products;

    }else{
        $products = new product($element->name, $element->prezzo, $element->type, $element->img, $element->animal);
        $product_istance[] = $products;
    }


}







