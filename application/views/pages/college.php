 

               <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="d-flex">
                                    <div>
                                        <h3 class="card-title mb-3"><span class="lstick"></span>College Search </h3>
                                    </div>
                                 </div>

                                 <form class="form-horizontal" name="mainform" id="mainform">
                                 	<div class="form-group">
                                 		<div class="col-md-6 auto-widget float-left">
                                 			<input type="text" placeholder="Enter College Name" name="college" class="form-control form-control-line" id="college">
                                 		</div>
                                 		<div class="col-md-6 float-left">
                                 			<input type="submit" name="" value="Search" class="btn btn-primary">
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
                                 	<center><h3 id="heading"></h3></center>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Course</th>
                                                <th class="trow">Fees</th>
                                                <th>Duration</th>
                                                <th>Qualification</th>
                                                <th>University</th>
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
 
				 $('#college').typeahead({
				  source: function(query, result)
				  {
				   $.ajax({
				    url:"<?php echo base_url();?>college/autocomplete",
				    method:"POST",
				    data:{query:query},
				    dataType:"json",
				    success:function(data)
				    {
				     result($.map(data, function(item, key){
				      return item;
				     }));
				     
				    }
				   })
				  }
				 });


				 $('#mainresult').hide();


            $("#mainform").submit(function(e) {



                e.preventDefault(); // avoid to execute the actual submit of the form.

                var form = $(this);
                // alert(form.serialize());
                $.ajax({
                       type: "POST",
                       url: "<?php echo base_url();?>college/fetch_details",
                       data: form.serialize(), // serializes the form's elements.
                       success: function(data)
                       {
                            $('#mainresulttbody').html(data);
                            $('#heading').html($('#college').val());
                            $('#mainresult').show();
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