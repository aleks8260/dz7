<?php
    //2. пусть у вас есть две страницы сайта. «апишите на первой странице что-нибудь в сессию, а затем выведите это при заходе на другую страницу.
	//Инициализируем сессию:
	session_start();
    //Разрыв сессии:
    //session_destroy(); 
	//Вывед сессии:
	echo $_SESSION['zadanie2']; //Вывод на данной странице, на первой странице index.php прописываем сессию
?>

