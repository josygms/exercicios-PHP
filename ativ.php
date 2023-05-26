<?php
$num = $_GET["numero"];
for($i = 0; $i <=10; $i++){
echo "{$num * {$i}} = " . ($num * $i);
echo "{$num /  {$i}} = " . ($num / $i);
echo "{$num + {$i}} = " . ($num + $i);
echo "{$num - {$i}} = " . ($num - $i);
}
?>


    
