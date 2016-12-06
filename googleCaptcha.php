<?php 

if (g-recaptcha.getResponse() == ""){
    alert("You can't proceed!");
    return false;
} else {
    alert("Thank you");
}


?>