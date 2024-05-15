$(document).ready(function () {
    $('form').submit(function (e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: 'import.php',
            data: formData,
            contentType: false,
            processData: false,
            success: function (data) {
                $('.table-container').replaceWith(data);
            },
            error: function (error) {
                console.log('Error:', error);
            }
        });
    });
});
