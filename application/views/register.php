   <main class="mt-5">

        <!--Main layout-->
        <div class="container-fluid">
            <div class="row">

                <!--Sidebar-->
                <div class="col-lg-1"></div>
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.2s">
                    

                </div>
                <!--/.Sidebar-->

                <!--Main column-->
                <div class="col-lg-5">
                    <div class="wow fadeIn" data-wow-delay="0.4s">
                        <h4>Mendaftar jadi penjual di TamuPoltek</h4>
                        <br>
                        <div class="card">
                            <div class="card-body">
                                <p><strong>Jadilah penjual di TamuPoltek.com</strong></p>
                                <p>Untuk meningkatkan hasilmu</p>
                                <form action="<?php echo base_url();?>index.php/register/register" method="post">
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="text" name="email" id="form1" class="form-control">
                                    <label for="form1">Email</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-user prefix"></i>
                                    <input type="text" id="form2" name="nama" class="form-control">
                                    <label for="form2">Nama Lengkap</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" id="form2" class="form-control" required="required">
                                    <label for="form2">Password</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" id="form2" class="form-control" name="pass" required="required">
                                    <label for="form2">Ulangi Password</label>
                                </div>
                                  <div class="row">
                                    <div class="col-lg-1">
                                        
                                    </div>
                                    <div class="col-lg-10">
                                    <?= $this->session->flashdata('terdaftar')?>        
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-default pull-right">Daftar</button>
                                <a href="<?php echo base_url('index.php/login'); ?>" class="btn btn-primary pull-right">Login</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div> 
                <!--/.Main column-->

            </div>
        </div>
        <!--/.Main layout-->

    </main>