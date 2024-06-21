$(document).ready(function() 
{
    $("#form").submit(function(event) 
    {
        event.preventDefault();
        let formData = $(this).serialize();
        $.ajax(
        {
            url: "../Controller/home_controller.php",
            method: "POST",
            data: formData,
            dataType: "json",
            success: function(response) 
            {
                console.log(response);
                if (response.success) 
                {
                    window.location.href = "home.php";
                } 
                else 
                {
                    console.error(response.message);
                }
            },
            error: function(error) 
            {
                console.error(error);
            }
        });
    });

    $("#tweet").on("input", function() 
    {
        var maxLength = 140;
        var length = $(this).val().length;
        var remaining = maxLength - length;
        $("#char-count").text(remaining);
        if (remaining <= 0) 
        {
            $(this).val($(this).val().substring(0, maxLength));
        }
    });

    $(".answer").click(function(event)
    {
        event.preventDefault();
        let idTweet = $(this).data('tweetid');
        let responseContainer = $('<div>').addClass('response-container border-l border-r border-purple-600');
        let form = $('<form>').attr(
        {
            'id': 'responseForm_' + idTweet,
            'method': 'post',
            'action': '#'
        });

        let textarea = $('<textarea>').attr(
        {
            'name': 'response_' + idTweet,
            'placeholder': 'Répondez à ce tweet...',
            'class': 'response-textarea bg-black w-full h-20',
            'id': 'textarea_' + idTweet
        });

        let submitButton = $('<button>').attr(
        {
            'type': 'submit',
            'name': 'submit_response_' + idTweet,
            'class': 'submit-response bg-blue-600 rounded-full border pr-2 pl-2 m-2',
            'id': 'submitResponse_' + idTweet
        }).text('Post');
        form.append(textarea, submitButton).addClass('reponse_' + idTweet);
        responseContainer.append(form);
        $(this).parent().parent().after(responseContainer);

        
        $("#responseForm_" + idTweet).submit(function(event)
        {
            event.preventDefault();
            let formData = $(this).serialize();
            $.ajax(
            {
                url: "../Controller/home_controller.php",
                method: "POST",
                data: formData,
                dataType: "json",
                success: function(response) 
                {
                    console.log(response);
                    if (response.success) 
                    {
                        window.location.href = "home.php";
                    } 
                    else 
                    {
                        console.error(response.message);
                    }
                },
                error: function(error) 
                {
                    console.error(error);
                }
            });
        });
    })
});