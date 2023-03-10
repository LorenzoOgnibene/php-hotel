<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hotel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    </head>
    <body>
                <?php
                    $hotels = [
                        [
                            'name' => 'Hotel Belvedere',
                            'description' => 'Hotel Belvedere Descrizione',
                            'parking' => true,
                            'vote' => 4,
                            'distance_to_center' => 10.4
                        ],
                        [
                            'name' => 'Hotel Futuro',
                            'description' => 'Hotel Futuro Descrizione',
                            'parking' => true,
                            'vote' => 2,
                            'distance_to_center' => 2
                        ],
                        [
                            'name' => 'Hotel Rivamare',
                            'description' => 'Hotel Rivamare Descrizione',
                            'parking' => false,
                            'vote' => 1,
                            'distance_to_center' => 1
                        ],
                        [
                            'name' => 'Hotel Bellavista',
                            'description' => 'Hotel Bellavista Descrizione',
                            'parking' => false,
                            'vote' => 5,
                            'distance_to_center' => 5.5
                        ],
                        [
                            'name' => 'Hotel Milano',
                            'description' => 'Hotel Milano Descrizione',
                            'parking' => true,
                            'vote' => 2,
                            'distance_to_center' => 50
                        ],

                    ];
                    
                    
                    //foreach($hotels as $key => $hotel){
                    //    echo "<div class='col-5 border border-secondary g-3 me-autod '>";
                    //    echo "<p>Nome: {$hotel['name']} </p>";
                     //   echo "<p>Descrizione: {$hotel['description']} </p>";
                    //    echo "<p>Parcheggio: {$hotel['parking']} </p>";
                    //    echo "<p>Voto: {$hotel['vote']} </p>";
                    //    echo "<p>Distanza dal centro: {$hotel['distance_to_center']}mt </p>";
                    //    echo "</div>";
                   // }
                    ?>

        <div class="container pt-5">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope='col'>Nome</th>
                        <th scope='col'>Descrizione</th>
                        <th scope='col'>Parcheggio</th>
                        <th scope='col'>Voto</th>
                        <th scope='col'>Distanza dal centro</th>
                        </tr>
                </thead>
                <?php
                    echo "<tbody>";
                    foreach ($hotels as $hotel) {
                        echo "<tr>";
                        echo "<td>" . $hotel['name'] . "</td>";
                        echo "<td>" . $hotel['description'] . "</td>";
                        echo "<td>" . $hotel['parking'] . "</td>";
                        echo "<td>" . $hotel['vote'] . "</td>";
                        echo "<td>" . $hotel['distance_to_center'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                ?>
            </table>
        </div>

        
        
    </body>
</html>