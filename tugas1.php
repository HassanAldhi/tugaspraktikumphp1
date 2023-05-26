<?php 
$nama = "hassan";
if(strlen($nama) == date("d") - 2 ){
    echo "berhasil";
}elseif(strlen($nama)< date("d")){
    echo "sedikit lagi";
}else{
    echo "coba lagi";
}
?>