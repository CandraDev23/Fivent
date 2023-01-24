<?php

include "koneksi.php";

$id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{   
    $nameevent = $_POST['field_nameevent'];
    $location = $_POST['field_location'];
    $city = $_POST['field_location_city'];
    $date = $_POST['field_date'];
    $desc = $_POST['field_desc'];
    $terms = $_POST['field_eventterms'];
    $price = $_POST['field_price'];

    $query = "insert into data_event (event_name, id_user,location, location_city, event_date, event_desc,
    event_terms, price_ticket) values ('$nameevent', '$id','$location', '$city', '$date', '$desc', '$terms', '$price')";
    $run_query = mysqli_query($koneksi, $query);

    if ($query) {
        echo "<script>alert('Success, events created')
        window.location = 'myevent.php?id= $id';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/icon-Fv.png" type="image/x-icon">
    <title>Fivent-Create event</title>
    <link rel="stylesheet" href="../style.css">
    <script src="../script.js"></script>
</head>
<body>
    <?php 
    include "koneksi.php";
    $id = $_GET['id'];
    
    ?>
    <nav>
        <div class="wrapper">
            <div class="Back-button"><a href="after-login.php?id=<?php echo $id; ?>">Back</a></div>
        </div>
    </nav>
    <div class="wrapper-create-event">
        <form method="POST">
            <div class="subwrapper-create-event">
                <div class="container-create-event-title">
                    <h1>Create event</h1>
                    <p>Create an event and post. By filling out the form, the event will be conveyed clearly and with certainty.</p>
                </div>
                <div class="container-create-event-field">
                    <div>
                        <label for="eventname">Event name</label>
                        <br>
                        <input type="text" name="field_nameevent" id="field_nameevent" placeholder="Enter event name">
                    </div>
                    <div class="wrapper-location">
                        <label for="location">Location</label>
                        <br>
                        <input type="text" name="field_location" id="field_location" placeholder="Enter location">
                        <input type="text" name="field_location_city" id="field_location_city" placeholder="Enter city name">
                    </div>
                    <div>
                        <label for="date">Date</label>
                        <br>
                        <input type="date" name="field_date" id="field_date">
                    </div>
                    <div>
                        <label for="desc">Description</label>
                        <br>
                        <textarea class="field_desc" name="field_desc" id="field_desc" cols="30" rows="10" placeholder="Event description..." WRAP ></textarea>
                    </div>
                </div>
                <div class="container-create-event-field">
                    <label for="eventterms">Event terms and conditions</label>
                    <textarea name="field_eventterms" id="field_eventterms" cols="30" rows="10" placeholder="Terms and conditions.."></textarea>
                    <div class="wrapper-categories">
                        <label>
                            <input type="radio" id="radio" name="radio" value="Free" onclick="hide_price()">
                            <span>Free</span>
                        </label>
                        <label>
                            <input type="radio" id="radio" name="radio" value="Nfree" onclick="show_price()" checked>
                            <span>Add a ticket</span>
                        </label>
                    </div>
                    <div class="wrapper-price" id="wrapper_price">
                        <label id="label_price" for="price">Price ticket (Fill number)</label>
                        <input type="number" name="field_price" id="field_price" placeholder="Enter a price">
                    </div>
                    <div class="wrapper-button-CR-C">
                        <input id="create_button" type="submit" value="Create" onclick="check_createevent()">
                        <input id="cancel_button" type="button" value="Cancel" onclick="history.back()">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>