<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Générateur de compliments</title>
    <link rel="stylesheet" />
</head>

<body>
<div id="header">
    <h1>Compliments</h1>
</div>

<div id="main_wrapper">
    <div>
        <?php
        echo 'Je trouve que ';

        $a1 = array('ta tête', 'ton intelligence', 'ta musculature');
        $string1 = rand(0, 2);
        echo $a1[$string1] . ' ';

        $a2 = array('est à l\'image de', 'est encore plus exceptionnelle que', 'dépasse largement celle de');
        $string2 = rand(0, 2);
        echo $a2[$string2] . ' ';

        $a3 = array('un coucher de soleil', 'Scarlet Johanson', 'David Pujadas');
        $string3 = rand(0, 2);
        echo $a3[$string3] . ' ';

        $a4 = array('sur la plage', 'en montagne', 'dans un champ');
        $string4 = rand(0, 2);
        echo $a4[$string4] . ' ';
        ?>
    </div>
    <br>
    <div class="bouton"><a href="">Nouveau compliment</a></div>
</div>
</body>
</html>








