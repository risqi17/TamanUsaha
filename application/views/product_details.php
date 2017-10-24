<main class="mt-5">

        <!--Main layout-->
        <div class="container-fluid">
            <div class="row">

                <!--Sidebar-->
                <div class="col-lg-1 mb-4"></div>
                <div class="col-lg-3 mb-4 wow fadeIn" data-wow-delay="0.2s">

                   <div class="widget-wrapper">
                        <h4>Kategori:</h4>
                        <br>
                        <div class="list-group">
                            <?php foreach ($cat as $cat) { ?>
                            <a href="<?php echo base_url()?>index.php/welcome/pilih_cat?id=<?php echo $cat->CAT_ID?>" class="list-group-item"><?php echo $cat->CAT_NAME?></a>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="widget-wrapper wow fadeIn" data-wow-delay="0.4s">
                        <h4>Kritik dan saran:</h4>
                        <br>
                        <div class="card">
                            <div class="card-body">
                                <p><strong>Masukkan dari anda sangat berharga</strong></p>
                                <p>Untuk membuat TamuPoltek menjadi lebih baik lagi</p>
                                <form action="<?php echo base_url() ?>index.php/welcome/addFeedback" method="post">
                              
                                <div class="md-form">
                                    <i class="fa fa-user prefix"></i>
                                    <input type="text" id="" name="email" class="form-control">
                                    <label for="form1">Emailmu</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="text" id="form2" name="pesan" class="form-control">
                                    <label for="form2">Pesanmu</label>
                                </div>
                                <button type="submit" class="btn btn-default">Kirim</button>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/.Sidebar-->

                <!--Main column-->
                <div class="col-lg-7">
                    <?php foreach ($product as $p) {
                        ?>
                    <!--First row-->
                    <div class="row wow fadeIn" data-wow-delay="0.4s">
                        <div class="col-md-12">
                            <!--Product-->
                            <div class="product-wrapper">

                                <!--Featured image-->
                                <div class="view overlay hm-white-light z-depth-1-half">
                                    <center>
                                    <img src="<?php echo base_url() ?>assets/product/<?php echo $p->PROD_IMAGE ?>" class="img-fluid " alt="">
                                    </center>
                                    <div class="mask">
                                    </div>
                                    <h3 class="price"><span class="badge red darken-2">Rp <?php echo $p->PROD_PRICE ?></span></h3>
                                </div>
                                <!--/.Featured image-->

                                <br>

                                <!--Product data-->
                                <h2 class="h2-responsive mt-4"><?php echo $p->PROD_NAME ?></h2>
                                <h6>(<?php echo $p->SELL_NAME ?>)</h6>
                                <hr>
                                <p><?php echo $p->PROD_DESCRIPTION ?>.</p>
                                <p><?php echo $p->PROD_OTHER_DESC ?></p>
                                <h5><b>Kontak Penjual</b></h5>
                                <h6>Hubungi kontak penjual dibawah jika ingin membeli produk ini.</h6>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                    Whatsapp / Handphone
                                    </div>
                                    <div class="col-md-8">
                                    <?php echo $p->SELL_PHONE ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                    Facebook
                                    </div>
                                    <div class="col-md-8">
                                    <?php echo $p->SELL_FB ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                    Instagram
                                    </div>
                                    <div class="col-md-8">
                                    <?php echo $p->SELL_INSTA ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                    LINE
                                    </div>
                                    <div class="col-md-8">
                                    <?php echo $p->SELL_LINE ?>
                                    </div>
                                </div>
                            </div>
                            <!--Product-->

                        </div>
                    </div>
                    <!--/.First row-->
                    <?php } ?>
                    <!--Second row-->
                    <div class="row">

                     
                    </div>
                    <!--/.Second row-->

                </div>
                <!--/.Main column-->
				<div class="col-lg-1"></div>
            </div>
        </div>
        <!--/.Main layout-->

    </main>
