
function check_info()
{
    var username=document.getElementById('username').value;
    var pass=document.getElementById('password').value;
    var email=document.getElementById('email').value;
     var phone=document.getElementById('phone').value;
    if(username=="" || pass=="" || email=="" || phone=="")
    {
        alert('please fill in all fields');
        return false;
    }

  if(all_letters(username))
    {
     if(validate_email(email))
        {
           if(password_validation(password,5))
            {
    return true;
            }
        }
    }

   return false;
}


function password_validation(pass,min)
{
    var paslength=pass.value.length;

    if(paslength < min) {
        alert('Password should contain atleast '+min+' characters');
        return false;
    }
    return true;
}
function all_letters(username)
{
    var letters = /^[A-Za-z ]+$/;
    if (username.match(letters))
    {
        return true;
    }
    else {
        alert('Username must have alphabet characters only');
        return false;
    }
}
function validate_email(email) {
    {
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (email.match(mailformat)) {
            return true;
        }
        else {
            alert("You have entered an invalid email address!");
            return false;
        }
    }
}

/*function phone_validation(phone)
{

    var phonelength=phone.value.length;
    var letters = /^[0-9]+$/;
    if (phone.match(letters) && phonelength==10)
    {
        return true;
    }
    else {
        alert('Enter valid 10 digit phone number');
        return false;
    }
}

*/