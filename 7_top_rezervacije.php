
    <?php
//spoji se na bazu podataka
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "putnicka_agencija_putnik";

$conn = new mysqli($hostname, $username, $password, $dbname);

// Provjeri konekciju
if ($conn->connect_error) {
    die("Konekcija nije uspjela: " . $conn->connect_error);
}

// SQL upit za broj rezervacija po gradovima
$sql = "SELECT grad, COUNT(*) AS broj_rezervacija 
FROM rezervacijapap 
GROUP BY grad";
$result = $conn->query($sql);

echo"<div style='background-color: lightblue; margin: auto;'>";

echo"<div style='color: black; font-size: 35px; text-align: center;'>";

echo "<h3> <br> TOP REZERVACIJE</h3>";
echo "</div>";

// Ako ima rezultata, prikaži ih u tablici
if ($result->num_rows > 0) {

    echo"<div table style=text-align=center background-color=lightskyblue 
    th=padding: 10px; text-align: center; border: 2px dotted black; 
    padding: 5px;  text-align: center;   font-family: 'Times New Roman', Times, serif; font-size: 25px; 
    width: relative; position:center;>";
    
  echo "<div style='text-align:center; background-color: lightskyblue; font-size: 25px;'>";
    echo "<p> <br> Ukupni broj rezervacija po gradovima. <br> <br>  </p>";
    echo"</div>";

    echo "<table align=center border='1' cellpadding='10' cellspacing='0' text-align='center'
            <tr>
                <th>Grad</th>
                <th>Broj rezervacija</th>
            </tr>";
            echo"</div>";

    // Ispiši svaki redak kao jedan red tablice
    while($row = $result->fetch_assoc()) {
        
        echo "<tr>
                <td align=center>" . $row["grad"] . "</td>
                <td align=center>" . $row["broj_rezervacija"] . "</td>
              </tr>";
    }
    echo "</table> <br>";
} else {
    echo "Nema rezervacija";
}


//da se izvuku podaci za samo 5 top grada, hajmo probati ;)

//  veza na bazu podataka već uspostavljena gore
$sql = "SELECT grad, COUNT(*) AS broj_rezervacija
        FROM rezervacijapap 
        GROUP BY grad
        ORDER BY broj_rezervacija DESC
        LIMIT 5";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

    echo "<div style='text-align:center; background-color: lightskyblue; font-size: 25px;'>";
    echo "<p>  <br> Top 5 odabrana grada. <br> <br>  </p>";
    echo"</div>";


    echo "<table align=center border='1' cellpadding='10' cellspacing='0' text-align='center'
            <tr>
                <th>Grad</th>
                <th>Broj rezervacija</th>
            </tr>";
            echo"</div>";

    // Ispis rezultata,  td align=center -- u središtu tablica
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td align=center> " . $row['grad'] . "</td>  
                <td align=center> " . $row['broj_rezervacija'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Nema podataka";
}

// Zatvori konekciju
$conn->close();
?>

<br><br>

<!--tri butona budu jedan do drugoga 
POČETNA         REZERVACIJE    -->

<div class="gumbi"> 

<a href="index.html" title="Povratak na početnu stranicu Putničke agencije Putnik.">  
<button type="button">POČETNA</button>
</a>

<a href="7_rezervacije.html" title="Povratak na stranicu za rezervacije."> 
<button type="button">REZERVACIJE</button>
</a>
<br><br>
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
        background-color: lightskyblue; 
        font-size: 15px;
        font-style: bold; 
        font-family:'Times New Roman', Times, serif; 
        text-align: center;
    }

    button:hover {
        background-color: lightseagreen;
    }
</style>






<!--  to je bilo butoni jedan ispod drugog
  
<div text-align="center">

<div style="background-color:azure", text-align="center", position="center">
<a href="index.html" title="Povratak na početnu stranicu Putničke agencije Putnik.">  
   <button style=" border: 5px dotted; border-radius: 10rem; padding: 10px;background-color: lighskytblue; 
   font-size: 20px;font-style: bold; font-family:'Times New Roman', Times, serif; text-align: center; position:relative">
   POČETNA</button>
</a>
</BR></BR>
</div>

<div style="background-color:azure", text-align="center">
<a href="7_rezervacije.html" title="Povratak na stranicu za rezervacije.">  
   <button style=" border: 5px dotted; border-radius: 10rem; padding: 10px;background-color: lightskyblue; 
   font-size: 20px;font-style: bold; font-family:'Times New Roman', Times, serif; text-align: center; position:relative">
   REZERVACIJE</button>
</a>
</div> -->




