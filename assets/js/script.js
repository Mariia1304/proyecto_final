var db_events = [{
    title: "Board members meeting.",
    date: 1532381440036,
    link: "http://empieza.desafiolatam.com/"
}, {
    title: "Delaware branch opening.",
    date: 1532467961534,
    link: "events.com/ev1"
}, {
    title: "An important event.",
    date: 1532554405128,
    link: "events.com/ev1"
}];
$(document).ready(function() {
    //$("#calendar").MEC({
    //  calendar_link: "example.com/myCalendar",
    //events: db_events
    // });
    //if you don't have events, use
    //$("#calendar2").MEC();
    //validacion de formulario de contacto:
    $("#submit").on("click", function() {
        var nombre = $("#nombre").val();
        var email = $("#email").val();
        var text = $("#msg").val();
        if (text.trim().length == 0) {
            alert("hay que llenar campo message");
            $("#msg").focus();
        } else if (nombre.trim().length == 0) {
            alert("hay que llenar campo nombre");
            $("#nombre").focus();
        } else if (email.trim().length == 0) {
            alert("hay que llenar campo email");
            $("#email").focus();
        } else {
            $("#nombre").val('');
            $("#email").val('');
            $("#msg").val('');
        }
    });
});