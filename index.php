<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP store</title>
  </head>
  <body>
    <?php
    //using the two horwards slashes we create a comment in php
    //within the php tag, we can also insert values into our html
    $name = "PHP store";
    $credit = 1000;
    echo "Welcome back in ".$name."!";
    echo "Your amount of credits are ".$credit;
    $product['Computer'] = 750;
    $product['Car'] = 15000;
    $product['Iphone'] = 1000;
    $product['Toaster'] = 75;
    foreach ($product as $key => $value) {
      echo "<p>the ".$key." costs ".$value."</p>";
    }
    echo "the items you can afford too";
    foreach ($product as $key => $value) {
      if ($credit >= $value) {
        echo "<br>".$key;
      }
    }
    //calculate an immaginary tax, totally disconnected from the previous exercize
    //$amount = 800;
    //$taxrate = 0.0825;
    //$addedtax = $amount*$taxrate;
    //echo "<br>";
    //echo $addedtax;

    function tax_calc($amount,$tax){
      $calculate_tax = $amount*$tax;
      $amount = round($amount+$calculate_tax,2);
      return $amount;
    }
    echo tax_calc(750,0.223); //you should get the result now
     ?>
  </body>
</html>
