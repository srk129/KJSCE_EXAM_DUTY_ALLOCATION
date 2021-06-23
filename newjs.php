$(document).on('click', '.all', function(){
    $('#room_modal').modal('show');
    var E_id = $(this).attr("id"); 
    console.log(E_id); 
    //alert("click");
    //document.getElementById("Exam_date").value ="Ex id";
    $.ajax({  
        url:"roomfetch.php",  
        method:"POST",  
        data:{E_id:E_id},  
        dataType:"json",  
        success : function(data){  
          //console.log(data.E_id);
          //alert("click");
              
              //$('#E_id').val(data[0]);  
              
              $('#Exam_date').val(data.Exam_date);  
              
              //$('#Exam_date').val(data[1]);  
              $('#Exam_time').val(data.Exam_time); 
              $('#Exam_slot').val(data.Exam_slot);   
              //$('#Exam_time').val(data[2]);  
              $('#insert').val("Insert");  
      }
    });*/