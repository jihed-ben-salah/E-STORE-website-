<?php

class panier{
     private $DB;
    public function __construct($DB){
        if(!isset($_SESSION)){
        session_start();
        }
    
    if(!isset($_SESSION['panier'])){
        $_SESSION['panier'] = array();
    }
    $this->DB =$DB;
}
public function add($produit_id){
    if(isset($_SESSION['panier'][$produit_id])){
        $_SESSION['panier'][$produit_id] ++;
    }else{
        $_SESSION['panier'][$produit_id] = 1;
    }
}
public function del($produit_id){
    unset($_SESSION['panier'][$produit_id]);
}
public function total(){
    $total =0;
    $ids = array_keys($_SESSION['panier']);
                  if(empty($ids)){
                   
                  $produitss = array();
                  }else{
                    $produits = $this->DB->query('SELECT * FROM produit WHERE idP IN('. implode(',',$ids).')');
                   
                   $produitss =json_decode(json_encode($produits) , true);
                  }
                  foreach($produitss as $produitt)
                    {$total += $produitt['tarifPP'] * $_SESSION['panier'][$produitt['idP']];}
                    return $total;
}
}
?>