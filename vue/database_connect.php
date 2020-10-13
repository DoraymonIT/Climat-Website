<?php
  try {
    $base = new PDO('mysql:host=db4free.net; dbname=climat;port=3306', 'climat', 'Q$B8ZbGs_mPRe.8');
  //  echo ("Bien Connecte");

}
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
  }
  return $base;

  ?>
<!-- Q$B8ZbGs_mPRe.8

climat

est db4free.net et le port est 3306. -->