<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan</title>
<style>
body{
    background: rgb(201, 224, 231);
    display: flex;
    min-height: 90vh;
}
.container{
    padding: 10px;
    background-color: #7cbada;
    position: relative;
    margin: auto;
    width: 500px;
    height: 620px;
    border-radius: 30px;
    text-align: center;
    color: azure;
}
form{
    padding: 10px;
    text-align: center;
}
input{
    background-color: #ffffffe2;
	border: none;
	padding: 12px;
    margin-bottom: 10px;
	width: 180px;
	outline: none;
	border-radius: 20px;
    text-align: center;
}
table{
    width: 500px;
    text-align: left;
    font-size: 20px
}
a{
    color: azure;
}
</style>
</head>
<body>
    <div class="container">
    <table>
    <h2>Modus, Mean, Min, dan Max</h2>
    <form method="post">
        <br>Angka ke 1 : <input type="number" name="k1" style="text-align : center" required=""
            placeholder="Masukkan Angka" /></br>
        <br>Angka ke 2 : <input type="number" name="k2" style="text-align : center" required=""
            placeholder="Masukkan Angka" /></br>
        <br>Angka ke 3 : <input type="number" name="k3" style="text-align : center" required=""
            placeholder="Masukkan Angka" /></br>
        <br>Angka ke 4 : <input type="number" name="k4" style="text-align : center" required=""
            placeholder="Masukkan Angka" /></br>
        <br>Angka ke 5 : <input type="number" name="k5" style="text-align : center" required=""
            placeholder="Masukkan Angka" /></br>
    </div>
    </table>
    <br><input class="Hasil" type="submit" /></br>
</form>
</body>
<html>
<?php
if(!isset($_POST['k1']))
    die();

$a= array(
    $_POST['k1'],
    $_POST['k2'],
    $_POST['k3'],
    $_POST['k4'],
    $_POST['k5'],
);

function mmm($array, $output = 'mean'){
    if(!is_array($array)){
        return FALSE;
    }else{
        switch($output){
            case 'mean':
                $count = count($array);
                $sum = array_sum($array);
                $total = $sum / $count;
            break;
            case 'mode' :
                $v = array_count_values($array);
                arsort($v);
                foreach($v as $k => $v){$total = $k; break;}
            break;
        }
        return $total;
    }
}
   
        echo "<h4> Nilai Modus : ".mmm($a, 'mode'). "</h4>";
        echo "<h4> Nilai Mean : ".mmm($a, 'mean'). "</h4>";
        echo "<h4> Nilai Min : ".min($a). "</h4>";
        echo "<h4> Nilai Max : ".max($a). "</h4>";
?>