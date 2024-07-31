$(document).ready(function () {
    $('#messageForm').submit(function (e) {
        e.preventDefault();
        const formData = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "./index.php",
            data: formData,
            success: function (response) {
                console.log(response);
                const modalElement = document.getElementById('authentication-modal');
                const modal = new Modal(modalElement);
                modal.hide();
                $('#messageForm')[0].reset();
                $('#response').text(response);
            }
        });
    });
});