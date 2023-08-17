<?php
$targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Verifică dacă fișierul este imagine sau video
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "Fișierul este o imagine sau video - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "Fișierul nu este o imagine sau video.";
    $uploadOk = 0;
  }
}

// Verifică dacă fișierul există deja
if (file_exists($targetFile)) {
  echo "Ne pare rău, fișierul există deja.";
  $uploadOk = 0;
}

// Încarcă fișierul
if ($uploadOk == 0) {
  echo "Fișierul tău nu a fost încărcat.";
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
    echo "Fișierul " . basename($_FILES["fileToUpload"]["name"]) . " a fost încărcat cu succes.";
  } else {
    echo "A apărut o eroare în timpul încărcării fișierului.";
  }
}


?>