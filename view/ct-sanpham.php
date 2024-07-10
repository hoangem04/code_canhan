<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <div class="container">
        <main>
            <div class="box-ct-sanpham">
                <div class="box-title-sanpham">
                    <p>CHI TIẾT SẢN PHẨM</p>
                </div>
                <hr>
                <div class="box-content-ct-sanpham">
                    <div class="img-sanpham">
                        <img src="../uploads/<?php echo $ct_sp['img'] ?>" alt="">
                    </div>
                    <div class="if-sanpham">
                        <ul>
                            <li><?php echo $ct_sp['name'] ?></li>
                            <li><?php echo number_format($ct_sp['price']) ?>đ</li>
                            <li>
                                <label for="">Số lượng</label>
                                <input type="number" name="soluong" min="1">
                            </li>
                            <li>
                                <button class="buy-button" onclick="datMua()">Đặt Mua</button>
                            </li>
                        </ul>
                        <div class="mota-sp">
                            <div class="box-title-sp">
                                <p>MÔ TẢ</p>
                            </div>
                            <div class="content-mota-sp">
                                <p><?php echo $ct_sp['mota'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script>
        var selectedSize = '';

        function chonSize(size) {
            if (selectedSize) {
                document.querySelector('.size-button[data-size="' + selectedSize + '"]').classList.remove('selected');
            }
            selectedSize = size;
            document.querySelector('.size-button[data-size="' + size + '"]').classList.add('selected');
            console.log('Size đã chọn: ' + size);
        }

        function datMua() {
            if (selectedSize) {
                alert('Đã chọn size ' + selectedSize + ', và đặt mua sản phẩm!');
            } else {
                alert('Vui lòng chọn size vàtrước khi đặt mua!');
            }
        }
    </script>
</body>

</html>