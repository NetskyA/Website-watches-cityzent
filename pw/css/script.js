
$(document).ready(function () {
    $("#flip").click(function () {
        $("#panel").slideDown("slow");
    });
    $("#panel").click(function () {
        $("#panel").slideUp("slow");
    });
});
