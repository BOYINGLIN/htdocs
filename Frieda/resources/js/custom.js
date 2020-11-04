$(document).ready(function() {

    $('select[name="vegCategoryID"]').on('change', function(){
        var vegId = $(this).val();
        if(vegId) {
            $.ajax({
                url: '/id/'+category,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },

                success:function(data) {

                    $('select[name="vegtableName"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="vegtableName"]').append('<option value="'+ key +'">' + value + '</option>');

                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="vegtableName"]').empty();
        }

    });

});