<?php
$redirect_url = '';
if (isset($_GET['unique_code'])) {
    $unique_code = $_GET['unique_code'];

    function get_redirect_url($unique_code)
    {
        $county_acronym = (ctype_alpha($unique_code[1])) ? substr($unique_code, 0, 2) : $unique_code[0];

        $county_codes = [
            'AB' => 1, 'AR' => 3, 'AG' => 2, 'BC' => 6, 'BH' => 5, 'BN' => 7, 'BR' => 8, 'BT' => 9, 'BV' => 10,
            'BZ' => 11, 'CS' => 14, 'CL' => 13, 'CJ' => 12, 'CT' => 15, 'CV' => 16, 'DB' => 17, 'DJ' => 18,
            'GL' => 20, 'GR' => 21, 'GJ' => 19, 'HR' => 23, 'HD' => 22, 'IL' => 25, 'IS' => 26, 'IF' => 24,
            'MM' => 28, 'MH' => 27, 'MS' => 29, 'NT' => 30, 'OT' => 31, 'PH' => 32, 'SM' => 35, 'SJ' => 34,
            'SB' => 33, 'SV' => 36, 'TR' => 39, 'TM' => 38, 'TL' => 37, 'VS' => 42, 'VL' => 40, 'VN' => 41,
            'B'  => 4
        ];

        $county_code = isset($county_codes[$county_acronym]) ? $county_codes[$county_acronym] : null;
        if ($county_code === null) {
            return null;
        }

        $url = "http://bacalaureat.edu.ro/RezultateCautare.aspx?Jud={$county_code}&Cod={$unique_code}";
        return $url;
    }

    $redirect_url = get_redirect_url($unique_code);
}
?>
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
            <h1 style="text-align: center;">Rezultate</h1>
            <br/>
            <div class="search-box">
                <form method="GET">
                    <label for="unique_code">Introduceți codul candidatului:</label>
                    <input type="text" id="unique_code" name="unique_code" required>
                    <button type="submit">Caută</button>
                </form>
            </div>

            <div class="results">
                <?php if (!empty($redirect_url)): ?>
                    <p>Dacă nu ai fost redirecționat automat, <a href="<?php echo $redirect_url; ?>" target="_blank">dă
                            click aici pentru rezultate.</a></p>
                    <script>
                        window.open('<?php echo $redirect_url; ?>', '_blank');
                    </script>
                <?php elseif (isset($_GET['unique_code'])): ?>
                    <p>Codul introdus este invalid. Vă rugăm să verificați codul și să încercați din nou.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="useful-info">
            <h1 style="text-align: center;">Procedura privind depunerea contestațiilor</h1>
            <p style="text-align: center;">
                Contestațiile se depun la secretariatele unităților de învățământ la care candidații sunt înscriși,
                conform
                calendarului oficial (3 iulie: 16-19, 4 iulie: 8-12). Documentele necesare depunerii contestațiilor
                trebuie semnate
                și de părintele sau reprezentantul legal al minorului.

                <br/>
                <br/>

                <b>ATENȚIE!</b> În situația în care notele obținute la contestații sunt mai mici decât cele inițiale, se
                păstrează
                notele obținute în urma contestației. Nota obținută în urma contestației nu mai poate fi modficată.

                <br/>
                <br/>

                Gândește-te bine înainte de a depune contestație!
                <br/>
                <br/>
                <a href="https://evaluare.fiide10.ro/docs/2024/model-contestatie-EN-2024.pdf" target="_blank">Descarcă
                    model contestație</a>
            </p>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>
