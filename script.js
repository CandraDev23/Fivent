function hide_price() {
    document.getElementById("wrapper_price").style.display= "none";
}

function show_price() {
    document.getElementById("wrapper_price").style.display = "inline-block";
}

function check_createevent() 
{
    var event_name = document.getElementById('field_nameevent').value;
    var locationn = document.getElementById('field_location').value;
    var location_city = document.getElementById('field_location_city').value;
    var date = document.getElementById('field_date').value;

    if(event_name=="" && locationn=="" && location_city=="" && date=="" && document.getElementById("field_desc").value=="")
    {
        alert("All fields must be filled in")
    }
    else if(event_name=="") 
    {
        alert("You forgoted to fill event name?")
    }
    else if(locationn="" || location_city=="") 
    {
        alert("Your forgoted to fill location event")    
    }
    else if(date=="") 
    {
        alert("You forgoted to fill event date")
    }
    else if(document.getElementById("field_desc").value==null || document.getElementById("field_desc").value=="")
    {
        alert("Description field must be filled")
    }
}

function check_updateevent() 
{
    var event_name = document.getElementById('field_nameevent').value;
    var locationn = document.getElementById('field_location').value;
    var location_city = document.getElementById('field_location_city').value;
    var date = document.getElementById('field_date').value;

    if(event_name=="" && locationn=="" && location_city=="" && date=="" && document.getElementById("field_desc").value=="")
    {
        alert("All fields must be filled in")
    }
    else if(event_name=="") 
    {
        alert("You forgoted to fill event name?")
    }
    else if(locationn="" || location_city=="") 
    {
        alert("Your forgoted to fill location event")    
    }
    else if(date=="") 
    {
        alert("You forgoted to fill event date")
    }
    else if(document.getElementById("field_desc").value==null || document.getElementById("field_desc").value=="")
    {
        alert("Description field must be filled")
    }
    else {
        alert("Success, events updated")
        window.location = "myevent.php";
    }
}

function check_contactus() {
    if(document.getElementById("field_FN_contactus").value =="" && document.getElementById("field_LN_contactus").value =="" && document.getElementById("email-field-contactus").value =="" && document.getElementById("message-field-contactus").value =="")
    {
        alert("Fill in all fields before sending")
    }
    else if(document.getElementById("field_FN_contactus").value =="")
    {
        alert("Enter your first name")
    }
    else if(document.getElementById("field_LN_contactus").value =="")
    {
        alert("Enter your last name")
    }
    else if(document.getElementById("email-field-contactus").value =="")
    {
        alert("Enter your email")
    }
    else if(document.getElementById("message-field-contactus").value =="")
    {
        alert("Enter your message to contact us")
    }
}

function showhidepassword() {
    var pass= document.getElementById("pass")

    if (pass.type === "password") {
        pass.type = "text";
    } else {
        pass.type ="password";
    }
}

function backtoafterlogin() {
    window.location = "after-login.php";
}

function buy_button(id){
    alert("Tickets have been purchased")
    window.location  = `after-login.php?id=${id}`;
}