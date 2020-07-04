<div id="registration"  align="center">
    <h3>Registration</h3>
    <form id="reg-form">
        <table border="0.5" >
            <tr>
                <td><label for="name">Name</label></td>
                <td><input type="email" name="name" id="name"></td>
            </tr>
            <tr>
                <td><label for="emailaddress">Email Address</label></td>
                <td><input type="email" name="emailaddress" id="emailaddress"></td>
            </tr>
            <tr>
                <td><label for="user_pass">Password</label></td>
                <td><input type="password" name="user_pass" id="user_pass"></input></td>
            </tr>
            <tr>
                <td><label for="confpass">Confirm Password</label></td>
                <td><input type="password" name="confpass" id="confpass"></input></td>
            </tr>
            <tr>
                
                <td><input type="button" id="btnRegister" value="Submit" />
                <input type="button" value="Back to Login" onclick="window.location = 'login.php'"/>
            </tr>
        </table>
    </form>
</div>
<div id="thankyou"  align="center">
<h3>Thank you for registering.</h3>
<input type="button" value="Continue" onclick="window.location = 'index.php'"/>
</div
