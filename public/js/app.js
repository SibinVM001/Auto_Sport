$(document).ready(function() {
    $('#state').on('change', function() {
        $.ajax({
            url : "/district/"+$('#state').val(),
            type : "GET",
            success : function(res) {
                console.log(res)
                $('#district').html('<option value="State">Select District</option>');
                res.forEach(function(data){
                    $('#district').append("<option value='"+data['id']+"'>"+data['district']+"</option>");
                });        
            }
        });
    });

    $('#district').change(function() {
        $.ajax({
            url : "/city/"+$('#district').val(),
            type : "GET",
            success : function(res) {
                $('#city').html('<option value="State">Select City</option>');
                res.forEach(function(data){
                    $('#city').append("<option value='"+data['id']+"'>"+data['city']+"</option>");
                });        
            }
        });
    });
});