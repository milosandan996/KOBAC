<style>
    *{
        font-size: 18px;
    }
    hr{
        margin-bottom: 50px;
    }
    .col-12{
        text-align: center;
    }
    input{
        width: 300px;
        height: 30px;
        border: 2px solid black;
        margin-bottom: 50px;
    }

    input.browse{
        border: none !important;
    }
    label{
        display: block;
        margin-bottom: 10px;
    }
    textarea{
        width: 600px;
        border: 2px solid black;
        margin-bottom: 60px;
        border: 2px solid white !important;
    }
    
    button{
    display: inline;
    font-size: 1.8rem;
    color: #424242 !important;
    padding: 15px 30px !important;
    border-radius: 2rem;
    background: linear-gradient(45deg, #BF953F, #FCF6BA, #B38728, #FBF5B7, #AA771C);
    margin-bottom: 150px;
    }
    button:hover{
        background: linear-gradient(45deg, #FCF6BA, #BF953F, #B38728,  #AA771C, #FBF5B7);
        color: white !important;
    }
    form{
        margin-bottom: 0;
        padding-top: 100px;
    }
    main{
        background: linear-gradient(45deg, #BF953F, #FCF6BA, #B38728, #FBF5B7, #AA771C);
        text-align: center;
    }
    body{
        margin: 0;
    }
}
</style>
<?php

$servername = "localhost";
$username = "auto1rju";
$password = "ww2~(Jk3eBEX";
$database = "auto1rju_forma";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['prijavaTesta'])) {
    
    $prijavaTesta = $_POST['prijavaTesta'];
    $test = $_POST['test'];
    $prijavaVoznje = $_POST['prijavaVoznje'];
    $voznja = $_POST['voznja'];
    
   
    $sql = "INSERT INTO termini (prijavaTesta, test, prijavaVoznje, voznja) VALUES ('$prijavaTesta', '$test', '$prijavaVoznje', '$voznja')";

    if ($conn->query($sql) === TRUE) {
        echo "Uspešno ste kreirali novi post";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


?>

<form id="form" method="post" action="" enctype="multipart/form-data">
    <div class="row">
        <div class="col-12 mb-4">
            <label for="prijavaTesta">PRIJAVA TESTA</label>
            <input type="text" id="prijavaTesta" name="prijavaTesta">
        </div>
        <div class="col-12 mb-4">
            <label for="test">TEST</label>
            <input type="text" name="test" id="test">
            <p><span></span></p>
        </div>
        <div class="col-12 mb-4">
            <label for="prijavaVoznje">PRIJAVA VOZNJE</label>
            <input type="text" id="prijavaVoznje" name="prijavaVoznje">
        </div>
        <div class="col-12 mb-4">
            <label for="voznja">VOŽNJA</label>
            <input name="voznja" id="voznja">
        </div>
        
        
        <div class="col-12 mb-4">
            <button type="submit" name="submit"><b><a>OBJAVI</a></b></button>
        </div>
    </div>
</form>

<?php
 
$sql = "SELECT * FROM termini";
$result = $conn->query($sql);

// Fetch posts as an associative array
$posts = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $posts[] = $row;
    }
}

// Close the database connection

?>
<h1>Posts</h1>
    <table  border="1">
        <tr>
            <th>ID</th>
            <th>TEST</th>
            <th>VOZNJA</th>
            <th>Action</th>
        </tr>
        <?php foreach ($posts as $post): ?>
            <tr>
                <td><?php echo $post['ID']; ?></td>
                <td><?php echo $post['test']; ?></td>
                <td><?php echo $post['voznja']; ?></td>
                <td><a href="termini.php?ID=<?php echo $post['ID']; ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php
  
if (isset($_GET['ID'])) {
    $id = $_GET['ID'];

    // Perform delete operation
    $sql = "DELETE  FROM termini WHERE ID = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();

?>