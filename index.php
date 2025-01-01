<?php 

require_once 'src/HelloInterface.php';
require_once 'src/Hello.php';

$hello = new Silarhi\Hello();

echo $hello->display();
echo "The project has been completed";
echo "Learned some new things"

?>