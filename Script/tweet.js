const pseudo = 'Romain';

$.ajax({
    url: '../Controller/tweet.php',
    type: 'GET',
    data: {
        pseudo: pseudo,
    },

    success: function(response) {
        console.log(response);
    }
})