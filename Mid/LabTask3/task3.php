<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Donation Form</title>
  <link rel="stylesheet" href="task3_style.css">
  <script src="task3_valid.js"defer></script>

</head>
<body>
  <div class="form-box" >
    <form id="donationForm" onsubmit ="return submitForm()">
      <h2 class="section-title">Donor Information</h2>

      <label>First Name</label>
      <input type="text" id="firstName" required>

      <label>Last Name</label>
      <input type="text" id="lastName" required>

      <label>Address</label>
      <input type="text" id="address" required>

      <label>City</label>
      <input type="text" id="city" required>

      <label>State</label>
      <select id="state" required>
        <option value="">Select a State</option>
        <option>Dhaka</option>
        <option>Chittagong</option>
        <option>Khulna</option>
        <option>Rajshahi</option>
      </select>

      <label>Phone</label>
      <input type="text" id="phone" required>

      <label>Email</label>
      <input type="email" id="email" required>

      <label>Create Password (min 8 characters)</label>
      <input type="password" id="password" required>

      <label>Confirm Password</label>
      <input type="password" id="confirmPassword" required>

      <label>Donation Amount</label><br>
      <div class="radio-group">
        <label><input type="radio" name="amount" value="None"> None</label>
        <label><input type="radio" name="amount" value="500"> 500 BDT</label>
        <label><input type="radio" name="amount" value="1000"> 1000 BDT</label>
        <label><input type="radio" name="amount" value="2000"> 2000 BDT</label>
        <label><input type="radio" name="amount" value="3000"> 3000 BDT</label>
        <label><input type="radio" name="amount" value="Other"> Other</label>
      </div>

      <label>Other Amount</label>
      <input type="text" id="otherAmount">

      <label><input type="checkbox" id="regular"> I am interested in giving on a regular basis.</label>

      <h3 class="section-title">Additional Information</h3>

      <label><input type="checkbox"> I would like my gift to remain anonymous.</label>
      <label><input type="checkbox"> My employer offers a matching gift program.</label>
      <label><input type="checkbox"> Please don't send a thank you letter.</label>

      <label>Comments</label>
      <textarea rows="4"></textarea>

      <div class="button-group">
        <button type="reset">Reset</button>
        <button type="submit">Submit</button>
      </div>

    </form>
  </div>
</body>
</html>
