
<section id="forma" class="text-center">
    <h2 class="mb-6">UPIŠITE SE ONLINE JOŠ DANAS</h2>
    <div class="contact-form">
        <form id="contactForm" method="post" onsubmit="return submitForm();">
            <input name="ime" placeholder="Ime" required>
            <input name="prezime" placeholder="Prezime" required>
            <input name="brojTelefona" placeholder="Broj telefona" required>
            <select name="selektPolje" required>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="A">A</option>
                <option value="B">B</option>
            </select>
            <textarea name="poruka" placeholder="Vaša poruka" rows="4"></textarea>
            <button type="submit">Pošalji</button>
            <?php
// Povezivanje na bazu podataka
            $servername = "localhost";
            $username = "auto1rju";
            $password = "ww2~(Jk3eBEX";
            $database = "auto1rju_forma";

            $conn = new mysqli($servername, $username, $password, $database);

// Provjera konekcije
            if ($conn->connect_error) {
                die("Konekcija na bazu podataka nije uspjela: " . $conn->connect_error);
            }

            if (isset($_POST['brojTelefona'])) {
                $selektPolje = $_POST['selektPolje'];
                $brojTelefona = $_POST['brojTelefona'];
                $poruka = $_POST['poruka'];
                $ime = $_POST['ime'];
                $prezime = $_POST['prezime'];

                // Prihvaćanje podataka iz forme
                // SQL upit za unos podataka u bazu
                $sql = "INSERT INTO forma (selektPolje, brojTelefona, poruka, ime, prezime) VALUES ('$selektPolje', '$brojTelefona', '$poruka', '$ime', '$prezime')";

                if ($conn->query($sql) === TRUE) {
                    echo "<div class='text-center'><h2  style='color:green !important'>USPEŠNO STE POSLALI VAŠE PODATKE</h2></div>";
                } else {
                    echo "<h2>Greška pri unosu podataka u bazu:</h2> " . $conn->error;
                }
                $to = "cov.kobac@gmail.com";
                $subject = "Poruka sa web forme";
                $message = "Kategorija:$selektPolje\nTelefon:$brojTelefona\nPoruka:$poruka\nIme:$ime\nPrezime:$prezime";

                // Slanje e-maila
                mail($to, $subject, $message);

                // Zatvaranje konekcije na bazu
                $conn->close();
            } else {
                
            }
            ?>
        </form>
    </div>
</section>
<script>
function submitForm() {
    var formData = new FormData(document.getElementById('contactForm'));

    fetch(window.location.href, {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert('Podaci su uspešno poslati.');
        // Očistite formu nakon slanja
        document.getElementById('contactForm').reset();
    })
    .catch(error => {
        console.error('Došlo je do greške:', error);
    });

    return false; // Da spriječi osvježavanje stranice
}
</script>