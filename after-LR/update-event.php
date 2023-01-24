<?php
include "koneksi.php";

$id = $_GET['id'];
$id_event = $_GET['id_event'];

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{   
    $nameevent = $_POST['field_nameevent'];
    $location = $_POST['field_location'];
    $city = $_POST['field_location_city'];
    $date = $_POST['field_date'];
    $desc = $_POST['field_desc'];
    $terms = $_POST['field_eventterms'];
    $price = $_POST['field_price'];

    $query = "UPDATE data_event set event_name = '$nameevent',location= '$location', location_city= '$city',
    event_date= '$date', event_desc= '$desc', event_terms= '$terms', price_ticket= '$price' 
    where id_event='$id_event'";
    $run_query = mysqli_query($koneksi, $query);

    if ($query) {
        echo "<script>alert('Success, events updated')
        window.location = 'myevent.php?id= $id';</script>";
    }
    else {
        echo "<script>alert('Update event failed')</script>
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
    <nav>
        <div class="wrapper">
            <div class="Back-button"><a href="myevent.php?id=<?php echo $id?>">Back</a></div>
        </div>
    </nav>
    <div class="wrapper-create-event">
        <form method="POST">
            <div class="subwrapper-create-event">
                <div class="container-create-event-title">
                    <h1>Update event</h1>
                    <p>Update events. If you enter the wrong word or want to change some of the information in your event.</p>
                </div>
                <div class="container-create-event-field">
                    <?php
                    include 'koneksi.php';
                    $id = $_GET['id'];
                    $id_event = $_GET['id_event'];

                    $data = mysqli_query($koneksi,"select * from data_event where id_event='$id_event'");
                    while($d = mysqli_fetch_array($data)){
                        ?>
                    <div>
                        <label for="eventname">Event name</label>
                        <br>
                        <input type="text" name="field_nameevent" id="field_nameevent" value="<?php echo $d['event_name'];?>" placeholder="Enter event name">
                        </div>
                    <div class="wrapper-location">
                        <label for="location">Location</label>
                        <br>
                        <input type="text" name="field_location" id="field_location" value="<?php echo $d['location'];?>" placeholder="Enter location">
                        <input type="text" name="field_location_city" id="field_location_city" value="<?php echo $d['location_city'];?>" placeholder="Enter city name">
                    </div>
                    <div>
                        <label for="date">Date</label>
                        <br>
                        <input type="date" name="field_date" value="<?php echo $d['event_date'];?>" id="field_date">
                    </div>
                    <div>
                        <label for="desc">Description</label>
                        <br>
                        <textarea class="field_desc" name="field_desc" id="field_desc" cols="30" rows="10"  placeholder="Event description..." WRAP ><?php echo $d['event_desc'];?></textarea>
                    </div>
                </div>
                <div class="container-create-event-field">
                    <label for="eventterms">Event terms and conditions</label>
                    <textarea name="field_eventterms" id="field_eventterms" cols="30" rows="10" placeholder="Terms and conditions.."><?php echo $d['event_desc'];?></textarea>
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
                        <label id="label_price" for="price">Price ticket</label>
                        <input type="number" name="field_price" id="field_price" value="<?php echo $d['price_ticket'];?>" placeholder="Enter a price">
                    </div>
                    <div class="wrapper-button-CR-C">
                        <input id="create_button" type="submit" value="Update">
                        <input id="cancel_button" type="button" value="Cancel" onclick="history.back()">
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </form>
    </div>
</body>
</html>