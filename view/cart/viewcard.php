
<div class="row mb box">
    <div class="box_left">
        <div class="mb">
            <div class="box_title">GIỎ HÀNG</div>
            <div class="box_content cart">
                <table border="1">
                    <?php
                        viewcart(1);                   
                    ?>

                </table>
            </div>
        </div>
        <div class="mb bill">
            <a href="index.php?act=bill"><input type="submit" value="Tiếp tục đặt hàng"></a> || <a href="index.php?act=delcart"><input type="button" value="Xóa giỏ hàng"></a>
        </div>
    </div>

    <div class="box_right">
        <?php
        ?>
    </div>
</div>