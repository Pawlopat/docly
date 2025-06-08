<?php
namespace Docly;

use Dompdf\Dompdf;

class PDFGenerator {
    public static function createPDF(string $html, string $outputPath): string {
        require_once __DIR__ . '../vendor/autoload.php';

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        file_put_contents($outputPath, $dompdf->output());

        return $outputPath;
    }
}
