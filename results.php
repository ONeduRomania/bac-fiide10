<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <title>Rezultate 2024</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
    <?php include 'includes/sidebar.php'; ?>
</head>
<body>

<div class="main-content">
    <div class="container">
        <div class="useful-info">
            <h1>Rezultate</h1>
            <p>Secțiune în lucru. Le vei putea în mod organizat și să găsești rapid nota obținută.</p>

            <div class="search-box">
                <form method="GET">
                    <label for="unique_code">Introduceți codul candidatului:</label>
                    <input type="text" id="unique_code" name="unique_code" required>
                    <button type="submit">Caută</button>
                </form>
            </div>

            <div class="results">
                <?php
                if (isset($_GET['unique_code'])) {
                    $unique_code = $_GET['unique_code'];

                    function get_iframe_url($unique_code)
                    {
                        $county = (ctype_alpha($unique_code[1])) ? substr($unique_code, 0, 2) : $unique_code[0];
                        $url = "http://static.evaluare.edu.ro/2023/rezultate/{$county}/index.html?queries[search]={$unique_code}";
                        return $url;
                    }

                    $iframe_url = get_iframe_url($unique_code);
                    echo "<iframe src='{$iframe_url}' width='100%' height='600px'></iframe>";
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>
