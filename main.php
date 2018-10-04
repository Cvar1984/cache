<?php
file_exists('cache') or exit(1); // jika file cache tidak ada, program akan keluar
$cache=file_get_contents('cache'); // memasukan file cache kedalam variable $cache
$file=file_get_contents('list'); // memasukan file list kedalam variable $file

if($cache != $file) { // validasi ( jika cache tidak sama dengan file )
    file_put_contents('cache',$file); // perbaharui file cache dengan file baru
    $file=explode("\n",$file); // mengubah list menjadi array
    $len=count($file); // mengambil jumlah array
    echo 'Mengambil data baru'."\n";
    
    for($x=0;$x<$len;$x++) { // looping
        echo $file[$x]."\n"; // print file
    }
}
else { // validasi ( jika cache sama dengan file )
    echo 'Mengambil Cache'."\n";
    echo $cache."\n"; // print dari variable cache
}
