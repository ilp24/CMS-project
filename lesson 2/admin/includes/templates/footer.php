                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.padding -->
        </section>
        <!-- /.main-content -->
        <footer class="site-footer colophon">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <a href="https://abdullah24.ga/admin/dashboard" class="footer-logo pull-right"><img src="https://abdullah24.ga/admin/assets/img/logo/logo45b11ccb850932.png" alt="Logo"></a>
                        <!-- /.footer-logo -->
                    </div>

                    <div class="col-xs-6">
                        <div class="footer-social pull-left">
                            <a href="" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="" target="_blank"><i class="fa fa-google"></i></a>
                        </div>
                        <!-- /.footer-social -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </footer>
        <!-- /.site-footer -->

        </div>
        <!-- /.overlay -->


        <script src="https://abdullah24.ga/admin/assets/js/plugins.js"></script>
        <script src="https://abdullah24.ga/admin/assets/js/jquery.dataTables.min.js"></script>
        <script src="https://abdullah24.ga/admin/assets/js/dataTables.bootstrap.min.js"></script>
        <script src="https://abdullah24.ga/admin/assets/tiny/tinymce.js"></script>
        <script src="https://abdullah24.ga/admin/assets/js/form.js"></script>
        <script src="https://abdullah24.ga/admin/assets/js/main.js"></script>
        <script src="https://abdullah24.ga/admin/assets/js/custom.js"></script>
        <script>
            $(function() {
                $('#example1').DataTable()
            })
        </script>
        <script>
            tinymce.init({
                selector: 'textarea',
                height: 380,
                theme: 'modern',
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools'
                ],
                toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                toolbar2: 'print preview media | forecolor backcolor emoticons',
                image_advtab: true,
                templates: [{
                        title: 'Test template 1',
                        content: 'Test 1'
                    },
                    {
                        title: 'Test template 2',
                        content: 'Test 2'
                    }
                ],
            });
        </script>
    </body>

</html>