<?php
   if(is_array($suasp)){
       extract($suasp);
   }
$hinh_anh = "uploadimg/".$anh_sanpham;
if(is_file($hinh_anh)){
    $hinh = "<img src ='".$hinh_anh."' height='100'>";
}else{
    $hinh = "no photo";
}
?>

<div class="row">
    <div class="rowformtile">
        <h1>Cấp nhật loại hàng </h1>
    </div>
    <div class="rowformcontenr">
        <form action="index.php?i=update" method="post" enctype="multipart/form-data" >
        <select name="iddm">
                    <option value="0" selected> tất cả</option>
                <?php
                foreach ($listdm as $danhmuc) {
                    extract($danhmuc);
                    if($id_danhmuc==$id) $s="selected"; else $s="";
                    echo '<option value="'.$id.'" '.$s.'> '.$ten_danh_muc.' </option>';

                } 
                ?>
                
            </select>
            <div class="rowinput">
                Mã sản phẩm <br>
                <input type="text" name="ma_sp" id="" disabled placeholder="   mã loại đã tự thêm admin ko cần thêm gì cả ">
            </div>
            <div class="rowinput">
                Tên sản phẩm <br>
                <input type="text" name="ten_sp" id="" value="<?php if(isset($tens_sanpham)&& ($tens_sanpham!= "")) echo $tens_sanpham; ?>">
            </div>
            <div class="rowinput">
                giá <br>
                <input type="text" name="gia_sp" id="" value="<?php if(isset($gia_sanpham)&& ($gia_sanpham>0)) echo $gia_sanpham; ?>">
            </div>
            <div class="rowinput">
                hình <br>

                <input type="file" name="hinh_sp" id=""  >
               <?php echo $hinh;?>
            </div>
            <div class="rowinput">
                mô tả <br>
                <textarea name="mota" id="" cols="30" rows="10"><?php if(isset($mo_ta_sanpham)&& ($mo_ta_sanpham!= "")) echo $mo_ta_sanpham; ?></textarea>
            </div>
            
              
            <div class="rowinput">
                mã loại <br>
                <input type="text" name="ma_loai" id="" value="<?php if(isset($id_danhmuc)&& ($id_danhmuc!= "")) echo $id_danhmuc; ?>">
            </div>
            <div class="rowsubmit">
                <input type="hidden" name="id" value="<?php if(isset($id_sanpham) && ($id_sanpham != '')) echo $id_sanpham; ?>">
                <input type="submit" name="capnhat" id="" value="cập nhật">
                <input type="reset" name="" id="" value="nhập lại">
                <a href="index.php?i=listsp"><input type="button" name="" id="" value="danh sách"></a>
            </div>
            <?php
            if(isset($thongbao)&& $thongbao!= ""){
                echo $thongbao;
            }
            ?>
        </form>
    </div>

</div>

</div>