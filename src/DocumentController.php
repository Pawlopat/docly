<?php
namespace Docly;

class DocumentController {
    public function form() {
        include '../templates/form.php';
    }

     public function generate() {
        require_once 'TemplateEngine.php';
        require_once 'PDFGenerator.php';

        $template = file_get_contents('../templates/umowa_zlecenie.html');
        $filled = TemplateEngine::render($template, $_POST);
        $pdfPath = PDFGenerator::createPDF($filled, '../generated/umowa.pdf');
/* 
        header('Content-Type: application/pdf');
        readfile($pdfPath); */
        echo "Wygenerowano PDF: " . $pdfPath;
exit;

    } 

    /* public function generate() {
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
    
        require_once 'TemplateEngine.php';
        require_once 'PDFGenerator.php';
        require_once 'config.php';
    
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            die('Niedozwolony dostęp');
        }
    
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        exit;
    } */
    
}
