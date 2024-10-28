<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        $tables = Table::all();
        return view('tables.index', compact('tables'));
    }

    public function show($id)
    {
        $table = Table::findOrFail($id);
        return view('tables.show', compact('table'));
    }

}