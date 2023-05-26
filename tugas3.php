<?php 
$nama = array("H","a","s","s","a","n");
$cek = false;
$kota = array ("Lampung","Riau","Jambi","Bengkulu","Makassar",
                "Kendari","Gorontalo","Samarinda","Papua","Nusa Tenggara Barat");

for($i = 0; $i < count($nama); $i++){
    if($cek){
        break;
    }

    $current_str = strtolower($nama[$i]);
    for($z = 0; $z < count($kota); $z++){
        $current_kota = $kota[$z];
        if($current_str == strtolower($current_kota[0])){
            $loc = $current_kota;
            $cek = true;
            break;
        }else{
            $loc = "Jawa timur";
        }
    }    
}
echo "Hassan di tempatkan di " .$loc;

?>