<?php 
include "koneksi.php";
$id = $_GET['id'];
$id_event = $_GET['id_event'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/icon-Fv.png" type="image/x-icon">
    <title>Fivent-Detail event</title>
    <link rel="stylesheet" href="../style.css?version=<?php echo filemtime('../style.css'); ?>">
    <script src="../script.js?v=../script.js"></script>
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="Back-button"><a href="history_.php?id= <?php echo $id?>">Back</a></div>
        </div>
    </nav>
    <div class="wrapper-detailevent">
        <div class="subwrapper-detailevent">
            <h2>Detail event</h2>
            <div class="container-detailevent">
                <?php
                include "koneksi.php";

                $id = $_GET['id'];
                $id_event = $_GET['id_event'];

                $query = "SELECT * FROM history_event WHERE id_event_his = '$id_event'";
                $result = mysqli_query($koneksi, $query);

                while($d = mysqli_fetch_assoc($result))
                {
                    $date_v = $d['event_date'];
                    $date_v2 = new DateTime($date_v);
                    $date_formated = date_format($date_v2, 'd F Y');
                    $id_owner = $d['id_user'];
                    $query_nested = "SELECT * FROM user_fivent WHERE id_user = '$id_owner'";
                    $d_owner_ = mysqli_query($koneksi, $query_nested);
                    $d_owner = mysqli_fetch_assoc($d_owner_);
                
                ?>
                <div class="childcontainer-detailevent">
                    <h1><?php echo $d['event_name']?></h1>
                    <p><?php echo $d['location']?></p>
                    <p><?php echo $date_formated?></p>
                </div>
                <div class="childcontainer-detailevent-1">
                    <div class="acc-in-detailevent">
                        <img src="../assets/img/Profile-otheruser.jpg" alt="profile">
                        <h5><?php echo $d_owner['username']?></h5>
                    </div>
                    <div class="desc-wrap">
                        <h4>Description</h4>
                        <p class="desc-dateilevent"><?php echo $d['event_desc']?></p>
                    </div>
                    <div style="text-align: right;" class="desc-wrap">
                        <h4 class="price-dateilevent-title">Ticket Price</h4>
                        <p class="price-dateilevent">Rp. <?php echo $d['price_ticket']?></p>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>