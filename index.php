<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        //menampung variabel kata_cari dari form pencarian
        $kata_cari = $_POST['kata_cari'];
        header("location:search.php?kata_cari=$kata_cari");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fivent</title>
    <link rel="shortcut icon" href="assets/img/icon-Fv.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css?version=<?php echo filemtime('style.css'); ?>">
    <script src="script.js"></script>
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="#">Fivent</a></div>
            <div class="menu">
                <ul>
                    <li><a href="index.php"><b>Home</b></a></li>
                    <li><a href="search.php">Search</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                    <a href="gopremium-page.php" class="go-premium-button">Go Premium</a>
                </ul>
            </div>
        </div>
    </nav>
    <div class="content-wrapper">
        <div class="sub-wrapper">
            <div class="wrapper-in">
                <h4>Let's Create Your Own Event</h4>
                <p style="margin: 20px 0px; font-size: 12px;">
                    We are a digital event platform that works in realtime. With just one click, let us create your special day beyond any expectation you can imagine
                </p>
                <a href="login.php"><input class="login-button" type="button" value="Login"></a>
            </div>
        </div>
        <img src="assets/img/event1_croped.png" alt="foto event"  width="100%">
        <div class="sub-wrapper-2">
            <h1 style="color:#404040; font-size:50px;">Fivent</h1>
            <div class="find-event">
                <h4>Find Event Around You</h4>
                <p>More than thousand events annually on our problem</p>
                <p>Let us find what's best for you</p>
                <form method="POST">
                    <span><input class="field-find" type="text" name="kata_cari" value="" placeholder="Enter an event or location name"></span>
                    <span><input class="find-button" type="submit" value="Find event"></span>
                </form>
            </div>
        </div>
    </div>
    <div class="content-wrapper-2">
        <div class="wrapper-feature">
            <h1>What users can do?</h1>
            <ul>
                <li>Find information for upcoming and going events</li>
                <li>Add and post schedule information for an upcoming event <b>(Premium)</b></li>
                <li>Find and view trending, popular and nearby events</li>
                <li>Find and view events by number of attendees</li>
                <li>Join as an event participant by clicking the “Join” button for free events</li>
                <li>Join as an event participant by registering and purchasing tickets for paid events</li>
            </ul>
        </div>
    </div>
    <section id="Create-Find">
        <div class="content-wrapper-3">
            <div class="wrapper-CF">
                <a href="login.php">
                    <div class="button-CF">
                        <svg width="123" height="85" viewBox="0 0 173 135" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M44.4412 68.7059V55.7647V9C44.4412 6.23858 46.6797 4 49.4412 4H142.971C145.732 4 147.971 6.23858 147.971 9V55.7647V68.7059M70.3235 107.529H96.2059H122.088" stroke="#404040" stroke-width="8"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M99.7266 30.3615C99.7266 28.1523 97.9357 26.3615 95.7266 26.3615C93.5175 26.3615 91.7266 28.1523 91.7266 30.3615V52.2438H69.8442C67.6351 52.2438 65.8442 54.0347 65.8442 56.2438C65.8442 58.4529 67.6351 60.2438 69.8442 60.2438H91.7266V82.1262C91.7266 84.3353 93.5175 86.1262 95.7266 86.1262C97.9357 86.1262 99.7266 84.3353 99.7266 82.1262V60.2438H121.609C123.818 60.2438 125.609 58.4529 125.609 56.2438C125.609 54.0347 123.818 52.2438 121.609 52.2438H99.7266V30.3615Z" fill="#404040"/>
                            <rect x="124.515" y="67.8971" width="44.4853" height="44.4853" rx="5" stroke="#404040" stroke-width="8"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M150.551 79.2242C150.551 77.0151 148.761 75.2242 146.551 75.2242C144.342 75.2242 142.551 77.0151 142.551 79.2242V86.3456H135.43C133.221 86.3456 131.43 88.1364 131.43 90.3456C131.43 92.5547 133.221 94.3456 135.43 94.3456H142.551V101.467C142.551 103.676 144.342 105.467 146.551 105.467C148.761 105.467 150.551 103.676 150.551 101.467V94.3456H157.673C159.882 94.3456 161.673 92.5547 161.673 90.3456C161.673 88.1364 159.882 86.3456 157.673 86.3456H150.551V79.2242Z" fill="#404040"/>
                            <rect x="4" y="67.8971" width="62.2794" height="62.2794" rx="5" stroke="#404040" stroke-width="8"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M38.8513 83.7551C38.8513 81.546 37.0605 79.7551 34.8513 79.7551C32.6422 79.7551 30.8513 81.546 30.8513 83.7551V95.325H19.2815C17.0724 95.325 15.2815 97.1158 15.2815 99.325C15.2815 101.534 17.0724 103.325 19.2815 103.325H30.8513V114.895C30.8513 117.104 32.6422 118.895 34.8513 118.895C37.0605 118.895 38.8513 117.104 38.8513 114.895V103.325H50.4212C52.6303 103.325 54.4212 101.534 54.4212 99.325C54.4212 97.1158 52.6303 95.325 50.4212 95.325H38.8513V83.7551Z" fill="#404040"/>
                        </svg>
                        <div class="text-CF">
                            <h2>Create event</h2>
                            <p>Create an information and event terms and post it</p>
                        </div>
                    </div>
                </a>
                <a href="search.php">
                    <div class="button-CF">
                        <svg width="153" height="95" viewBox="0 0 213 155" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M45.2083 129.167C45.2083 118.466 59.6658 109.792 77.5 109.792C95.3342 109.792 109.792 118.466 109.792 129.167" stroke="#404040" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M116.25 92.0281C127.655 95.0179 135.625 101.846 135.625 109.791" stroke="#404040" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M38.75 92.0281C27.3452 95.0179 19.375 101.846 19.375 109.791" stroke="#404040" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M77.5 90.4166C88.2005 90.4166 96.875 81.7421 96.875 71.0416C96.875 60.3411 88.2005 51.6666 77.5 51.6666C66.7995 51.6666 58.125 60.3411 58.125 71.0416C58.125 81.7421 66.7995 90.4166 77.5 90.4166Z" stroke="#404040" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M116.25 66.1081C120.214 62.5604 122.708 57.4049 122.708 51.6666C122.708 40.9661 114.034 32.2916 103.333 32.2916C98.371 32.2916 93.8445 34.1571 90.4167 37.2251" stroke="#404040" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M38.75 66.1081C34.7862 62.5604 32.2917 57.4049 32.2917 51.6666C32.2917 40.9661 40.9662 32.2916 51.6667 32.2916C56.629 32.2916 61.1555 34.1571 64.5833 37.2251" stroke="#404040" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="165.974" cy="68.9741" r="24.3196" transform="rotate(-41.4718 165.974 68.9741)" stroke="#404040" stroke-width="8"/>
                            <path d="M159 59.441C163 55.941 169 56.4411 172.5 59.4411" stroke="#404040" stroke-width="8" stroke-linecap="round"/>
                            <path d="M183.762 90.1338L209 118.689" stroke="#404040" stroke-width="8" stroke-linecap="round"/>
                        </svg>
                        <div class="text-CF">
                            <h2>Find event</h2>
                            <p>Find popular and trending events paid or free</p>
                        </div>
                    </div>
                </a>
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