$(document).ready(function() 
{
    $("#form").submit(function(event) 
    {
        event.preventDefault();
        let emailValue = $("#email").val();
        let emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailRegex.test(emailValue)) 
        {
            console.error("Adresse e-mail invalide");
            return;
        }

        let formData = $(this).serialize();
        $.ajax(
        {
            url: "../Controller/inscription_controller.php",
            method: "POST",
            data: formData,
            dataType: "json",
            success: function(response) 
            {
                console.log(response);
                if (response.success) 
                {
                    window.location.href = "connexion.html";
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
});