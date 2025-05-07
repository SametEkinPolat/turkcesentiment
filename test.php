<?php 
$python = 'C:\Users\samet\AppData\Local\Programs\Python\Python313\python.exe' . ' '; // where python located
$comment = 'Çok iyi'; // comment to be predicted
$output = shell_exec("$python tahmin_edici.py $comment ");
echo "<pre>$output</pre>";
?>
