<?php


class product{
    public $name;
    public $prezzo;
    public $type;
    public $img;
    public $animal; 
    public $quantity;
    
    

    public function __construct($_name, $_prezzo, $_type, $_img, $_animal, $_quantity){

        $this->name = $_name;
        $this->prezzo = $_prezzo;
        $this->type = $_type;
        $this->img = $_img;
        $this->animal = $_animal;
        $this->quantity = $_quantity;

    }

    use stock;

    
}

class food extends product{
    public $calories;
}


class game extends product{
    public $namegenre;
}



trait stock{
    
    public function getQuantity($num){
        if (!is_int($num)) {
            throw new Exception('Is not a number');
            }


        if($num == 0){
        return '<i class="fa-sharp fa-solid fa-circle" style="color: #bc0b0b;"></i>';
    }elseif($num > 0 && $num < 5){
        return '<i class="fa-sharp fa-solid fa-circle" style="color: #9a9509;"></i>';
    }elseif($num > 7){
        return '<i class="fa-sharp fa-solid fa-circle" style="color: #0e8906;"></i>';
    }
}
};





$productdata = array(
    (object) array('name' => 'Collare', 'prezzo' => '12', 'type'=>'Product', 'img'=>'https://picsum.photos/500/200','animal'=>'dog','quantity'=>0),
    (object) array('name' => 'Crocchette 1kg', 'prezzo' => '12', 'type'=>'Food', 'img'=>'https://picsum.photos/500/200','animal'=>'dog','calories'=>'500','quantity'=>4 ),
    (object) array('name' => 'Palla da tennis', 'prezzo' => '10', 'type'=>'Game', 'img'=>'https://picsum.photos/500/200','animal'=>'cat','genre'=>'ball','quantity'=>10),
);

$product_istance=array();


foreach($productdata as $element){



    if (isset($element->calories)) {
        $products = new food($element->name, $element->prezzo, $element->type, $element->img, $element->animal, $element->quantity);
        $products->calories = $element->calories;
        $product_istance[] = $products;
    } else if (isset($element->genre)){

        $products = new game($element->name, $element->prezzo, $element->type, $element->img, $element->animal, $element->quantity);
        $products->namegenre = $element->genre;
        $product_istance[] = $products;

    }else{
        $products = new product($element->name, $element->prezzo, $element->type, $element->img, $element->animal, $element->quantity);
        $product_istance[] = $products;
    }


}







