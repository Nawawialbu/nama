
<?php
// fungsi untuk memulai session
session_start();
 
// variabel kosong untuk menyimpan pesan error
$form_error = '';
 
// cek apakah tombol sumit sudah di klik atau belum
if(isset($_POST['submit'])){
 
    // menyimpan data yang dikirim dari metode POST) ke masing-masing variabel
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    // validasi login benar atau salah
    if($email == 'nama@gmail.com' AND $password == '1234567'){
 
        // jika login benar maka email akan disimpan ke session kemudian akan di redirect ke halaman profil
        $_SESSION['email'] = $email;
        header('Location: profil.php');
    }else{
 
        // jika login salah maka variabel form_error diisi value seperti dibawah
        // nilai variabel ini akan ditampilkan di halaman login jika salah
        $form_error = '<p>emeil and password not valid</p>';
    }
}
 
?>


<!DOCTYPE html>
<head>
    <title>Login Sederhana Tanpa Database</title>
</head>
<body>

  <title>Login</title>
 
  <style>

body {
       background: -webkit-linear-gradient(bottom, #2dbd6e, #008000;);
       background-repeat: no-repeat;
       size: 500;
}

#card {
        background: #;
        border-radius: 50px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height:700px;
        margin: 8.1rem auto 8.1rem auto;
        width: 700px;
        top: 300px;
}

#card1 {
        background: #008000;
        border-radius: 70px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height:100px;
        margin: 8.1rem auto 8.1rem auto;
        width: 500px;
        top: 300px;
}
#card2 {
        background: #;
        border-radius: 10px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height:7px;
        margin: 8.1rem auto 8.1rem auto;
        width: 250px;
        top: 300px;
}

#card3 {
        background: #7FFF00;
        border-radius: 20px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height:400px;
        margin: 8.1rem auto 8.1rem auto;
        width: 350px;
        top: 300px;
}
#log
#card-content {
      padding: 12px 44px;
}
#card-title {
      font-family: "Raleway Thin", sans-serif;
      letter-spacing: 5px;
      padding-bottom: 5px;
      padding-top: 13px;
      text-align: center;
}
.underline-title {
      background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
      height: 3px;
      margin: center;
      width: 20x;
}
a {
    text-decoration: none;
}
label {
    font-family: "Raleway", sans-serif;
    font-size: 11pt;
}
#forgot-pass {
    color: #2dbd6e;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 3px;
    text-align: right;
}
.form {
    align-items: left;
    display: center;
    flex-direction: column;
}
.form-border {
    background: -webkit-linear-gradient(right, #008000, #2ec06f);
    height: 1px;
    width: 50px
}
.form-content {
    background: #blue;
    border: 10;
    outline: 20;
    padding-top: 20px;
}

#signup {
    color: #2dbd6e;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 16px;
    text-align: center;
}
#submit-btn {
    background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #24c64f;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 50px;
    transition: 0.25s;
    width: 153px;
}
#submit-btn1 {
    background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
    border: none;
    border-radius: 0px;
    box-shadow: 0px 1px 8px #24c64f;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 60px;
    margin: 0 auto;
    margin-top: 50px;
    transition: 0.25s;
    width: 200px;
}
#gambar { 
 background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #24c64f;
    cursor: pointer;
    color: blue;
    font-family: "Raleway SemiBold", sans-serif;
    }

#submit-btn:hover {
    box-shadow: 0px 1px 18px #24c64f;
}
</style>
</head>
<body>
<body bgcolor="">
<center>


</div>
</center>


<div id="card">
<div id="card-content">
  <div id="card-title">
 



<form method="POST" action="index.php">
<img src="images.jpeg"width="100"margin="leftr">
<center>
<div id="card3">
 <font color="blue"><font color="blue"size="40">
<div id="submit-btn1">
 <h>LOGIN<h>
 </font></div>
<h2>
 USERNAME</h2>
<input
   class="form-content"
   type="email/nomor"
   name="email"
   autocomplete="on"
   width="2px"
   margin="center"
   required />
   <h2>PASSWORD</h2>
<input
   class="form-content"
   type="password"
   name="password"
   autocomplete="on"
   width="2px"
   size="20px"
   required />
  </form>
  <h2>

 <input id="submit-btn" type="submit" name="submit" value="LOGIN" /></a>
   <?php echo $form_error; ?>
</div></body>
</html>