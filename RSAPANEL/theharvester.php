<?php

$domain=$_POST['domain'];
$python = 'python';
$pyscript = 'YOUR EXACT LOCATION WHERE HARVESTER PY EXAMPLE IN YOUR COMPUTER -l 10 -b all -d ';


if(isset($_POST['cikti'])) {



}
$cmd = "$python $pyscript";
$output = shell_exec("$python $pyscript $domain");


echo "<pre>$output</pre>";




?>
<button id="save-btn" onclick="saveTextAsFile()" >CIKTI AL</button>
