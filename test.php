<?php 
$python = '' . ' '; // boşluğa python konumu eklenmeli
$comment = 'Çok iyi'; // test edilecek yorum
$output = shell_exec("$python tahmin_edici.py $comment ");
echo "<pre>$output</pre>";
?>
