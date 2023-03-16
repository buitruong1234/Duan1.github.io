<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $hinh = "no photo";
}
?>


<div class="row">
    <div class="row formtitle">
        <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
            <select name="iddm">
            <option value="0" selected>Tat Ca</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                //extract($danhmuc);
                if($iddm==$danhmuc['id']){
                    echo '<option value='.$danhmuc['id'].' selected>'.$danhmuc['name'].'</option>'; 
                    }else{
                        echo '<option value='.$danhmuc['id'].'>'.$danhmuc['name'].'</option>'; 
                    }      
            }
            ?>

        </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm <br>
                <input type="text" name="tensp" value="<?=$name ?>">
            </div>
            <div class="row mb10">
                Giá sản phẩm <br>
                <input type="text" name="giasp" value="<?php echo $price ?>">
            </div>
            <div class="row mb10">
                Hình sản phẩm <br>
                <input type="file" name="hinh">
                <?php echo $hinh ?>;
            </div>
            <div class="row mb10">
                Mô Tả sản phẩm <br>
                <textarea name="mota" cols="30" rows="10"><?=$mota ?></textarea>
            </div>

            <div class="row mb10">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"><input type="button" value="Danh Sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>