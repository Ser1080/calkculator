<?php

if($_POST['name']){
    $name = $_POST['name'];
}
if($_POST['tel']){
    $tel = $_POST['tel'];
}
if($_POST['email']){
    $email = $_POST['email'];
}
if($_POST['ploschad']){
    $ploschad = $_POST['ploschad'];
}
if($_POST['total_mat']){
    $total_mat = $_POST['total_mat'];
}
if($_POST['total_rab']){
    $total_rab = $_POST['total_rab'];
}
$zakaz = "ЗАКАЗ!!!";

$token = "1084305673:AAE-MwcjiMaFiSUuzCRDNTd57xT0ADe8TIU";
$chatIds = array("412269735");
$arr = array(
   $zakaz,
  'Имя:' => $name,
  'Телефон:' => $tel,
  'Email:' => $email,
  'Кол-во плит: ' => $ploschad,
  'Стоимость материала: ' => $total_mat,
  'Стоимость работ:' => $total_rab
);
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
foreach($chatIds as $chatId)
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chatId}&parse_mode=html&text={$txt}","r");
header('Location: index.php');
?>

