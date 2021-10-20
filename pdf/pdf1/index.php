<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ht2</title>
    <link rel="stylesheet" href="css/mainht12b.css">
</head>
<body>
    <h1>ht12 : drapeau français</h1>

    <h4>Drapeau français</h4>
    <table>
        <tr>
            <td class="bleu"></td>
            <td class="blanc"></td>
            <td class="rouge"></td>
        </tr>
    </table>
    <h4>Drapeau belge</h4>
    <table>
        <tr>
            <td class="noir"></td>
            <td class="jaune"></td>
            <td class="rouge"></td>
        </tr>
    </table>
    <h4>Drapeau italien</h4>
    <table>
        <tr>
            <td class="vert"></td>
            <td class="blanc"></td>
            <td class="rouge"></td>
        </tr>
    </table>
    
    <p><a href="/git/test1/index.php">Home</a></p>
</body>
</html>
<?php
$html = ob_get_clean();

    // include autoloader
    require_once 'dompdf/autoload.inc.php';
    use Dompdf\Dompdf;
    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'portrait');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream();
?>