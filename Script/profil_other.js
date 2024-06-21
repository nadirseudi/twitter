$(document).ready(function()
{
    $("#abonner").click(function()
    {
        $.ajax(
        {
            url: "../Controller/profil_other_controller.php",
            method: "POST",
            data: { user_id: "<?php echo $user_id; ?>" },
            success: function(response)
            {
                console.log(response);
            }
        });
    });
});