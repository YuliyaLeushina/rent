<?
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' && !empty($_POST['name'])) {
    $message = 'Имя: ' . $_POST['name'] . ' <br> ';
    $message .= 'Телефон: ' . $_POST['phone'] . ' <br> ';

    $mailTo = "borovsky.yan2017@yandex.ru"; // Ваш e-mail
    $subject = "Заявка с сайта катунь-урал.рф"; // Тема сообщения
    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: info@site.ru <info@site.ru>\r\n";
    if(mail($mailTo, $subject, $message, $headers)) {
        echo "Сообщение отправлено!"; 
    } else {
        echo "Сообщение не отправлено!"; 
    }
}
?>