<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Facades\Storage;
class TestController extends Controller
{
    public function testTemplate(Request $request){
        $myFile = public_path('documents\myDocumentTemplate.docx');
        $templateProcessor = new TemplateProcessor($myFile);
        $templateProcessor->setValue('firstname', $request->firstname);
        $templateProcessor->setValue('lastname', $request->lastname);
        $filenameToStore = 'documents\your_file_name_changed' . time() . '.docx';
        $templateProcessor->saveAs($filenameToStore);
        return Storage::download($filenameToStore);
    }
}
