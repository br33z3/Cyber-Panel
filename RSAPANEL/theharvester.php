<?php

$domain=$_POST['domain'];
$python = 'python';
$pyscript = 'C:\Users\asus.LAPTOP-SMDU8F43\Desktop\RSAPANEL\theHarvester\theHarvester.py -l 10 -b all -d ';


if(isset($_POST['cikti'])) {



}
$cmd = "$python $pyscript";
$output = shell_exec("$python $pyscript $domain");


echo "<pre>$output</pre>";




?>
<button id="save-btn" onclick="saveTextAsFile()" >CIKTI AL</button>
