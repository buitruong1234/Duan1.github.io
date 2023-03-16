<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active"><a href="">Đăng Nhập</a></li>
      
    </ol>
    <!---->
    <!-- banner -->
    <section class="ab-info-main py-md-5 py-4">
        <div class="container py-md-3">
            <!-- top Products -->
            <div class="row">
                <!-- product left -->
               <?php
               include 'boxright.php';
               ?>
                <!-- //product left -->
                <!-- product right -->
                <div class="left-ads-display col-lg-8">
                    <div class="row">
                        <?php
                        foreach ($spnew as $sp ) {
                          
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
                        <!-- <div class="col-md-4 product-men">
                            <div class="product-shoe-info shoe text-center">
                                <div class="men-thumb-item">
                                    <img src="view/images/s1.jpg" class="img-fluid" alt="">
                                    <span class="product-new-top">New</span>
                                </div>
                                <div class="item-info-product">
                                    <h4>
                                        <a href="shop-single.html">Bella Toes </a>
                                    </h4>

                                    <div class="product_price">
                                        <div class="grid-price">
                                            <span class="money">$675.00</span>
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
                        </div>
                        <div class="col-md-4 product-men">
                            <div class="product-shoe-info shoe text-center">
                                <div class="men-thumb-item">
                                    <img src="view/images/s2.jpg" class="img-fluid" alt="">
                                    <span class="product-new-top">New</span>
                                </div>
                                <div class="item-info-product">
                                    <h4>
                                        <a href="shop-single.html">Chikku Loafers </a>
                                    </h4>

                                    <div class="product_price">
                                        <div class="grid-price">
                                            <span class="money">$475.00</span>
                                        </div>
                                    </div>
                                    <ul class="stars">
                                        <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 product-men">
                            <div class="product-shoe-info shoe text-center">
                                <div class="men-thumb-item">
                                    <img src="view/images/s3.jpg" class="img-fluid" alt="">
                                    <span class="product-new-top">New</span>
                                </div>
                                <div class="item-info-product">
                                    <h4>
                                        <a href="shop-single.html">(SRV) Sneakers </a>
                                    </h4>

                                    <div class="product_price">
                                        <div class="grid-price">
                                            <span class="money">$575.00</span>
                                        </div>
                                    </div>
                                    <ul class="stars">
                                        <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 product-men my-lg-4">
                            <div class="product-shoe-info shoe text-center">
                                <div class="men-thumb-item">
                                    <img src="view/images/s4.jpg" class="img-fluid" alt="">
                                    <span class="product-new-top">New</span>
                                </div>
                                <div class="item-info-product">
                                    <h4>
                                        <a href="shop-single.html">Shuberry Heels</a>
                                    </h4>

                                    <div class="product_price">
                                        <div class="grid-price">
                                            <span class="money">$575.00</span>
                                        </div>
                                    </div>
                                    <ul class="stars">
                                        <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 product-men my-lg-4">
                            <div class="product-shoe-info shoe text-center">
                                <div class="men-thumb-item">
                                    <img src="view/images/s5.jpg" class="img-fluid" alt="">
                                    <span class="product-new-top">New</span>
                                </div>
                                <div class="item-info-product">
                                    <h4>
                                        <a href="shop-single.html">Red Bellies </a>
                                    </h4>

                                    <div class="product_price">
                                        <div class="grid-price">
                                            <span class="money">$575.00</span>
                                        </div>
                                    </div>
                                    <ul class="stars">
                                        <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 product-men my-lg-4">
                            <div class="product-shoe-info shoe text-center">
                                <div class="men-thumb-item">
                                    <img src="view/images/s6.jpg" class="img-fluid" alt="">
                                    <span class="product-new-top">New</span>
                                </div>
                                <div class="item-info-product">
                                    <h4>
                                        <a href="shop-single.html">Catwalk Flats </a>
                                    </h4>

                                    <div class="product_price">
                                        <div class="grid-price">
                                            <span class="money">$575.00</span>
                                        </div>
                                    </div>
                                    <ul class="stars">
                                        <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 product-men">
                            <div class="product-shoe-info shoe text-center">
                                <div class="men-thumb-item">
                                    <img src="view/images/s7.jpg" class="img-fluid" alt="">
                                    <span class="product-new-top">New</span>
                                </div>
                                <div class="item-info-product">
                                    <h4>
                                        <a href="shop-single.html">Running Shoes </a>
                                    </h4>

                                    <div class="product_price">
                                        <div class="grid-price">
                                            <span class="money">$675.00</span>
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
                        </div>
                        <div class="col-md-4 product-men">
                            <div class="product-shoe-info shoe text-center">
                                <div class="men-thumb-item">
                                    <img src="view/view/images/s8.jpg" class="img-fluid" alt="">
                                    <span class="product-new-top">New</span>
                                </div>
                                <div class="item-info-product">
                                    <h4>
                                        <a href="shop-single.html">Sukun Casuals </a>
                                    </h4>

                                    <div class="product_price">
                                        <div class="grid-price ">
                                            <span class="money ">$775.00</span>
                                        </div>
                                    </div>
                                    <ul class="stars">
                                        <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 product-men">
                            <div class="product-shoe-info shoe text-center">
                                <div class="men-thumb-item">
                                    <img src="view/view/images/s9.jpg" class="img-fluid" alt="">
                                    <span class="product-new-top">New</span>
                                </div>
                                <div class="item-info-product">
                                    <h4>
                                        <a href="shop-single.html">Bank Sneakers</a>
                                    </h4>

                                    <div class="product_price">
                                        <div class="grid-price">
                                            <span class="money">$875.00</span>
                                        </div>
                                    </div>
                                    <ul class="stars">
                                        <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="grid-img-right mt-4 text-right">
                        <span class="money">Flat 50% Off</span>
                        <a href="shop-single.html" class="btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //contact -->