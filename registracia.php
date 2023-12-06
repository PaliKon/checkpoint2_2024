<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produkty</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <link href="style.css"  rel="stylesheet" type="text/css">
</head>
<body>

<div class="container">
  <div class="navbar">
    <div class="logo">
      <img src="obrazky/logo.jpg" width="125" alt="">
    </div>
    <nav>
      <ul>
        <li><a href="main.php">Domov</a></li>
        <li><a href="produkty.php">Produkty</a></li>
        <li><a href="Udaje.php">Udaje</a></li>
        <li><a href="ucet.html">Prihlasenie</a></li>
      </ul>
    </nav>

  </div>
</div>


<div class="ucet">
  <div class="container">
    <div class="row">
      <div class="col-2">
        <img src="obrazky/image1.png" width="1000" alt="">
      </div>
      <div class="col-2">
        <div class="form-container">
          <div class="form-btn">
            <a href="ucet.html">Prihlasenie</a>
            <span><a href="ucet.html">Registracia</a> </span>
          </div>
          <form name="frmContact" method="post" action="contact.php" onsubmit="poslatMail(); reset(); return false">
            <p>
              <label >Name </label>
              <input type="text" name="user" id="user" placeholder="Meno" required="">
            </p>
            <p>
              <label >Heslo</label>
              <input type="text" name="password" id="password" placeholder="Heslo" required="">
            </p>
            <p>
              <label >Email</label>
              <input type="text" name="email" id="email" placeholder="Email" required="">
            </p>

            <p>
              <input type="submit" name="Submit" id="Submit" value="Submit">
            </p>
          </form>

        </div>
      </div>

    </div>
  </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<!--<script src="https://smtpjs.com/v3/smtp.js"></script>-->
<!--<script>-->
<!--  function poslatMail(){-->
<!--    Email.send({-->
<!--      Host : "smtp.elasticemail.com",-->
<!--      Username : "Syleion2@gmail.com",-->
<!--      Password : "21A707597585B7F2A39A7C9B7D04C3E0EFE0",-->
<!--      To : 'Syleion1@gmail.com',-->
<!--      From : document.getElementById("email").value,-->
<!--      Subject : "TEST",-->
<!--      Body : "Telo spravy"-->
<!--    }).then(-->
<!--            message => alert(message)-->
<!--    );-->
<!--  }-->
<!--</script>-->

</body>
</html>