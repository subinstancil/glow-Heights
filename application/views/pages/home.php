<!-- 
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Home</h3>
                    </div>
                </div> -->

                <div class="row" id="topSection">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="d-flex">
                                    <div>
                                        <h3 class="card-title m-b-5"><span class="lstick"></span>Search </h3>
                                    </div>
                                 </div>
                                    


                                    <form class="form-horizontal" name="mainform" id="mainform">


                                        <!-- <div class="form-group">
                                            <label class="col-md-5 float-left">Full Name</label>
                                            <div class="col-md-7 float-left">
                                                <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line">
                                            </div>
                                        </div> -->
                                        
                                        <div class="form-group">

                                            <div class="col-md-3 float-left mb-3 mb-md-0">
                                                <select class="form-control" name="stream" id="stream">
                                                    <option value="" selected>Stream</option>
                                                    <?php foreach ($streams as $stream): ?>
                                                        <option value="<?php echo $stream['stream_id']; ?>"><?php echo $stream['stream_name']; ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>

                                            <div class="col-md-3 float-left mb-3 mb-md-0">
                                                <select class="form-control" name="course" id="course" >
                                                    <option value="" selected>Course</option>
                                                    
                                                </select>
                                            </div>

                                            <div class="col-md-2 float-left mb-3 mb-md-0">
                                                <select class="form-control" name="state" id="country">
                                                    <option value="" selected>Country</option>
                                                    <?php foreach ($country as $pl): ?>
                                                        <option value="<?php echo $pl['country_id']; ?>"><?php echo $pl['country_name']; ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>

                                            <div class="col-md-2 float-left mb-3 mb-md-0">
                                                <select class="form-control" name="state" id="state">
                                                    <option value="" selected>State</option>
                                                    
                                                </select>
                                            </div>

                                             <div class="col-md-2 float-left mb-md-0">
                                                <select class="form-control" name="place" id="place">
                                                    <option value="" selected>Place</option>
    
                                                </select>
                                            </div>

                                        </div>
                                        <div class="form-group float-right">
                                            <div class="col-md-8 float-right mb-md-0">

                                                <div class="col-md-6 float-left px-xs-0">
                                                    <label></label>
                                                    <input type="number" placeholder="Fees From" name="from" class="form-control form-control-line">
                                                </div>

                                                 <div class="col-md-6 float-left pr-md-0">
                                                    <label></label>
                                                    <input type="number" placeholder="Fees To" name="to" class="form-control form-control-line">
                                                </div>
                                            </div>    
                                        </div>

                                        <br><br><br>
                                        <div class="form-group">
                                            <div class="col-sm-12 float-left">
                                                <button class="btn btn-success btn-block">submit</button>
                                            </div>
                                        </div>
                                        
                                    </form>


                        </div>
                    </div>
                </div>
            </div>


             <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="d-flex mb-2">
                                    <div>
                                        <h3 class="card-title m-b-5"><span class="lstick"></span>Result</h3>
                                    </div>
                                 </div>

                                <input class="mb-2 float-right mr-2 btn btn-link" type="button" onclick="printDiv('mainresult')" value="Print" style="" />
                                    
                                 <div class="table-responsive table-hover" id="mainresult">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>College Name</th>
                                                <th>Course</th>
                                                <th class="trow">Fees</th>
                                                <th>Total Fees</th>
                                                <th>Duration</th>
                                                <th>Qualification</th>
                                                <th>University</th>
                                                <th>After</th>
                                                <th>Place</th>
                                            </tr>
                                        </thead>
                                        <tbody id="mainresulttbody">
                                            
                                        </tbody>
                                    </table>
                                </div>


                        </div>
                    </div>
                </div>
            </div>
            



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
                if(stream_id == ''){
                     $('#course').html("<option value='' selected>Course</option>");
                }
            });

            $('#state').change(function(){
                var state_id = $('#state').val();
                if(state_id != '')
                {
                    $.ajax({
                        url:"<?php echo base_url();?>/fetch_place",
                        method:"POST",
                        data:{state_id:state_id},
                        success:function(data)
                        {
                            $('#place').html(data);
                        }
                    })
                }
                if(state_id == ''){
                     $('#place').html("<option value='' selected>Place</option>");
                }
            });

            $('#country').change(function(){
                var country_id = $('#country').val();
                if(country_id != '')
                {
                    $.ajax({
                        url:"<?php echo base_url();?>/fetch_con",
                        method:"POST",
                        data:{country_id:country_id},
                        success:function(data)
                        {
                            $('#state').html(data);
                        }
                    })
                }
                if(country_id == ''){
                     $('#state').html("<option value='' selected>State</option>");
                }
            });

            



            $("#mainform").submit(function(e) {



                e.preventDefault(); // avoid to execute the actual submit of the form.

                var form = $(this);
                $.ajax({
                       type: "POST",
                       url: "<?php echo base_url();?>/fetch_details",
                       data: form.serialize(), // serializes the form's elements.
                       success: function(data)
                       {
                            $('#mainresulttbody').html(data);
                            $('#mainresult').show();
                            var x = $("#mainresulttbody").position();
                            window.scrollTo(x.left, x.top);
                       }
                     });

                });


        });
        </script>

        <script type="text/javascript">
            function printDiv(divName) {
             var printContents = document.getElementById(divName).innerHTML;

             var originalContents = document.body.innerHTML;

             document.body.innerHTML = printContents;

            var y = document.getElementsByClassName("trow");
                var i;
                for (i = 0; i < y.length; i++) {
                  y[i].style.width = "40%";
                }

             window.print();

             document.body.innerHTML = originalContents;
            }
        </script>