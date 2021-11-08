// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({
    "dom": '<"toolbar">frtip',
      "ajax": {
          "url" : "connection.php",
          "dataSrc": ""
  },
    "columns" :  [
        {"data" :  "identification"},
        {"data" :  "patient_name"},
        {"data" :  "address"},
        {"data" :  "mobile_number"},
        {"data" :  "email"},
        {"data" :  "blood_group"},
        {"data" :  "health_status"},
        {"data" :  "pre_existing"},
        {"data" :  "date_of_birth"},
        {"data" :  "gender"}
    ],
    
    });
    // $("div.toolbar").html('<b>Custom tool bar! Text/images etc.</b>');
});