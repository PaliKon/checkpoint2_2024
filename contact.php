<?php


session_start();




header('location: main.php');
$con = mysqli_connect('localhost', 'root', '','userregistration');





$name = $_POST['user'];
$password = $_POST['password'];
$email = $_POST['email'];


if (empty($_POST['user']) || empty($_POST['password']) || empty($_POST['email'])) {
    // One or more values are empty.
    exit('Prosim vypln celu registraciu');
}


$s = "SELECT * FROM usertable WHERE name = '$name'";
// insert in database
$result= mysqli_query($con, $s);
$num = mysqli_num_rows($result);

$s = "SELECT * FROM usertable WHERE email = '$email'";
// insert in database
$result= mysqli_query($con, $s);
$num2 = mysqli_num_rows($result);

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    exit('Email je neplatny');
}
if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['user']) == 0) {
    exit('Meno neni vhodne!');
}
if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
    exit('Heslo musi byt dlhe od 5 do 20 znakov!');
}
if($num == 1)
{
    echo "Meno je zabrate";
} else if ($num2 == 1) {
    echo "Email je zabrate";
} else {
    $errors = array();

// Overenia na strane servera
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Overenie prítomnosti a hodnôt
        if (empty($_POST['user']) || empty($_POST['email']) || empty($_POST['password'])) {
            $errors[] = 'Všetky polia musia byť vyplnené.';
        }

        // Overenie dĺžky a formátu dát
        if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
            $errors[] = 'Heslo musí mať aspoň 5 znakov a menej ako 20';
        }

        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Neplatný formát e-mailovej adresy.';
        }

        // Overenie unikátnosti mien a e-mailov
        $name = mysqli_real_escape_string($con, $_POST['user']);
        $email = mysqli_real_escape_string($con, $_POST['email']);

        $query = "SELECT * FROM usertable WHERE name = '$name' OR email = '$email'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            $errors[] = 'Používateľ s týmto menom alebo e-mailom už existuje.';
        }

        // Overenie hesiel
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


        // Ak neboli zistene ziadne chyby, pridaj pouzivatela do databazy
        if (empty($errors)) {
            $hashedPassword = md5($password);
            // $sql = "INSERT INTO `tbl_contact` ( `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ( '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";
            $reg = "INSERT INTO `usertable`(name, password, email) values ('$name', '$hashedPassword','$email')";
            mysqli_query($con, $reg);

            // Zobrazenie spravy o uspechu alebo presmerovanie
            echo "Registrácia bola úspešná!";
            // header('Location: main.php');
            exit;
        }
    }
//  zobraziť chyby, ak nejaké nastali
    foreach ($errors as $error) {
        echo $error . '<br>';
    }
}
?>