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
                            <a href="<?php echo base_url()?>index.php/welcome/pilih_cat?id=<?php echo $cat->CAT_ID?>&name=<?php echo $cat->CAT_NAME?>" class="list-group-item"><?php echo $cat->CAT_NAME?></a>
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

                    <!--First row-->
                    <div class="row wow fadeIn" data-wow-delay="0.4s">
                        <div class="col-lg-12">
                            <div class="divider-new">
                                <h2 class="h2-responsive">Apa yang baru?</h2>
                            </div>

                            <!--Carousel Wrapper-->
                            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                                <!--Indicators-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                                    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                                </ol>
                                <!--/.Indicators-->
                                <!--Slides-->
                                <div class="carousel-inner" role="listbox">
                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <img src="<?php base_url() ?>assets/img/slides/1.jpg" alt="First slide" class="img-fluid">
                                        <div class="carousel-caption">
                                            
                                            <br>
                                        </div>
                                    </div>
                                    <!--/First slide-->
                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <img src="<?php base_url() ?>assets/img/slides/2.jpg" alt="Second slide" class="img-fluid">
                                        <div class="carousel-caption">
                                            
                                            <br>
                                        </div>
                                    </div>
                                    <!--/Second slide-->
                                    <!--Third slide-->
                                    <div class="carousel-item">
                                        <img src="<?php base_url() ?>assets/img/slides/3.jpg" alt="Third slide" class="img-fluid">
                                        <div class="carousel-caption">
                                            <h4></h4>
                                            <br>
                                        </div>
                                    </div>
                                    <!--/Third slide-->
                                     <!--Third slide-->
                                    <div class="carousel-item">
                                        <img src="<?php base_url() ?>assets/img/slides/4.jpg" alt="Third slide" class="img-fluid">
                                        <div class="carousel-caption">
                                            <h4></h4>
                                            <br>
                                        </div>
                                    </div>
                                    <!--/Third slide-->
                                </div>
                                <!--/.Slides-->
                                <!--Controls-->
                                <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <!--/.Controls-->
                            </div>
                            <!--/.Carousel Wrapper-->
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <!--/.First row-->
                    <br>
                    <hr class="extra-margins">

                    <!--Second row-->
                    <div class="row">
                        <?php
                        foreach ($product as $p) {
                       ?>
                        <!--First columnn-->
                        <div class="col-lg-4 mb-4">
                            <!--Card-->
                            <div class="card wow fadeIn" data-wow-delay="0.2s" >

                                <!--Card image-->
                                <a href="<?php echo base_url()?>index.php/Welcome/DetailProduct/<?php echo $p->PROD_ID ?>"><img class="img-fluid" src="<?php echo base_url()?>assets/product/<?php echo $p->PROD_IMAGE ?>" alt="Card image cap"/></a>

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Title-->
                                    <h5 class="card-title" style="height: 40px"><?php echo substr($p->PROD_NAME,0,45); if (strlen($p->PROD_NAME) > 45) {
                                        echo '...';
                                    } ?></h5>
                                    <!--Text-->
                                    <p class="card-text"><?php echo substr($p->PROD_DESCRIPTION,0 , 40) ?>...
                                    </p>
                                    <a href="<?php echo base_url()?>index.php/Welcome/DetailProduct/<?php echo $p->PROD_ID ?>" class="btn btn-default btn-block">Rp. <strong><?php echo $p->PROD_PRICE ?></strong></a>
                                </div>

                            </div>
                            <!--/.Card-->
                        </div>
                        <!--First columnn-->
                        <?php } ?>
                    </div>
                    <!--/.Second row-->

                </div>
                <!--/.Main column-->

            </div>
        </div>
        <!--/.Main layout-->

    </main>