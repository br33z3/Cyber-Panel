<?php

$domain=$_POST['domain'];
$python = 'python';
$pyscript = ' YOUR EXACT LOCATION WHERE DNSDUMPSTER API EXAMPLE IN YOUR COMPUTER ';


if(isset($_POST['cikti'])) {



}
$cmd = "$python $pyscript";
$output = shell_exec("$python $pyscript $domain");


echo "<pre>$output</pre>";




?>
<button id="save-btn" onclick="saveTextAsFile()" >CIKTI AL</button>
