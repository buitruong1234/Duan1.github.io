<div class="side-bar col-lg-4">
                    <div class="search-bar w3layouts-newsletter">
                        <h3 class="sear-head">Tìm Kiếm Sản Phẩm..</h3>
                        <form action="index.php?act=sanpham" method="post" class="d-flex">
                            <input type="text"  placeholder="Product name..." name="kyw" class="form-control" required="">
                            <button class="btn1" type="submit" name="timkiem"><span class="fa fa-search" aria-hidden="true"></span></button>
                        </form>
                    </div>
                    <!--preference -->
                    <div class="left-side my-4">
                        <h3 class="sear-head">Danh Mục</h3>
                        <ul class="w3layouts-box-list">
                        <?php
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=".$id;
                echo '<li>
                <input type="checkbox" class="checked">
                <span class="span"><a href="'.$linkdm.'">'.$name.'</a></span>
            </li>';
            }
            ?>
                            <!-- <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Shoes</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Áo sơ mi</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Quần ÂU Nam</span>
                            </li> -->
                     
                        </ul>
                    </div>
                    <!-- // preference -->
                    <!-- discounts -->
                    <div class="left-side">
                        <h3 class="sear-head">Sale</h3>
                        <ul class="w3layouts-box-list">
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">5% or More</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">10% or More</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">20% or More</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">30% or More</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">50% or More</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">60% or More</span>
                            </li>
                        </ul>
                    </div>
                    <!-- //discounts -->
                    <!-- reviews -->
                    <div class="customer-rev left-side my-4">
                        <h3 class="sear-head">Customer Review</h3>
                        <ul class="w3layouts-box-list">
                            <li>
                                <a href="#">
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span>5.0</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star-o" aria-hidden="true"></span>
                                    <span>4.0</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star-half-o" aria-hidden="true"></span>
                                    <span class="fa fa-star-o" aria-hidden="true"></span>
                                    <span>3.5</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star-o" aria-hidden="true"></span>
                                    <span class="fa fa-star-o" aria-hidden="true"></span>
                                    <span>3.0</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star-half-o" aria-hidden="true"></span>
                                    <span class="fa fa-star-o" aria-hidden="true"></span>
                                    <span class="fa fa-star-o" aria-hidden="true"></span>
                                    <span>2.5</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- //reviews -->
                    <!-- deals -->
                    <div class="deal-leftmk left-side">
                        <h3 class="sear-head">Top 10 Sản Phẩm Yêu Thích</h3>
                        <?php
        foreach ($dstop10 as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=".$id;
            $img = $img_path.$img;
            echo ' <div class="special-sec1 row mb-3">
            <div class="img-deals col-md-4">
            <a href="'.$linksp.'">   <img src="'.$img.'" class="img-fluid" alt=""></a>
            </div>
            <div class="img-deal1 col-md-4">
            <a href="'.$linksp.'">  <h3>'.$name.'</h3> </a>
                <a href="'.$linksp.'">'.$price.'</a>
            </div>

        </div>';
        }
        ?>
                        <!-- <div class="special-sec1 row mb-3">
                            <div class="img-deals col-md-4">
                                <img src="view/images/s4.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="img-deal1 col-md-4">
                                <h3>Shuberry Heels</h3>
                                <a href="shop-single.html">$180.00</a>
                            </div>

                        </div>
                        <div class="special-sec1 row">
                            <div class="img-deals col-md-4">
                                <img src="view/images/s2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="img-deal1 col-md-8">
                                <h3>Chikku Loafers</h3>
                                <a href="shop-single.html">$99.00</a>
                            </div>

                        </div>
                        <div class="special-sec1 row my-3">
                            <div class="img-deals col-md-4">
                                <img src="view/images/s1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="img-deal1 col-md-8">
                                <h3>Bella Toes</h3>
                                <a href="shop-single.html">$165.00</a>
                            </div>

                        </div>
                        <div class="special-sec1 row">
                            <div class="img-deals col-md-4">
                                <img src="view/images/s5.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="img-deal1 col-md-8">
                                <h3>Red Bellies</h3>
                                <a href="shop-single.html">$225.00</a>
                            </div>

                        </div>
                        <div class="special-sec1 row mt-3">
                            <div class="img-deals col-md-4">
                                <img src="view/images/s3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="img-deal1 col-md-8">
                                <h3>(SRV) Sneakers</h3>
                                <a href="shop-single.html">$169.00</a>
                            </div>

                        </div> -->
                    </div>
                    <!-- //deals -->
                    

                </div>