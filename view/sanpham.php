    <!---->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Shop Single</li>
    </ol>
    <!---->
    <!-- banner -->
    <section class="ab-info-main py-md-5 py-4">
        <div class="container py-md-3">
            <!-- top Products -->
            <div class="row">
                <!-- product left -->

                <?php
                include 'boxright.php'
                ?>


                <!-- //product left -->
                <!-- product right -->
                <div class="left-ads-display col-lg-8">
                <h3 class="shop-sing">Sản Phẩm :<strong> <?php echo $tendm ?></strong> </h3>
                    <div class="row">
                  

                    <?php
                        foreach ($dssp as $sp ) {
                          
                           extract($sp);
                           $linksp="index.php?act=sanphamct&idsp=" .$id;
                           $hinh=$img_path.$img;
                           echo '<div class="col-md-4 product-men">
                           <div class="product-shoe-info shoe text-center">
                               <div class="men-thumb-item">
                               <a href="'.$linksp.'"><img src="'.$hinh.'" class="img-fluid" alt=""></a>
                                   <span class="product-new-top">New</span>
                               </div>
                               <div class="item-info-product">
                                   <h4>
                                   <a href="'.$linksp.'">'.$name.'</a>
                                   </h4>

                                   <div class="product_price">
                                       <div class="grid-price">
                                       <a href="'.$linksp.'"><span class="money">'.$price.'</span></a>
                                       </div>
                                   </div>
                                   <ul class="stars">
                                       <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                       <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                       <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                       <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                       <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                                   </ul>
                               </div>
                           </div>
                       </div>';
                        }
                        ?>
                       
               
                        
      

                       
                       
                    </div>
                </div>
            </div>
    </section>