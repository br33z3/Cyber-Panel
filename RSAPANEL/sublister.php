<?php

$domain=$_POST['domain'];
$python = 'python';
$pyscript = 'C:\Users\asus.LAPTOP-SMDU8F43\Desktop\RSAPANEL\Sublister\sublist3r.py -d ';


if(isset($_POST['cikti'])) {



}
$cmd = "$python $pyscript";
$output = shell_exec("$python $pyscript $domain");


echo "<pre>$output</pre>";




?>
<button id="save-btn" onclick="saveTextAsFile()" >CIKTI AL</button>
