<?php
// Inclure l'autoloader de Composer
require DIR . '/dompdf/vendor/autoload.php';

// Utiliser les classes de DomPDF
use Dompdf\Dompdf;
use Dompdf\Options;

// Options de DomPDF (facultatif, vous pouvez ajuster selon vos besoins)
$options = new Options();
$options->set('isHtml5ParserEnabled', true); // Activer le parseur HTML5
$options->set('isPhpEnabled', true); // Activer l'exécution PHP dans le contenu HTML (optionnel, peut être nécessaire pour certains cas)

// Instancier DomPDF
$dompdf = new Dompdf($options);

// Contenu HTML à convertir en PDF
$html = '<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hello world</title>
</head>
<body>
    <h1>Hello world</h1>
</body>
</html>';

// Charger le contenu HTML dans DomPDF
$dompdf->loadHtml($html);

// Définir la taille du papier et l'orientation (optionnel)
$dompdf->setPaper('A4', 'portrait');

// Rendre le PDF
$dompdf->render();

// Afficher le PDF dans le navigateur
$dompdf->stream('hello_world.pdf', ['Attachment' => false]);

?>