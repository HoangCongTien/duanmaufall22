<div class="row">
            <div class="rowformtile">
                <h1>danh mục loại hàng</h1>
            </div>
            <div class="rowtable">
                <form action="index.php?i=listsp" method="post">
                <select name="iddm">
                    <option value="0" selected> tất cả</option>
                <?php
                foreach ($listdm as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="'.$id.'"> '.$ten_danh_muc.' </option>';

                } 
                ?>
                <option value=""></option>
            </select>
            <input type="submit" value="search">
                </form>
                <table border="1px" style="width:1300px;">
                    <tr>
                        <th></th>
                        <th>mã loại</th>
                        <th>tên loại </th>
                        <th>giá </th>
                        <th>hình </th>
                        <th>mô tả </th>
                        <th></th>

                    </tr>
                    <?php
                         foreach ($sanpham as $value ){
                             extract($value);
                             $suasp="index.php?i=suasp&id=".$id_sanpham;
                             $xoasp="index.php?i=xoasp&id=".$id_sanpham;

                             $hinh_anh = "uploadimg/".$anh_sanpham;
                             if(is_file($hinh_anh)){
                                 $hinh = "<img src='".$hinh_anh."' height='100'>";
                             }else{
                                 $hinh = "no photo";
                             }
                             echo ' 
                         <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id_sanpham.'</td>
                        <td>'.$tens_sanpham.'</td>
                        <td>'.$gia_sanpham.'</td>    
                         <td>'.$hinh.'</td>                                                
                        <td>'.$mo_ta_sanpham.'</td>
                        <td><a href="'.$suasp.'"><input type="button" name="" id="" value="sửa"></a> <a href="'.$xoasp.'"><input type="button" name="" id="" value="xóa"></a></td>
                         </tr>
                    ';
                         }
                    ?> 

                </table>
            </div>
            <div class="rowbuttom">
                <input type="button" name="" id="" value="chọn tất cả">
                <input type="button" name="" id="" value=" bỏ chọn tất cả">
                <input type="button" name="" id="" value="xóa các danh mục dã chọn">
                <a href="index.php?i=addsp"><input type="button" name="" id="" value="nhập thêm"></a>
            </div>
        </div>
        