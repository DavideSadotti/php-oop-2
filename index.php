<?php

class Prodotto {
    // attributi
    protected $settore_prodotto;
    protected $nome_prodotto;
    protected $codice_prodotto;
    protected $descrizione_articolo;
    protected $prezzo_prodotto;
    protected $immagine_prodotto;
    protected $anno_produzione;

    // costruttore
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
        foreach($this as $key => $value){
            echo '<li>' . $key . ' = ' . $value . '</li>';
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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodotti | Informatica</title>
</head>
<body>
    <p><?php echo $matePro->getSmartphone(); ?></p>
</body>
</html>