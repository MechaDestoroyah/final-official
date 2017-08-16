<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__ . '/../vendor/autoload.php';


$app = new \Slim\App;
//require __DIR__ . '/../settings.php';
require __DIR__ . '/../dependencies.php';
require __DIR__ . '/../Domain/User.php';
require __DIR__ . '/../storage/dbConnect.php';
require __DIR__ . '/../storage/Mysql.php';
require __DIR__ . '/../storage/RedisConnection.php';
$app->post('/login', function(Request $req, Response $resp) {

        $user=new \Domain\User();
        $name=$req->getParsedBody()['name'];
        $email=$req->getParsedBody()['email'];
        $id=$req->getParsedBody()['id'];
        $user->Email($email);
        $user->Name($name);
        $user->Id($id);
        //$user->storeInRedis();
        $array=array(
            'email'=>$user->getEmail(),
            'name'=>$user->getName(),
            'id'=>$user->getId()

        );
        $resp->getBody()->write(json_encode($array));

        return $resp;
});

$app->get('/rooms', function (Request $req, Response $resp){
    $myDB=fConnectToDatabase();
    $stmt=\Storage\getRooms($myDB);
    $resp->getBody()->write(json_encode($stmt));
    return $resp;
});
$app->post('/rooms',function (Request $req, Response $resp){

    $myDB=fConnectToDatabase();
    $topic=$req->getParsedBody()['topic'];
    $stmt=\Storage\insertRoom($myDB,$topic);
    $resp->getBody()->write(json_encode($stmt));
    return $resp;
});



$app->get('/rooms/{id}', function (Request $req, Response $resp, $args){
    $room_id =(int)$args['id'];
    $myDB=fConnectToDatabase();
    $stmt=\Storage\getMessagesFromRoom($myDB, $room_id);
    $resp->getBody()->write(json_encode($stmt));
    return $resp;
});
$app->post('/rooms/{id}', function (Request $req, Response $resp, $args){
    $room_id =(int)$args['id'];
    $myDB=fConnectToDatabase();
    $content=$req->getParsedBody()['content'];
    $user=$req->getParsedBody()['user'];
    $stmt=\Storage\insertChat($myDB, $content, $user, $room_id);
    $resp->getBody()->write(json_encode($stmt));
    return $resp;
});


$app->get('/hello/{name}', function (Request $req, Response $resp) {
    $name = $req->getAttribute('name');

    $resp->getBody()->write('Hello, ' . $name );

    return $resp;
});


require __DIR__ . '/../routes.php';

$app->run();

