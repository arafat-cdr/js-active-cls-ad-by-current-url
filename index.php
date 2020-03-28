<li class="nav-parent">
    <a class="nav-link" href="#">
        <i class="fas fa-columns" aria-hidden="true"></i>
        <span>Users Module</span>
    </a>
    <ul class="nav nav-children">
        <li class="">
            <a class="nav-link" href="<?php route("user-create"); ?>">
                Create User
            </a>
        </li>
        <li class="">
            <a class="nav-link" href="<?php route("user-list"); ?>">
                List User
            </a>
        </li>
    </ul>
</li>



<script>

/***************************************************
|| This Will add the nav-active Class
|| On the Parent of Module Name li class
|| And the a parent li class
|| This All is Based on the Current url
|| It Match the website current url with menu href url
|| In the Menu, if match it will add the class
|| .nav-link is the href url class
|| it is adding the 1st and 3rd parent
|| all parent are in --> li tag
|| ***************************************************
*/

$('.nav-link').filter(function(){
return window.location.href.includes($(this).attr('href'));
}).parents().addClass('nav-active').parents().addClass("nav-active nav-expanded");
                  
</script>
