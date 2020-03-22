<?php
$login=filter_var(trim($_POST['id_Yardopshin']),
FILTER_SANITIZE_STRING);
$name=filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$name=filter_var(trim($_POST['firstname']),
FILTER_SANITIZE_STRING);
$pass=filter_var(trim($_POST['phone']),
FILTER_SANITIZE_STRING);
$pass=filter_var(trim($_POST['skype']),
FILTER_SANITIZE_STRING);
$pass=filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);
$pass=filter_var(trim($_POST['referal_link']),
FILTER_SANITIZE_STRING);
$pass=filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$pass=filter_var(trim($_POST['parol']),
FILTER_SANITIZE_STRING);



 if(mb_strlen($id_Yardopshin)<6||mb_strlen($id_Yardopshin)>10) {
     echo "Недопустимая длина id_Yardopshin(от 6 до 10)";
     exit();

 } else if(mb_strlen($name)<2||mb_strlen($name)>15) {
    echo "Недопустимая длина имени";
    exit();
 } 

 else if(mb_strlen($firstname)<2||mb_strlen($firstname)>15) {
    echo "Недопустимая длина фамилии";
    exit();
 } 
 
 else if(mb_strlen($phone)<12||mb_strlen($phone)>15) {
    echo "Недопустимая длина тлф ";
    exit();
 } 

 else if(mb_strlen($skype)<5||mb_strlen($skype)>50) {
    echo "Недопустимая длина skype (от 5  до 25 символов)";
    exit();
 } 

 else if(mb_strlen($email)<5||mb_strlen($email)>50) {
    echo "Недопустимая длина email (от 5 до 25 символов)";
    exit();
 } 

 else if(mb_strlen($referal_link)<100||mb_strlen($referal_link)>100) {  /* проверка реферальной ссылки */
    echo "Введите реферальную ссылку";
    exit();
 } 

 else if(mb_strlen($login)<5||mb_strlen($login)>15) {
    echo "Введите логин (от 5 до 15 символов)";
    exit();
 } 

 else if(mb_strlen($parol)<8||mb_strlen($parol)>20) {
    echo "Введите логин (от 5 до 20 символов)";
    exit();
 } 

 $mysql=new mysqli ('db8.ipipe.ru' ,'valenti_db3', 'Ec3yoqAvUMRe', 'valenti_db3');
 $mysql->query("INSERT INTO `Referal`(`id_Yardopshin`,`name`,`firstname`,`phone`,`skype`,`email`,`referal_link`,`login`,`parol`)
 VALUES('$id_Yardopshin','$name',`$firstname`,'$phone','$skype','$email','$referal_link',`$login`,`$parol`)");
 $mysql->close();
?>
