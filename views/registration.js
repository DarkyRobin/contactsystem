$(async function(){
    $("#btnRegister").click(function(){
  
        if($("#name").val() == ''){
            alert('Name is empty!');
            return false;
        }
        if($("#emailaddress").val() == ''){
            alert('Email Address is empty!');
            return false;
        }
        if($("#user_pass").val() == ''){
            alert('Password is empty!');
            return false;
        }
        if($("#confpass").val() == ''){
            alert('Please confirm password.');
            return false;
        }
        if($("#user_pass").val() !== $("#confpass").val()){
            alert('Password did not match');
            $("#user_pass").val('');
            $("#confpass").val(''); 
            $("#user_pass").focus();
            return false;
        }
        // checkIfUserExist() == 0 ?  addContact() : alert('Email address is already exist. Please use another email.'); return false;;
        var res = checkIfUserExist();
        console.log(res);
    });
});

async function addContact(){
    const regdata = {
        name:           $("#name").val(),
        emailaddress:   $("#emailaddress").val(),
        password:       $("#user_pass").val()
    }
    const addContactData = await qryData('contacts','addContact', regdata, undefined, true);
}

async function checkIfUserExist(){
    let emailaddress = $("#emailaddress").val();
    const getdata = await qryData('contacts','checkIfUserExist', {emailaddress}); 
    
    let err = getdata.data.user.length > 0 ? 1 : 0;
    // console.log(err);
    return err;
}

