<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks PHP</title>
</head>
<body>

    <!-- Snack 1 -->
    <section>
        
        <?php 
        $min = 1;
        $max = 200;

        $matches = [
            
            [
                'home' => 'Lakers',
                'guest' => 'Chicago Bulls',
                'pt_home' => rand($min, $max),
                'pt_guest' => rand($min, $max)
            ],
            [
                'home' => 'Golden State',
                'guest' => 'Boston Celtic',
                'pt_home' => rand($min, $max),
                'pt_guest' => rand($min, $max)
            ],
            [
                'home' => 'Toronto Raptors',
                'guest' => 'Nev York Knicks',
                'pt_home' => rand($min, $max),
                'pt_guest' => rand($min, $max)
            ],
            [
                'home' => 'Brooklyn Nets',
                'guest' => 'Detroit Pistons',
                'pt_home' => rand($min, $max),
                'pt_guest' => rand($min, $max)
            ],

        ];
        ?>

        <h1><strong>NBA</strong> - Matches </h1>

        <ul>
            <?php for($i = 0; $i < count($matches); $i++) {?>
            <li><?php echo $matches[$i]['home'] . ' ' . $matches[$i]['guest'] . ' | ' . $matches[$i]['pt_home'] . ' - ' . $matches[$i]['pt_guest']; ?></li>
            <?php } ?>
        </ul>

    </section>

    <hr>
    <!-- Snack 2 -->
    <section>
        
        <?php 
        $data = $_GET;
        if ( (strlen($data['name']) <= 3) || ( (strpos($data['mail'], '@') === false) || (strpos($data['mail'], '.') === false) ) || is_numeric($data['age']) === false ) {
            echo '<p>Accesso Negato </p>';
        } else {
            echo '<p>Accesso Consentito </p>';
        }
        ?>

    </section>
 
</body>
</html>