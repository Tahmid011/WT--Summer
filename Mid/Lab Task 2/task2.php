<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bank Management System</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <center>
            <h1 style="color:#000080">Bank Management System</h1>
            <h2 style="color:#000080">Your Trusted Financial Partner</h2>
        </center>

        <h3>Customer Registration Form</h3>

        <div class="form-container">
            <table class="form-table">
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
                        <input type="radio" name="gender" value="female">Female
                        <input type="radio" name="gender" value="others">Others
                        
                
                    </td>
                </tr>
                <tr>
                    <td>Marital Status:</td>
                    <td>
                        <select >
                            <option>Single</option>
                            <option>Married</option>
                        </select>
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
                <tr>
                    <td colspan="2">
                    <input type="checkbox">I agree to the terms and conditions
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="button-row">
                            <button type="submit" >Register</button>
                            <button type="reset" >Clear</button>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        

        <div class="overflow-box">
            This is a demo text to show how overflow works in a small container with a lot of text inside.
            It will scroll if the content overflows both vertically and horizontally.
        </div>

    </body>
</html>

