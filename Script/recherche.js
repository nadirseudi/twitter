$(document).ready(function() 
{
    $('.user').addClass('hidden');
    $("#recherche").submit(function(event) 
    {
        event.preventDefault();
        let formData = $(this).serialize();
        $.ajax(
        {
            url: "../Controller/recherche_controller.php",
            method: "POST",
            data: formData,
            dataType: "json",
            success: function(response) 
            {
                console.log(response);
                if (response.success && response.users.length > 0) 
                {
                    $('.user').empty();
                    response.users.forEach(function(user) 
                    {
                        $('.user').append(`
                            <div>
                                <a href = 'profile_other.php?id=${user.id}'>
                                    <div class = "flex gap-3 mb-5 hover:text-blue-400">
                                        <img src = "../${user.profile_picture}" alt = "photo de profile" class = 'rounded-full w-10 h-10'>
                                        <p class = "text-blue-500 underline user-link"> ${user.at_user_name} </p>
                                        <p> ${user.username} </p>
                                    </div>
                                </a>
                            </div>
                        `);
                    });
                    $('.user').removeClass('hidden');
                    $('.user-link').click(function() 
                    {
                        var userId = $(this).data('user-id');
                        window.location.href = 'profile_other.php?id=' + userId;
                    });
                } 
                else 
                {
                    $('.user').empty();
                    $('.user').append('<p>Aucun utilisateur trouvé.</p>');
                    $('.user').removeClass('hidden');
                }
            },
            error: function(error) 
            {
                console.error(error);
            }
        });
    });
});