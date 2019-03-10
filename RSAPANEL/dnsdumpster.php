<?php

$domain=$_POST['domain'];
$python = 'python';
$pyscript = 'C:\Users\asus.LAPTOP-SMDU8F43\Desktop\RSAPANEL\Dnsdumpster\dnsdumpster\dnsdumpster\API_example.py ';


if(isset($_POST['cikti'])) {



}
$cmd = "$python $pyscript";
$output = shell_exec("$python $pyscript $domain");


echo "<pre>$output</pre>";




?>
<button id="save-btn" onclick="saveTextAsFile()" >CIKTI AL</button>
