 <!--Footer-->
    <footer class="page-footer center-on-small-only">

        <!--Footer links-->
        <div class="container">
            <div class="row">
                <!--First column-->
                <div class="col-lg-3 col-md-6 ml-auto">
                    <h6 class="title mb-3"><strong>Taman Usaha Polije</strong></h6>
                    <p>Untuk mewadahi para mahasiswa yang ingin berwirausaha.</p>
                    <p>Semoga dengan adanya web ini dapat dimanfaatkan sebaik-baiknya oleh para mahasiswa dalam membantu meningkatkan hasil penjualan</p>
                </div>
                <!--/.First column-->
                <hr class="w-100 clearfix d-sm-none">
                <!--Second column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h6 class="title mb-3"><strong>Tentang</strong></h6>
                    <ul>
                        <li>
                            <a href="#!">Bantuan</a>
                        </li>
                        <li>
                            <a href="#!">Perjanjian</a>
                        </li>
                        <li>
                            <a href="#!"></a>
                        </li>
                        <li>
                            <a href="#!"></a>
                        </li>
                    </ul>
                </div>
                <!--/.Second column-->
                <hr class="w-100 clearfix d-sm-none">
                <!--Third column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h6 class="title mb-3"><strong>Kontak</strong></h6>
                    <ul>
                        <li>
                            <a href="#!"></a>
                        </li>
                     
                        </li>
                    </ul>
                </div>
                <!--/.Third column-->
                <hr class="w-100 clearfix d-sm-none">
                <!--Fourth column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h6 class="title mb-3"><strong>Media Sosial</strong></h6>
                    <ul>
                        <li>
                            <a href="#!">Instagram</a>
                        </li>
                        <li>
                            <a href="#!">Facebook</a>
                        </li>
                        <li>
                            <a href="#!">Twitter</a>
                        </li>
                        <li>
                            <a href="#!">Youtube</a>
                        </li>
                    </ul>
                </div>
                <!--/.Fourth column-->
            </div>
        </div>
        <!--/.Footer links-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2017 <a href="https://www.tamupoltek.com"> TamuPoltek.com </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->



    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
            
        <style>
            .ui-autocomplete > li.ui-state-focus {
                background-color: #f5f5f5;
                color:#ffffff;
            }
            .ui-helper-hidden-accessible {
                display: none;
            }  
        </style>  
        <script>
            $(function () {
                $('#id').autocomplete({      
					minLength: 1,
					delay: 0,
					source:'<?php echo base_url()?>/index.php/Welcome/suggest_prod'
				 });  
            });
        </script>
    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/mdb.min.js"></script>

    <script>
        new WOW().init();

        $(document).ready( function() {
        $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
        });

        $('.btn-file :file').on('fileselect', function(event, label) {
            
            var input = $(this).parents('.input-group').find(':text'),
                log = label;
            
            if( input.length ) {
                input.val(log);
            } else {
                if( log ) alert(log);
            }
        
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#img-upload').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function(){
            readURL(this);
        });     
    });
    </script>
    <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>

</body>

</html>