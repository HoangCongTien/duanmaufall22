<?php
include "models/db.php";
    include "header.php";
    include "models/danhmuc.php";
    include "models/sanpham.php";
    //controller 
  if(isset($_GET['i'])){
    $i = $_GET['i'];
    switch($i){
        case 'adddm' :
          if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
            $ten_loai = $_POST['ten_loai'];
            insert_danhmuc($ten_loai);
            $ten_loai=$_POST['ten_loai'];
            

            $thongbao = "thêm thành công";
          }
             include "danhmuc/add.php";

         break;

        case  'listdm':
          

            $listdm=loadall();
            include "danhmuc/list.php";
         break;

        case 'xoadm':
           if(isset($_GET['id']) && ($_GET['id']>0)) {
            delete_danhmuc($_GET['id']);
           

           
           }
           $sql="select * from danhmuc order by ten_danh_muc";
            $listdm=pdo_query($sql);
            
            include "danhmuc/list.php";
        break;

        case 'suadm':
            if(isset($_GET['id']) && ($_GET['id']>0)){
                 
                 $dm=loadone($_GET['id'] );
            }
                include "danhmuc/update.php";
           break;

        case 'updatedm' :
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $ten_loai = $_POST['ten_loai'];
                $id = $_POST['id'];
                update_danhmuc($id,$ten_loai);
             
                $thongbao = "thêm thành công";
            }
            $listdm=loadall();
            

            include "danhmuc/list.php";
            break;

     case 'addsp' :
              if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
                  $ten_hh = $_POST['ten_sp'];
                  $don_gia = $_POST['gia_sp'];
                  $iddm  = $_POST['iddm'];
                  $mota = $_POST['mota'];
                  $hinh=$_FILES['hinh_sp']['name'];
                  $target_dir = "uploadimg/";
                  $target_file = $target_dir.$hinh;
                  if(move_uploaded_file($_FILES['hinh_sp']['tmp_name'], $target_file)){
                //    echo "ảnh của bạn đã được thêm thành công ";
                   }else{                  
                    //  echo 'sorry, ảnh của bạn ko được uplead';
                  }
                  insert_sanpham($ten_hh,$hinh,$don_gia,$mota,$iddm);
                  $thongbao = "thêm thành công";
              }
              $listdm=loadall();
              include "sanpham/add.php";

              break;
          case  'listsp':
            $listdm=loadall();
              $sanpham=loadall_sp();
              include "sanpham/list.php";
              break;
          case 'xoasp':
              if(isset($_GET['id']) && ($_GET['id']>0)) {
                  delete_sanpham($_GET['id']);
              }
              $sanpham=loadall_sp();
              include "sanpham/list.php";
              break;
          case 'suasp':
              if(isset($_GET['id']) && ($_GET['id']>0)){
                  $suasp = loadone_sp($_GET['id']);
              }
              $listdm=loadall();
              include "sanpham/update.php";
              break;
          case 'update':
                if(isset($_POST['capnhat']) && ($_POST['capnhat']!='') ){
                    $id= $_POST['id'];
                  $ten_hh = $_POST['ten_sp'];
                  $don_gia = $_POST['gia_sp'];
                  $iddm  = $_POST['iddm'];
                  $mota = $_POST['mota'];
                  $hinh=$_FILES['hinh_sp']['name'];
                  $target_dir = "uploadimg/";
                  $target_file = $target_dir.$hinh;
                  if(move_uploaded_file($_FILES['hinh_sp']['tmp_name'], $target_file)){
                //    echo "ảnh của bạn đã được thêm thành công ";
                   }else{                  
                    //  echo 'sorry, ảnh của bạn ko được uplead';
                  }
                  update_sanpham($id,$ten_hh,$hinh,$don_gia,$mota,$iddm);
                  $thongbao = "thêm thành công";
                }
              $sanpham=loadall_sp();
               include "sanpham/list.php";
                break;
         default:
         include "home.php";
         break;
    }
  }
  else{
      include "home.php";
  }

  include "footer.php";

?>