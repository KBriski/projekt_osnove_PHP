
<?php

error_reporting(E_ALL);
   ini_set('display_errors', 1);

  echo "<div style='text-align:center; padding:10px; background-color: lightskyblue; margin-bottom: 50px;'>";
    echo "  <hr>  <h3> Podaci spremljeni!</h3> <hr>";
   echo "</div>";


   // Povezivanje s bazom podataka
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $dbname = "putnicka_agencija_putnik";

   $conn = new mysqli($hostname, $username, $password, $dbname);

   // Provjera povezanosti
   if ($conn->connect_error) {
       die("Povezivanje neuspješno: " . $conn->connect_error);
   }

   $ime="";
   $prezime="";
   $email="";
   $grad="";

$ime_error="";
$prezime_error="";
$email_error="";
$grad_error="";

$error = false;

   // Spremanje podataka iz forme
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $ime = $_POST['ime'];
       $prezime = $_POST['prezime'];
       $email = $_POST['email'];
       $grad = $_POST['grad'];

       // Priprema i izvršavanje SQL upita
       $stmt = $conn->prepare("INSERT INTO rezervacijapap (ime, prezime, email, grad) VALUES (?, ?, ?, ?)");
       $stmt->bind_param("ssss", $ime, $prezime, $email, $grad);

       if ($stmt->execute()) {

        echo "<div style='text-align:center; padding:10px; border:2px dotted black; background-color: lightblue; margin-bottom: 20px;'>";
        echo "<h3> Hvala $ime, <br> <br>
        Vaša rezervacija za grad $grad je zabilježena.</h3>";
        echo "</div>";

        echo "<div style='text-align:center; padding:10px; background-color: lightskyblue; margin-bottom: 20px;'>";
        echo " <hr> <h3> Hvala na rezervaciji!</h3> <hr> ";
        echo "</div>";
        

       } else {
           echo "Greška u rezervaciji: " . $stmt->error;
       }
       $stmt->close();
   }

   $conn->close();

   ?>

<!--tri butona budu jedan do drugoga 
POČETNA         REZERVACIJE     BROJ REZERVACIJA-->

<div class="gumbi"> 

<a href="index.html" title="Povratak na početnu stranicu Putničke agencije Putnik.">  
<button type="button">POČETNA</button>
</a>

<a href="7_rezervacije.html" title="Povratak na stranicu za rezervacije."> 
<button type="button">REZERVACIJE</button>
</a>

<a href="7_top_rezervacije.php" title="Tablica koja prikazuje broj rezervacija po gradovima."> 
<button type="button">TOP REZERVACIJE</button>
</a>

</div>

<style>
    .gumbi {
        display: flex;
        justify-content: center; /* Centriraj gumbe */
        gap: 10px; /* Razmak između gumba */
    }

    button {
        border: 5px dotted; 
        border-radius: 10rem; 
        padding: 10px;
        background-color: lightblue; 
        font-size: 15px;
        font-style: bold; 
        font-family:'Times New Roman', Times, serif; 
        text-align: center;
    }

    button:hover {
        background-color: lightseagreen;
    }
</style>





<!-- tu su butno bili jedno ispod drugoga

<div style="background-color:azure", text-align="center">     
<a href="index.html" title="Povratak na početnu stranicu Putničke agencije Putnik.">  
<button style=" border: 5px dotted; border-radius: 10rem; padding: 10px;background-color: lightblue; 
   font-size: 20px;font-style: bold; font-family:'Times New Roman', Times, serif; text-align: center;">
   POČETNA</button>
</a>
</div>

<BR></BR>

<div style="background-color:azure", text-align="center">
<a href="7_rezervacije.html" title="Povratak na stranicu za rezervacije.">  
   <button style=" border: 5px dotted; border-radius: 10rem; padding: 10px;background-color: lightblue; 
   font-size: 20px;font-style: bold; font-family:'Times New Roman', Times, serif; text-align: center;">REZERVACIJE</button>
</a>
</div>

<br><br>

<div style="background-color:azure" text-align="center">
<a href="7_rezervacije_tablica.php" title="Tablica koja prikazuje broj rezervacija po gradovima.">  
   <button style=" border: 5px dotted; border-radius: 10rem; padding: 10px;background-color: lightblue; 
   font-size: 20px;font-style: bold; font-family:'Times New Roman', Times, serif; text-align: center;">UKUPNE REZERVACIJE</button>
</a>
</div> -->










 

  

   
  






