<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800 ml-5 custom-heading"><?= $title; ?></h1>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-beli">
                <?php $grand_total = 0;
                if ($cart = $this->cart->contents()) {
                    foreach ($cart as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h5  >Your total spending: Rp. " . number_format($grand_total, 0, ',', '.');
                ?>
            </div><br><br>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>

            <form action="<?= base_url('buku/payproses'); ?>" method="post">
                <div class="form-group">
                    <label for="">Full name</label>
                    <input type="text" name="name" placeholder="Full name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">address</label>
                    <input type="text" name="address" placeholder="Address" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">phone</label>
                    <input type="text" name="phone" placeholder="Phone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">delivery</label>
                    <select class="form-control">
                        <option value="">JNE</option>
                        <option value="">TIKI</option>
                        <option value="">SICEPAT</option>
                        <option value="">POS INDONESIA</option>
                        <option value="">GOJEK</option>
                        <option value="">GRAB</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">bank</label>
                    <select class="form-control">
                        <option value="">BCA - XXXXXX</option>
                        <option value="">BNI - XXXXXX</option>
                        <option value="">OVO - XXXXXX</option>
                        <option value="">GOPAY - XXXXXX</option>
                    </select>
                </div>

                <BUtton type="submit" class="btn btn-sm btn-primary">Pay now</BUtton>

            </form>
        <?php } else {
                    echo "<h2>Your shopping cart is still empty" . '</div>';
                } ?>
        </div>

        <div class="col-md-2"></div>
    </div>
</div>










</div>