<?php
include 'includes/config.php';
$conn = get_db_connection($config);

$sql = "SELECT title, description, DATE_FORMAT(date, '%d %b. %Y') as date, DATE_FORMAT(time, '%H:%i') as time FROM news";
$result = $conn->query($sql);
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/menu.php'; ?>

<div class="container">
    <img src="images/logo.png" alt="Logo">
    <h1>Noutăți 2024</h1>
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
    <div class="calendar-event" data-date="today">09.06 14:00 - Rezultate examen</div>
    <!-- Adaugă alte evenimente similar -->
</div>

<?php include 'includes/footer.php'; ?>

<?php
$conn->close();
?>
