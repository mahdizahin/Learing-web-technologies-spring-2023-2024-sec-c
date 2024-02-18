<?php
$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];
$retype_new_password = $_POST['retype_new_password'];

if($current_password == $new_password){
    echo "New Password should not be same as the Current Password";
}else{
    echo "thik ache ";
}

if($new_password != $retype_new_password){
 echo "Password Mismatch";
}else{
    echo"Accepted";
}
?>
<br>
<a href="task2.html">Back to Main</a>
