// E-MAIL




$(document).ready(function()
    {
        $("#notificationLink_email").click(function()
        {
            $("#notificationContainer_email").fadeToggle(300);
            $("#notification_count_email").fadeOut("slow");
            $("#notificationContainer_aviso").hide();
            return false;
        });

//Document Click
        $(document).click(function()
        {
            $("#notificationContainer_email").hide();
        });
//Popup Click
        $("#notificationContainer_email").click(function()
        {
          return false;
        });

    });


// AVISOS

    $(document).ready(function()
    {
        $("#notificationLink_aviso").click(function()
        {
            $("#notificationContainer_aviso").fadeToggle(300);
            $("#notification_count_aviso").fadeOut("slow");
            $("#notificationContainer_email").hide();
            return false;
        });

//Document Click
        $(document).click(function()
        {
            $("#notificationContainer_aviso").hide();
        });
//Popup Click
        $("#notificationContainer_aviso").click(function()
        {
            return false
        });

    });

