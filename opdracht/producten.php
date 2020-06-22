<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php include 'includes/functions.php'; ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Title</title>
  </head>
    <form action="producten.php" method="get"><!-- dit laten staan! -->
      <?php include 'includes/menu.php'; ?>
    <p>Hieronder een lijst met producten die je bij ons kunt bestellen en de prijs per stuk:</p>
    <?php
echo "product: ". $product[0][0].", id: ".$product[0][1].", prijs/per: ".$product[0][2].".<br>";
echo "product: ". $product[1][0].", id: ".$product[1][1].", prijs/per: ".$product[1][2].".<br>";
echo "product: ". $product[2][0].", id: ".$product[2][1].", prijs/per: ".$product[2][2].".<br>";
echo "product: ". $product[3][0].", id: ".$product[3][1].", prijs/per: ".$product[3][2].".<br>"; 
echo "product: ". $product[4][0].", id: ".$product[4][1].", prijs/per: ".$product[4][2].".<br>";
echo "product: ". $product[5][0].", id: ".$product[5][1].", prijs/per: ".$product[5][2].".<br>";
echo "product: ". $product[6][0].", id: ".$product[6][1].", prijs/per: ".$product[6][2].".<br>";
echo "product: ". $product[7][0].", id: ".$product[7][1].", prijs/per: ".$product[7][2].".<br>";
echo "product: ". $product[8][0].", id: ".$product[8][1].", prijs/per: ".$product[8][2].".<br>";
echo "product: ". $product[9][0].", id: ".$product[9][1].", prijs/per: ".$product[9][2].".<br>";

?>

    <p>Vul hieronder het productnummer in van het product wat je wilt bestellen en de hoeveelheid.</p> 
    <p><label>productnummer: </label><input type="text" name="productnummer"> &nbsp;&nbsp;<label>aantal: </label><input type="text" name="aantal"></p><!-- dit laten staan! -->
    
    <p>Vul je leeftijd in voor korting</p>
    <p><label>leeftijd: </label><input type="text" name="leeftijd"></p><!-- dit laten staan! -->
    <p>voor <?php getAmount(); ?> x het product: <?php getProductNr(); ?> betaal je: <?php getTotal(); ?>  </p>
    <p>je bent <?php getAge(); ?> je korting is: <?php getKorting(); ?> </p> 
    <p><button type="submit" name="submit">Bereken totaal</button></p><!-- dit laten staan! -->
      <?php include 'includes/footer.php'; ?>
    </form><!-- dit laten staan! -->
  </body>
</html>