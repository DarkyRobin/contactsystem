$(function(){
    $('#btnSubmit').click(function(){
        if($("name").val() == ''){
            alert('Name is empty!');
            return false;
        }
        if($("emailaddress").val() == ''){
            alert('Email Address is empty!');
            return false;
        }
        if($("user_pass").val() == ''){
            alert('Password is empty!');
            return false;
        }
        if($("confpass").val() == ''){
            alert('Please confirm password.');
            return false;
        }
        if($("user_pass").val() != $("confpass").val()){
            alert('Password did not match');
            return false;
        }
    });
}
async function addContact(){
    const addContactData = await qryData('contacts','addContact', {
        name:           $("name").val(),
        emailaddress:   $("emailaddress").val(),
        password:       $("user_pass").val()
    });
}