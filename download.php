<?php
$targetDir = "uploads/";

// Listează toate fișierele din directorul de încărcare
$files = scandir($targetDir);
foreach ($files as $file) {
  if ($file != "." && $file != "..") {
    echo "<a href='" . $targetDir . $file . "' download>" . $file . "</a><br>";
  }
}
?>