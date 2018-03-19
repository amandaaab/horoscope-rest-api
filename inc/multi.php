<?php 
$signs [] = [
    'title' => 'V ä d u r e n',
    'start' => '0321',
    'end' => '0419',
    'image' => '<img src ="img/vaduren.png"/>',
];

$signs [] = [
    'title' => 'O x e n',
    'start' => '0420',
    'end' => '0520',
    'image' => '<img src ="img/oxen.png"/>',
];

$signs [] = [
    'title' => 'T v i l l i n g e n',
    'start' => '0521',
    'end' => '0621',
    'image' => '<img src ="img/tvillingen.png"/>',
];

$signs [] = [
    'title' => 'K r ä f t a n',
    'start' => '0622',
    'end' => '0722',
    'image' => '<img src ="img/kraftan.png"/>',
]; 

$signs [] = [
    'title' => 'L e j o n e t',
    'start' => '0723',
    'end' => '0822',
    'image' => '<img src ="img/lejonet.png"/>',
];

$signs [] = [
    'title' => 'J u n g f r u n',
    'start' => '0823',
    'end' => '0922',
    'image' => '<img src ="img/jungfrun.png"/>',
];

$signs [] = [
    'title' => 'V å g e n',
    'start' => '0923',
    'end' => '1022',
    'image' => '<img src ="img/vagen.png"/>',
];

$signs [] = [
    'title' => 'S k o r p i o n e n',
    'start' => '1023',
    'end' => '1121',
    'image' => '<img src ="img/skorpionen.png"/>',
];

$signs [] = [
    'title' => 'S k y t t e n',
    'start' => '1122',
    'end' => '1221',
    'image' => '<img src ="img/skytten.png"/>',
];

$signs [] = [
    'title' => 'S t e n b o c k e n',
    'start' => '1222',
    'end' => '0119',
    'image' => '<img src ="img/stenbocken.png"/>',
];

$signs [] = [
    'title' => 'V a t t u m a n n e n',
    'start' => '0120',
    'end' => '0218',
    'image' => '<img src ="img/vattuman.png"/>', 
];

$signs [] = [
    'title' => 'F i s k a r n a',
    'start' => '0219',
    'end' => '0320',
    'image' => '<img src ="img/fiskarna.png"/>',
];

function getSign($signs, $date, $fourLastNr){

    foreach($signs as $sign){
        if($fourLastNr >= $sign['start'] && $fourLastNr <= $sign['end']){
            $title = $sign['title'];
           $horoscope = "<h2>$title</h2>" . $sign['image'];
           return $horoscope;
           
        } 
    }  
}

?>