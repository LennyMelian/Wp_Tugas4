<html>
<head>
<title>Menghitung Bilangan Faktorial menggunakan For pada PHP</title>
<style>
body{
color:#000;
background-image:url(background.jpg);
background-attachment:fixed;
font-size:18px;
font-family: Tahoma, sans-serif;
margin:0;
padding:48px;
}
h2{
color:blue;
}
h2:hover{
color:red;
}
a{
text-decoration:none;
}
a:hover{
color:red;
}
.panel{
max-width:480px;
background-color:#FF9800;
margin:1px auto 1px;
padding:24px;
border-radius:12px;
-webkit-border-radius:8px;
-moz-border-radius:8px;
box-shadow:0 4px 8px red;
}
input{
border-radius:8px;
-webkit-border-radius:8px;
-moz-border-radius:8px;
font-size:18px;
padding:8px 14px;
margin:0 1px;
border:1px solid #888;
}
.field{
width:320px;
}
.tombol{
color:#fff;
background-color:#000;
}
.tombol:hover{
background-color:orange;
}
</style>
</head>
<body>
<?php
$n = isset($_POST['n']) ? $_POST['n'] : NULL;
if(isset($_POST['submit'])){
if($n!=NULL){
$bil = 1;
for($i=1;$i<=$n;$i++){
	$bil = $bil*$i;
}
}else{
$bil = 'Bilangan Tidak boleh kosong !';
}
}
date_default_timezone_set('Asia/Jakarta');
echo '<div class="panel">';
echo '<h2>Menghitung Bilangan Faktorial menggunakan For</h2>';
echo date("l, d-M-Y H:i:s");
echo '<hr>';
echo '<h4>Masukkan Bilangan :</h4>';
echo '<form action="" method="post">';
echo '<input class="field" type="text" name="n" value="'.$n.'" placeholder="Masukkan Bilangan..."/>';
echo '<input class="tombol" type="submit" name="submit" value="Hitung"/>';
echo '</form>';
if((isset($n))and($n!=NULL)){
echo '<h4>Hasil Faktorial :</h4>';
echo '=> ';
for($i=1;$i<$n;$i++){echo $i.'x';}
echo $n;
echo '<br/>';
}
echo '<h4>Jumlah Faktorial :</h4>';
echo '<input class="field" type="text" value="'.(isset($bil) ? $bil : NULL).'" readonly/>';
echo '<hr>';
echo '<a href="../">&laquo; Kembali</a>';
echo '<hr>';
echo '<center><a href="http://melianleny.blogspot.co.id/">&copy; LennyMelian</a></center>';
echo '</div>';
?>
</body>
</html>