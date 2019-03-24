$(document).ready(function() {
    $('#contact').on('click', function(event) {
        event.preventDefault();
        $('#formulario').toggleClass('display');
    });
    //validacion de formulario de contacto:
    // $("#submit").on("click", function() {
    //     var nombre = $("#nombre").val();
    //     var email = $("#email").val();
    //     var text = $("#msg").val();
    //     if (text.trim().length == 0) {
    //         alert("hay que llenar campo message");
    //         $("#msg").focus();
    //     } else if (nombre.trim().length == 0) {
    //         alert("hay que llenar campo nombre");
    //         $("#nombre").focus();
    //     } else if (email.trim().length == 0) {
    //         alert("hay que llenar campo email");
    //         $("#email").focus();
    //     } else {
    //         $("#nombre").val('');
    //         $("#email").val('');
    //         $("#msg").val('');
    //     }
    // });
});