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
   function createPanel($size,$offset,$content)
   {
       $offset*=8.33;
       $size*=8.33;
       print"
       <div class='spacer' style='width: $offset%; display: inline-block;'></div>
       <div class='panel' style='width: $size%;display: inline-block;'>$content</div>
       ";
   }
   function unorderedList($content)
   {
       $out="<ul>";
       foreach(explode(",",$content) as $li)
       {
       $out = $out."\n<li>$li</li>";
       };
       $out = $out."\n</ul>";
       return $out;
   }
?>