<?php 

require_once 'src/HelloInterface.php';
require_once 'src/Hello.php';

$hello = new Silarhi\Hello();

echo $hello->display();
echo "<br>";
echo "The project has been completed<br>";
echo "Learned some new things<br>";

?>
