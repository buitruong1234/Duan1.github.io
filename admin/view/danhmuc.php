<div class="main">
    <h2>DANH MỤC</h2>
    <form action="index.php?act=adddm" method="post">
        <input type="text" name="tendm" id="">
        <input type="file" name="hinh" id="">
        <input type="submit" name="themmoi" value="Thêm mới">
    </form>
    <br>
    <table>
        <tr>
            <th>STT</th>
            <th>Tên danh mục</th>
            <th>Ưu tiên</th>
            <th>Hiển thị</th>
            <th>Hành động</th>
        </tr>
        <?php
           // var_dump($kq);
        ?>
    <?php
        if(isset($kq)&&(count($kq)>0)){
            $i=1;
            foreach ($kq as $dm) {
                echo '<tr>
                        <td>'.$i.'</td>
                        <td>'.$dm['tendm'].'</td>
                        <td>'.$dm['uutien'].'</td>
                        <td>'.$dm['hienthi'].'</td>
                        <td><a href="index.php?act=updatedmform&id='.$dm['id'].'">Sửa</a> | <a href="index.php?act=deldm&id='.$dm['id'].'">Xóa</a></td>
                    </tr>';
                    $i++;
            }
        }
    ?>
        
    </table>
</div>