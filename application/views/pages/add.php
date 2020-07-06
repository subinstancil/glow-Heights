 

               <div class="row">
                    <div class="col-lg-2 col-md-2">
                                <button class="btn btn-secondary mb-3" id="university">Add New University</button>
                </div>

                <div class="col-lg-2 col-md-2">
                       
                                <button class="btn btn-secondary mb-3" id="college">Add New College</button>
                        
                </div>

                <div class="col-lg-2 col-md-2">
   
                                <button class="btn btn-secondary mb-3" id="stream">Add New Stream</button>

                </div>

                <div class="col-lg-2 col-md-2">

                                <button class="btn btn-secondary mb-3" id="course">Add New Course</button>
 
                </div>
                 <div class="col-lg-2 col-md-2">

                                <button class="btn btn-secondary mb-3" id="country">Add New country</button>
 
                </div>
                 <div class="col-lg-1 col-md-1">

                                <button class="btn btn-secondary mb-3" id="state">Add New state</button>
 
                </div>
                 <div class="col-lg-2 col-md-2">

                                <button class="btn btn-secondary mb-3" id="place">Add New Place</button>
 
                </div>

</div>


                <div class="row" id="university_v">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="d-flex mb-2">
                                    <div>
                                        <h3 class="card-title m-b-5"><span class="lstick"></span>Add University</h3>
                                    </div>

                                 </div>
                                 
                                 <form class="form-horizontal" name="universityform" id="universityform">
                                    <div class="form-group">
                                        <div class="col-md-6 float-left mb-3">
                                            <input type="text" placeholder="Enter University Name" name="university" class="form-control form-control-line" id="uni" required>
                                        </div>
                                        <div class="col-md-6 float-left">
                                            <input type="submit" name="" value="Add" class="btn btn-primary">
                                        </div>
                                    </div>
                                 </form>
                                


                        </div>
                    </div>
                </div>

            </div>

             <div class="row" id="course_v">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="d-flex mb-2">
                                    <div>
                                        <h3 class="card-title m-b-5"><span class="lstick"></span>Add course</h3>
                                    </div>

                                 </div>


                        </div>
                    </div>
                </div>

            </div>


           

             <div class="row" id="stream_v">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="d-flex mb-2">
                                    <div>
                                        <h3 class="card-title m-b-5"><span class="lstick"></span>Add Stream</h3>
                                    </div>

                                 </div>


                        </div>
                    </div>
                </div>

            </div>

             <div class="row" id="country_v">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="d-flex mb-2">
                                    <div>
                                        <h3 class="card-title m-b-5"><span class="lstick"></span>Add Country</h3>
                                    </div>

                                 </div>


                        </div>
                    </div>
                </div>

            </div>

            <div class="row" id="state_v">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="d-flex mb-2">
                                    <div>
                                        <h3 class="card-title m-b-5"><span class="lstick"></span>Add State</h3>
                                    </div>

                                 </div>


                        </div>
                    </div>
                </div>

            </div>

             <div class="row" id="place_v">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="d-flex mb-2">
                                    <div>
                                        <h3 class="card-title m-b-5"><span class="lstick"></span>Add Place</h3>
                                    </div>

                                 </div>


                        </div>
                    </div>
                </div>

            </div>

            <div class="row" id="college_v">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="d-flex mb-2">
                                    <div>
                                        <h3 class="card-title m-b-5"><span class="lstick"></span>Add College</h3>
                                    </div>
                                </div>
                                    <form class="form-horizontal" name="universityform" id="collegeform">
                                    <div class="form-group">
                                        <div class="col-md-6 float-left mb-3">
                                            <input type="text" placeholder="Enter College Name" name="college" class="form-control form-control-line" id="clg" required="">
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 float-left mb-3">
                                            <select class="form-control" name="university" id="university_f">
                                                    <option value="" selected>University</option>
                                                    <?php foreach ($university as $uni): ?>
                                                        <option value="<?php echo $uni['university_id']; ?>"><?php echo $uni['university_name']; ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4 float-left mb-3">
                                           <select class="form-control" name="country" id="country_f">
                                                    <option value="" selected>Country</option>
                                                    <?php foreach ($country as $ct): ?>
                                                        <option value="<?php echo $ct['country_id']; ?>"><?php echo $ct['country_name']; ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                        <div class="col-md-4 float-left mb-3">
                                           <select class="form-control" name="state" id="state_f">
                                                    <option value="" selected>State</option>
                                                    <?php foreach ($streams as $stream): ?>
                                                        <option value="<?php echo $stream['stream_id']; ?>"><?php echo $stream['stream_name']; ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                        <div class="col-md-4 float-left mb-3">
                                           <select class="form-control" name="district" id="district_f">
                                                    <option value="" selected>District</option>
                                                    <?php foreach ($streams as $stream): ?>
                                                        <option value="<?php echo $stream['stream_id']; ?>"><?php echo $stream['stream_name']; ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group float-left">
                                        <div class="col-md-6">
                                            <input type="submit" name="" value="Add" class="btn btn-primary">
                                        </div>
                                    </div>
                                 </form>

                                 


                        </div>
                    </div>
                </div>
            </div>

  


            

            <script type="text/javascript">
            	$(document).ready(function(){
                    $("#university_v").hide();
                    $("#college_v").hide();
                    $("#course_v").hide();
                    $("#stream_v").hide();
                    $("#country_v").hide();
                    $("#state_v").hide();
                    $("#place_v").hide();


                    $("#university").click(function() {
                        $("#university_v").show();
                        $("#college_v").hide();
                        $("#course_v").hide();
                        $("#stream_v").hide();
                        $("#country_v").hide();
                        $("#state_v").hide();
                        $("#place_v").hide();
                        var x = $("#university_v").position();
                        window.scrollTo(x.left, x.top);
                    });
                    $("#college").click(function() {
                        $("#university_v").hide();
                        $("#college_v").show();
                        $("#course_v").hide();
                        $("#stream_v").hide();
                        $("#country_v").hide();
                        $("#state_v").hide();
                        $("#place_v").hide();
                        var x = $("#college").position();
                        window.scrollTo(x.left, x.top);
                    });
                    $("#course").click(function() {
                        $("#university_v").hide();
                        $("#college_v").hide();
                        $("#course_v").show();
                        $("#stream_v").hide();
                        $("#country_v").hide();
                        $("#state_v").hide();
                        $("#place_v").hide();
                        var x = $("#course").position();
                        window.scrollTo(x.left, x.top);
                    });
                    $("#stream").click(function() {
                        $("#university_v").hide();
                        $("#college_v").hide();
                        $("#course_v").hide();
                        $("#stream_v").show();
                        $("#country_v").hide();
                        $("#state_v").hide();
                        $("#place_v").hide();
                        var x = $("#stream").position();
                        window.scrollTo(x.left, x.top);
                    });
                    $("#country").click(function() {
                        $("#university_v").hide();
                        $("#college_v").hide();
                        $("#course_v").hide();
                        $("#stream_v").hide();
                        $("#country_v").show();
                        $("#state_v").hide();
                        $("#place_v").hide();
                        var x = $("#country").position();
                        window.scrollTo(x.left, x.top);
                    });	
                     $("#state").click(function() {
                        $("#university_v").hide();
                        $("#college_v").hide();
                        $("#course_v").hide();
                        $("#stream_v").hide();
                        $("#country_v").hide();
                        $("#state_v").show();
                        $("#place_v").hide();
                        var x = $("#state").position();
                        window.scrollTo(x.left, x.top);
                    });	
                     $("#place").click(function() {
                        $("#university_v").hide();
                        $("#college_v").hide();
                        $("#course_v").hide();
                        $("#stream_v").hide();
                        $("#country_v").hide();
                        $("#state_v").hide();
                        $("#place_v").show();
                        var x = $("#place").position();
                        window.scrollTo(x.left, x.top);
                    });

                    $("#universityform").submit(function(e) {
                        e.preventDefault();
                        if (confirm("Add University")) {
                            var form = $(this);
                            $.ajax({
                                   type: "POST",
                                   url: "<?php echo base_url();?>adddata/add_university",
                                   data: form.serialize(), // serializes the form's elements.
                                   success: function(data)
                                   {
                                        alert(data);
                                        $("input[type=text], textarea").val("");
                                   }
                                 });
                        }
                    }); 


                     $("#collegeform").submit(function(e) {
                        e.preventDefault();
                        if (confirm("Add College")) {
                            var form = $(this);
                            $.ajax({
                                   type: "POST",
                                   url: "<?php echo base_url();?>adddata/add_college",
                                   data: form.serialize(), // serializes the form's elements.
                                   success: function(data)
                                   {
                                        alert(data);
                                        $("input[type=text], textarea").val("");
                                   }
                                 });
                        }
                    });


                    $('#country_f').change(function(){
                        var country_id = $('#country_f').val();
                        if(country_id != '')
                        {
                            $.ajax({
                                url:"<?php echo base_url();?>adddata/fetch_state",
                                method:"POST",
                                data:{country_id:country_id},
                                success:function(data)
                                {
                                    $('#state_f').html(data);
                                }
                            })
                        }
                        if(country_id == ''){
                             $('#state_f').html("<option value='' selected>District</option>");
                        }
                    });

                    $('#state_f').change(function(){
                        var state_id = $('#state_f').val();
                        if(state_id != '')
                        {
                            $.ajax({
                                url:"<?php echo base_url();?>adddata/fetch_district",
                                method:"POST",
                                data:{state_id:state_id},
                                success:function(data)
                                {
                                    $('#district_f').html(data);
                                }
                            })
                        }
                        if(country_id == ''){
                             $('#district_f').html("<option value='' selected>District</option>");
                        }
                    });


				});
            </script>
