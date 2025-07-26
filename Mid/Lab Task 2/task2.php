<!DOCTYPE html>
<html>
    <head>
        <title>Bank Management System</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <center>
            <H1 style="color:blue">Bank Management System</H1>
            <h3 style="color:blue">Your Trusted Financial Partner</h3>
        </center>

        <h4>Customer Registration Form</h3>

        <table>
            <tr>
                <td>Full Name:</td>
                <td><input type ="text"></td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td><input type="date"></td>
            </tr>
             <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="others">Others
                    <input type="radio" name="gender" value="male">Female
            
                </td>
            </tr>
            <tr>
                <td>Merital Status:</td>
                <td>
                    <Select >
                        <option>Single</option>
                        <option>Married</option>
                    </Select>
                </td>
            </tr>
            <tr>
                <td>Account Type:</td>
                <td>
                    <Select >
                        <option>Savings</option>
                        <option>Credit</option>
                        <option>Current</option>
                    </Select>
                </td>
            </tr>
            <tr>
                <td>Initial Deposit Amount:</td>
                <td><input type ="text"></td>
            </tr>
            <tr>
                <td>Mobile Number:</td>
                <td><input type ="text"></td>
            </tr>
            <tr>
                <td>Email Address:</td>
                <td><input type ="text"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><textarea cols="20" rows="2"></textarea></td>
            </tr>
            <tr>
                <td>Occupation:</td>
                <td><input type = "text"></td>
            </tr>
            <tr>
                <td>National ID (NID):</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Set Password:</td>
                <td><input type="password"></td>
            </tr> 
            <tr>
                <td>Upload ID Proof:</td>
                <td><input type="file"></td>
            </tr>
        </table>
        <input type="checkbox">I agree to the terms and conditions<br>
        <td><input type="button" value="Register" ></td>
        <td><input type="button" value="Clear"></td>

        <div class="overflow-box">
        This is a demo text to show how overflow works in a small container with a lot of text inside.
        It will scroll if the content overflows both vertically and horizontally.
    </div>

    </body>
</html>

