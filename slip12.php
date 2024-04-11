<?php
    if(isset($_GET['file'])) {
        $fileName = $_GET['file'];
        $filePath = "./" . $fileName; // Assuming files are in the same directory as the PHP file

        if(file_exists($filePath)) {
            $f = fopen($filePath, "r");
            echo "<table border='1'>";
            echo "<tr><th>Sr.No.</th><th>Name</th><th>Age</th><th>Mob.No</th><th>Relation</th></tr>";
            while ($row = fscanf($f, "%d %s %d %s %s")) {
                echo "<tr>";
                foreach ($row as $r) {
                    echo "<td>$r</td>";
                }
                echo "</tr>";
            }
            fclose($f);
            echo "</table>";
        } else {
            echo "File not found!";
        }
    } else {
        echo "File parameter is missing!";
    }
?>

