

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mon Profil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="present.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        $tabl = array(
            'Prènom' => 'DJIBRIL',
            'Nom' => 'BA',
            'Adresse' => '1232 Nimzath 1 Pikine',
            'Profession' => 'Etudiant'
        ) 
    ?>
        <a href="IMG-20181121-WA0016.jpg"><img src="IMG-20181121-WA0016.jpg" title = "Cliquez"></a>
    <div>
        <table>
            <?php foreach ($tabl as $key => $value): ?>
                <tr>
                    <td><?php echo ($key != ('Tel') ? $key : 'Téléphone'); ?><br></td>
                    <td><?php echo $value ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>

