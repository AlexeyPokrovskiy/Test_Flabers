$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function Dollar() {

        $.ajax({
            type: "POST",
            url: "ApiPb",
            success: function (data) {
                var json=data;
                grn=$('#TotalCost').html();
                $('#TotalCostDollar').html((grn/json[0].sale).toFixed(3));
            }
        });
    }
    Dollar();


    $('#createRequestButton').click(function () {
        var form_data = $("#createRequest").serialize();
        $.post('addReport',form_data, function (data) {
            var json=JSON.parse(data);
            if (typeof json.success != "undefined") {
                var message="<div class=\"alert alert-success\" role=\"alert\"><ul>";
                message+="<li>"+json.success+"</li>";
            }
            else{
                var message="<div class=\"alert alert-warning\" role=\"alert\"><ul>";
                $.each(json,function(key, value){
                    message+="<li>"+value+"</li>";
                });
            }
            message+="</ul></div>";
            $('#RequestLog').html(message);
        })

    });



    $('#ButtonListReport').click(function () {
        var form_data = $("#ListReport").serialize();
        $.post('ListReport',form_data, function (data) {
            var json=JSON.parse(data);
            message="";
            totalcost=0;
            for (i = 0; i < json.length; i++) {
                totalcost+=parseFloat(json[i].cost);
                message+="<tr>";
                $.each(json[i], function (key, value) {
                    message += "<td>" + value + "</td>";
                });
                message+="</tr>";
            }
            $('#RequestTable').html(message);
            $('#TotalCost').html(totalcost);
            $('#TotalItem').html(json.length);
            Dollar();
        })

    });





    });