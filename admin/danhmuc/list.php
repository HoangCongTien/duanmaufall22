<div class="row">
            <div class="rowformtile">
                <h1>danh mục loại hàng</h1>
            </div>
            <div class="rowtable">
                <table border="1px">
                    <tr>
                        <th></th>
                        <th>mã loại</th>
                        <th>tên loại </th>
                        <th></th>

                    </tr>
                     <?php
                         foreach ($listdm as $value ){
                             extract($value);
                             $suadm="index.php?i=suadm&id=".$id;
                             $xoadm="index.php?i=xoadm&id=".$id;
                             echo ' 
                         <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$ten_danh_muc.'</td>
                        <td><a href="'.$suadm.'"><input type="button" name="" id="" value="sửa"></a> <a href="'.$xoadm.'">
                        <input type="button" name="" id="" value="xóa"></a></td>
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
                <a href="index.php?act=adddm"><input type="button" name="" id="" value="nhập thêm"></a>
            </div>
        </div>
        