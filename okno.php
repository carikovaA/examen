<?php 
$host='localhost';
$database='examen';
$user='root';
$password='';

$link=mysqli_connect($host,$user,$password,$database) or die ("Ошибка" . mysqli_error($link));
$query="select * from sotrydnik";
$result= mysqli_query($link,$query) or die ("Ошибка" . mysqli_error($link));

print ("<h1 align=center > <font face=yerdana><b>Данные о сотрудниках из БД</b></h1>
<table border=1 align=center width=72% cellpadding=5>
<tr>
<td> Имя </td>
<td> Фамилия </td>
<td> Должность </td>
<td> Логин </td>
<td> Пароль </td><br>
</tr>");

while ($a=mysqli_fetch_array($result))
{
	$imya=$a['imya'];
  $familia=$a['familia'];
  $id_doljnosty=$a['id_doljnosty'];
	$login=$a['login'];
	$parol=$a['parol'];
	print ("<tr>
	<td> $imya </td>
  <td> $familia </td>
  <td> $id_doljnosty </td>
	<td> $login </td>
	<td> $parol </td>
	</tr>");
}

print ("</table>");

mysqli_close($link);

?>
<style>
	* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

.gallery {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(min(300px, 100%), 1fr));
  grid-gap: 2em;
  padding: 2em;
  pointer-events: none;

img {
    display: block;
    width: 60%;
    border-radius: .25em;
    transition: 250ms 50ms;
    pointer-events: auto;
  }
  
  &:hover img:not(:hover) {
    filter: saturate(.2) opacity(.5);
  }
}
</style>

<section class="gallery">
	<img src="https://cdn.fishki.net/upload/post/2023/12/04/4535673/3ebd4ab0f2aad90c308110f3e9900532.jpg">
	<img src="https://u.9111s.ru/uploads/202202/13/2623c3cddc953b9f6b2a5b363709185f.jpg">
	<img src="https://kartinki.pibig.info/uploads/posts/2023-04/thumbs/1681858598_kartinki-pibig-info-p-kotik-za-rulem-kartinka-arti-krasivo-59.jpg">
</section>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');


.container {
  backdrop-filter: blur(16px) saturate(180%);
  -webkit-backdrop-filter: blur(16px) saturate(180%);
  background-color: rgba(17, 25, 40, 0.25);
  border-radius: 12px;
  border: 1px solid rgba(255, 255, 255, 0.125);  
  padding: 38px;  
  filter: drop-shadow(0 30px 10px rgba(0,0,0,0.125));
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content:center;
  text-align: center;
  width: 350px;
}

.wrapper {
  width: 100%;
  height: 100%;
  
}

.banner-image {
  background-image: url(https://images.unsplash.com/photo-1641326201918-3cafc641038e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80);
  background-position: center;
  background-size: cover;
  height: 300px;
  width: 100%;
  border-radius: 12px;
  border: 1px solid rgba(255,255,255, 0.255)
}

h1{
  font-family: 'Righteous', sans-serif;
  text-transform: uppercase;
  font-size: 2.4rem;
}

p {
  color: #fff;
  font-family: 'Lato', sans-serif;
  text-align: center;
  font-size: 0.8rem;
  line-height: 150%;
  letter-spacing: 2px;
  text-transform: uppercase;
}

.button-wrapper{
  margin-top: 18px;
}

.btn {
  border: none;
  padding: 12px 24px;
  border-radius: 24px;
  font-size: 12px;
  font-size: 0.8rem;  
  letter-spacing: 2px;  
  cursor: pointer;
}

.btn + .btn {
  margin-left: 10px;
}

.outline {
  background: transparent;
  color: rgba(0, 212, 255, 0.9);
  border: 1px solid rgba(0, 212, 255, 0.6);
  transition: all .3s ease;
  
}

.fill {
  background: rgba(0, 212, 255, 0.9);
  color: rgba(255,255,255,0.95);
  filter: drop-shadow(0);
  font-weight: bold;
  transition: all .3s ease; 
}
</style>


<div class="container">
 <div class="wrapper">
   <div class="banner-image"> </div>
   <h1> Toyota Supra</h1>
   <p>реклама реклама реклама</p>
  </div>
  <div class="button-wrapper"> 
  <button class="btn outline">Детали</button>
    <button class="btn fill">Купить</button>
  </div>
    </div>
</div>