<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>

<?php
	$dir_img = get_template_directory_uri() . "/talon03.jpg";
	echo "body {background-image: url($dir_img)}";
?>
</style>
</head>

<body>
<h2>Limiar da Lâmina</h2>
<?php
$DIR2=get_template_directory_uri() . "/skill5.png"; 
?>
<img src="<?php echo $DIR2?>">


<strong>Passiva:</strong> Bate 3 vezes, na 4ª explode dando altos dano mesmo.
<h2>Diplomacia Noxiana</h2>

<strong>Target:</strong> Talon apunhala o alvo. De perto bate crítico machucando demais porque diplomacia é pra doer mesmo.
<h2>Ancinho<span style="font-size: 16px;"> </span><span style="font-size: 16px;"> </span><span style="font-size: 16px;"> </span><span style="font-size: 16px;"> </span></h2>
<?php
$DIR3=get_template_directory_uri() . "/skill1.png"; 
?>
<img src="<?php echo $DIR3?>">

<strong>SkillShot: </strong>Lança as lâmina cortante pra frente girando que vai e volta e cortando e dando slow mesmo.
<h2>Caminho do Assassino</h2>
<?php
$DIR4=get_template_directory_uri() . "/skill2.png"; 
?>
<img src="<?php echo $DIR4?>">

<strong>PARKOUR: </strong>Pula pelas paredes bem homem aranha mesmo.
<h2>Ataque Das Sombras</h2>
<?php
$DIR5=get_template_directory_uri() . "/skill3.png"; 
?>
<img src="<?php echo $DIR5?>">

<strong>*APELÃO ISSO BRO*: </strong>Fica invisível e joga várias lâminas em volta de si mesmo, aí escolhe alguém com golpes perfurantes mesmo.
<?php
$DIR6=get_template_directory_uri() . "/skill4.png"; 
?>
<img src="<?php echo $DIR6?>">


<h1 style="text-align: left;">                                             BEST SKIN EVER</h1>
<img class="alignnone wp-image-31 size-full" src="http://172.18.1.143:8015/wp-content/uploads/2018/04/talon02.jpg" alt="" width="1041" height="375" />
<?php
$DIR=get_template_directory_uri() . "/talon02.jpg"; 
?>


<img src="<?php echo $DIR?>">









<?php
global $wpdb;

$query = "SELECT post_title, post_content, post_modified FROM $wpdb->posts where post_type = 'post'";
$rows = $wpdb->get_results($query);
foreach ($rows as $row) {
	$postTitle    = $row->post_title;
	$postContent  = $row->post_content;
	$postModified = $row->post_modified;

	echo "<h1>" . $postTitle    . "</h1>";
	echo "<p>"  . $postContent  . "</p>";
	echo "</br>";
	echo "<p>"  . $postModified . "</p>";

	echo "<hr>";
}
?>


</body>
</html>
