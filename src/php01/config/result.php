<?php
$company=htmlspecialchars($_POST['company'],ENT_QUOTES);
$btn=htmlspecialchars($_POST['btn'],ENT_QUOTES);
$number=htmlspecialchars($_POST['number'],ENT_QUOTES);
echo "私の名前は、".$company."<br/>";
echo "ご希望の商品は、".$btn."<br/>";
echo "注文数は、".$number;