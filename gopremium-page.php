<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/icon-Fv.png" type="image/x-icon">
    <title>Fivent-Go premium</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function validasi_gopremium()
        {
            if(form_gopremium.field_username.value == "" && form_gopremium.field_email.value == "" && form_gopremium.field_pass.value == "")
            {
                alert("Enter all the required data")
            }
            else if(form_gopremium.field_username.value =="")
            {
                alert("Enter your username")
            }
            else if(form_gopremium.field_email.value =="") 
            {
                alert("Enter your email")
            }
            else if(form_gopremium.field_pass.value =="")
            {
                alert("Enter password")
            }
            else if(form_gopremium.field_banknumber.value == "") {
                alert("Enter bank number")
            }
            else 
            {
                alert("Successful payment")
                alert("Thank you for buy premium")
                window.location.reload();
            }
        }
    </script>
</head>
<body>
    <section>
        <div class="wrapper-login">
            <div class="button-back-LR">
                <button class="button-back" style="background-color: transparent; border: none;" onclick="history.back()">
                    <svg width="22" height="22" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.0858 29.9142C21.8668 30.6953 23.1332 30.6953 23.9142 29.9142C24.6953 29.1332 24.6953 27.8668 23.9142 27.0858L21.0858 29.9142ZM12 18L10.5858 16.5858C9.80474 17.3668 9.80474 18.6332 10.5858 19.4142L12 18ZM23.9142 8.91421C24.6953 8.13316 24.6953 6.86684 23.9142 6.08579C23.1332 5.30474 21.8668 5.30474 21.0858 6.08579L23.9142 8.91421ZM23.9142 27.0858L13.4142 16.5858L10.5858 19.4142L21.0858 29.9142L23.9142 27.0858ZM13.4142 19.4142L23.9142 8.91421L21.0858 6.08579L10.5858 16.5858L13.4142 19.4142Z" fill="#404040"/>
                    </svg>                        
                    Back
                </button>
            </div>
        </div>
        <div class="wrapper-login">
            <div style="height: 700px;" class="container">
                <div class="sub-container-register">
                    <a href="gopremium-page.php">
                        <div style="background-color: #404040; padding: 10px; border-radius: 5px;">
                            <h3 style="color: white;">Go premium</h3>
                        </div>
                    </a>
                    <form action="#" method="post" name="form_gopremium">
                        <fieldset>
                            <label for="">Username</label>
                            <br>
                            <input class="field" type="text" name="field_username" id="" placeholder="Enter your username">
                            <br>
                            <label for="">Email</label>  
                            <br>
                            <input class="field" type="email" name="field_email" id="" placeholder="Enter your email">
                            <br>
                            <label for="">Password</label>  
                            <br>
                            <input class="field" type="password" name="field_pass" id="" placeholder="Enter your password">
                            <label for="">Bank name</label>  
                            <br>
                            <input class="field" type="text" name="field_bankname" id="" placeholder="Enter bank name">
                            <label for="">Bank account number</label>  
                            <br>
                            <input class="field" type="number" name="field_banknumber" id="" placeholder="Enter bank name">
                            <h3 style="margin-top: 20px;">Total : Rp. 200.000</h3>
                            <input class="login-button-check" type="button" value="Pay now" onclick="validasi_gopremium()">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>