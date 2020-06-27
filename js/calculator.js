<script >
function raschitat() {
    
// Переменные стоимости материала
cplk = "<?php echo $cplk;?>"
cplr = "<?php echo $cplr;?>"
cekl = "<?php echo $cekl;?>"
cedup = "<?php echo $cedup;?>"
cgrm = "<?php echo $cgrm;?>"
cgru = "<?php echo $cgru;?>"
ckra = "<?php echo $ckra;?>"
cprpr = "<?php echo $cprpr;?>"
// Переменные стоимости материала

//Переменные стоимости работ
srpl = "<?php echo $srpl;?>"
srgrk = "<?php echo $srgrk;?>"
srgr = "<?php echo $srgr;?>"
srpo = "<?php echo $srpo;?>"
srpop = "<?php echo $srpop;?>"
srotk = "<?php echo $srotk;?>"
//Переменные стоимости работ

// Оброботка типа плит
tip_pl  = document.getElementById('tip_pl').value;
switch (tip_pl) {
   case "1":
      cena = cplk;
      stoimost_rabot_germetik = srgrk;
      tippl = "Гладкий кирпич";
      break
   case "2":
      cena = cplk;
      stoimost_rabot_germetik = srgrk;
      tippl = "Кирпчик короед";
      break   
   case "3":
      cena = cplk;
      stoimost_rabot_germetik = srgrk;
      tippl = "Кирпич колотый";
      break 
   case "4":
      cena = cplk;
      stoimost_rabot_germetik = srgrk;
      tippl = "Песчанник колотый";
      break
   case "5":
      cena = cplk;
      stoimost_rabot_germetik = srgrk;
      tippl = "Скальный камень";
      break   
   case "6":
      cena = cplk;
      stoimost_rabot_germetik = srgrk;
      tippl = "Римская кладка";
      break
   case "7":
      cena = cplk;
      stoimost_rabot_germetik = srgrk;
      tippl = "Щепа";
      break
   case "8":
      cena = cplr;
      stoimost_rabot_germetik = srgr;
      tippl = "Колотый камень";
      break   
   case "9":
      cena = cplr;
      stoimost_rabot_germetik = srgr;
      tippl = "Травертин";
      break 
   case "10":
      cena = cplr;
      stoimost_rabot_germetik = srgr;
      tippl = "Руст";
      break
   default:
      cena = cplk;
      stoimost_rabot_germetik = srgrk;
      tippl = "Выберите тип плиты:";
      break
}// Оброботка типа плит



// Обработка покраски 
tip_pok  = document.getElementById('tip_pok').value;
switch (tip_pok) {
   case "1":
      cena_pok = srpop;
      tippok = "С выделением шва";
      break
   case "2":
      cena_pok = srpo;
      tippok = "Без выделения шва";
      break
   default:
      cena_pok = srpop;
      tippok = "С выделением шва";
      break
}// Обработка покраски 

// Обработка толщина пенопласта 
tol_pen  = document.getElementById('tol_pen').value;
switch (tol_pen) {
   case "1":
      tolpen = "100 mm";
      cenap = "0";
      break
   case "2":
      tolpen = "50 mm";
      cenap = "40";
      break
   default:
      tolpen = "100 mm";
      cenap = "0";
      break
}// Обработка толщина пенопласта 

//Переменные расхода материалов
rashod_kley = "<?php echo $rashod_kley;?>"
rashod_dupel = "<?php echo $rashod_dupel;?>"
rashod_germetika = "<?php echo $rashod_germetika;?>"
rashod_gryntovki = "<?php echo $rashod_gryntovki;?>"
rashod_kraski = "<?php echo $rashod_kraski;?>"
//Переменные расхода материалов


// Переменные строк ввода

m2  = document.getElementById('m2').value;
v  = document.getElementById('v').value;
u  = document.getElementById('u').value;
o  = document.getElementById('o').value;
name1  = document.getElementById('name1').value;
tel1  = document.getElementById('tel1').value;
email1  = document.getElementById('email1').value;
// Переменные строк ввода

//Условия и обработка массива строк
if(name1==""){
    alert("Вы не указали Ваше Имя");
}
else if(tel1==""){
    alert("Вы не указали телефон");
}
else if(email1==""){
    alert("Вы не указали ваш E-mail");
}
else if(m2 == ""){
    alert("Вы не указали Метраж фасада ");
}
else if(v == ""){
    alert("Вы не указали Высоту фасада");
}
else if(u==""){
    alert("Вы не указали Кол-во углов");
}
else if(o==""){
    alert("Вы не указали Кол-во оконых/дверных проемов");
}
else if(tip_pl=="0"){
    alert("Вы не указали Тип плиты");
}
else {
na = name1;
document.getElementById('na').innerHTML = na;
name = na;
document.getElementById('name').innerHTML = name;

te = tel1;
document.getElementById('te').innerHTML = te;
tel = te;
document.getElementById('tel').innerHTML = tel;

emaill = email1;
document.getElementById('emaill').innerHTML = emaill;
email = emaill;
document.getElementById('email').innerHTML = email;

area = parseFloat (m2);
document.getElementById('area').innerHTML = area;

height = parseFloat (v);
document.getElementById('height').innerHTML = height;

angle = parseFloat (u);
document.getElementById('angle').innerHTML = angle;

windows = parseFloat (o);
otkos = windows * 5;
document.getElementById('otkos').innerHTML = otkos;
col_otkos = windows * 3;
document.getElementById('col_otkos').innerHTML = col_otkos;
cena_otkos = col_otkos * cprpr;
document.getElementById('cena_otkos').innerHTML = cena_otkos;
cena_rabot_otkos = otkos * srotk;
document.getElementById('cena_rabot_otkos').innerHTML = cena_rabot_otkos;

ploschad_v_u = (height * 0.2)* angle;
ploschad = Math.ceil (ploschad_v_u + area);
document.getElementById('ploschad').innerHTML = ploschad;

cena_rabot_pl = ploschad * srpl;
document.getElementById('cena_rabot_pl').innerHTML = cena_rabot_pl;
cenat = cena - cenap; 
stoimost_pl = ploschad*cenat;
document.getElementById('stoimost_pl').innerHTML = stoimost_pl;
tip_pl_text = tippl;
document.getElementById('tip_pl_text').innerHTML = tip_pl_text;

col_dupel = ploschad * rashod_dupel;
document.getElementById('col_dupel').innerHTML = col_dupel;
cena_dupel = col_dupel * cedup;
document.getElementById('cena_dupel').innerHTML = cena_dupel;

tip_pok_text = tippok;
document.getElementById('tip_pok_text').innerHTML = tip_pok_text;

cena_job_pok = ploschad*cena_pok;
document.getElementById('cena_job_pok').innerHTML = cena_job_pok;

col_kley = Math.ceil(ploschad* rashod_kley /25);
document.getElementById('col_kley').innerHTML = col_kley;
cena_kley = col_kley* cekl;
document.getElementById('cena_kley').innerHTML = cena_kley;

col_germetika = Math.ceil( ploschad* rashod_germetika);
document.getElementById('col_germetika').innerHTML = col_germetika;
cena_germetika = col_germetika * cgrm;
document.getElementById('cena_germetika').innerHTML = cena_germetika;
cena_rabot_germetik = ploschad * stoimost_rabot_germetik;
document.getElementById('cena_rabot_germetik').innerHTML = cena_rabot_germetik;

col_gruntovka = Math.ceil( ploschad* rashod_gryntovki /10);
document.getElementById('col_gruntovka').innerHTML = col_gruntovka;
cena_gruntovka = col_gruntovka * cgru;
document.getElementById('cena_gruntovka').innerHTML = cena_gruntovka;

col_kraska = Math.ceil( ploschad* rashod_kraski);
document.getElementById('col_kraska').innerHTML = col_kraska;
cena_kraska = col_kraska * ckra;
document.getElementById('cena_kraska').innerHTML = cena_kraska;


tolchina_penoplasta = tolpen;
document.getElementById('tolchina_penoplasta').innerHTML = tolchina_penoplasta;

//Условия и обработка массива строк

// Общая стоимость работ, материала
total_rab = cena_rabot_pl + cena_rabot_germetik + cena_job_pok;
document.getElementById('total_rab').innerHTML = total_rab;

total_mat = stoimost_pl + cena_kley + cena_dupel + cena_germetika + cena_gruntovka + cena_kraska;
document.getElementById('total_mat').innerHTML = total_mat;
// Общая стоимость работ, материала

$("#name[type=hidden]").val(name);
$("#tel[type=hidden]").val(tel);
$("#email[type=hidden]").val(email);
$("#ploschad[type=hidden]").val(ploschad);
$("#total_mat[type=hidden]").val(total_mat);
$("#total_rab[type=hidden]").val(total_rab);
}
}

$(function() {
	$("#tip_pl").change(function(){ //При изменении модели
		var img_id = $("#tip_pl").children("option:selected").attr("data"); // Получаем значение атрибута блока с изображением модели  который нужно показать на изображении
      $(".modelImg").hide(); // прячем все блоки с изображением
      $(img_id).fadeIn(10); // показываем нужный блок с изображением
	});
});
</script>