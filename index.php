<?php
    //array di hotels
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP hotel</title>
    <!--file CDN Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--file CDN Bootstrap-->
</head>
<body class="bg-dark text-center">
    <!--intestazione-->
    <header class="p-5 container">
        <h1 class="text-white">Hotels</h1>
    </header>
    <!--/intestazione-->
    <!--corpo-->
    <main class="container">
        <!--form-->
        <form class="row g-3 pb-3 align-items-center d-flex justify-content-center" action="#" method="GET">
            <div class="col-4">
                <label class="visually-hidden" for="voto">Filtro1</label>
                <div class="input-group">
                <div class="input-group-text">Filtro Hotel</div>
                <input type="text" class="form-control" id="voto" placeholder="Voto da 1 a 5">
                </div>
            </div>
            <div class="col-auto">
                <label class="visually-hidden" for="parking">Filtro2</label>
                <select class="form-select" id="parking">
                    <option selected>Parking car</option>
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        
        <!--dati stampati in tabella-->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance_to_center</th>
                </tr>
            </thead>
            <tbody>
                <!--creazione di records per gli hotel in tabella-->
                <?php foreach($hotels as $hotel) :?>
                    <tr>
                        <td><?php echo $hotel['name'];?></th>
                        <td><?php echo $hotel['description'] ;?></td>
                        <td><?php echo $hotel['parking']=== true ? 'Yes' : 'No';?></td>
                        <td><?php echo $hotel['vote']; ?></td>
                        <td><?php echo $hotel ['distance_to_center']; ?>km</td>
                    </tr>
                <?php endforeach;?>
                <!--/creazione di records per gli hotel in tabella-->
            </tbody>
        </table>
        <!--/dati stampati in tabella-->
    </main>
    <!--/corpo-->
</body>
</html>