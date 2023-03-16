<div class="row">
            <div class="row formtitle"><h1>DANH SÁCH LOẠI HÀNG HÓA</h1></div>
            <div class="row formcontent">
                <div class="row mb10 formdsloai">
                   <table>
                    <tr>
                        <th></th>
                        <th>Mã Loại</th>
                        <th>Tên Loại</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        //extrac để ta có thể lấy thẳng vào tên từng cột 
                         extract($danhmuc);
                        $suadm="index.php?act=suadm&id=".$id;
                        $xoadm="index.php?act=xoadm&id=".$id;
                       echo'
                       <tr>
                       <td><input type="checkbox"></td>
                       <td>'.$id.'</td>
                       <td>'.$name.'</td>
                       <td> 
                       <a href="'. $suadm.'"><input type="button" value="sửa"></a>

                           <a href="'. $xoadm.'"><input type="button" value="xóa"></a>
                       
                       </td>
                   </tr>';
                    }
                    ?>
                   </table>
                  </div>  
                
                <div class="row mb10">
                    <!-- <input type="button" value="CHỌN TẤT CẢ">
                    <input type="button" value="BỎ CHỌN TẤT CẢ">
                    <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN"> -->
                   <a href="index.php?act=adddm"><input type="button" value="NHẬP THÊM"></a> 
                </div>
            </div>
        </div>