<?php include("templates/header.php");
include("model/retrieve_patient_details.php");
function page_title()
{
    return "Patient Details";
}

?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Personal Details</h1>
                        </div>
                        <form class="user" id="file_patients">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" value="<?= $identification_value; ?>" class="form-control form-control-user" id="identification" name="identification" placeholder="Identification*" onBlur="checkAvailability()" required>
                                    <span id="user-availability-status"></span>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" value="Fofana" class="form-control form-control-user" name="patient_name" id="patient_name" placeholder="Patient Name*" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" value="Kombo Lamin" class="form-control form-control-user" name="address" id="address" placeholder="Address*" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" value="2288339" class="form-control form-control-user" name="mobile_number" id="mobile_number" placeholder="Mobile Number">
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
                                        <option value="A+">A+</option>
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

                            <button id="update_details_btn" class="btn btn-primary btn-user btn-block">
                                Update Details
                            </button>
                            <hr>

                        </form>
   <!-- Prescription History -->
   <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Prescription History</h1>
                    </div>
                    <form class="user" id="file_patients">
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <input type="text"  class="form-control form-control-user" id="prescription" name="prescription" placeholder="Medicine" onBlur="checkAvailability()" required>
                                    
                                </div>
                                <div class="col-sm-8">
                                    <input type="text"  class="form-control form-control-user" name="usage" id="usage" placeholder="Usage Description*" required>
                                </div>
                            </div>
                           
                            <button type="button" onclick="addPrescription()" class="btn btn-primary btn-user btn-block">
                                Record Prescription
                            </button>

                        </form>
                        <ul id="dynamic-list1" class="list-group">
                     
                              </ul>
                    </div>
                 
                  
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small>3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small>Donec id elit non mi porta.</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small class="text-muted">3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small class="text-muted">Donec id elit non mi porta.</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small class="text-muted">3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small class="text-muted">Donec id elit non mi porta.</small>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5  d-lg-block">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Treatment History</h1>
                        </div>
                        <div class="user" id="add_treatment">
                            <div class="form-group row">
                           
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <textarea class="form-control" name="treatment" id="treatment" cols="10" rows="5"></textarea>
                                </div>

                            </div>
                            <button id="treatment_btn" onclick="addItem()" class="btn btn-primary btn-user btn-block">
                                Record treatment
                            </button>
                            <br>
                            <ul id="dynamic-list" class="list-group">
                     
                      
                              </ul>
                            <!-- Dropdown Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Dropdown Card Example</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    Dropdown menus can be placed in the card header in order to extend the functionality
                                    of a basic card. In this dropdown card example, the Font Awesome vertical ellipsis
                                    icon in the card header can be clicked on in order to toggle a dropdown menu.
                                </div>
                            </div>



</div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<script>
        function addItem() {
        var ul = document.getElementById("dynamic-list");
        var candidate = document.getElementById("treatment");
        var li = document.createElement("li");
        li.classList.add("list-group-item");
        li.setAttribute('id', candidate.value);
        li.appendChild(document.createTextNode(candidate.value));
        ul.appendChild(li);
    }

    function addPrescription(){
        var ul = document.getElementById("dynamic-list1");
        var candidate = document.getElementById("prescription");
        var li = document.createElement("li");
        li.classList.add("list-group-item");
        li.setAttribute('id', candidate.value);
        li.appendChild(document.createTextNode(candidate.value));
        ul.appendChild(li);
    }
</script>
<!-- End of Main Content -->
<?php include("templates/footer.php"); ?>