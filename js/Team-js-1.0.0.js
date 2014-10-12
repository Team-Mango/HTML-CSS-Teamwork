/**
 * Created by Vencislav on 11.10.2014 г..
 */

$(document).ready(function(){
    $(".team.col-xs-4").click(function(){
        $(".col-xs-8").hide('slow');
        $("#"+$(this).data("toggel")).show("slow");

        $(".active").removeClass('active');
        $(this).addClass('active');
    });
});