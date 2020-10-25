<?php

$aantalProd = null;
$productnummer = null;
$product = [
    ["appel", 1, 0.25],
    ["peer", 2, 0.30],
    ["banaan",3,0.60],
    ["kersen",4,0.64],
    ["cola",5,1.23],
    ["chips",6,1.51],
    ["chocola",7,1.49],
    ["cornflakes",8,2.12],
    ["melk",9,1.50],
    ["kaas",10,1.00],
];

$producten = array("appel", "peer");
$prijs = array(0.25,0.30);

function getInput()
{
    $input = $_GET ['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo var_dump($input);

}


function getProductNr()
{
    global $productnummer;
    $productnummer = $_GET ['productnummer']?? 'vul een productnummer in!';
    echo $productnummer;
}

function getAmount()
{
    global $aantalProd;
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    echo $aantalProd;
}

function getAge()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    echo $leeftijd;
}




function getKorting(){
    $leeftijd= $_GET['leeftijd'];
    switch ($leeftijd) {
        case 19:
            echo "0,19";
            break;
        case 18:
            echo "0,18";
            break;
        case 17:
            echo "0,17";
            break;
        case 16:
            echo "0,16";
            break;
        case $leeftijd < 16:
            echo "1,00";
            break;
        default:
            echo "uw korting";

    }
}
function getTotal() {
    global $productnummer;
    global $product;
    global $aantalProd;
    echo  $product[$productnummer-1][2] * $aantalProd;

}

?>  