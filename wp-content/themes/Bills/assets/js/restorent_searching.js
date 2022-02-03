// advanced-search-form-wrapper
jQuery(document).ready(function($) 
{
    $(document).on("click", ".loc", function()
    {
        var loc = $(this).val(); 
        // alert(1);
        $('#response').empty();
        $('#response').append("<div class='adjust'><img src='https://i.gifer.com/ZZ5H.gif'/></div>");

        call_ajax_restorent( loc );
    });

    function call_ajax_restorent( loc )
    {
        var data = {
            'action'  : 'menutype_search_restorent_ajax',
            'loc'     :  loc
         };
        $.ajax({
            url: "/Bills/wp-admin/admin-ajax.php",
            data: data, // form data
            type: 'post',
            success: function(data)
            {
                $('#response').empty();
                console.log( data );
                //alert(data);
                $("#append_res").html(data);
                $(".nearest-bill-restorent").show();
                $(".inner-box").hide();
                
                

            }
        });
    }

});