/**
 * Created by Vencislav on 11.10.2014 г..
 */

$(document).ready(function(){

    $(".col-xs-4").click(function(){

        var data_toggel = getAtrDataToggel($(this));

        if($(this).hasClass('active')){
            $(this).removeClass('active');
            $(this).parent().next().hide('slow');
            $(".col-xs-12").hide('slow');
        }
        else
        {
            $(".col-xs-4").removeClass('active');
            $(".hidden-hr").hide('slow');
            $(".col-xs-12").hide('slow');

            $(this).addClass('active');
            $(this).parent().next().show("slow");
            $(data_toggel).show("slow");
        }
    });

    function getAtrDataToggel(e) {
        var data_toggel = e.data("toggel");

        return '#'+data_toggel;
    }
});