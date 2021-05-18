$(document).ready(function() {
    $("#n_infectados").click(function() {
            $("#n_infectados").hide();
            $(".i_infectados").removeClass("hide");
        })
        //divisoria
    $("#n_recuperados").click(function() {
            $("#n_recuperados").hide();
            $(".i_recuperados").removeClass("hide");
        })
        //divisoria
    $("#n_infectados_t").click(function() {
            $("#n_infectados_t").hide();
            $(".i_infectados_t").removeClass("hide");
        })
        //divisoria
    $("#n_fallecidos").click(function() {
        $("#n_fallecidos").hide();
        $(".i_fallecidos").removeClass("hide");
    })



});