<?php
   if(is_array($dm)){
       extract($dm);
    //    echo $id;
   }

?>
<div class="row">
    <div class="rowformtile">
        <h1>Cập nhật loại hàng </h1>
    </div>
    <div class="rowformcontenr">
        <form action="index.php?i=updatedm" method="post">
            <div class="rowinput">
                Mã loại <br>
                <input type="text" name="ma_loai" id="" disabled placeholder="   mã loại đã tự thêm admin ko cần thêm gì cả ">
            </div>
            <div class="rowinput">
                Tên loại <br>
                <input type="text" name="ten_loai" id="" value="<?php if(isset($ten_danh_muc)&& ($ten_danh_muc!="")) echo $ten_danh_muc; ?>">
            </div>
            <div class="rowsubmit">
                <input type="hidden" name="id" value="<?php if(isset($id)&& ($id>0)) echo $id; ?>">
                <input type="submit" name="capnhat" id="" value="update">
                <input type="reset" name="" id="" value="nhập lại">
                <a href="index.php?act=listdm"><input type="button" name="" id="" value="danh sách"></a>
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