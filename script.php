<?php
$rows = $_POST ['number1'];
$col = $_POST ['number2'];
 
echo '<table border="1">';

for ($tr=1; $tr<=$rows; $tr++){ 
    echo '<tr>';
    for ($td=1; $td<=$col; $td++){ 
                                    
        echo '<td>'. $tr*$td .'</td>';
    }
    echo '</tr>';
}

echo '</table>';
?>