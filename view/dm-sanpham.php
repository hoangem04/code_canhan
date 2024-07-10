<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <main>
            <div class="box-content-sanpham">
                <div class="box-title-sanpham">
                    <p>Áo Phông Nam</p>
                </div>
                <hr>
                <div class="box-pro-sanpham">
                    <?php foreach ($pro_dm as $key => $values) : ?>
                        <div class="ct-sanpham">
                            <a href="">
                                <?php
                                echo "<img width='100' src='../uploads/" . $values['img'] . "'>";
                                ?>
                            </a>
                            <div class="price-sanpham">
                                <p><del>350.000đ</del><span><?php echo $values['price']?></span>đ</p>
                            </div>
                            <div class="buy-now">
                                <a href="">
                                    <p>Thêm vào giỏ hàng</p>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </main>
    </div>
</body>

</html>