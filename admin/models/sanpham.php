<?php
function insert_sanpham($ten_hh,$hinh,$don_gia,$mota,$iddm){
    $spl = "insert into sanpham values (null,'$ten_hh','$hinh','$don_gia','$mota',null,'$iddm')";
    pdo_execute($spl);
}
function delete_sanpham($ma_hh){
      $sqle = "delete from sanpham where id_sanpham =".$ma_hh;
      pdo_execute($sqle);
}
function loadall_sp(){
    $result = "select * from sanpham order by id_danhmuc";
    $sanpham=pdo_query($result);
 return $sanpham;
}
function loadone_sp($ma_hh){
    $sql = "select * from sanpham where id_sanpham = ".$ma_hh;
    $suasp = pdo_query_one($sql);
    return $suasp;
}
function update_sanpham($id,$ten_hh,$hinh,$don_gia,$mota,$iddm){
    if($hinh !=""){
        $sql ='update sanpham set id_danhmuc = "'.$iddm.'",tens_sanpham = "'.$ten_hh.'",gia_sanpham = "'.$don_gia.'",anh_sanpham = "'.$hinh.'",mo_ta_sanpham = "'.$mota.'" where id_sanpham = '.$id;
    }else{
        $sql ='update sanpham set id_danhmuc = "'.$iddm.'",tens_sanpham = "'.$ten_hh.'",gia_sanpham = "'.$don_gia.'",mo_ta_sanpham = "'.$mota.'" where id_sanpham = '.$id;
    }
    pdo_execute($sql);
}
?>
