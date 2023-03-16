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
                    <div class="row">

                        <div class="row boxcontent">

                            <?php
                            extract($onesp);
                            $img = $img_path . $img;
                            echo '
                <div class="desc1-left col-md-6">
                <img src="'. $img.'" class="img-fluid" alt="">
            </div>
                ';
                            ?>

          
            
         

                            <div class="desc1-right col-md-6 pl-lg-4">
                                <?php
                                extract($onesp);
                                echo ' <div>
                                <h3>'.$name.'</h3>
                                <h5>'.$price.'</h5>
                                
                                </div>';
                               
                                ?>
                                <div class="available mt-3">
                                    <form action="#" method="post" class="w3layouts-newsletter">
                                        <input type="email" name="Email" placeholder="Enter your email..." required="">
                                        <button class="btn1">Check</button>

                                    </form>
                                    <span><a href="#">login to save in wishlist </a></span>
                                    <?php
                                    echo ' <p>'.$mota.'</p>';
                            
                                    ?>
                                   
                                </div>
                                <div class="share-desc">
                                    <div class="share">
                                        <h4>Share Product :</h4>
                                        <ul class="w3layouts_social_list list-unstyled">
                                            <li>
                                                <a href="#" class="w3pvt_facebook">
                                                    <span class="fa fa-facebook-f"></span>
                                                </a>
                                            </li>
                                            <li class="mx-2">
                                                <a href="#" class="w3pvt_twitter">
                                                    <span class="fa fa-twitter"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="w3pvt_dribble">
                                                    <span class="fa fa-dribbble"></span>
                                                </a>
                                            </li>
                                            <li class="ml-2">
                                                <a href="#" class="w3pvt_google">
                                                    <span class="fa fa-google-plus"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            

                        </div>
                       
                       <div class="row sub-para-w3layouts mt-5">

                        <h3 class="shop-sing">Lorem ipsum dolor sit amet</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
                        <p class="mt-3 italic-blue">Consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
                    </div>
                        
      

                        <h3 class="shop-sing">Sản Phẩm Cùng Loại </h3>
                        <div class="row m-0">
                        <?php
                foreach ($sp_cungloai as  $sp_cungloai) {
                    extract($sp_cungloai);
                    $hinh=$img_path.$img;
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    echo '    <div class="col-md-4 product-men">
                                
                    <div class="product-shoe-info shoe text-center">
                        <div class="men-thumb-item">
                        <a href="' . $linksp . '"><img src="'.$hinh.'" class="img-fluid" alt=""></a>
                            <span class="product-new-top">New</span>
                        </div>
                        <div class="item-info-product">
                            <h4>
                            <a href="' . $linksp . '">' . $name . '</a>
                            </h4>

                            <div class="product_price">
                                <div class="grid-price">
                                <span class="money"> <a href="' . $linksp . '">' . $price . '</a></span>
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
            </div>
    </section>