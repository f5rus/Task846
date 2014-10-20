<?php
    $mess=
	"<h3>Регистрационные данные:</h3>".
	"Фамилия:".$_POST["surname"]."</br>".
    "Имя:".$_POST["name"]."</br>".
    "Отчество:".$_POST["middlename"]."</br>".
    "Пол:".$_POST["optionsRadios"]."</br>".
    "Имя пользователя:".$_POST["username"]."</br>".
    "Адрес электронной почты:".$_POST["Email"]."</br>".
    "О себе:".$_POST["about"]."</br>";
    $mess=iconv("UTF-8", "WINDOWS-1251", $mess);
    
    echo $mess;




