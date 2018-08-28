<?php

    require_once 'vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    use PhpOffice\PhpSpreadsheet\IOFactory;

    function gerarPlanilha()
    {
        $arquivo = 'relatorio.xlsx';
        $planilha = new Spreadsheet();
        
        $planilha->setActiveSheetIndex(0)->setCellValue('A1', "Teste1");
        $planilha->setActiveSheetIndex(0)->setCellValue('A2', "Teste2");
        $planilha->setActiveSheetIndex(0)->setCellValue('A3', "Teste3");
        $planilha->getActiveSheet()->setTitle("p1");
        $buffer = IOFactory::createWriter($planilha, 'Xlsx');
        $buffer->save($arquivo);
    }

    gerarPlanilha();