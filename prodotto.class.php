<?php

class Prodotto {
    protected $settore_prodotto;
    protected $nome_prodotto;
    protected $codice_prodotto;
    protected $descrizione_articolo;
    protected $prezzo_prodotto;
    protected $immagine_prodotto;
    protected $anno_produzione;

    public function __construct(
        $_settore_prodotto, 
        $_nome_prodotto, 
        $_codice_prodotto, 
        $_descrizione_articolo, 
        $_prezzo_prodotto, 
        $_immagine_prodotto, 
        $_anno_produzione
    ){
        $this->settore_prodotto = $_settore_prodotto;
        $this->nome_prodotto = $_nome_prodotto;
        $this->codice_prodotto = $_codice_prodotto;
        $this->descrizione_articolo = $_descrizione_articolo;
        $this->prezzo_prodotto = $_prezzo_prodotto;
        $this->immagine_prodotto = $_immagine_prodotto;
        $this->anno_produzione = $_anno_produzione;
    }
}