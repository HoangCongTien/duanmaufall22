<?php
function insert_danhmuc($ten_loai){
    $sql= "insert into danhmuc(ten_danh_muc) value ('$ten_loai')";
            pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql="delete from danhmuc where id=".$id;
    pdo_execute($sql);
}
function loadall(){
    $sql="select * from danhmuc order by ten_danh_muc";
 $listdm=pdo_query($sql);
 return $listdm ;
}
function loadone($id){
    $sql="select * from danhmuc where id=".$id;
                 $dm=pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id,$ten_loai){
    $sql="update danhmuc set ten_danh_muc='".$ten_loai."' where id=".$id;
              pdo_execute($sql);
}
?>