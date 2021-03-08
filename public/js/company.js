$(document).ready(function() {
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    $('#open').click(function () {
        $('#chat-form').css("display", "block");
        $('#open').css("display", "none");
    });

    $('#close').click(function () {
        $('#chat-form').css("display", "none");
        $('#open').css("display", "block");
    });
});
