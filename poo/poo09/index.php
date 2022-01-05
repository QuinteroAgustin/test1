<?php 
//
// po09 : calendrier du mois en cours
//
// Les formats relatifs genre "first day of ..." sont ici :
// http://php.net/manual/fr/datetime.formats.relative.php
// Premier jour du mois
$datetime1 = new DateTime('first day of this month', new DateTimeZone('Europe/Paris'));
// dernier jour du mois
$datetime2 = new DateTime('last day of this month', new DateTimeZone('Europe/Paris'));
// Crée un formatter
// https://openclassrooms.com/courses/gerer-les-dates-en-php
//
// ATTENTION : il faut peut être ajouter l'extension "intl" dans php.ini (classe not found)
$formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE, 'Europe/Paris', IntlDateFormatter::GREGORIAN);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PO09 - calendrier</title>
</head>
<body>
    <h1>po09 - calendrier du mois en cours</h1>
    <p>Période du <?php echo $datetime1->format('d/m/Y');?> au <?php echo $datetime2->format('d/m/Y'); ?></p>
    <table>
      <?php
      do {
        echo "<tr><td>" . $formatter->format($datetime1) . "</td></tr>";
        $datetime1->modify("+1 day");
      } while ($datetime1 <= $datetime2)
      ?>
    </table>
</body>
</html>