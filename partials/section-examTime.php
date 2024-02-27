<?php
$servername = "localhost";
$username = "auto1rju";
$password = "ww2~(Jk3eBEX";
$database = "auto1rju_forma";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT prijavaTesta, test, prijavaVoznje, voznja FROM termini";
$result = $conn->query($sql);
 
?>


<section id="section-exam">
    <div class="container">
        <div class="text-center">
            <h2>
                TERMINI POLAGANJA ISPITA
            </h2>
        </div>
        <div class="row text-center">
            <div class="col-12 ">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">PRIJAVA ZA TEST</th>
                            <th scope="col">TEST</th>
                            <th scope="col">PRIJAVA ZA VOŽNJU</th>
                            <th scope="col">VOŽNJA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result->num_rows > 0): ?>
                            <?php while($row = $result->fetch_assoc()): ?>
                                <tr>
                                    <td><?php echo $row["prijavaTesta"]; ?></td>
                                    <td><?php echo $row["test"]; ?></td>
                                    <td><?php echo $row["prijavaVoznje"]; ?></td>
                                    <td><?php echo $row["voznja"]; ?></td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4">Nema dostupnih termina</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
</section>