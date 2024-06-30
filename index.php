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

<?php include 'includes/sidebar.php'; ?>

<div class="main-content">
    <div class="container">
        <h1>Bacalaureat de 10!</h1>
        <div class="columns">
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
            <div class="side-column">
                <div class="calendar">
                    <h2>Calendar 2024</h2>
                    <div class="calendar-event" data-date="today">29.06 14:00 - Rezultate examen</div>
                    <!-- Adaugă alte evenimente similar -->
                </div>
                <div class="statistics">
                    <h2>Statistici</h2>
                    <div class="statistic-item">
                        <p>Candidați înscriși</p>
                        <span>0</span>
                    </div>
                    <div class="statistic-item">
                        <p>Candidați prezenți</p>
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
</div>

<?php
$conn->close();
include 'includes/footer.php';
?>
</body>
</html>
