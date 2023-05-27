<?php
include 'database/dbConnection.php';
include 'classes/email.php';
include 'classes/customer.php';


$customer = new Customer();
$arr = array(
    'seat_no'=>'24,23,25',
    'fullname'=>'mark gg',
    'id_number' => '12345678',
    'phone' => '070000000',
    'email' => 'macgg@gmail.com',
    'bus' => 1,
    'route'=>'pwani-kabarak',
    'arrival_time' => '17:00:00',
    'departure_time'=> '17:30:00'
);

$customer->setBusId($arr['bus']);
$customer->setName($arr['fullname']);
$customer->setPhone($arr['phone']);
$customer->setEmail($arr['email']);
$customer->setIdNumber($arr['id_number']);
$customer->route = $arr['route'];
$customer->arrival_time = $arr['arrival_time'];
$customer->departure_time = $arr['departure_time'];

$arr1 = explode(',',$arr['seat_no']);

print_r($customer->getBookDetails(12));

foreach ($arr1 as $seat_no){
//    book
    echo $seat_no;

//    send email

}

