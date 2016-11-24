<?php
function maPremiereFonction()
{
  echo 'bravo , votre premiere fonction est magnifique';
}
function br()
{
  echo '<br />';
}
function debug($a)
{
  echo '<pre>';
  print_r($a);
  echo '</pre>';
}
function division($nmbre1,$nmbre2)
{
  $resultat = $nmbre1/$nmbre2;
  return $resultat;
}
function maj($b)
{
  $b = strtolower($b);
  $b = ucfirst($b);
  return $b;

}
function minus($string)
{
  $string = strtoupper($string);
  $string = lcfirst($string);
  return $string;
}

// portée des variables

$variables = 12;
function testVariable($dede)
{
  // global $variables on peut faire comme ceci pour dire va chercher la $variable mais a eviter !
  echo $dede;
}
// testVariable($variables);

function testVariable3($a)
{
  return $a*3;
}
function increment($a)
{
  // ou $a++ et return $a
  return ++$a;
}

function heure()
{
  echo 'il est actuellement '  . date("H :i") . ' heure';
}
function generateGroupName($a,$b)
{
  echo ucwords($a[array_rand($a)] . ' ' . $b[array_rand($b)]);
}


// fonctions formulaire strlen et tout
function verifTaille($string,$min,$max,$nommage)
{
  $error = '';
  if (!empty($string)) {
    if (strlen($string) < $min) {
      $error = 'Veuillez inscrire plus de '.$min.' caractères';
    } elseif (strlen($string) > $max) {
      $error = 'Veuillez inscrire moins de '.$max.' caractères';
    }
  } else {
    $error = 'Veuillez renseigner un ' .$nommage;
  }
 return $error;
}

function validateIcons($string)
{
if ($string == 1) {
  echo '<i class="fa fa-check" aria-hidden="true"></i>';
} else { echo '<i class="fa fa-times" aria-hidden="true"></i>';}
}

function generateRandomString($length = 30) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function is_loged() {
  if ( (!empty($_SESSION['user'])) && (!empty($_SESSION['user']['pseudo'])) && (!empty($_SESSION['user']['id'])) && (!empty($_SESSION['user']['role']))
      && (!empty($_SESSION['user']['ip'])) ) {

    $ip = $_SERVER['REMOTE_ADDR'];
    if ($ip == $_SESSION['user']['ip']) {
      return true;
    }
  }
  return false;
}

function showJson($data) {
  
  header("Content-type: application/json");
  $json = json_encode($data, JSON_PRETTY_PRINT);
  if ($json) {
    die($json);
  } else {
    die("error in json encoding");
  }

}


 ?>
