let formData = $(this).serialize();
$.ajax({
    url: '../Controller/messenger.controleur.php',
    type: 'POST',
    data : formData,
    success: function(response) {
        console.log(response);
    }
})