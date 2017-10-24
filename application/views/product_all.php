 <main class="mt-5">

        <!--Main layout-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-1"></div>
                <!--Sidebar-->
                <div class="col-lg-2 wow fadeIn" data-wow-delay="0.2s">

                     <div class="widget-wrapper wow fadeIn" data-wow-delay="0.4s">
                        <div class="card">
                            <div class="card-body">
                            <?php foreach ($seller as $s) { ?>
                                <img src="<?php if($s->SELL_IMAGE == 0){?><?php echo base_url() ?>assets/seller/seller_default.jpg<?php } else { ?><?php echo base_url() ?>assets/seller/<?php echo $s->SELL_IMAGE ?><?php } ?>" class="img-fluid z-depth-0" height="40px" width="40px">
                                <?php echo $s->SELL_NAME; ?>
                                <small><?php echo $s->SELL_EMAIL; ?></small>
                                <p><a class="pull-rigth" href="<?php echo base_url('index.php/seller'); ?>">Edit<i class="fa fa-chevron-right ml-1"></i></a></p>
                            <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="widget-wrapper">
                        <div class="list-group">
                            <a href="#" class="list-group-item">Dashboard</a>
                            <a href="#" class="list-group-item active">Kelola Produk</a>
                            <a href="<?php echo base_url('index.php/product/add_product'); ?>" class="list-group-item">Tambah Produk</a>
                            <a href="#" class="list-group-item">Ulasan</a>
                            <a href="#" class="list-group-item">Pesan</a>
                        </div>
                    </div>

                   

                </div>
                <!--/.Sidebar-->

                <!--Main column-->
                <div class="col-lg-8">

                    <!--First row-->
                    <div class="row wow fadeIn" data-wow-delay="0.4s">
                        
                    </div>
                    <div class="col-lg-1"></div>
                    <!--/.First row-->
                    <!--Second row-->
                    <div class="row">
                        <!--First columnn-->
                        <div class="col-lg-12">
                            <!--Card-->
                            <div class="card wow fadeIn" data-wow-delay="0.2s">
                                <!--Card content-->
                                <div class="card-body">
                                    <!--Title-->
                                    <h6 class="card-title">Data Produk</h6>
                                    <hr>
                                    <!--Text-->
                                    <?php if ($product == 0) {?>
                                        <div class="row">
                                        <div class="col-lg-4">
                                            
                                        </div>
                                        <div class="col-lg-8">
                                            <h3>Belum ada produk</h3>
                                        </div>
                                        
                                    </div>
                                   <?php } else{ ?>
                                        <p class="card-text">Jumlah data produk yang telah anda masukkan <?php echo $count; ?>
                                    </p>
                                    <table class="table table-striped table-hover table-condensed">
                                        <thead>
                                          <tr>
                                            <th>Gambar</th>
                                            <th>Nama</th>
                                            <th>Deskripsi</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                        foreach($product as $p){
                                            ?>
                                          <tr>
                                            <td><img src="<?php echo base_url(); ?>assets/product/<?php echo $p->PROD_IMAGE ?>" width="100px" height="60"></td>
                                                <td><?php echo $p->PROD_NAME ?></td>                
                                              <td><?php echo $p->PROD_DESCRIPTION ?></td>
                                              <td><?php echo $p->PROD_PRICE ?></td>
                                              <td><?php echo $p->PROD_STOCK ?></td>
                                            <td><div class="btn-group">
                                              <a href="<?php echo base_url(); ?>index.php/product/EditProduct/<?php echo $p->PROD_ID ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil mr-1"></i></a>
                                              <a href="<?php echo base_url(); ?>index.php/product/delete/<?php echo $p->PROD_ID ?>" class="btn btn-sm btn-danger"><i class="fa fa-close mr-1"></i></a>
                                            </div></td>
                                          </tr>
                                          <?php } ?>
                                        </tbody>
                                    </table> 
                                    <?php } ?>
                                </div>

                            </div>
                            <!--/.Card-->
                        </div>
                        <!--First columnn-->
                    </div>
                    <!--/.Second row-->

                </div>
                <!--/.Main column-->

            </div>
        </div>
        <!--/.Main layout-->

    </main>