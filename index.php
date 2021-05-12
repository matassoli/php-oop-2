<?php

class Prodotto
{
    public $nome;
    public $prezzo;
    public $descrizione;

    public function __construct($_nome, $_prezzo, $_descrizione)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->descrizione = $_descrizione;
    }
}

class Smartphone extends Prodotto
{
    public $marca;
    public $memoria;

    public function __construct($_nome, $_prezzo, $_descrizione, $_marca, $_memoria)
    {
        parent::__construct($_nome, $_prezzo, $_descrizione);
        $this->marca = $_marca;
        $this->memoria = $_memoria;
    }
}

$cuffiebt = new Prodotto ("Cuffie Bluetooth", 20, "Descrizione");

$samsungS20 = new Smartphone("Samsung Galaxy S20", 599, "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "Samsung", "80Gb");

$samsungS21 = new Smartphone("Samsung Galaxy S21", 1.199, "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "Samsung", "120Gb");


?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <title>OOP</title>
  </head>
  <body>
    <h1><?php echo $samsungS21->nome ?></h1>
    <ul>
      <li><?php echo $samsungS21->prezzo." €" ?></li>
      <li><?php echo $samsungS21->descrizione; ?></li>
      <li><?php echo $samsungS21->marca ?></li>
      <li><?php echo $samsungS21->memoria; ?></li>
    </ul>
    <h1><?php echo $samsungS20->nome ?></h1>
    <ul>
      <li><?php echo $samsungS20->prezzo." €" ?></li>
      <li><?php echo $samsungS20->descrizione; ?></li>
      <li><?php echo $samsungS20->marca ?></li>
      <li><?php echo $samsungS20->memoria; ?></li>
    </ul>
    <h1><?php echo $cuffiebt->nome ?></h1>
    <ul>
      <li><?php echo $cuffiebt->prezzo." €" ?></li>
      <li><?php echo $cuffiebt->descrizione; ?></li>
    </ul>
  </body>
</html>
