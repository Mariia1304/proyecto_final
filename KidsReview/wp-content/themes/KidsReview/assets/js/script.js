$(document).ready(function() {
    $('#contact').on('click', function(event) {
        event.preventDefault();
        $('#formulario').toggleClass('display');
    });
    $('#menu-menu-superior li').children(this).addClass('sliding-link');
    $(".sliding-link").on('click', function() {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            // Store hash
            var hash = this.hash;
            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function() {
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
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