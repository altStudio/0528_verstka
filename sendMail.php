<?php
header('Content-type: application/json');

function getMethod()
{
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        setStatus('405', 'Only POST method is allowed for sendMail');
    }
    return $_SERVER['REQUEST_METHOD'];
}

function getData($method)
{
    $data = new stdClass;
    if ($method != 'GET') {
        $data->body = json_decode(file_get_contents('php://input'));
    }
    return $data;
}

$data = getData(getMethod());

if (count(get_object_vars($data->body)) > 2) { //проверка на непредвиденные значения
    setStatus('400', "Unexpected values");
}

$email = $data->body->email;
$name = $data->body->name;

$errorMessage = [];

if (!is_null(emailValidation($email))) $errorMessage[] = emailValidation($email);
if (!is_null(nameValidation($name))) $errorMessage[] = nameValidation($name);

if (count($errorMessage)) setStatus('400', $errorMessage);
else {
    $to = "gertyn07@gmail.com";
    $subject = "Новый пользователь";
    $message = "<p>Email: $email</p><br/><p>Имя: $name</p>";
    $header = "From: server@metapax.io \r\n";
    $header .= "Cc: afgh@somedomain.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    mail($to, $subject, $message, $headers);
    setStatus("200", "OK");
}

function setStatus($status = "200", $message = null)
{
    $answer = "";
    switch ($status) {
        default:
        case "200":
            $answer = "HTTP/1.0 200 OK";
            break;
        case "400":
            $answer = "HTTP/1.0 400 Bad Request";
            break;
        case "401":
            $answer = "HTTP/1.0 401 Unauthorized";
            break;
        case "403":
            $answer = "HTTP/1.0 403 Forbidden";
            break;
        case "404":
            $answer = "HTTP/1.0 404 Not Found";
            break;
        case "405":
            $answer = "HTTP/1.0 405 Method Not Allowed";
            break;
        case "409":
            $answer = "HTTP/1.0 409 Conflict";
            break;
        case "500":
            $answer = "HTTP/1.0 500 Internal Server Error";
            break;
    }

    header($answer);
    if (!is_null($message)) {
        echo json_encode(['message' => $message]);
    }
    exit;
}

function emailValidation($email)
{
    if (strlen($email) == 0 || is_null($email)) {
        $error = "Email is empty";
        return $error;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Email is incorrect";
        return $error;
    }
}

function nameValidation($name)
{
    if (strlen($name) == 0 || is_null($name)) {
        $error = "Name is empty";
        return $error;
    }
    if (!preg_match("/^([a-zA-Z' ]+)$/", $name)) {
        $error = 'Name is invalid';
        return $error;
    }
}
