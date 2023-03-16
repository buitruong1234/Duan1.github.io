<div class="row">
            <div class="row formtitle"><h1> THÊM MỚI SẢN PHẨM</h1></div>
            <div class="row formcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                  <div class="row mb10">
                    Danh Mục <br>
                  <select name="iddm">
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="'.$id.'">'.$name.'</option>';
                    }
                    ?>
        
                  </select>
                  </div>  
                  <div class="row mb10">
                    Tên sản phẩm <br>
                    <input type="text" name="tensp" >
                </div>
                <div class="row mb10">
                    Giá sản phẩm <br>
                    <input type="text" name="giasp" >
                </div>
                <div class="row mb10">
                    Hình sản phẩm <br>
                   <input type="file" name="hinh" >
                </div>
                <div class="row mb10">
                    Mô Tả sản phẩm <br>
                   <textarea name="mota"  cols="30" rows="10"></textarea>
                </div>

               <div class="row mb10">
                    <input type="submit" name="themmoi" value="THÊM MỚI">
                    <input type="reset" value="NHẬP LẠI">
                   <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a> 
                </div>
                <?php 
                if(isset($thongbao)&&($thongbao!=""))
                echo $thongbao;
                ?>
                </form>
            </div>
        </div>
  