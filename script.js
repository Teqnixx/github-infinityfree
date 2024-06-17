$(document).ready(function() {

    $.ajax({
        url: 'text.php',
        type: 'GET',
        success: function(data) {
            console.log(data)
        }
    })

})