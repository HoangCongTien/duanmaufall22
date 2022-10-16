<div class="row">
    <h1>thêm loại hàng</h1>
    <form action="index.php?i=adddm" method="post">
        mã loại:
        <input type="text" name="maloai" re><br>
        tên loại: <input type="text" name="ten_loai" id="">
        <!-- <input type="submit" name="" id=""> -->
        <input type="submit" value="thêm mới" name="themmoi">
        <input type="reset" value="nhập lại">
        <a href="index.php?i=listdm"><input type="button" name="" id="" value="danh sách"></a>

    </form>
    <?php if(isset($thongbao) && ($thongbao!=""))
     echo $thongbao;
     ?>

</div>