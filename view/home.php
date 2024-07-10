<div class="box-content">
    <main>
        <div class="container-pro">
            <div class="box-product-left">
                <div class="box-sale">
                    <p class="text1">GIÁ RẤT TỐT. THỜI TỚI ĐANG SALE</p>
                    <p class="text2">Thỏa sức mua sắm với 47K</p>
                </div>
                <div class="container-product-left">
                    <?php foreach ($dssp as $key => $values) : ?>
                        <form action="?act=giohang" method="">
                            <div class="product">
                                <a href="?act=ct-sanpham&idsp=<?php echo $values['id'] ?>">
                                    <img src="../uploads/<?php echo $values['img'] ?>">
                                </a>
                                <div class="price-product">
                                    <p><del>350.000đ</del><span><?php echo number_format($values['price']) ?></span>đ</p>
                                </div>
                                <div class="buy-now">
                                    <form action="?act=add-giohang" method="post">
                                        <input type="text" hidden name="iduser" value="<?= $iduser ?>">
                                        <input type="text" hidden name="id" value="<?= $value['id']  ?>">
                                        <input type="text" hidden name="name" value="<?= $value['name']  ?>">
                                        <input type="text" hidden name="img" value="<?= $value['img']  ?>">
                                        <input type="text" hidden name="price" value="<?= $values['price'] ?>">
                                        <button name="btnSumbit">
                                            <a href="?act=add-giohang&idsp=<?php echo $values['id'] ?>">
                                                Thêm vào giỏ hàng
                                            </a>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </form>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="box-product-right">
                <a href="">
                    <img src="../asset/css/img/banner-product-right.jpg" alt="">
                </a>
            </div>
        </div>
        <!-- end container pro 1 -->
        <hr>
        <div class="title-pro2">
            <a href="">
                <p>Xem thêm các sản phẩm khác</p>
            </a>
        </div>
        <!-- container pro 2 -->
        <div class="container-pro">
            <div class="box-product-right">
                <a href="">
                    <img src="../asset/css/img/banner-product-right-2.jpg" alt="">
                </a>
            </div>
            <div class="box-product-left">
                <div class="box-sale">
                    <p class="text1">WRINKLE FREE</p>
                    <p class="text2">Mặc Ngay - Không Cần Ủi . Mở bán 17/11/2023 . Sale 20% trong 3 ngày đầu mở bán</p>
                </div>
                <div class="container-product-left2">
                    <div class="product">
                        <a href="">
                            <img src="../asset/css/img/aosomi-ngan.jpg" alt="">
                        </a>
                        <div class="price-product">
                            <p><del>30$</del><span>20$</span></p>
                        </div>
                        <div class="buy-now">
                            <a href="">
                                <p>Thêm vào giỏ hàng</p>
                            </a>
                        </div>
                    </div>
                    <div class="product">
                        <a href="">
                            <img src="../asset/css/img/aosomi-den.jpg" alt="">
                        </a>
                        <div class="price-product">
                            <p><del>30$</del><span>20$</span></p>
                        </div>
                        <div class="buy-now">
                            <a href="">
                                <p>Thêm vào giỏ hàng</p>
                            </a>
                        </div>
                    </div>
                    <div class="product">
                        <a href="">
                            <img src="../asset/css/img/aosomi-nam.jpg" alt="">
                        </a>
                        <div class="price-product">
                            <p><del>30$</del><span>20$</span></p>
                        </div>
                        <div class="buy-now">
                            <a href="">
                                <p>Thêm vào giỏ hàng</p>
                            </a>
                        </div>
                    </div>
                    <div class="product">
                        <a href="">
                            <img src="../asset/css/img/aosomi-nau.jpg" alt="">
                        </a>
                        <div class="price-product">
                            <p><del>30$</del><span>20$</span></p>
                        </div>
                        <div class="buy-now">
                            <a href="">
                                <p>Thêm vào giỏ hàng</p>
                            </a>
                        </div>
                    </div>
                    <div class="product">
                        <a href="">
                            <img src="../asset/css/img/aosomi-nam.jpg" alt="">
                        </a>
                        <div class="price-product">
                            <p><del>30$</del><span>20$</span></p>
                        </div>
                        <div class="buy-now">
                            <a href="">
                                <p>Thêm vào giỏ hàng</p>
                            </a>
                        </div>
                    </div>
                    <div class="product">
                        <a href="">
                            <img src="../asset/css/img/aosomi-nam.jpg" alt="">
                        </a>
                        <div class="price-product">
                            <p><del>30$</del><span>20$</span></p>
                        </div>
                        <div class="buy-now">
                            <a href="">
                                <p>Thêm vào giỏ hàng</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end container pro 2 -->
        <hr>
        <div class="title-skirt">
            <p>BEST T-SHIRT</p>
        </div>
        <div class="container-best-skirt">
            <div class="content-best-skirt">
                <div class="box-pro">
                    <div class="pro">
                        <a href="">
                            <img src="../asset/css/img/aophong-hot1.jpg" alt="">
                        </a>
                        <div class="price">
                            <p><del>40$</del><span>20$</span></p>
                        </div>
                        <div class="buy-now">
                            <a href="">
                                Mua ngay
                            </a>
                        </div>
                    </div>
                    <div class="pro">
                        <a href="">
                            <img src="../asset/css/img/aosomi-hot1.jpg" alt="">
                        </a>
                        <div class="price">
                            <p><del>40$</del><span>20$</span></p>
                        </div>
                        <div class="buy-now">
                            <a href="">
                                Mua ngay
                            </a>
                        </div>
                    </div>
                    <div class="pro">
                        <a href="">
                            <img src="../asset/css/img/aosomi-hot2.jpg" alt="">
                        </a>
                        <div class="price">
                            <p><del>40$</del><span>20$</span></p>
                        </div>
                        <div class="buy-now">
                            <a href="">
                                Mua ngay
                            </a>
                        </div>
                    </div>
                    <div class="pro">
                        <a href="">
                            <img src="../asset/css/img/aosomi-hot3.jpg" alt="">
                        </a>
                        <div class="price">
                            <p><del>40$</del><span>20$</span></p>
                        </div>
                        <div class="buy-now">
                            <a href="">
                                Mua ngay
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>