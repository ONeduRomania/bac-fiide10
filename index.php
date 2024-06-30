<?php
include 'includes/config.php';
$conn = get_db_connection($config);

$sql = "SELECT title, description, DATE_FORMAT(date, '%d %b. %Y') as date, DATE_FORMAT(time, '%H:%i') as time FROM news";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bacalaureat de 10!</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
</head>
<body>

<div class="sidebar">
    <div class="logo">
        <img src="images/logo.png" alt="Logo">
    </div>
    <ul>
        <li><a href="index.php" class="active"><i class="icon-dashboard"></i> Dashboard</a></li>
        <li><a href="#"><i class="icon-news"></i> Noutăți</a></li>
        <li><a href="#"><i class="icon-info"></i> Informații utile</a></li>
        <li><a href="#"><i class="icon-results"></i> Rezultate</a></li>
        <li><a href="#"><i class="icon-subjects"></i> Subiecte</a></li>
        <li><a href="#"><i class="icon-training"></i> Antrenează-te</a></li>
        <li><a href="#"><i class="icon-study"></i> Învață de 10</a></li>
        <li><a href="#"><i class="icon-college"></i> Vreau la facultate</a></li>
    </ul>
    <footer>
        <div class="footer-links">
            <a href="#">Confidenţialitate</a> ·
            <a href="#">Condiţii de utilizare</a> ·
            <a href="#">Protecția datelor</a> ·
            <a href="#">Despre</a> ·
            <a href="#">Asociația ONedu © 2024</a>
        </div>
    </footer>
</div>

<div class="main-content">
    <div class="container">
        <h1>Bacalaureat de 10!</h1>
        <div class="news-calendar-stats">
            <div class="news">
                <h2>Noutăți 2024</h2>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="news-item">';
                        echo '<div class="news-title">' . $row["title"] . '</div>';
                        echo '<div class="news-description">' . $row["description"] . '</div>';
                        echo '<div class="news-date">' . $row["date"] . ' ' . $row["time"] . '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '0 results';
                }
                ?>
            </div>
            <div class="calendar">
                <h2>Calendar 2024</h2>
                <div class="calendar-event" data-date="today">29.06 14:00 - Rezultate examen</div>
                <!-- Adaugă alte evenimente similar -->
            </div>
            <div class="statistics">
                <h2>Statistici</h2>
                <div class="statistic-item">
                    <p>Candidați prezenți</p>
                    <span>0</span>
                </div>
                <div class="statistic-item">
                    <p>Candidați absenți</p>
                    <span>0</span>
                </div>
                <div class="statistic-item">
                    <p>Candidați promovați</p>
                    <span>0</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$conn->close();
?>
</body>
</html>
