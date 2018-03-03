<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
class sectionController extends Controller
{
    // Basic controller
    /*
    public function index()
    {
        return '<center><h1>The Library</h1></center>';
    }
    public  function  createnewsection()
    {
        return '<center><h1>adding new section to the library</h1></center>';
    }
    public  function  showsection($sectionName)
    {
       return '<center><h1>This Page for '.$sectionName.'  section</h1></center>';
    }
    */
    //Restful controller
    public function getIndex()
    {
        return '<center><h1>The Library</h1></center>';
    }
    public function getNewSection()
    {
        return '<center><h1>creating new section to the library</h1></center>';
    }
    public function getShowSection($sectionName)
    {
        return '<center><h1>You are curenttly viewing= '.$sectionName.'  section</h1></center>';
    }
}
