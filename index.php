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
     ?>
  </body>
</html>
