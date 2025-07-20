<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<center>
<h2 style = "color: blue;"> AIUB</h2>
<h3 style = "color: blue;">Registration Form</h3>
</center>
<table>
    <tr>
        <td>Full Name:</td>
        <td><input type="text" name="fullname"></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><input type="email" name="email"></td>
    </tr>
    <tr>
        <td>Password:</td>
        <td><input type="password" name="password"></td>
    </tr>
    <tr>
        <td>Gender:</td>
        <td>
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="other"> Other
        </td>
    </tr>
    <tr>
        <td>Languages Known:</td>
        <td>
            <input type="checkbox" name="lang" value="english"> English
            <input type="checkbox" name="lang" value="bangla"> Bangla
            <input type="checkbox" name="lang" value="hindi"> Hindi
        </td>
    </tr>
    <tr>
        <td>Country:</td>
        <td>
            <select name="country">
                <option value="">--Select--</option>
                <option value="bangladesh">Bangladesh</option>
                <option value="india">India</option>
                <option value="other">Other</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Date of Birth:</td>
        <td><input type="date" name="dob"></td>
    </tr>
    <tr>
        <td>Upload Photo:</td>
        <td><input type="file" name="photo"></td>
    </tr>
    <tr>
        <td>Comments:</td>
        <td><textarea rows="4" cols="40"></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="button" value="Register"></td>
    </tr>
</table>

</body>
</html>