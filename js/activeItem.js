$(function() {
    // Pak URL
    var url2 = window.location.pathname;

    // Als url '0881520/websites/dressDesign' is, maak dan de home active
    if(url2 == '/0881520/websites/dressDesign/'){
    $("#home").addClass("active");

    // Zo niet, kijk dan naar url en geef het juiste item de class 'active'
    }
    else {
        $("#navbarCollapse ul li").each(function () {
            //pak de url uit <a> tags
            var link = $(this).find('a').attr('href'); // index.php, info.php, createDress.php
            // pak tekst uit url vanaf teken 25
            var url = window.location.pathname.substring(13); // info.php / 30 voor live / 13 voor local
            // als de url en <a> overheen komen, maak dan de link in de nav active
            if (link == url) {
                $(this).addClass("active");
            }
            else {
            }

        });
    }
});