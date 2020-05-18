<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks PHP</title>
</head>
<body>

    <?php 
    $matches = [
        
        [
            'home' => 'Lakers',
            'guest' => 'Chicago Bulls',
            'pt_home' => 170,
            'pt_guest' => 110
        ],
        [
            'home' => 'Golden State',
            'guest' => 'Boston Celtic',
            'pt_home' => 100,
            'pt_guest' => 150
        ],
        [
            'home' => 'Toronto Raptors',
            'guest' => 'Nev York Knicks',
            'pt_home' => 20,
            'pt_guest' => 35
        ],
        [
            'home' => 'Brooklyn Nets',
            'guest' => 'Detroit Pistons',
            'pt_home' => 120,
            'pt_guest' => 121
        ],

    ];

    ?>
    <h1><strong>NBA</strong> - Matches </h1>
    <p>Olimpia Milano - Cantù | 55-60</p>

    <ul>
        <?php for($i = 0; $i < count($matches); $i++) {?>
        <li><?php echo $matches[$i]['home'] . ' ' . $matches[$i]['guest'] . ' | ' . $matches[$i]['pt_home'] . ' - ' . $matches[$i]['pt_guest'] ?></li>
        <?php } ?>
    </ul>
    
</body>
</html>