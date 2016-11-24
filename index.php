<?php
include 'inc/fonctions.php';

$fp         = fopen('data/compteur.txt', 'r+');
$nbvisite   = fgets($fp, 11);
$nbvisite   = $nbvisite+1;
echo $nbvisite;
fseek($fp, 0);
fwrite($fp, $nbvisite);
fclose($fp);

$personnes   = array('jeremy', 'thibault', 'gautier', 'killian', 'hermelen', 'jessy', 'benoit', 'mathieu', 'benjamin', 'jerry-lee');
$fh          = fopen('data/output.txt', 'w+');
$personne    = implode(', ' , $personnes);
fwrite($fh, $personne);
fclose($fh);

rename('data/output.txt', 'data/output.csv');

$ls = fopen('data/output.csv', 'r');
$response = fgetcsv($ls, filesize('data/output.csv'));
debug($response);

$lg = fopen('data/log.txt', 'w+');

if (!empty(file_exists('data/log.txt'))) {
  fwrite($lg, date('Y-m-d G:i:s') . ' accès au fichier files.php' . PHP_EOL);
}
fclose($lg);

$content = 'test';
$lg = fopen('data/log.txt', 'a');
fwrite($lg , $content);
fclose($lg);

$filename = 'data/log.txt';
if (is_readable($filename)) {
    echo 'Le fichier est accessible en lecture.';
} else {
    echo 'Le fichier n\'est pas accessible en lecture !';
}

$log_content = fopen('data/log.txt', 'r');
fclose($log_content);
br();
echo $log_content;

$unix = 'data/log_' . time() . '.txt';
rename('data/log.txt', $unix);
$log = fopen($unix, 'r+');
fclose($log);
copy($unix, 'data/yo.txt');

if (is_dir('nombres')) {
} else {
  mkdir('nombres');
}
br();
$doss = is_dir('nombres');
echo $doss;

for ($i=1; $i <= 100 ; $i++) {
  if ($i % 2 == 0) {
    $php =  'bla' . $i . '.php';
    if (!file_exists($php)) {
      fopen('nombres/' . $php, 'w+');
    }
  } else {
    $html = 'bla' . $i . '.html';
    if (!file_exists($html)) {
      fopen('nombres/' . $html, 'w+');
    }
  }

}

unlink('nombres/bla66.php');

// $youtube = file_get_contents('https://www.youtube.com/?hl=fr&gl=FR');
// echo $youtube;
echo realpath($unix);
br();
echo filesize($unix);
br();


include 'inc/header.php';
?>


<?php
include 'inc/footer.php';
?>
