$(document).ready(function()
{
    $(".following").css("display", "none");
    $("#follower").click(function()
    {
        $(".follower").css("display", "flex");
        $(".following").css("display", "none");
    })

    $("#following").click(function()
    {
        $(".follower").css("display", "none");
        $(".following").css("display", "flex");
    })
})