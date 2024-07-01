<?php
include 'includes/config.php';
$conn = get_db_connection($config);

$date_today = date('j M.');
$time_now = date('H.i');

$sql = "SELECT title, description, date, time FROM news ORDER BY id DESC";
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

    <?php include 'includes/sidebar.php'; ?>

</head>
<body>

<div class="main-content">
    <div class="container">
        <div class="columns">
            <div class="news">
                <h2>Noutăți 2024</h2>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $news_date = DateTime::createFromFormat('j M.', $row["date"]);
                        echo $news_date->format('j M.') . ' ' . $date_today . '<br>';
                        $news_time = DateTime::createFromFormat('H.i', $row["time"]);
                        echo $news_time->format('H.i') . ' ' . $time_now . '<br>';
                        $current_date = new DateTime();
                        echo $current_date->format('j M.') . ' ' . $current_date->format('H.i') . '<br>';

                        if ($news_date < $current_date ||
                            ($news_date->format('j M.') == $current_date->format('j M.') && $news_time <= $current_date)) {
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
                    }
                } else {
                    echo '0 results';
                }
                ?>
            </div>
            <div class="side-column">
                <div class="calendar">
                    <h2>Calendar 2024</h2>
                    <div class="calendar-event" data-date="today">01.07 09:00 - Limba și literatura română</div>
                    <div class="calendar-event">02.07 09:00 - Proba obligatorie a profilului</div>
                    <div class="calendar-event">04.07 09:00 - Proba la alegere a profilui sau specializării</div>
                    <div class="calendar-event">05.07 09:00 - Limba și literatura maternă</div>
                    <div class="calendar-event">08.07 12:00 - Afișarea rezultatelor</div>
                    <div class="calendar-event">08.07 12-18 - Depunerea contestațiilor</div>
                    <div class="calendar-event">12.07 - Rezultate finale</div>
                </div>
                <div class="statistics">
                    <h2>Statistici</h2>
                    <div class="statistic-item">
                        <p>Candidați înscriși</p>
                        134.000
<!--                        <span>134.000</span>-->
                    </div>
                    <div class="statistic-item">
                        <p>Candidați prezenți</p>
                        0
                    </div>
                    <div class="statistic-item">
                        <p>Candidați promovați</p>
                        0
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<footer>
    <?php
    $conn->close();
    include 'includes/footer.php';
    ?>
</footer>
</html>
