<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <title>Informații utile</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
</head>
<body>

<?php include 'includes/sidebar.php'; ?>

<div class="main-content">
    <div class="container">
        <div class="useful-info">
            <h1>Informații utile</h1>
            <div class="info-content">
                <div class="info-subtitle" onclick="toggleInfo()">
                    Ora de începere și durata <span class="arrow">▼</span>
                </div>
                <div class="info-details" id="info1">
                    <div class="info-text">
                        <b>Accesul elevilor în sala de examen este permis până la ora 8:30.</b> Proba scrisă începe la
                        ora 9:00.
                        Timpul de lucru efectiv este de 3 ore, începând cu ora distribuirii subiectelor către candidați.
                        Excepție fac candidații care au depus o cerere specială pentru prelungirea cu maximum două ore
                        (conf. procedurii 33576/2022 - asigurarea condițiilor de egalizare a șanselor).
                    </div>
                </div>
                <div class="info-subtitle" onclick="toggleInfo()">
                    Ce NU poți face și aduce în sala de examen <span class="arrow">▼</span>
                </div>
                <div class="info-details" id="info2">
                    <div class="info-text">
                        <list>
                            <li>telefoane mobile, căști audio, smartwatch-uri, orice mijloc electronic de calcul sau
                                comunicare
                            </li>
                            <li>ghiozdane, poșete, genți, haine, obiecte personale. <b>Le vei depozita în spațiile
                                    speciale.</b></li>
                            <li>manuale, dicționare, notițe, însemnări, cărți, caiete, foi de hârtie</li>
                            <li>comunica cu exteriorul sau cu alți candidați, să copiezi, transmiți/preiei materiale
                                către/de la alți candidați
                            </li>
                        </list>
                    </div>
                </div>

                <div class="info-subtitle" onclick="toggleInfo()">
                    Ce riști când copiezi <span class="arrow">▼</span>
                </div>
                <div class="info-details" id="info3">
                    <div class="info-text">
                        Dacă nu respecți regulile de desfășurare a examenului, riști să fii eliminat din examen și să nu
                        mai ai dreptul să participi la următoarele două sesiuni de examen.
                        Oare merită riscul? Nu uita că examenul de bacalaureat este un examen național, iar rezultatele
                        tale sunt recunoscute la nivel național și internațional.
                    </div>
                </div>

                <div class="info-subtitle" onclick="toggleInfo()">
                    Cum te pregătești pentru examen <span class="arrow">▼</span>
                </div>
                <div class="info-details" id="info4">
                    <div class="info-text">
                        <list>
                            <li>Învață din timp, nu lăsa materia pentru ultima zi</li>
                            <li>Rezolvă subiecte din anii anteriori</li>
                            <li>Participă la simulări de examen</li>
                            <li>Învață să îți gestionezi timpul și stresul</li>
                            <li>Odihnește-te și alimentează-te corespunzător</li>
                        </list>
                    </div>
                </div>
            </div>
        </div>

        Revenim cu mai multe informații utile în curând.

    </div>
</div>

</body>

<?php include 'includes/footer.php'; ?>

</html>

