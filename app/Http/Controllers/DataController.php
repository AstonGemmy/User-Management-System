<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;

class DataController extends Controller
{
    /**
     * Display a listing of the resource for printing.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($url)
    {
        $records = Record::all();
        foreach ($records as $record_key => $record_object) {
            $record_object['serial_number'] = ($record_key + 1);
        }
        return view("records.{$url}", compact('records'));
    }
       
}
