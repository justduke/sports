<?php require'header.php';

if(isset($_GET['home'])){
   include'home.php';
}elseif(isset($_GET['listing'])){
   include'listing.php';
}
elseif(isset($_GET['about'])){
   include'about.php';
}
else{
   include'home.php';
}


 require'footer.php';
 ?>