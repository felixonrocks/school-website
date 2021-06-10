<?php 
include 'pages/include.php'; 
include 'assets'; 


//код ответственный за вставку серединки текста в главную страницу используя фунционал include $page в середине тела страницы

$p = $_GET['p'] ?? null ; //достаем переменную п из массива гет
$page=match($p)
    {
        'news' => 'news.php',
        'education' => 'certificate.php',
        'events' => 'events.php',
        'testing' => 'test.php',
        'distance' => 'distance.php',
        'address' => 'address.php',
        'contacts' => 'contacts.php',
        default => 'main.php',

    };
  
    //массив для вывода меню на русском языке
$navigation=
    [
        ['link' => 'news', 'name' => 'Новости Центра'],
        ['link' => 'education', 'name' => 'Новости сертифицированного обучения'],
        ['link' => 'events' , 'name' => 'События'],
        ['link' => 'testing' , 'name' => 'Новости сервера Online тестирования и сертификации'],
        ['link' => 'distance' , 'name' =>  'Новости дистанционного обучения'],
        ['link' => 'address' , 'name' => 'Где находится офис?'],
        ['link' => 'contacts', 'name' => 'Контакты'],
    ];


    //function for displaying menu and its hyperlinks <a href=?p=contacts>контакты</a> используя вышестоящий массив
    
    function menu(array $navigation): string 
    {   $result = '<ul>';
            foreach($navigation as ['link'=>$l, 'name'=>$n]){ 
            $result .="<li><a href='/?p=$l' class='lnk'>$n</a></li>";
            }
           
        return $result.'</ul>';
    
    }; 

?>

<!doctype HTML>
<html lang="ru">
<head>
    <!---for service information--> 


        <font face="Verdana" size="3px" color="">
    <title>
        ЦКОС
    </title> 
    <link rel='icon' href="assets/spfavicon.ico"  type='image/x-icon'/ ></link><!--favicon link-->
   
</head>
 <!---end for service information--> 



<!--main text section-->
 <body>
    </br></br>
    
    <h3>
        "Специалист" - лучший в России компьютерный учебный центр <?php print_r($_GET); ?>
    </h3>
    </br>
    
    <header>
        <nav>
            <?=menu($navigation); ?>
        </nav>
    </header>
    
</br></br></br>

    <main>
        <?php include "pages/$page"; ?>
    </main>

</br></br></br>

    Ближайшие курсы

    <nav>
        PHP | JavaScript | Другие
    </nav>

</br></br></br>
<footer>
    <small>
    &#169 1991-2015 Центр компьютерного обучения "Специалист"&#8482 при МГТУ им. Н.Э.Баумана
        Адрес главного офиса: г. Москва, Госпитальный переулок, д. 4/6, корпус МГТУ им. Баумана "Стилобат", 2-й этаж.
    </small>


</footer>
</font>
</body>

<!--end main text section-->
</html>

<?php

    /*
function destination($page, $section) 
    {
    if ($section='bottom'&&$page='main'){$result='<h6>Адрес главного офиса: г. Москва, Госпитальный переулок, 
    д. 4/6, корпус МГТУ им. Баумана "Стилобат", 2-й этаж.</h6>'; return $result;}; endif;
    };
    destination($page, $section);
    echo $result;

*/  





 


?>