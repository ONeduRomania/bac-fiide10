<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <title>Subiecte BAC</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
    <?php include 'includes/sidebar.php'; ?>
</head>
<body>


<div class="main-content">
    <div class="container">
        <form action="" method="GET" class="inline-form">
<!--            <div class="useful-info">-->
                <h1>Subiecte de bacalaureat</h1>
                <div class="search-form">
                    <label for="materie">Materie:</label>
                    <select name="materie" id="materie">
                        <option value="romana">Limba și literatura română</option>
                        <option value="matematica">Matematică</option>
                        <option value="informatica">Informatică</option>
                        <option value="chimie">Chimie</option>
                        <option value="fizica">Fizică</option>
                        <option value="biologie">Biologie</option>
                        <option value="istorie">Istorie</option>
                        <option value="geografie">Geografie</option>
                        <option value="filosofie">Filosofie</option>
                        <option value="logica">Logică și argumentare</option>
                        <option value="economie">Economie</option>
                        <option value="engleza">Limba engleză</option>
                    </select>

                    <label for="an">An:</label>
                    <select name="an" id="an">
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                    </select>
                    <button type="submit">Caută</button>
                </div>
<!--            </div>-->
        </form>

        <?php

        include 'includes/config.php';
        $conn = get_db_connection($config);

        if (isset($_GET['materie']) && isset($_GET['an'])) {
            $materie = $_GET['materie'];
            $an = $_GET['an'];

            $sql = "SELECT nume, cale_pdf FROM subiecte WHERE materie = '$materie' AND an = $an";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo '<div class="subiecte-list">';
                echo "<h2>Subiecte pentru $materie în anul $an:</h2>";
                echo "<ul>";
                while ($row = $result->fetch_assoc()) {
                    $nume_subiect = $row['nume'];
                    $cale_pdf = $row['cale_pdf'];
                    echo "<li><a href=\"$cale_pdf\" target=\"_blank\">$nume_subiect</a></li>";
                }
                echo "</ul>";
                echo '</div>';
            } else {
                echo '<p>Nu au fost găsite subiecte pentru criteriile selectate.</p>';
            }
        }

        // Închide conexiunea la baza de date
        $conn->close();
        ?>

    </div>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>
