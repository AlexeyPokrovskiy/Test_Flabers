$(document).ready(function () {

   $('#createRequest').submit(
       function () {
           var form_data = $("#createRequest").serialize();
           $.ajax({
               type: "POST",
               url: "store",
               date: form_data,
               success: function (data) {
                   console.log(data);
                    $('#RequestLog').html(data);
                }
             })
       }
   )
    });