<div class="row mb box">
    <div class="box_left">
        <form action="index.php?act=billconfirm" method="POST">
            <div class="mb">
                <div class="box_title">THÔNG TIN NGƯỜI ĐẶT HÀNG</div>
                <div class="box_content billform">
                    <table>
                        <?php
                        if (isset($_SESSION['user'])) {
                            $name = $_SESSION['user']['user'];
                            $address = $_SESSION['user']['address'];
                            $email = $_SESSION['user']['email'];
                            $tel = $_SESSION['user']['tel'];
                        } else {
                            $name = "";
                            $address = "";
                            $email = "";
                            $tel = "";
                        }
                        ?>
                        <tr>
                            <th>Người đặt hàng</th>
                            <td><input type="text" name="name" id="" value="<?= $name ?>"></td>
                        </tr>
                        <tr>
                            <th>Địa chỉ</th>
                            <td><input type="text" name="address" id="" value="<?= $address ?>"></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><input type="text" name="email" id="" value="<?= $email ?>"></td>
                        </tr>
                        <tr>
                            <th>Điện thoại</th>
                            <td><input type="text" name="tel" id="" value="<?= $tel ?>"></td>
                        </tr>
                    </table>
                </div>
            </div>
 

        <div class="mb">
            <div class="box_title">PHƯƠNG THỨC THANH TOÁN</div>
            <div class="payment menu_right">
                <div class="pay"><input type="radio" name="pttt" checked value="1"> Thanh toán khi nhận hàng</div>
                <div class="pay"><input type="radio" name="pttt" value="2"> Chuyển khoản qua ngân hàng</div>
                <div class="pay"><input type="radio" name="pttt" value="3"> Thanh toán online</div>

            </div>
        </div>
            <div class="mb">
                <div class="box_title">THÔNG TIN GIỎ HÀNG</div>
                <div class="box_content cart mb">
                    <table border="1">
                        <?php
                        viewcart(0);
                        ?>

                    </table>
                </div>
            </div>
            <div class="mb bill">
                    <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
                </div>
            
    </div>
    <div class="box_right">
        
    </div>
</div>