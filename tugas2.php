<?php 
$anggota = array 
(
    array("Hassan Aldhi", 43921),
    array("Farhan", 43922),
    array("Hanif", 43923),
    array("Wira", 43924),
    array("Budi", 43925)
);
for($i = 0; $i < count($anggota); $i++){
    $nama = $anggota[$i][0];
    $nim = $anggota[$i][1];
    if($anggota[$i][1] % 2 == 0){
        $peran = "Backend Developer";
    }else{
        $peran = "Frontend Developer";
    }
    
    echo "Nama : " .$nama. "<br>";
    echo "NIM : " .$nim. "<br>";
    echo "Peran : " .$peran. "<br><br>";
}
?>