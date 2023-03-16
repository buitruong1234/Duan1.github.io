<div class="main">
    <h2>NHẬP SẢN PHẨM</h2>
    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
        <select name="iddm" id="">
        <?php
            if(isset($dsdm)&&(count($dsdm)>0)){
                foreach ($dsdm as $dm) {
                    echo '<option value="'.$dm['id'].'">'.$dm['tendm'].'</option>';
                }
            }
        ?>
            
        </select>
        <input type="text" name="tensp" id="">
        <input type="file" name="hinh" id="">
        <input type="submit" name="themmoi" value="Thêm mới">
    </form>
    <br>
    <table>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá</th>
            <th>Hành động</th>
        </tr>
        <?php
           // var_dump($kq);
        ?>
    <?php
        if(isset($kq)&&(count($kq)>0)){
            $i=1;
            foreach ($kq as $item) {
                echo '<tr>
                        <td>'.$i.'</td>
                        <td>'.$item['tensp'].'</td>
                        <td><img src="../uploads/'.$item['img'].'" width="100"></td>
                        <td>'.$item['gia'].'</td>
                        <td><a href="index.php?act=updatespform&id='.$item['id'].'">Sửa</a> | <a href="index.php?act=delsp&id='.$item['id'].'">Xóa</a></td>
                    </tr>';
                    $i++;
            }
        }
    ?>
        
    </table>
</div>