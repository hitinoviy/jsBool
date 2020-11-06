 <?php
    // $username = "Vladimir";
    // echo $username;
    // echo "<br>";
    // $copyUsername = $username;
    // echo $copyUsername;

    // $x = array(array('x',' ','x'),
    //             array(' ','x','o'),
    //             array('x','o',' '));
    // echo $x[2][0]; // первое число по горизонтали, второе по вертикали 
    // // первое число номер массива, второе его элемент 
$y = 0;
if($y-- == 0) echo $y;

echo '$t';

$autor = "Vladimir";

$out= <<<_END
        Чего?
        аааа
        $autor.
    _END;
echo $out;

function logdate($timestamp){
    return date("l F jS Y", $timestamp);
}
echo logdate(time());
echo logdate(time() - 18*24*60*60); // 18 дней * 24 часа * 60 минут * 60 секунд