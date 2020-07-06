 <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Add Details</h3>
                    </div>
                </div>

               <div class="row">
                    <div class="col-lg-2 col-md-2">
                                <button class="btn btn-secondary mb-3 btn-block" id="university">Add University</button>
                </div>

                <div class="col-lg-2 col-md-2">
                       
                                <button class="btn btn-secondary mb-3 btn-block" id="college">Add New College</button>
                        
                </div>

                <div class="col-lg-2 col-md-2">
   
                                <button class="btn btn-secondary mb-3 btn-block" id="stream">Add New Stream</button>

                </div>

                <div class="col-lg-2 col-md-2">

                                <button class="btn btn-secondary mb-3 btn-block" id="course">Add New Course</button>
 
                </div>
                 <div class="col-lg-3 col-md-3">

                                <button class="btn btn-secondary mb-3 btn-block" id="col_course">Add New Course In College</button>
 
                </div>
                 <div class="col-lg-2 col-md-2">

                                <button class="btn btn-secondary mb-3 btn-block" id="country">Add New country</button>
 
                </div>
                 <div class="col-lg-2 col-md-2">

                                <button class="btn btn-secondary mb-3 btn-block" id="state">Add New state</button>
 
                </div>
                 <div class="col-lg-2 col-md-2">

                                <button class="btn btn-secondary mb-3 btn-block" id="place">Add New Place</button>
 
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
                                            <input type="submit" name="" value="Add University" class="btn btn-primary btn-block">
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
                                 <form class="form-horizontal" name="courseform" id="courseform">
                                    <div class="form-group">
                                        <div class="col-md-6 float-left mb-3">
                                            <input type="text" placeholder="Enter Course Name" name="course" class="form-control form-control-line" required="">
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 float-left mb-3">
                                            <select class="form-control" name="stream" id="stream_c_f">
                                                    <option value="" selected>Stream</option>
                                                    <?php foreach ($streams as $stream): ?>
                                                        <option value="<?php echo $stream['stream_id']; ?>"><?php echo $stream['stream_name']; ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                        </div>
                                        
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 float-left mb-3">
                                            <input type="number" placeholder="Enter Course Duration ( in no of years eg : 4 )" name="duration" class="form-control form-control-line" required="">
                                        </div>
                                        
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 float-left mb-3">
                                            <input type="text" placeholder="Enter min Qualification for Course" name="qualification" class="form-control form-control-line" required="">
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 float-left mb-3">
                                            <input type="text" placeholder="After" name="after" class="form-control form-control-line" required="">
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-md-6 float-left text-center">
                                            <input type="submit" name="" value="Add Course" class="btn btn-primary btn-block">
                                        </div>
                                    </div>
                                 </form>

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

                                    <form class="form-horizontal" name="streamform" id="streamform">
                                    <div class="form-group">
                                        <div class="col-md-6 float-left mb-3">
                                            <input type="text" placeholder="Enter Stream Name" name="stream" class="form-control form-control-line" id="str" required>
                                        </div>
                                        <div class="col-md-6 float-left">
                                            <input type="submit" name="" value="Add Stream" class="btn btn-primary btn-block">
                                        </div>
                                    </div>
                                    </form>

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
                                <form class="form-horizontal" name="collegeform" id="collegeform">
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
                                    </div>
                                        <div class="form-group">
                                        <div class="col-md-4 float-left mb-3">
                                           <select class="form-control" name="state" id="state_f">
                                                    <option value="" selected>State</option>
                                                   
                                                </select>
                                        </div>
                                    </div>
                                        <div class="form-group">
                                        <div class="col-md-4 float-left mb-3">
                                           <select class="form-control" name="district" id="district_f">
                                                    <option value="" selected>District</option>
                                                   
                                                </select>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12 float-left text-center">
                                            <input type="submit" name="" value="Add College" class="btn btn-primary btn-block">
                                        </div>
                                    </div>
                                 </form>

                                 


                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="col_course_v">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="d-flex mb-2">
                                    <div>
                                        <h3 class="card-title m-b-5"><span class="lstick"></span>Add Course In College</h3>
                                    </div>

                                 </div>

                                 <form class="form-horizontal" name="mainform" id="col_courseform">
                                    <div class="form-group">
                                        <div class="col-md-6 auto-widget float-left mb-3">
                                            <input type="text" placeholder="Enter College Name" name="college" class="form-control form-control-line" id="college_v_f" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                         <div class="col-md-6 float-left mb-3">
                                            <select class="form-control" name="stream" id="stream_clg_f" required>
                                                    <option value="" selected>Stream</option>
                                                    <?php foreach ($streams as $stream): ?>
                                                        <option value="<?php echo $stream['stream_id']; ?>"><?php echo $stream['stream_name']; ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                         <div class="col-md-6 float-left mb-3">
                                            <select class="form-control" name="course" id="course_clg_f" required>
                                                    <option value="" selected>Course</option>
                                                    
                                                </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                         <div class="col-md-6 float-left mb-3">
                                           <textarea class="form-control" placeholder="Fee Details (Seperate each fees by ',' comma)" rows="3" name="fees" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 float-left text-center">
                                            <input type="submit" name="" value="Add course" class="btn btn-primary btn-block">
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
                    $("#col_course_v").hide();


                    $("#university").click(function() {
                        $("#university_v").show();
                        $("#college_v").hide();
                        $("#course_v").hide();
                        $("#stream_v").hide();
                        $("#country_v").hide();
                        $("#state_v").hide();
                        $("#place_v").hide();
                        $("#col_course_v").hide();
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
                        $("#col_course_v").hide();
                        var x = $("#college_v").position();
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
                        $("#col_course_v").hide();
                        var x = $("#course_v").position();
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
                        $("#col_course_v").hide();
                        var x = $("#stream_v").position();
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
                        $("#col_course_v").hide();
                        var x = $("#country_v").position();
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
                        $("#col_course_v").hide();
                        var x = $("#state_v").position();
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
                        $("#col_course_v").hide();
                        var x = $("#place_v").position();
                        window.scrollTo(x.left, x.top);
                    });
                     $("#col_course").click(function() {
                        $("#university_v").hide();
                        $("#college_v").hide();
                        $("#course_v").hide();
                        $("#stream_v").hide();
                        $("#country_v").hide();
                        $("#state_v").hide();
                        $("#place_v").hide();
                        $("#col_course_v").show();
                        var x = $("#col_course_v").position();
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


                    $("#streamform").submit(function(e) {
                        e.preventDefault();
                        if (confirm("Add Stream")) {
                            var form = $(this);
                            $.ajax({
                                   type: "POST",
                                   url: "<?php echo base_url();?>adddata/add_stream",
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
                                        $("input[type=text], select, textarea").val("");
                                   }
                                 });
                        }
                    });

                     $("#courseform").submit(function(e) {
                        e.preventDefault();
                        if (confirm("Add Course")) {
                            var form = $(this);
                            $.ajax({
                                   type: "POST",
                                   url: "<?php echo base_url();?>adddata/add_course",
                                   data: form.serialize(), // serializes the form's elements.
                                   success: function(data)
                                   {
                                        alert(data);
                                        $("input[type=text], input[type=number], select, textarea").val("");
                                   }
                                 });
                        }
                    });

                    $("#col_courseform").submit(function(e) {
                        e.preventDefault();
                        if (confirm("Add Course")) {
                            var form = $(this);
                            $.ajax({
                                   type: "POST",
                                   url: "<?php echo base_url();?>adddata/add_col_course",
                                   data: form.serialize(), // serializes the form's elements.
                                   success: function(data)
                                   {
                                        alert(data);
                                        $("input[type=text], input[type=number], select, textarea").val("");
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
                             $('#state_f').html("<option value='' selected>State</option>");
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


                    $('#college_v_f').typeahead({
                  source: function(query, result)
                  {
                   $.ajax({
                    url:"<?php echo base_url();?>college/autocomplete",
                    method:"POST",
                    data:{query:query},
                    dataType:"json",
                    success:function(data)
                    {
                     result($.map(data, function(item){
                      return item;

                     }));
                     
                    }
                   });
                  },
                  minLength: 2,
                  autoFocus :true
                 });

                $('#stream_clg_f').change(function(){
                var stream_id = $('#stream_clg_f').val();
                if(stream_id != '')
                {
                    $.ajax({
                        url:"<?php echo base_url();?>/fetch_course",
                        method:"POST",
                        data:{stream_id:stream_id},
                        success:function(data)
                        {
                            $('#course_clg_f').html(data);
                        }
                    })
                }
                if(stream_id == ''){
                     $('#course_clg_f').html("<option value='' selected>Course</option>");
                }
            });

				});
            </script>
