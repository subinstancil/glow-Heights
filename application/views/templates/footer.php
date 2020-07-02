  </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2017 Admin Pro by wrappixel.com </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url();?>assets/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="<?php echo base_url();?>assets/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url();?>assets/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url();?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url();?>assets/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url();?>assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url();?>assets/assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="<?php echo base_url();?>assets/assets/plugins/d3/d3.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="<?php echo base_url();?>assets/js/dashboard.js"></script>


    <script type="text/javascript">
        $(document).ready(function(){
            $('#mainresult').hide();

            $('#stream').change(function(){
                var stream_id = $('#stream').val();
                if(stream_id != '')
                {
                    $.ajax({
                        url:"<?php echo base_url();?>/fetch_course",
                        method:"POST",
                        data:{stream_id:stream_id},
                        success:function(data)
                        {
                            $('#course').html(data);
                        }
                    })
                }
            });

            $('#course').change(function(){
                var course_id = $('#course').val();
                if(course_id != '')
                {
                    $.ajax({
                        url:"<?php echo base_url();?>/fetch_place",
                        method:"POST",
                        data:{course_id:course_id},
                        success:function(data)
                        {
                            $('#place').html(data);
                        }
                    })
                }
            });



            $("#mainform").submit(function(e) {

                e.preventDefault(); // avoid to execute the actual submit of the form.

                var form = $(this);
                var url = form.attr('action');

                $.ajax({
                       type: "POST",
                       url: "<?php echo base_url();?>/fetch_details",
                       data: form.serialize(), // serializes the form's elements.
                       success: function(data)
                       {
                            $('#mainresulttbody').html(data);
                            $('#mainresult').show();
                       }
                     });

                });


        });
    </script>
</body>

</html>