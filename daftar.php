<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Registrasi</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">

</head>
<body style="background-image: url('images/background.jfif');">
<!-- partial:index.partial.html -->
<!-- multistep form -->
<form action="./proses-pendaftaran.php" method="POST" id="msform" enctype="multipart/form-data">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active"></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Membuat Akun</h2>
    <input type="text" name="username" placeholder="Username" />
    <input type="text" name="email" placeholder="Email" />
    <input type="password" name="pass" placeholder="Password" />
    <input type="password" name="cpass" placeholder="Confirm Password" />
    <?php if (isset($_GET['status'])) : ?>
      </br>
          <p>
              <?php
              if ($_GET['status'] == 'salah') {
                  echo "<p>Password tidak sama</p>";
              }
              ?>
          </p>
      <?php endif; ?>
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Membuat Akun</h2>
    <input type="text" name="nama" placeholder="Nama Lengkap" />
    <input type="text" name="nik" placeholder="NIK" />
    <input type="text" name="tempatlahir" placeholder="Tempat Lahir" />
    <input type="date" name="tanggallahir" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Membuat Akun</h2>
    <select name="jeniskelamin" id="jeniskelamin">
      <option value="Laki-Laki">Laki-Laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
    <input type="text" name="alamat" placeholder="Alamat" />
    <input type="text" name="pendidikan" placeholder="Pendidikan Terakhir" />
    <select name="jabatan" id="jabatan">
      <option value="staffbudidaya">Staff Perikanan Budidaya</option>
      <option value="stafftangkap">Staff Perikanan Tangkap</option>
    </select>
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Membuat Akun</h2>
    <div>
      <label for="KTP">KTP</label>
      <input type="file" name="KTP">
    </div>
    <div>
      <label for="KTP">Pasfoto</label>
      <input type="file" name="pasfoto">
    </div>
    <div>
      <label for="KTP">CV</label>
      <input type="file" name="cv"> 
    </div>
    <input type="submit" id="submitbtn" class="btn btn-success btn-block" name="submit" value="Submit" /> 
  </fieldset>
</form>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script><script  src="./script.js"></script>

</body>
</html>
