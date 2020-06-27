<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta name="viewport" content="width=device-width, initial-scale= 0.5" />
	<link rel="stylesheet" type="text/css" href="css/st34.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 
    

    

	<title>Калькулятор расчета стоимости фасадной системы полифасад:</title>
</head>

<body>


<div></div>

<?php require_once("include/cena_job.php")?>
<?php require_once("include/cena_materialov.php")?>
<?php require_once("include/rashod_materiala.php")?>



<?php require_once("js/calculator.js")?>

 




<div class="main">
<div class="container">

<div class="name_menu">Калькулятор расчета стоимости фасадной системы полифасад:</div>
<div class="name">
<div class="name-name"><label><b>Введите ваше имя: </b></label><input type="text" name="name" id="name1" class="name-input" placeholder="Ваше Имя" /></div>
<div class="name-tel"><label><b>Введите ваш телефон: </b></label><input type="text" name="tel" id="tel1" class="name-input" placeholder="+38044 444-44-44" /></div>
<div class="name-email"><label><b>Введите ваш E-mail: </b></label><input type="text" name="email" id="email1" class="name-input" placeholder="info@utb.com.ua" /></div>
<div class="clr"></div>

</div>

<div class="param">
<p>Укажите:</p>
<div class="m2"><label>Метраж фасада: </label><input type="text" min="0" name="m2" id="m2" class="param-input"  placeholder="Метраж м2:" /></div>
<div class="v"><label>Высоту фасада: </label><input type="text" name="v" id="v" class="param-input" placeholder="Высота фасада:" /></div>
<div class="u"><label>Кол-во углов: </label><input type="text" name="u" id="u" class="param-input" placeholder="Кол-во углов:" /></div>
<div class="o"><label>Кол-во оконых/дверных проемов: </label><input type="text" name="o" id="o" class="param-input" placeholder="Кол-во проемов:" /></div>
</div>


<div class="tip_plitu">



<img src="" id="imgl"/>



<div class="tp"></div>
<div class="tp_img">
<div class="modelImg" id="model-1"> <!-- id идентефикатор нужного изображения выбраного в селекте  -->
  <img  src="images/gladkiy.png" alt="Модель 1" />
</div>
<div class="modelImg"  id="model-2">
  <img src="images/koroed.png" alt="Модель 2" />
</div>
<div class="modelImg"  id="model-3">
  <img src="images/kolotiykir.png" alt="Модель 3" />
</div>
<div class="modelImg"  id="model-4">
  <img src="images/peschanik.png" alt="Модель 4" />
</div>
<div class="modelImg"  id="model-5">
  <img src="images/scalniy.png" alt="Модель 5" />
</div>
<div class="modelImg"  id="model-6">
  <img src="images/rimskay.png" alt="Модель 6" />
</div>
<div class="modelImg"  id="model-7">
  <img src="images/schepa.png" alt="Модель 7" />
</div>
<div class="modelImg"  id="model-8">
  <img src="images/kolotyu.png" alt="Модель 8" />
</div>
<div class="modelImg"  id="model-9">
  <img src="images/travertin.png" alt="Модель 9" />
</div>
<div class="modelImg"  id="model-10">
  <img src="images/rust.png" alt="Модель 10" />
</div>


</div>
<div class="tp_select"><label>Тип плиты:</label>
      <select id="tip_pl">
         <option value="0">Выберите тип плиты:</option>
         <option value="1" data="#model-1">Гладкий кирпич</option>
         <option value="2" data="#model-2">Кирпчик короед</option>
         <option value="3" data="#model-3">Кирпич колотый</option>
         <option value="4" data="#model-4">Песчанник колотый</option>
         <option value="5" data="#model-5">Скальный камень</option>
         <option value="6" data="#model-6">Римская кладка</option>
         <option value="7" data="#model-7">Щепа</option>
         <option value="8" data="#model-8">Колотый камень</option>
         <option value="9" data="#model-9">Травертин</option>
         <option value="10" data="#model-10">Руст</option>
      </select>
</div>
</div>

<div class="tip_pokraski"><label>Тип покраски:</label>
      <select id="tip_pok">
         <option value="1">Покраска с выделением швов</option>
         <option value="2">Покраска обычная</option>
      </select>
</div>

<div class="plita-tol"><p>Толщина пенопласта:</p>
        <select id="tol_pen">
            <option value="1">100 mm</option>
            <option value="2">50 mm</option>
        </select>
</div>


<div class="clr"></div>

<button class="button" onclick="raschitat();" >Расчитать</button>

</div>



<!-- Стоимость материалов --> 
<div class="st">
<form action="test.php" method="POST">
<div class="zakaz_name">
<div class="zakaz_name_name"><span>Ваши параметры:</span></div>

<div class="zakaz_name1">
<div class="sr"><div class="str"><p>Ваше имя:</p></div><div class="strr"><div id="na" ></div></div><div class="clr"></div></div>
<div class="sr"><div class="str"><p>Ваше телефон:</p></div><div class="strr"><div id="te" ></div></div><div class="clr"></div></div>
<div class="sr"><div class="str"><p>Ваше E-mail:</p></div><div class="strr"><div id="emaill" ></div></div><div class="clr"></div></div>
<div class="sr"><div class="str"><p>Ваш метраж:</p></div><div class="strr"><div id="area" ></div></div><div class="clr"></div></div>
<div class="sr"><div class="str"><p>Тип плиты:</p></div><div class="strr"><div id="tip_pl_text"></div></div><div class="clr"></div></div>
</div>

<div class="zakaz_name2">
<div class="sr"><div class="str"><p>Высота:</p></div><div class="strr"><div id="height"></div></div><div class="clr"></div></div>
<div class="sr"><div class="str"><p>Кол-во углов:</p></div><div class="strr"><div id="angle" ></div></div><div class="clr"></div></div>
<div class="sr"><div class="str"><p>Кол-во откосов:</p></div><div class="strr"><div id="otkos"></div></div><div class="clr"></div></div>
<div class="sr"><div class="str"><p>Тип покраски:</p></div><div class="strr"><div id="tip_pok_text"></div></div><div class="clr"></div></div>
<div class="sr"><div class="str"><p>Толщина пенопласта:</p></div><div class="strr"><div id="tolchina_penoplasta"></div></div><div class="clr"></div></div>
</div>

<div class="zakaz_name3">
  Большое фото )))) Тип плиты

</div>


<div class="clr"></div>
</div>



<div class="material_kol">
<span>Количество материалов:</span>
<div class="material">
<div class="sr"><div class="str"><p>Термоплита:</p></div><div class="strr"><div id="ploschad"></div><p>м2.</p></div><div class="clr"></div></div>
<div class="sr"><div class="str"><p>Клей для термоплиты:</p></div><div class="strr"><div id="col_kley"></div><p>меш.</p></div><div class="clr"></div></div>
<div class="sr"><div class="str"><p>Клей пена:</p></div><div class="strr"><div id="cena_krask"></div><p>грн.</p></div><div class="clr"></div></div>
<div class="sr"><div class="str"><p>Дюбель зонт 10х160:</p></div><div class="strr"><div id="col_dupel"></div><p>шт.</p></div><div class="clr"></div></div>
<div class="sr"><div class="str"><p>Герметик:</p></div><div class="strr"><div id="col_germetika"></div><p>шт.</p></div><div class="clr"></div></div>
<div class="sr"><div class="str"><p>Грунтовка:</p></div><div class="strr"><div id="col_gruntovka"></div><p>м2.</p></div><div class="clr"></div></div>
<div class="sr"><div class="str"><p>Краска:</p></div><div class="strr"><div id="col_kraska"></div><p>грн.</p></div><div class="clr"></div></div>
<div class="sr"><div class="str"><p>Приоконный профиль:</p></div><div class="strr"><div id="col_otkos"></div><p>грн.</p></div><div class="clr"></div></div>
<div class="sr"><div class="str"><p>Шпаклевка для наруж работ:</p></div><div class="strr"><div id="ploschad"></div><p>грн.</p></div><div class="clr"></div></div>
</div>
</div>



     
<div class="material_name">
<span>Стоимость материала:</span>
<div class="material">
<div class="sr"><div class="str"><p>Стоимость термоплиты:</p></div><div class="strr"><div id="stoimost_pl"></div><p>грн.</p></div><div class="clr"></div></div>
<!--<div class="sr"><div class="str"><p>Стоимость углов:</p></div><div class="strr"><div id="ploschad"></div><p>грн.</p></div><div class="clr"></div></div>-->
<div class="sr"><div class="str"><p>Клей для термопанелей:</p></div><div class="strr"><div id="cena_kley"></div><p>грн.</p></div><div class="clr"></div></div>
<div class="sr"><div class="str"><p>Дюбель зонт 10х160:</p></div><div class="strr"><div id="cena_dupel"></div><p>грн.</p></div><div class="clr"></div></div>
<div class="sr"><div class="str"><p>Герметик:</p></div><div class="strr"><div id="cena_germetika"></div><p>грн.</p></div><div class="clr"></div></div>
<div class="sr"><div class="str"><p>Грунтовка:</p></div><div class="strr"><div id="cena_gruntovka"></div><p>грн.</p></div><div class="clr"></div></div>
<div class="sr"><div class="str"><p>Краска:</p></div><div class="strr"><div id="cena_kraska"></div><p>грн.</p></div><div class="clr"></div></div>
<div class="sr"><div class="str"><p>Приоконный профиль:</p></div><div class="strr"><div id="cena_otkos"></div><p>грн.</p></div><div class="clr"></div></div><br />
<div class="sr"><div class="str"><p>ИТОГО:</p></div><div class="strr"><div id="total_mat"></div><p>грн.</p></div><div class="clr"></div></div>
</div>
</div>


<!-- Стоимость работ -->

<div class="material_job">

<span>Стоимость работ:</span>
<div class="material">
<div class="sr"><div class="str"><p>Монтаж плиты:</p></div><div class="strr"><div id="cena_rabot_pl"></div><p>грн.</p></div><div class="clr"></div></div>
<!--<div class="sr"><div class="str"><p>Монтаж углов:</p></div><div class="strr"><div id="ploschad"></div><p>грн.</p></div><div class="clr"></div></div>-->
<div class="sr"><div class="str"><p>Герметизация швов:</p></div><div class="strr"><div id="cena_rabot_germetik"></div><p>грн.</p></div><div class="clr"></div></div>
<div class="sr"><div class="str"><p>Покраска:</p></div><div class="strr"><div id="cena_job_pok"></div><p>грн.</p></div><div class="clr"></div></div>
<div class="sr"><div class="str"><p>Устройство откосов:</p></div><div class="strr"><div id="cena_rabot_otkos"></div><p>грн.</p></div><div class="clr"></div></div><br />
<div class="sr"><div class="str"><p>ИТОГО:</p></div><div class="strr"><div id="total_rab"></div><p>грн.</p></div><div class="clr"></div></div>

</div>
</div>
<div class="clr"></div>
<input type="hidden" name="name" id="name" value="" />
<input type="hidden" name="tel" id="tel" value="" />
<input type="hidden" name="email" id="email" value="" />
<input type="hidden" name="ploschad" id="ploschad" value="" />
<input type="hidden" name="total_mat" id="total_mat" value="" />
<input type="hidden" name="total_rab" id="total_rab" value="" />
<button type="submit" class="button_php" >Выполнить расчет</button>
</form>    
</div>



</div>
</body>
</html>