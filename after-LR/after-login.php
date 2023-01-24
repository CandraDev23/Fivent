<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/icon-Fv.png" type="image/x-icon">
    <title>Fivent-Home</title>
    <link rel="stylesheet" href="../style.css?version=<?php echo filemtime('../style.css'); ?>">
    <script src="../script.js?v=../script.js"></script>
</head>
<body>
    <?php
    include "koneksi.php";

    $id = $_GET['id'];
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['kata_cari']))
        {
            $kata_cari = $_POST['kata_cari'];
            header("location:search_.php?kata_cari=$kata_cari");
        }
        
        else
        {
            $bio = $_POST['field_bio'];
            $query = mysqli_query($koneksi, "update user_fivent set bio = '$bio' 
            where id_user='$id'");
    
            if($query) {
                echo "<script>
                alert('Your bio has been successfully added')
                window.location = 'after-login.php?id= $id';
                </script>";
            }
            else {
                echo "<script>
                alert('Your bio failed to add')
                window.location = 'after-login.php?id= $id';
                </script>";
            }
        }
    }
    ?>
    <div id="popup" class="wrapper-popup">
        <div class="window">
            <a href="#" class="close-button"><svg width="10" height="10" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.85656 1.19974C5.29446 -0.362356 2.76181 -0.362357 1.19971 1.19974C-0.362391 2.76184 -0.362389 5.2945 1.19971 6.8566L30.9852 36.6421L1.19971 66.4276C-0.362387 67.9897 -0.362388 70.5223 1.19971 72.0844C2.76181 73.6465 5.29447 73.6465 6.85656 72.0844L36.6421 42.2989L66.4277 72.0845C67.9898 73.6466 70.5224 73.6466 72.0845 72.0845C73.6466 70.5224 73.6466 67.9898 72.0845 66.4277L42.2989 36.6421L72.0845 6.85649C73.6466 5.29439 73.6466 2.76173 72.0845 1.19964C70.5224 -0.362462 67.9898 -0.362459 66.4277 1.19964L36.6421 30.9852L6.85656 1.19974Z" fill="white"/>
                </svg>
                </a>
            <div class="wrapper_fieldbio">
                <form method="POST">
                    <h2>Bio</h2>
                    <textarea name="field_bio" id="field_bio"  cols="30" rows="5" placeholder="Enter your bio..."></textarea>
                    <br>
                    <input type="submit" value="Konfirmasi" id="konfirmasibutton">
                </form>
            </div>
        </div>
    </div>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="#">Fivent</a></div>
            <div class="menu">
                <ul>
                    <li><a href="after-login.php?id=<?php echo $id?>"><b>Home</b></a></li>
                    <li><a href="history_.php?id=<?php echo $id?>">History</a></li>
                    <li><a href="about_.php?id=<?php echo $id?>">About us</a></li>
                    <li><a href="contact_.php?id=<?php echo $id?>">Contact us</a></li>
                    <a href="../gopremium-page.php" class="go-premium-button">Go Premium</a>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <div class="wrapper-home">
            <div class="subwrapper-home">
            <?php
            include "koneksi.php";
            $id = $_GET['id'];

            $query = "SELECT * FROM user_fivent WHERE id_user='$id'";
            $result = mysqli_query($koneksi, $query);

            if(!$result){
            echo ("Query Error: ".mysqli_errno($koneksi).
                " - ".mysqli_error($koneksi));
            }

            while($d = mysqli_fetch_assoc($result)){

            ?>
                <div class="container-profile">
                    <div class="wrapper-foto">
                        <img src="../assets/img/foto-profile.png" alt="Ini profil kamu">
                        <a href=""><p>Change photo</p></a>
                    </div>
                    <div class="wrapper-biodata">
                        <div class="wrapper-biodata-1">
                            <div class="subwrapper-biodata">
                                <div class="align-biodata">
                                    <span>
                                        <h5>Username</h5>
                                        <p><?php echo $d['username']; ?></p>
                                    </span>
                                    <span>
                                        <h5>Email</h5>
                                        <p><?php echo $d['email']; ?></p>
                                    </span>
                                    <span>
                                        <h5>Password</h5>
                                        <p><?php echo $d['password']; ?></p>
                                    </span>
                                </div>
                            </div>
                            <div class="subwrapper-biodata">
                                <span style="width: 100%; display: flex; align-items: center; justify-content: space-between;">
                                    <h5>Bio</h5>
                                    <a href="#popup">Edit</a>
                                </span>
                                <p><?php echo $d['bio']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-connection-acc">
                        <div class="subwrapper-connect-acc">
                            <a class="button-connect" href="https://m.facebook.com/login/?locale=id_ID&refsrc=deprecated">
                                <svg width="9" height="20" viewBox="0 0 15 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.016 14.5163L14.7928 9.84561H9.93091V6.81521C9.93091 5.53851 10.6089 4.29135 12.7884 4.29135H15V0.31577C15 0.31577 12.9932 0 11.0749 0C7.07103 0 4.45272 2.23543 4.45272 6.28591V9.84575H0V14.5165H4.45272V25.8048C5.34517 25.934 6.25985 26 7.19183 26C8.12378 26 9.03846 25.9318 9.93091 25.8048V14.5165H14.0163L14.016 14.5163Z" fill="#404040"/>
                                </svg>
                                Connected</a>
                                <a class="button-connect" href="https://www.instagram.com/accounts/login/">
                                    <svg width="15" height="15" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.1 5.85C22.1 6.92696 21.227 7.8 20.15 7.8C19.073 7.8 18.2 6.92696 18.2 5.85C18.2 4.77304 19.073 3.9 20.15 3.9C21.227 3.9 22.1 4.77304 22.1 5.85Z" fill="#404040"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13 19.5C16.5898 19.5 19.5 16.5898 19.5 13C19.5 9.41015 16.5898 6.5 13 6.5C9.41015 6.5 6.5 9.41015 6.5 13C6.5 16.5898 9.41015 19.5 13 19.5ZM13 16.9C15.1539 16.9 16.9 15.1539 16.9 13C16.9 10.8461 15.1539 9.1 13 9.1C10.8461 9.1 9.1 10.8461 9.1 13C9.1 15.1539 10.8461 16.9 13 16.9Z" fill="#404040"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 12.48C0 8.11159 0 5.92739 0.850149 4.25887C1.59796 2.79121 2.79121 1.59796 4.25887 0.850149C5.92739 0 8.11159 0 12.48 0H13.52C17.8884 0 20.0726 0 21.7411 0.850149C23.2088 1.59796 24.402 2.79121 25.1498 4.25887C26 5.92739 26 8.11159 26 12.48V13.52C26 17.8884 26 20.0726 25.1498 21.7411C24.402 23.2088 23.2088 24.402 21.7411 25.1498C20.0726 26 17.8884 26 13.52 26H12.48C8.11159 26 5.92739 26 4.25887 25.1498C2.79121 24.402 1.59796 23.2088 0.850149 21.7411C0 20.0726 0 17.8884 0 13.52V12.48ZM12.48 2.6H13.52C15.7471 2.6 17.2611 2.60202 18.4313 2.69763C19.5712 2.79077 20.1541 2.95957 20.5607 3.16677C21.5392 3.66531 22.3347 4.46081 22.8332 5.43925C23.0404 5.84589 23.2092 6.42882 23.3024 7.5687C23.398 8.73893 23.4 10.2529 23.4 12.48V13.52C23.4 15.7471 23.398 17.2611 23.3024 18.4313C23.2092 19.5712 23.0404 20.1541 22.8332 20.5607C22.3347 21.5392 21.5392 22.3347 20.5607 22.8332C20.1541 23.0404 19.5712 23.2092 18.4313 23.3024C17.2611 23.398 15.7471 23.4 13.52 23.4H12.48C10.2529 23.4 8.73893 23.398 7.5687 23.3024C6.42882 23.2092 5.84589 23.0404 5.43925 22.8332C4.46081 22.3347 3.66531 21.5392 3.16677 20.5607C2.95957 20.1541 2.79077 19.5712 2.69763 18.4313C2.60202 17.2611 2.6 15.7471 2.6 13.52V12.48C2.6 10.2529 2.60202 8.73893 2.69763 7.5687C2.79077 6.42882 2.95957 5.84589 3.16677 5.43925C3.66531 4.46081 4.46081 3.66531 5.43925 3.16677C5.84589 2.95957 6.42882 2.79077 7.5687 2.69763C8.73893 2.60202 10.2529 2.6 12.48 2.6Z" fill="#404040"/>
                                    </svg>
                                    Connected</a>
                                <a style="background-color: white; color: #404040; font-weight: 600;" class="button-connect" href="../index.php"><svg width="16" height="16" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.25 7.125L16.625 9.5L14.25 11.875" stroke="#404040" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8.70833 9.5L16.625 9.5" stroke="#404040" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11.0833 13.4583V15.0417C11.0833 15.4789 10.7288 15.8333 10.2916 15.8333H3.16658C2.72936 15.8333 2.37492 15.4789 2.37492 15.0417V3.95832C2.37492 3.5211 2.72936 3.16666 3.16658 3.16666L10.2916 3.16666C10.7288 3.16666 11.0833 3.5211 11.0833 3.95832V5.54166" stroke="#404040" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Log out</a>
                            <h4>Share profile with link:</h4>
                            <span>
                                <p id="pilih">Fivent.com//biodata/profile/</p>   
                                <input class="copy-button" type="button" value="Copy">
                            </span>
                        </div>
                    </div>
                </div>
            <?php 
            }
            ?>
            </div>
            <div class="subwrapper-home">
                <form method="post">
                    <div class="container-action">
                        <a href="create-event.php?id=<?php echo $id; ?>">Create event</a>
                        <div class="field-search">
                            <input class="fieldsearch" type="search" name="kata_cari" value="" id="" placeholder="Search here">
                            <button class="search-button">
                                <svg width="16" height="16" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 19.25C15.3325 19.25 19.25 15.3325 19.25 10.5C19.25 5.66751 15.3325 1.75 10.5 1.75C5.66751 1.75 1.75 5.66751 1.75 10.5C1.75 15.3325 5.66751 19.25 10.5 19.25Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16.75 16.75L24.25 24.25" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </button>
                        </div>
                        <a href="myevent.php?id=<?php echo $id;?>">My event</a>
                    </div>
                </form>
            </div>
            <div class="subwrapper-home">
                <div class="container-listevent">
                    <div class="wrapper-head-listevent">
                        <h3>Popular</h3>
                        <select name="" id="">
                            <option value="popular">Popular</option>
                            <option value="best seller">Best seller</option>
                            <option value="date">Date</option>
                        </select>
                    </div>
                </div>
                <div class="container-listevent">
                    <div class="container-eventhome">
                        <?php
                        include "koneksi.php"; 

                        $query = "SELECT * FROM data_event";
                        $result = mysqli_query($koneksi, $query);

                        if(!$result){
                        echo ("Query Error: ".mysqli_errno($koneksi).
                            " - ".mysqli_error($koneksi));
                        }

                        while($d = mysqli_fetch_assoc($result)){
                            $date_v = $d['event_date'];
                            $date_v2 = new DateTime($date_v);
                            $date_formated = date_format($date_v2, 'd F Y');
                            $id_event = $d['id_event'];
                            $id_owner = $d['id_user'];
                            $query_nested = "SELECT * FROM user_fivent WHERE id_user = '$id_owner'";
                            $d_owner_ = mysqli_query($koneksi, $query_nested);
                            $d_owner = mysqli_fetch_assoc($d_owner_);
                        ?>
                        <a href="detailevent.php?id=<?php echo $id?>&id_event=<?php echo $id_event?>">
                            <div class="sub-container-eventhome">
                                <span>
                                    <h4><?php echo $d['event_name']?></h4>
                                    <p><?php echo $d['location_city']?></p>
                                </span>
                                <div class="account-listevent">
                                    <img src="../assets/img/Profile-otheruser.jpg" alt="Other user img profile">
                                    <h5><?php echo $d_owner['username']?></h5>
                                </div>
                                <span style="text-align: right;">
                                    <h5>Rp. <?php echo $d['price_ticket']?></h5>
                                    <p><?php echo $date_formated?></p>
                                </span>
                            </div>
                        </a>
                        <?php 
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="wrapper-footer">
            <h1>Fivent</h1>
            <span>
                <a href="https://www.facebook.com/chandra.setyawan.7146/">
                    <svg width="13" height="30" viewBox="0 0 20 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.688 20.6578L19.7237 14.0111H13.2412V9.69857C13.2412 7.88172 14.1452 6.10693 17.0512 6.10693H20V0.449366C20 0.449366 17.3242 0 14.7666 0C9.42803 0 5.93696 3.1812 5.93696 8.94534V14.0113H0V20.658H5.93696V36.7222C7.12689 36.9061 8.34647 37 9.5891 37C10.8317 37 12.0513 36.9029 13.2412 36.7222V20.658H18.6883L18.688 20.6578Z" fill="#D3D3D3"/>
                        </svg>                    
                </a>
                <a href="">
                    <svg width="30" height="23" viewBox="0 0 37 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.6137 30C7.33887 30 3.35402 28.7727 0 26.6552C2.84767 26.837 7.87316 26.4015 10.999 23.4584C6.29671 23.2454 4.17606 19.6856 3.89945 18.1643C4.299 18.3164 6.20451 18.499 7.2802 18.073C1.87101 16.7343 1.04119 12.0487 1.22559 10.6187C2.23982 11.3185 3.96092 11.5619 4.63707 11.501C-0.403309 7.94118 1.41 2.58621 2.30129 1.43002C5.91845 6.37652 11.3394 9.15466 18.0459 9.30919C17.9195 8.76177 17.8527 8.19185 17.8527 7.60649C17.8527 3.40554 21.2927 0 25.5362 0C27.7534 0 29.7512 0.929679 31.1536 2.41675C32.6352 2.07405 34.865 1.27183 35.955 0.578093C35.4056 2.52536 33.695 4.14977 32.6603 4.75184C32.6689 4.77232 32.6519 4.73127 32.6603 4.75184C33.5692 4.61613 36.0285 4.14961 37 3.49899C36.5196 4.59294 34.706 6.41182 33.2177 7.43012C33.4946 19.4844 24.1511 30 11.6137 30Z" fill="#D3D3D3"/>
                        </svg>                    
                </a>
                <a href="https://www.instagram.com/can_setiawan/">
                    <svg width="28" height="28" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M31.45 8.325C31.45 9.85759 30.2076 11.1 28.675 11.1C27.1424 11.1 25.9 9.85759 25.9 8.325C25.9 6.79241 27.1424 5.55 28.675 5.55C30.2076 5.55 31.45 6.79241 31.45 8.325Z" fill="#D3D3D3"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5 27.75C23.6086 27.75 27.75 23.6086 27.75 18.5C27.75 13.3914 23.6086 9.25 18.5 9.25C13.3914 9.25 9.25 13.3914 9.25 18.5C9.25 23.6086 13.3914 27.75 18.5 27.75ZM18.5 24.05C21.5652 24.05 24.05 21.5652 24.05 18.5C24.05 15.4348 21.5652 12.95 18.5 12.95C15.4348 12.95 12.95 15.4348 12.95 18.5C12.95 21.5652 15.4348 24.05 18.5 24.05Z" fill="#D3D3D3"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 17.76C0 11.5434 0 8.43513 1.20983 6.06071C2.27402 3.97211 3.97211 2.27402 6.06071 1.20983C8.43513 0 11.5434 0 17.76 0H19.24C25.4566 0 28.5649 0 30.9393 1.20983C33.0279 2.27402 34.726 3.97211 35.7902 6.06071C37 8.43513 37 11.5434 37 17.76V19.24C37 25.4566 37 28.5649 35.7902 30.9393C34.726 33.0279 33.0279 34.726 30.9393 35.7902C28.5649 37 25.4566 37 19.24 37H17.76C11.5434 37 8.43513 37 6.06071 35.7902C3.97211 34.726 2.27402 33.0279 1.20983 30.9393C0 28.5649 0 25.4566 0 19.24V17.76ZM17.76 3.7H19.24C22.4093 3.7 24.5638 3.70288 26.2292 3.83894C27.8513 3.97147 28.6809 4.2117 29.2595 4.50655C30.6519 5.21601 31.784 6.34807 32.4935 7.74047C32.7883 8.31915 33.0285 9.1487 33.1611 10.7708C33.2971 12.4362 33.3 14.5907 33.3 17.76V19.24C33.3 22.4093 33.2971 24.5638 33.1611 26.2292C33.0285 27.8513 32.7883 28.6809 32.4935 29.2595C31.784 30.6519 30.6519 31.784 29.2595 32.4935C28.6809 32.7883 27.8513 33.0285 26.2292 33.1611C24.5638 33.2971 22.4093 33.3 19.24 33.3H17.76C14.5907 33.3 12.4362 33.2971 10.7708 33.1611C9.1487 33.0285 8.31915 32.7883 7.74047 32.4935C6.34807 31.784 5.21601 30.6519 4.50655 29.2595C4.2117 28.6809 3.97147 27.8513 3.83894 26.2292C3.70288 24.5638 3.7 22.4093 3.7 19.24V17.76C3.7 14.5907 3.70288 12.4362 3.83894 10.7708C3.97147 9.1487 4.2117 8.31915 4.50655 7.74047C5.21601 6.34807 6.34807 5.21601 7.74047 4.50655C8.31915 4.2117 9.1487 3.97147 10.7708 3.83894C12.4362 3.70288 14.5907 3.7 17.76 3.7Z" fill="#D3D3D3"/>
                    </svg>
                </a>
            </span>
            <p>© 2022 CanKun, In All right reserved</p>
        </div>
    </footer>
</body>
</html>