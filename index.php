<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ForEach</title>
</head>
<body>
  
  
    <?php 
    
      // foreach ($_GET as $key => $value) {
      //   echo  $key . ": " . $value;
      //   echo  "<br>";
      // } 

      // $password = $_GET['password'];

      // if ($password == 'Boolean') {
      //   echo  '<h1 style="color:green;">' . $password . '</h1>';
      // } else {
      //    echo  '<h1 style="color:red;">' . $password . '</h1>';
      // }

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

    foreach ($hotels as $hotel) {
      $name = $hotel['name'];
      $description = $hotel['description'];
      $vote = $hotel['vote'];

      echo '<h2>' . $name . '</h2>';
      echo '<h2>' . 'description: ' . $description . '</h2>';
      echo '<h2>' . 'vote: ' . $vote . '</h2>' . '-----------------------------------------------------------------';
    }

    ?>
 
</body>
</html>