<?php 
ob_start();
session_start();
ini_set('session.gc-maxlifetime', 99*90*90);


/* Add DataBase Host */

define(HOST,'localhost');

/* DATABASE USERNAME */

define(DB_USERNAME,'databaseusername');

/* DATABASE PASSWORD */

define(DB_PASSWORD,'dbpassword');

/* DATABASE NAME */

define(DB_NAME,'dbname');

/* Please Do Not Edit anything down */

$inc = 'hloun';

include 'SQL.php';

$SQL = new SQL(DB_USERNAME,DB_PASSWORD,HOST);

$SQL->connect();

$SQL->selectDB(DB_NAME);





function cunter($num){
    return '<span class="counter counter-analog" data-direction="up" data-interval="5" data-format="'.$num.'" data-stop="'.$num.'">0</span>';
}

function isLogin()
{
    if(isset($_SESSION['login']) && $_SESSION['login']==true)
        return true;
    else
        return false;
        
}
function v()
{
    return '1.0.0';
}

function limit_str($text,$limit){
        $m = explode(" ",$text);
        if(count($m) > $limit){
                $y = array();
                for($t=0;$t<=($limit-1);$t++){
                        $y[$t] = $m[$t];
                }
                $b = implode(" ",$y);
                $b .= " ...";
        }else{
                $b = $text;
        }
return $b;
}

?>