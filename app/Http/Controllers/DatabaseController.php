<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    //
    public function index()
    {

        // Get all the databases
        $databases = DB::select('SHOW DATABASES');

        // Get all the tables in the database
        foreach ($databases as $database) {
            $tables = DB::select('SHOW TABLES ');
            $database->tables = $tables;
        }

        return view('database.index', ['databases' => $databases]);
    }
}
