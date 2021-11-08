// Call the dataTables jQuery plugin
$(document).ready(function() {
    $('#dataTable').DataTable({
      "dom": '<"toolbar">frtip',
        "ajax": {
            "url" : "dataTable-patients.php",
            "dataSrc": ""
    },
      "columns" :  [
        {   
            "data": "identification",
            "render": function(data, type, row, meta){
               if(type === 'display'){
                   data = '<a href="file_patient.php?identification='+data+'&&systemid='+row[0]+'">' + data +'</a>';
               }
               return data;
            }
         },
        //   {"data" :  "identification"},
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
  

      $("#treatment_btn").click(function() {
          var treatment = document.getElementById("treatment").value;
          var formData = new FormData();
          formData.append('treatment', treatment);
    alert(treatment);
        $.ajax({
            url : "model/treatment.php",
            type : "POST",
             data : formData,
             success : function(res){
                 alert(res);
                 
             },
             cache: false,
				contentType: false,
				processData: false
        });
       
        
     });
  });

