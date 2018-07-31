<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Less_Parser;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class AssetController extends Controller
{
   public function getCss($less_file)
{
    $file_path = base_path().'/resources/assets/less';
    $file_name = $file_path.'/'.$less_file.'.less';
    $parser = new Less_Parser();
    $parser->parseFile($file_name);
    $compiled_css = $parser->getCss();

    return response($compiled_css)->header('Content-Type', 'text/css');
}
}
