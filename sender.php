<? 
 //если проблемы с кодировкой файла сохранить его в другой
    $name = $_POST['name']; // пришедшие переменные
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $text = $_POST['text'];
    
   

    $to = 'kuznecovs45@gmail.com,stdgroup@inbox.ru';
    if ($name) {$mainName="Имя: <strong>$name</strong><br>"  ;}
    if ($email) {$mainEmail="Почта : <strong>$email</strong><br>"  ;}
    if ($phone) {$mainPhone="Телефон: <strong>$phone</strong><br>"  ;}
    if ($text) {$mainText="Сообщение: <strong>$text</strong><br>"  ;}
    $subject = 'Заявка с сайта STD';
    $body = "Информация:<br><br>          
            $mainName
            $mainEmail
            $mainPhone
            $mainText
            ";

    $headers = array(); 
    $headers[] = "MIME-Version: 1.0"; 
    $headers[] = "Content-type: text/html; charset=utf-8"; 
    $headers[] = "Subject: {$subject}"; 
    $headers[] = "From: info@std.ru";  
    $headers[] = "X-Mailer: PHP/".phpversion();

       
    mail($to,  $subject, $body, implode("\r\n", $headers));
   
?>