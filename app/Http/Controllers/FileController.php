<?php
/**
 * Created by PhpStorm.
 * User: komal
 * Date: 16/07/2017
 * Time: 5:58 PM
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function writeFile()
    {
        echo 'Hello world';
        Storage::disk('local')->put('file.txt','Hello world');
    }

    public function readFile(){
        $data=Storage::disk('local')->get('file.txt');
        var_dump($data);
    }

}
