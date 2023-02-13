<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-AU">
<head>
<title>ProgrammerGnome's website</title>
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="screen-2.css" media="screen" title="Gila (screen)" />
</head>
<body>
<!-- For non-visual user agents: -->
<div id="top"><a href="#main-copy" class="doNotDisplay doNotPrint">Skip to main content.</a></div>
<!-- ##### Header ##### -->
<div id="header">
  <h1 class="headerTitle"> <center><a href="#">Programmer<span>Gnome</span></a><center> </h1>
  <div class="subHeader"> <span class="doNotDisplay">Navigation: </span> <a href="index.php">Kezdőlap</a> | <a href="matematika.html">Matematika</a> | <a href="programozas.html">Programozás</a> | <a href="linux.html">Linux</a> | <a href="krealmanyok.html">Kreálmányok</a> | <a href="forum.php">Fórum</a> </div>
</div>

<!-- ##### Main Copy ##### -->
<div id="main-copy">
  <h1 id="introduction" style="border-top: none; padding-top: 0;">Alapvető információk eme fórumról</h1>
  <p>Amennyiben kedved lenne releváns kérdést feltenni, azt úgy itt teheted meg.<p>
  <h1 id="cross-browser">Fórumbejegyzés írása</h1><br>


<form action="index.php" method="post">
  Név (max. 25 karakter):<br>
  <input type="text" name="firstname" maxlength="25" size="25%" value=""><br>
  E-mail cím, mely nyílvánosan nem lesz látható:<br>
  <input type="email" name="email" value=""><br>
  Szöveg (max. 1000 karakter):<br>
  Javasoljuk, hogy előbb máshol írd meg üzenetedet, s ide csak másold be.<br>
  <input type="text" name="lastname" maxlength="1000" size="25%" value=""><br><br>
  <input type="submit" value="Közzététel"><br><br>
</form>


<?php
if (!file_exists("data")) {
    echo "The file from above cannot be found!";
    exit;
}

$fp = fopen("data", "r");

if (!$fp) {
    echo "File cannot be opened";
    exit;
}

// a bit of styling...
echo <<<EOF
<style><center>
table, td, th {
  table-layout: fixed;
  width: 75%;
  border-collapse: collapse;
  border: 3px solid black;
  text-align: left;
}
<center></style>
EOF;

$count = 0;
$cols = 1; // the number of data items per row
echo '<table>'; // open table
// render headers
echo '<tr><th>EDDIGI FÓRUMBEJEGYZÉSEK</th></tr>';
echo '<tr>'; // open first row
while(!feof($fp))
{
    if($count < $cols) {
        $info = fgets($fp);
        echo "<td>$info</td>"; // render data item
        $count++;
    } else {
        $count = 0; // reset counter
        echo '</tr><tr>'; // close current row, start new row
    }
}
echo "</tr></table>"; // close final row, close table
fclose($fp); // close file handle
?>


<p><br><br><br> <center>Köszönöm, hogy gondolataiddal megtisztelted weboldalam.</center></p>

<!-- ##### Footer ##### -->
<div id="footer">
  <div class="doNotPrint">
  <div> Copyright &copy; 2023, ProgrammerGome's website <br>
    Modified on 2023-02-05 by Márk Király</div>
</div>
</body>
</html>