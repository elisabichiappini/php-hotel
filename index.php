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

    // copia dati in variabile di appoggio
    $filters_hotel = $hotels;

    //filter con parcheggio
    if(!empty($_GET['parking'])){
        $parking = $_GET['parking'] === 'yes' ? true : false;

        $temp_hotels = [];
        foreach($filters_hotel as $hotel) {
            if($hotel['parking'] === $parking) {
                $temp_hotels[] = $hotel;
            }
        }
        $filters_hotel = $temp_hotels;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP hotel</title>
    <!--file CDN Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--/file CDN Bootstrap-->
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
        <form action="index.php" method="GET">
            <div class="row g-3 pb-3 align-items-center d-flex justify-content-center">
                <!--filtro select parcheggio-->
                <div class="col-auto">
                    <label class="visually-hidden" for="parking">Filtro2</label>
                    <select class="form-select" id="parking" name="parking">
                        <option value="">Parking Filter</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <!--/filtro select parcheggio-->
                <!--filtro select voto-->
                <div class="col-auto">
                    <label for="voto"  class="visually-hidden"></label>
                    <select class="form-select" id="voto" name="voto">
                        <option selected value="">Vote All</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <!-- alternative option vote
                        <?php for($i = 1; $i <=5; $i++): ?>
                            <option value="<?php echo $i;?>"><?php echo $i;?></option>
                        <?php endfor; ?> -->
                        <!-- /alternative option vote-->
                    </select>
                </div>
                <!--/filtro input voto-->
                <!--bottone-->
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <!--/bottone-->
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
            <?php foreach ($filters_hotel as $hotel) :?>
                <tr>
                    <td><?php echo $hotel['name'];?></th>
                    <td><?php echo $hotel['description'] ;?></td>
                    <td><?php echo $hotel['parking'];?></td>
                    <td><?php echo $hotel['vote']; ?></td>
                    <td><?php echo $hotel ['distance_to_center']; ?>km</td>
                </tr>
            <?php endforeach; ?>
            <!--/creazione di records per gli hotel in tabella-->
            </tbody>
        </table>
        <!--/dati stampati in tabella-->
    </main>
    <!--/corpo-->
</body>
</html>