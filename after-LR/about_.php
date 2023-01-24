<?php 
include "koneksi.php";
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../ssets/img/icon-Fv.png" type="image/x-icon">
    <title>Fivent-About us</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="#">Fivent</a></div>
            <div class="menu">
                <ul>
                    <li><a href="after-login.php?id=<?php echo $id?>">Home</a></li>
                    <li><a href="history_.php?id=<?php echo $id?>">History</a></li>
                    <li><a href="about_.php?id=<?php echo $id?>"><b>About us</b></a></li>
                    <li><a href="contact_.php?id=<?php echo $id?>">Contact us</a></li>
                    <a href="../gopremium-page.php" class="go-premium-button">Go Premium</a>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <div class="wrapper-about">
            <div class="subwrapper-about">
                <h1><b>What's Fivent?</b></h1>
                <p style="text-align: justify; text-indent: 10%;">As the name implies, the website can be used for those who are primarily looking for and creating events. There are two categories of events, paid or free. In searching for an event, the user is not charged a fee, only fees can be charged if the user buys an event ticket. Before buying the ticket, the user can view the information data and conditions for an event. In addition, users can create an event. In creating an event the user must fill in an event name, location, city location, date, description, and requirements, etc. To create an event, users must register premium. That way event information can be conveyed to other users.</p>
                <div class="space-p"></div>
                <h1><b>Background</b></h1>
                <p style="text-align: justify; text-indent: 10%;">The reason for creating this website is because I often see outdoor events on television and besides that I sometimes see on Instagram event organizers still use event registration via the G form to buy tickets and register for events.</p>
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