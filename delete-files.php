<?php
$uploadDir = "uploads/";

if (isset($_POST["delete"])) {
    if (is_dir($uploadDir)) {
        $files = glob($uploadDir . "*"); // Preia toate fișierele din director
        foreach ($files as $file) {
            if (is_file($file)) {
                unlink($file); // Șterge fiecare fișier
            }
        }
        echo "Toate fișierele au fost șterse cu succes.";
    } else {
        echo "Directorul nu există sau nu poate fi accesat.";
    }
}



echo "Acesta este un mesaj de test din delete-files.php.";

?>






