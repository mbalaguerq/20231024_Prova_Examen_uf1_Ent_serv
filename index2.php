<?php
$n= $_POST["nom"];
$v= $_POST["vot"];
$casta= 0;
$halo= 0;

//$arrayNoms = json_encode($n);

echo "Nombre: " . $n . "<br>";
echo "Voto: " . $v . "<br>";


$Vots = json_encode($v);


foreach ($vots as $valor) {
    if ($valor == "1") {
        $casta++;
    } elseif ($valor == "2") {
        $halo++;
    }

    //echo "Votos para Castanyada: " . $casta . "<br>";
    //echo "Votos para Halloween: " . $halo . "<br>";
}
?>
