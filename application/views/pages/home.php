
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Home</h3>
                    </div>
                </div>

                <div class="row">
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

                                            <div class="col-md-4 float-left mb-3 mb-md-0">
                                                <select class="form-control" name="stream" id="stream">
                                                    <option value="" selected>Stream</option>
                                                    <?php foreach ($streams as $stream): ?>
                                                        <option value="<?php echo $stream['stream_id']; ?>"><?php echo $stream['stream_name']; ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>

                                            <div class="col-md-4 float-left mb-3 mb-md-0">
                                                <select class="form-control" name="course" id="course">
                                                    <option selected>Course</option>
                                                    
                                                </select>
                                            </div>

                                            <div class="col-md-4 float-left mb-3 mb-md-0">
                                                <select class="form-control" name="place" id="place">
                                                    <option selected>Place</option>
                                                    
                                                </select>
                                            </div>



                                        </div>
                                        <br><br><br> <center>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success">submit</button>
                                            </div>
                                        </div>
                                        </center>
                                    </form>


                        </div>
                    </div>
                </div>
            </div>


             <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="d-flex">
                                    <div>
                                        <h3 class="card-title m-b-5"><span class="lstick"></span>Result</h3>
                                    </div>
                                 </div>
                                    
                                 <div class="table-responsive" id="mainresult">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>College Name</th>
                                                <th>Course</th>
                                                <th>Fees</th>
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
            