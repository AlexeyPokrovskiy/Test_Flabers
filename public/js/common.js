$(document).ready(function () {

   // $('#createRequest').submit(function () {
   //         var form_data = $("#createRequest").serialize();
   //         $.ajax({
   //             type: "POST",
   //             url: "store",
   //             date: form_data,
   //             success: function (data) {
   //                 console.log(data);
   //                  $('#RequestLog').html(data);
   //              }
   //           })
   //     });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });




    $('#createRequestButton').click(function () {
        var form_data = $("#createRequest").serialize();
        $.post('store',form_data, function (data) {
            console.log(data);

            $('#RequestLog').html(data);
        })
        // console.log(form_data);
    });

    });