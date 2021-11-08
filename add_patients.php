<?php include("templates/header.php");

function page_title()
{
    return "Add Patients";
}

?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
               
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Add Patient</h1>
                            <div id="overlay">
                            </div>
                        </div>
                        <div id="error"></div>
                        <form class="user" id="add_patients">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="identification" name="identification" placeholder="Identification*" onBlur="checkAvailability()" required>
                                    <span  id="user-availability-status"></span>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="patient_name" id="patient_name" placeholder="Patient Name*" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="address" id="address" placeholder="Address*" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="mobile_number" id="mobile_number" placeholder="Mobile Number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="email" class="form-control form-control-user" name="email_address" id="email_address" placeholder="Email Address">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="pre_existing" id="pre_existing" placeholder="Pre-exsiting Conditions*">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-sm-6 input-group mb-3 ">
                                    <div class="input-group-prepend">
                                        <a class="btn btn-outline-secondary" type="button">Blood Group</a>
                                    </div>
                                    <select class="custom-select" name="blood_group" id="blood_group">
                                        <option selected>Choose...</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 input-group mb-3 ">
                                    <div class="input-group-prepend">
                                        <a class="btn btn-outline-secondary">Health Status</a>
                                    </div>
                                    <select class="custom-select" name="health_status" id="health_status">
                                        <option selected>Good</option>
                                        <option value="Bad">Bad</option>
                                        <option value="Severe">Severe</option>
                                        <option value="Critical">Critical</option>
                                    </select>
                                </div>

                            </div>
                            <div class="form-group row">
                            <div class="col-sm-6 input-group mb-3 ">
                            <div class="input-group-prepend">
                                        <a class="btn btn-outline-secondary">Gender*</a>
                                    </div>
                                    <select class="custom-select" name="gender" id="gender" required>
                                        <option selected>Select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                       
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Date of Birth*</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" required>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Patient
                            </button>
                            <hr>

                        </form>
                        <hr>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script>
    jQuery(document).ready(function() {
        // Wait for the DOM to be ready
        
        $("form#add_patients").submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: 'model/add_patients.php',
                type: 'POST',
                data: formData,
                beforeSend: function() {
                    $("#overlay").fadeOut();
                    $("#overlay").html('<img src="loading.gif" alt="Loading" />   LOADING ...');
                },
                success: function(response) {
                    if ($.trim(response) == 'success') {
                        alert("New record added!");
                        setTimeout('window.location.href = "dashboard.php"; ', 100);
                      
                    } else{
                        $("#error").fadeIn(100, function() {
                            $("#error").html(
                                '<div class="alert alert-warning alert-dismissible fade show" role="alert">' +
                                'Error! Could not add new record' +
                                '<button type="button" class="close"  data-dismiss="alert" aria-label="Close">' +
                                '<span aria-hidden = "true"> &times; </span> </button> </div>');
                        });
                    } 

                },
                error: function(request, status, error) {
                    alert(request.responseText);
                },
                cache: false,
                contentType: false,
                processData: false
            });

        });

    });

    function checkAvailability() {
        //$("#loaderIcon").show();
        jQuery.ajax({
            url: "model/user_availability.php",
            data: 'username=' + $("#identification").val(),
            type: "POST",
            success: function(data) {

                $("#user-availability-status").html(data);
                // $("#idpengguna").css("background-color", "#90ee90");
                // $("#idpengguna").css("color", "white");
                //$("#loaderIcon").hide();



            },
            error: function() {}
        });
    }
</script>
<!-- End of Main Content -->
<?php include("templates/footer.php"); ?>