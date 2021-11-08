<?php include("templates/header.php");

function page_title(){
    return "List of Patients";
}

?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List of Patients</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Identification</th>
                        <th>Patient Name</th>
                        <th>Addresss</th>
                        <th>Mobile Number</th>
                        <th>Email</th>
                        <th>Blood Group</th>
                        <th>Health Status</th>
                        <th>Pre_existing</th>
                        <th>DOB</th>
                        <th>Gender</th>
                    </tr>
                </thead>
                <tfoot>
                <tr>
                        <th>Identification</th>
                        <th>Patient Name</th>
                        <th>Addresss</th>
                        <th>Mobile Number</th>
                        <th>Email</th>
                        <th>Blood Group</th>
                        <th>Health Status</th>
                        <th>Pre_existing</th>
                        <th>DOB</th>
                        <th>Gender</th>
                    </tr>
                </tfoot>
                <tbody>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<?php include("templates/footer.php"); ?>
