<?php include("templates/header.php");

function page_title(){
    return "New Appointment";
}

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">New Appointment</h1>

<!-- appointment inputs -->
<div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="appointmentperson" name="appointmentperson" placeholder="Appointment For..." required>
                                   
                                </div>
                                
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="appointmentwith" name="appointmentwith" placeholder="Appointment With...*"  required>
                                   
                                </div>
                                
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="time" class="form-control form-control-user" id="appointment-time" name="appointment-time" >
                                   
                                </div>
                                
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="date" class="form-control form-control-user" id="appointment-date" name="appointment-date"  required>
                                   
                                </div>
                               
                            </div>
                                   
                                </div>
                                <div class="col-sm-6">
                                      <img src="loading.gif"  alt="">
                                </div>
                            </div>


                   
                            

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<?php include("templates/footer.php"); ?>
