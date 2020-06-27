<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<link rel="stylesheet" type="text/css" href="css/sty.css" />

	<title>Калькулятор расчета стоимости фасадной системы полифасад:</title>
</head>

<body>

<?php require_once("include/cena_job.php")?>
<?php require_once("include/cena_materialov.php")?>
<?php require_once("include/rashod_materiala.php")?>


<?php 
$host = 'localhost'; // адрес сервера 
$database = 'utb'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль


if(isset($_POST['m2']) && isset($_POST['v']) && isset($_POST['u']) && isset($_POST['tip_pl']) && isset($_POST['tip_pok'])){
 
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

// экранирования символов для mysql
    $m2 = htmlentities(mysqli_real_escape_string($link, $_POST['m2']));
    $v = htmlentities(mysqli_real_escape_string($link, $_POST['v']));
    $u = htmlentities(mysqli_real_escape_string($link, $_POST['u']));
    $p1 = htmlentities(mysqli_real_escape_string($link, $_POST['tip_pl']));
    $pok = htmlentities(mysqli_real_escape_string($link, $_POST['tip_pok']));
    
 
$query ="INSERT INTO calculator VALUES(NULL, '$m2', '$v', '$u', '$p1', '$pok')";

// выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        $info = "<span style='color:green;'>Данные добавлены</span>";
    }
    // закрываем подключение
    mysqli_close($link);
     
// закрываем подключение


}


?>



<div class="main">
<div class="container">
<span class="name_menu">Калькулятор расчета стоимости фасадной системы полифасад:</span>
<form action="index.php" method="POST">
<div class="param">
<div class="m2">
<?php 
$m2 = @$_POST['m2'];
if($m2==''){echo "<p style='color: red;'>Укажите метраж фасада:";}
else {echo "<p style='color: green;'>Укажите метраж фасада:";}
?>
    <input type="text" name="m2" id="m2" placeholder="<?php 
                                                 $m2 = @$_POST['m2'];
                                                 if($m2==''){echo 'Укажите метраж фасада М2:';}
                                               else {echo $m2;}
                                               ?>" /></p> 
</div>
<div class="v">
<?php
$v = @$_POST['v'];
if($v==''){echo "<p style='color: red;'>Укажите высоту фасада:";}
else {echo "<p style='color: green;'>Укажите высоту фасада:";}
?> 
    <input type="text" name="v" id="v" placeholder="<?php
                                                 $v = @$_POST['v'];
                                                 if($v==''){echo 'Укажите высоту фасада:';}
                                                 else echo $v;?>" /></p>
</div>
<div class="u">
<?php
$u = @$_POST['u'];
if($u==''){echo "<p style='color: red;'>Укажите кол-во углов:";}
else {echo "<p style='color: green;'>Укажите кол-во углов:";}
?>     
   <input type="text" name="u" id="u" placeholder="<?php
                                                  $u = @$_POST['u'];
                                                  if($u==''){echo 'Укажите кол-во углов:';}
                                                  else echo  $u; ?>" /></p>
</div>
</div>


<div class="tip_plitu">
<div class="tp">
<?php $pl = @$_POST['tip_pl'];
     if ($pl==''){echo " <p style='color: red;'>Тип плиты:</p>"; }
     if ($pl=='0'){echo " <p style='color: red;'>Тип плиты:</p>"; }
     if ($pl=='1'){echo " <p style='color: green;'>Тип плиты:</p>"; }
     if ($pl=='2'){echo " <p style='color: green;'>Тип плиты:</p>"; }
     if ($pl=='3'){echo " <p style='color: green;'>Тип плиты:</p>"; }
     ?>
</div>
<div class="tp_img"><?php $pl = @$_POST['tip_pl'];
     if ($pl==''){echo "<img src='images/logo.png'/>"; }
     if ($pl=='0'){echo "<img src='images/logo.png'/>"; }
     if ($pl=='1'){echo "<img src='images/koroed.png'/>"; }
     if ($pl=='2'){echo "<img src='images/koroed.png'/>"; }
     if ($pl=='3'){echo "<img src='images/kolotyu.png'/>"; }
?></div>
<div class="tp_select">
      <select class="tip_pl" name="tip_pl">
      
         <option  value="0" ><?php $pl = @$_POST['tip_pl'];
                            if($pl==''){echo 'Выберите тип:';}
                            if($pl=='0'){echo 'Выберите тип:';}
                            if($pl=='1'){echo '400x600';}
                            if($pl=='2'){echo '333x666';}
                            if($pl=='3'){echo '250x500';}?></option>
         <option value="1">400x600</option>
         <option value="2">333x666</option>
         <option value="3">250x500</option>
      </select>
</div>
</div>

<div class="tip_pokraski">


<?php $pok = @$_POST['tip_pok'];
      if ($pok==''){echo "<p style='color: red;'>Тип покраски:</p>"; }
      if ($pok=='0'){echo "<p style='color: red;'>Тип покраски:</p>"; }
      if ($pok=='1'){echo "<p style='color: green;'>Тип покраски:</p>"; }
      if ($pok=='2'){echo "<p style='color: green;'>Тип покраски:</p>"; }
      ?>

      <select class="" name="tip_pok">
         <option value="0" ><?php $pok = @$_POST['tip_pok'];
                            if($pok==''){echo 'Выберите тип:';}
                            if($pok=='0'){echo 'Выберите тип:';}
                            if($pok=='1'){echo 'Покраска обычная';}
                            if($pok=='2'){echo 'Покраска с выделением швов';}?></option>
         <option value="1">Покраска обычная</option>
         <option value="2">Покраска с выделением швов</option>
      </select><br /><br /><br />
</div>

<div class="clr"></div>

    <button type="submit" name="button" class="button">Расчитать</button><br /><br />
</form>
</div>
<div class="info"><?php echo $info ?></div>
<?php print_r($_POST);?>
<!-- Стоимость материалов --> 
<div class="st">

<div class="material_name">
<span>Расчет системы по вашим данным</span>
<div class="material">

<p>Ваш метраж:<span>   <?php echo @$m2; ?></span>  м2</p>
<p>Тип плиты:<span></span></p>
<p>Кол-во угловых элементов:<span></span></p>
<p>Кол-во оконых откосов:<span></span></p>
<p>Тип покраски:<span></span></p>
<p>Плита фото:<span><img src="images/koroed.png" /></span></p>



</div>
</div>



      
<div class="material_name">
<span>Стоимость материала:</span>
<div class="material">
<p class="stm">Стоимость термоплиты: <span><?php $st = @$_POST['tip_pl'];
            if ($m2>'0'){if($st=='0'){echo '0';}
                         if($st=='0'){@$st2="<a class='er'>Выберите Тип плиты:</a>";}
                         if($st=='1'){@$st1=$m2*$cena_plit_kirpich; echo $st1;}
                         if($st=='2'){@$st1=$m2*$cena_plit_kirpich; echo $st1;}
                         if($st=='3'){@$st1=$m2*$cena_plit_rvaniy; echo $st1;}}
            else {echo 0;}?></span> грн.     <?php echo @$st2; ?></p>
             
<p class="stm">Стоимость углов: <span></span> грн.</p>
<p class="stm">Клей для термопанелей 25 кг: <span><?php @$cekl_kg=($m2*$rashod_kley)/25; @$kl_kg=ceil($cekl_kg); echo @$kl_kg ?></span> шт.
<span><?php @$kl_cena=@$kl_kg*$cena_kley; echo @$kl_cena;?></span>   грн.</p>
<p class="stm">Дюбель зонт 10х160: <span></span> грн.</p>
<p class="stm">Герметик: <span></span> грн.</p>
<p class="stm">Грунтовка: <span><?php @$cegrunt_l=$m2*$rashod_gryntovki; @$grunt_l=ceil($cegrunt_l); echo @$grunt_l; ?> </span>л.
 <span><?php @$grunt_cena=$grunt_l*$cena_gryntovka; echo @$grunt_cena; ?></span> грн.</p>
<p class="stm">Краска: <span><?php @$cekraska_kg=$m2*$rashod_kraski; @$kraska_kg=ceil($cekraska_kg); echo @$kraska_kg;?> </span>кг.
<span><?php @$kraska_cena=$kraska_kg*$cena_kraska; echo @$kraska_cena; ?></span> грн.</p>
<p class="stm">Приоконный профиль: <span></span> грн.</p>

<p class="stm">ИТОГО: <span><?php @$itogo_material=@$st1+@$kl_cena+@$grunt_cena+@$kraska_cena; echo @$itogo_material;?></span> грн.</p>
<p class="stm">ИТОГО: <span><?php @$itogo_material_m=@$itogo_material/@$m2; echo @$itogo_material_m;?></span> грн.</p>
</div>
</div>


<!-- Стоимость работ -->

<div class="material_name">

<span>Стоимость работ:</span>
<div class="material">
<p class="stm">Монтаж плиты: <span><?php @$mp=$m2*$smp; echo $mp?></span> грн.</p>
<p class="stm">Монтаж углов: <span><?php ?></span> грн.</p>
<p class="stm">Герметизация швов: <span><?php @$gch=@$_POST['tip_pl']; 
                if ($m2>'0'){if ($gch=='0'){$gch1=$m2*$sgshk; echo $gch1;}
                            if ($gch=='1'){$gch1=$m2*$sgshk; echo $gch1;}
                            if ($gch=='2'){$gch1=$m2*$sgshk; echo $gch1;}
                            if ($gch=='3'){$gch1=$m2*$sgsh; echo $gch1;}}
                else {echo '0';}
                              ?></span> грн.</p>
<p class="stm">Покраска: <span><?php $p=@$_POST['tip_pok'];
          if($m2>'0'){if($p=='0'){echo '0';}
          if($p=='0'){$er="<a class='er'>Выберите Тип покраски:</a>";}
          if($p=='1'){@$p1=$m2*$sp; echo $p1;} 
          if($p=='2'){@$p1=$m2*$spsh; echo $p1;}}
          else {echo 0;}?></span> грн.     <?php echo @$er;?></p>
<p class="stm">Устройство откосов: <span></span> грн.</p>

<p class="stm">ИТОГО: <span><?php @$ir=@$mp+@$gch1+@$p1; echo @$ir;?></span> грн.</p>
<p class="stm">ИТОГО: <span><?php @$irm=@$ir/@$m2; echo @$irm;?></span> грн.</p>
</div>
</div>
<div class="clr"></div>
</div>




</div>
</body>
</html>