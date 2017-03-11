<?php
   function createNavigation($menu,$active,$logopath)
   {
       print '
        <link rel="stylesheet" href="./css/default.css">
        <nav class="navigation">
        <ul>
        ';
       print "<img class='nav-logo' src='$logopath'/>";
       foreach(str_word_count($menu,1) as $button ) {
           $link=strtolower($button);
           $active==$button? $class="active":$class="";
           print "<li class='$class nav-button'><a href='$link.php'>$button</a></li>";
       }
       print '</ul></nav>';
   }
   function createFooter(){
       print "<div class='footer'><br/><p>&copy;2017 Yukti Graphics</p></div>";
   }
?>