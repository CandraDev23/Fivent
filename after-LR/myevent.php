<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/icon-Fv.png" type="image/x-icon">
    <title>My event</title>
    <link rel="stylesheet" href="../style.css?version=<?php echo filemtime('../style.css'); ?>">
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
    <section>
        <div class="wrapper-myevent">
            <div class="subwrapper-myevent">
                <div class="wrapper-header-myevent">
                    <h1>My event</h1>
                    <select name="option" id="option_sort">
                        <option value="date">Date</option>
                        <option value="best seller">Best seller</option>
                        <option value="name">Name</option>
                    </select>
                </div>
            </div>
            <div class="subwrapper-myevent-1">
                <div class="wrapper-content-myevent">
                    <?php
                    include "koneksi.php"; 

                    $query = "SELECT * FROM data_event WHERE id_user = '$id'";
                    $result = mysqli_query($koneksi, $query);

                    if(!$result){
                    echo ("Query Error: ".mysqli_errno($koneksi).
                        " - ".mysqli_error($koneksi));
                    }

                    while($d = mysqli_fetch_assoc($result)){
                        $date_v = $d['event_date'];
                        $date_v2 = new DateTime($date_v);
                        $date_formated = date_format($date_v2, 'd F Y');
                        $id_event = $d['id_event']
                    ?>
                    <div class="container-myevent">
                        <div class="subcontainer-myevent">
                            <h2><?php echo $d['event_name']?></h2>
                            <p><?php echo $d['location'] ?></p>
                            <h5><?php echo $d['location_city']?></h5>
                            <p><?php echo $date_formated ?></p>
                            <div class="button-action-myevent">
                                <a class="editbutton-event" href="update-event.php?id_event=<?php echo $id_event?>&id=<?php echo $id?>">Edit</a>
                                <a class="deletebutton-event" href="delete.php?id_event=<?php echo $id_event?>&id=<?php echo $id?>">Delete</a>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>