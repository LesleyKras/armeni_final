<?php
// Als iemand ingelogd is -> Toon logout
if(!isset($_SESSION['userSession']))
{
    $login_out = "<a href='login.php'>Login</a>";
}
else{

    $login_out = "<a href='logout.php'>Logout</a>";
}

// Als Admin -> Geef admin link naar Gallery
if(isset($_SESSION['admin'])){
    $gallery_url = "<a href='galleryAdmin.php'>Ontwerpen</a>";
}
else{
    $gallery_url = "<a href='gallery.php'>Ontwerpen</a>";

}

?>
<!-- Navigatie Balk -->
<div class='bs-example'>
    <nav role='navigation' class='navbar navbar-default'>
                <div class='navbar-header'>
                <button type='button' data-target='#navbarCollapse' data-toggle='collapse' class='navbar-toggle'>
                <span class='sr-only'>Toggle navigation</span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
                </button>
            <a href='index.php' class='navbar-brand'>Ontwerp Studio Armeni</a>
        </div>

        <!-- navigatie balk items (Tussen <a> tags) -->
        <div id='navbarCollapse' class='collapse navbar-collapse'>
            <ul class='nav navbar-nav'>
                <li id='home'><a href='index.php'>Home</a></li>
                <li><a href='info.php'>Informatie</a></li>
                <li><a href='createDress.php'>Maak een Ontwerp</a></li>
                <li><?=$gallery_url?></li>
            </ul>
            <ul class='nav navbar-nav navbar-right'>

                <li><?= $login_out ?></li>
            </ul>
        </div>
    </nav>
</div>

