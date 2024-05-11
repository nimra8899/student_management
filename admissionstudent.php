<!DOCTYPE html>
<html>
<head>
  <title></title>


<style type="text/css">
.heading{
  background-color: black; 
 color: white; 
 text-align: center;
  font-weight: bold; 
  width: 400px; 
  
  font-size:30px;

}
  /* Add or modify your existing CSS rules */
.form-container {
  background-color: skyblue;
  padding: 20px;
  border-radius: 10px;
  width: 70% /* Adjust the width as needed */
  margin: auto; /* Center the form horizontally */
}

.label_text {
  font-weight: bold;
  margin-bottom: 5px;
  display: block;
}

.input_deg,
.input_text {
  width: 400px;
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.btn {
  background-color: #007bff; /* Button color */
  color: #fff; /* Text color */
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

.btn:hover {
  background-color: #0056b3; /* Button hover color */
}

.bodypic{
  
   background-repeat: no-repeat; 
  background-attachment: fixed; 
  background-size: 100% 100%;

}

/* Adjust styling for other classes (input_deg, label_text, input_text, btn, etc.) according to your design */


</style>
</head>
<body   background="project_Images (1)/project_Images/books.jpg"  class="bodypic">



  <div>
  <center>
<center>
  <h1 class="heading">Admission Form</h1>
</center>
<div align="center">
  <form action="data_check.php" method="POST" onsubmit="return validateForm()"  class="admission_form">
    <div class="adm_int">
      <label class="label_text">Name</label>
      <input class="input_deg" type="text" name="name" id="name">
    </div>
    <div class="adm_int">
      <label class="label_text">Email</label>
      <input class="input_deg" type="text" name="email" id="email">
    </div>
    <div class="adm_int">
      <label class="label_text">Phone</label>
      <input class="input_deg" type="text" name="phone" id="phone">
    </div>
    <div class="adm_int">
      <label class="label_text">Message</label>
      <textarea class="input_text" name="message"></textarea>
    </div>
    <div class="adm_int">
      <input class="btn" type="submit" id="submit" value="Apply" name="apply">
    </div>
  </form>

</div>
</center>
<script>
  function validateForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;

    
    if (/\d/.test(name)) {
      alert('Name should not include digits.');
      return false;
    }

    
    if (!email.includes('@')) {
      alert('Invalid email format. Please include @ in your email.');
      return false;
    }

    
    if (!/^\d+$/.test(phone)) {
      alert('Phone number should contain only digits.');
      return false;
    }

    
    return true;
  }
</script>

</body>
</html>





