<?php

class Smartphone extends Prodotto{
    // attributi
    public $marca_prodotto;
    public $grandezza_schermo;
    public $memoria_prodotto;
    public $batteria_prodotto;

    // costruttore
    public function __construct(
        $_settore_prodotto,
        $_nome_prodotto,
        $_codice_prodotto,
        $_descrizione_articolo,
        $_prezzo_prodotto,
        $_immagine_prodotto,
        $_anno_produzione,
        $_marca_prodotto,
        $_grandezza_schermo,
        $_memoria_prodotto,
        $_batteria_prodotto
    ){
        parent::__construct(
            $_settore_prodotto,
            $_nome_prodotto,
            $_codice_prodotto,
            $_descrizione_articolo,
            $_prezzo_prodotto,
            $_immagine_prodotto,
            $_anno_produzione
        );

        $this->marca_prodotto = $_marca_prodotto;
        $this->grandezza_schermo = $_grandezza_schermo;
        $this->memoria_prodotto = $_memoria_prodotto;
        $this->batteria_prodotto = $_batteria_prodotto;
    }

    // metodi
    public function getSmartphone(){
        foreach($this as $value){
            echo $value;
        }
    }
}

$matePro = new Smartphone(
    'Informatica',
    'Mate 20 Pro',
    10254759665,
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam ducimus autem rerum, velit recusandae laudantium labore atque consequuntur facere modi sunt dignissimos alias culpa necessitatibus ea saepe praesentium quia nostrum.',
    500,
    'https://picsum.photos/200/300',
    2018,
    'Huawei',
    6.4,
    125,
    '24 H'
);