<?php
class Form{
    
    private $data;
    public $tag ='a'; 
    


public function __construct($data = array()){

    

    $this->data =$data;

}
private function tag($cont) {

    return "<{$this->tag}>$cont</{$this->tag}>";


}

private function getValue($index){


    return isset($this->data[$index]) ? $this->data[$index] : null;
}

public function input($nom){


   return $this->tag('<input type="text" name="' . $nom. '"value= Connexion'.'>');

}

public function submit(){
 
   return $this->tag('<button type="submit">Se connecter </button>');

}

}


?>