<?php
if(isset($_POST['submit'])) {
$msg = ' Name: ' .$_POST[ ' Name ' ] ."\n"
' Email: ' .$_POST[ ' Email ' ] ."\n"
mail ( ' theownfacebook.com' ,$msg )
?>