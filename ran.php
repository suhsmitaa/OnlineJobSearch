 <?php
require 'core.inc.php';
require 'connect.php';


 $sql = "SHOW TABLES FROM `ojs`";
        $result = mysql_query($sql);
        if (mysql_num_rows($result) > 0) {
            echo "<p>Available tables:</p>\n";
            echo "<pre>\n";
            while ($row = mysql_fetch_row($result)) {
                echo "{$row[0]}\n";
            }
            echo "</pre>\n";
        } else {
            echo "<p>The database '" . ojs . "' contains no tables.</p>\n";
            echo mysql_error();
        }

        ?>