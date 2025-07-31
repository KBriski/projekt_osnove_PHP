# projekt_osnove_PHP
Putnička agencija "Putnik" - dinamička web aplikacija za pregled i rezervaciju putovanja. Na ovoj stranici možete saznati više o agenciji, pregledati ponude putovanja i napraviti online rezervaciju.

O projektu:  WEb aplikacija izrađena u HTML-u, CSS-u, JavaScriptu i PHP-u. Služi za prikaz ponude putovanja, omogućuje online rezervaciju i prikazuje najpopularnije destinacije.

Sadržaj:

- index.html - Naslovna stranica s osnovnim informacijama
- o-nama.html - Kratki opis agencije i njezin rad
- kako-do-nas.html- Lokacija, kontakt i radno vrijeme
- jednodnevna.html- Popis jednodnevnih putovanja
- visednevna.html- Popis višednevnih putovanja
- trazilica.html - Jednostavna tražilica gradova (JS)
- .css - Prilagođeni CSS za svaku podstranicu
- rezervacije.html - forma za unos rezervacije (frontend)
- top_rezervacije.php - Pregled top rezerviranih destinacija (backend)
  
Tehnologije:
- HTML5, CSS3, JavaScript (tražilica)
- PHP (rezervacije, dohvat iz baze)
- MySQL (za pohranu rezervacija)

Baza podataka: Aplikacija koristi **MySQL bazu** za pohranu rezervacija putovanja. Stranica `top_rezervacije.php` dohvaća i prikazuje najčešće rezervirane destinacije.

Kako testirati: PHP dio zahtijeva lokalni server (npr. XAMPP)

1. Pokreni lokalni server (npr. `http://localhost/putnik`)
2. Uvezi SQL datoteku u MySQL (putnicka_agencija_putnik.sql)
3. Otvori `rezervacije.html` i testiraj unos
4. Pogledaj `top_rezervacije.php` za prikaz najčešćih destinacija

Svrha: Svrha ovog projekta je izrada jednostavne i funkcionalne web stranice za putničku agenciju Putnik, koja korisnicima omogućuje:

- Informiranje o ponudi jednodnevnih i višednevnih putovanja
- Pregled osnovnih podataka o agenciji i kontakt informacija
- Pretragu gradova putem jednostavne tražilice
- Online rezervaciju putovanja (dinamički dio)
- Prikaz najpopularnijih destinacija (top rezervacije iz baze)

Projekt izrađen tijekom studija u sklopu kolegija Osnove PHP. Primjer za korištenje frontend (HTML, CSS, JS) i backend tehnologija (PHP, MySQL) u izradi dinamičke web stranice.
