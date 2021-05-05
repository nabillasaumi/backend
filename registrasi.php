<?php 
include_once('koneksi.php');
$database = new database();
if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $email = $_POST ['agama'];
    $nama = $_POST['jenis_kelamin'];
    $lahir = $_POST ['alamat'];
    $gender = $_POST ['email'];
    $agama = $_POST ['no_hp'];
    $pekerjaan = $_POST ['hobi'];
    if($database->register($username,$password,$agama,$jenis_kelamin,$alamat,$email,$no_hp,$hobi))
    {
      header('location:login.php');
    }
}

$usernameErr = $passwordErr = $agamaErr = $jenis_kelaminErr = $emailErr = $alamatErr = $no_hpErr = $hobiErr = "";
$username = $password = $agama = $jenis_kelamin = $email = $alamat = $no_hp = $hobi = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "Username tidak boleh kosong";
  } else {
    $username = test_input($_POST["username"]);
  }
  
  if (empty($_POST["password"])) {
    $emailErr = "password tidak boleh kosong";
  } else {
    $email = test_input($_POST["password"]);
  }
    
  if (empty($_POST["agama"])) {
    $passwordErr = "agama tidak boleh kosong";
  } else {
    $password = test_input($_POST["agama"]);
  }

  if (empty($_POST["jenis_kelamin"])) {
    $namaErr = "jenis_kelamin tidak boleh kosong";
  } else {
    $nama = test_input($_POST["jenis_kelamin"]);
  }

  if (empty($_POST["alamat"])) {
    $lahirErr = "alamat tidak boleh kosong";
  } else {
    $lahir = test_input($_POST["alamat"]);
  }

  if (empty($_POST["email"])) {
    $genderErr = "email tidak boleh kosong";
  } else {
    $gender = test_input($_POST["email"]);
  }

  if (empty($_POST["no_hp"])) {
    $agamaErr = "no_hp tidak boleh kosong";
  } else {
    $agama = test_input($_POST["no_hp"]);
  }

  if (empty($_POST["hobi"])) {
    $pekerjaanErr = "hobi tidak boleh kosong";
  } else {
    $pekerjaan = test_input($_POST["hobi"]);
  }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}    
 
?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <title>Register Form</title>
  </head>
<style>

.error {color: #peace;}

input[type=text], select {
  width: 90%;
  padding: 14px 22px;
  margin: 6px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

input[type=password], select {
  width: 90%;
  padding: 14px 22px;
  margin: 6px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

input[type=number], select {
  width: 90%;
  padding: 14px 22px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

input[type=submit]:hover {
  background-color: #blue;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}

button:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

a:link, a:visited {
  background-color: blue;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: green;
}
</style>

<body>

  <div>
    <h1 class="mt-5">Registrasi</h1>
    <p class="lead">Silahkan Daftarkan Identitas Anda</p>
    <p><span class="error">* wajib diisi</span></p>
    <hr/>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form">
      <label for="username">Username</label>
      <div>
        <span class="error">* <?php echo $usernameErr;?></span>
        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
      </div>
    </div>

    <div class="form">
      <label for="password">password</label>
      <div>
        <span class="error">* <?php echo $passwordErr;?></span>  
        <input type="text" class="form-control" id="password" name="password" placeholder="Password">
      </div>
    </div>

    <div class="form">
    <label for="agama">agama</label>
    <span class="error">* <?php echo $agamaErr;?></span>
    <div>
      <input type="text" class="form-control" id="agama" name="agama" placeholder="Agama">
    </div>
  </div> 
 
    <div class="form">
      <label for="jenis_kelamin">jenis_kelamin</label><span class="error">* <?php echo $jenis_kelaminErr;?></span>
      <div>
        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="jenis_kelamin">
      </div>
    </div>
 
    <div class="form">
      <label for="alamat">alamat</label>
      <span class="error">* <?php echo $alamatErr;?></span>
      <div>
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat">
      </div>
    </div>  

    <div class="form">
      <label for="email">email</label>
      <span class="error">* <?php echo $emailErr;?></span>
      <div>
        <input type="text" class="form-control" id="email" name="email" placeholder="email">
      </div>
    </div>

    <div class="form">
      <label for="no_hp">no_hp</label>
      <span class="error">* <?php echo $no_hpErr;?></span>
      <div>
        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No_hp">
      </div>
    </div>

    <div class="form">
      <label for="hobi">hobi</label>
      <span class="error">* <?php echo $hobiErr;?></span>
      <div>
        <input type="text" class="form-control" id="hobi" name="hobi" placeholder="Hobi">
      </div>
    </div>
  
  <div class="form">
  <a href="login.php">Login</a>
  <button type="submit" name="register">Register</button>
  </div>

  
</form>
  </div>
</main>
 
<footer class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted">Warung Belajar@2019</span>
  </div>
</footer>
</body>
</html>