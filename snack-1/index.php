<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e 
punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 

    $partite = [
        [
            'home' => 'Olimpia Milano',
            'punti_realizzati_home' => 72,
            'guest' => 'Vanoli Cremona',
            'punti_realizzati_guest' => 73
        ],
        [
            'home' => 'Aquila Basket Trento',
            'punti_realizzati_home' => 95,
            'guest' => 'Pallacanestro Reggiana',
            'punti_realizzati_guest' => 89
        ],
        [
            'home' => 'Virtus Bologna',
            'punti_realizzati_home' => 78,
            'guest' => 'Fortitudo Bologna',
            'punti_realizzati_guest' => 75
        ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>

        <h1>Risultati 16ª giornata:</h1>
        <!-- Lista Partite -->
        <ul>
            <?php for($i = 0; $i < count($partite); $i++ ) { ?>
            <?php $thisPartita = $partite[$i]; ?>
                <li>
                    <?php 
                        echo $thisPartita['home'] . ' - ' . $thisPartita['guest']; 
                        echo ' | ';
                        echo $thisPartita['punti_realizzati_home'] . '-' . $thisPartita['punti_realizzati_guest']; 
                    ?>
                </li>
            <?php } ?>
        </ul>
    
</body>
</html>




