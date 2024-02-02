<?php


// Hier onder heb ik een connectie gemaakt met de database.
// Als de klant de form invullen, oftewel iets willen boeken en hun gegevens hebben ingevuld.
// Dan krijgen wij de data in de database en handelen wij de rest af.

$connection = mysqli_connect('localhost','root','','book_db');


// Hier staan alle namen en gegevens die wij van de klant moeten hebben.

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values
('$name' , '$email' , '$phone' , '$address' , '$location' , '$guests' , '$arrivals', '$leaving')";

mysqli_query($connection, $request);


// Hier onder zie je een else statement.
// Als alles lukt dan krijgen wij de informatie van de klant.
// Als er wat fout gaat dan echood hij een message die hier onder staat en dan moeten we kijken wat de error is.

header('location:book.php');
}else{
    echo 'daar ging wat mis probeer het opnieuw';
}


?>