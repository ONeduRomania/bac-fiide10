<?php
include 'includes/config.php';
$conn = get_db_connection($config);

$sql = "SELECT title, description, date, time FROM news";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bacalaureat de 10!</title>
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
                        echo '<div class="news-content">';
                        echo '<div class="news-title">' . $row["title"] . '</div>';
                        echo '<div class="news-description">' . $row["description"] . '</div>';
                        echo '</div>';
                        echo '<div class="news-footer">';
                        echo '<div class="news-date">' . $row["date"] . ' ' . $row["time"] . '</div>';
                        echo '<div class="logo-link">';
                        echo '<a href="https://onedu.ro" target="_blank"><img src="https://www.onedu.ro/wp-content/uploads/2023/08/logoCOR.webp" alt="logo_onedu"></a>';
                        echo '</div>';
                        echo '</div>';
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
