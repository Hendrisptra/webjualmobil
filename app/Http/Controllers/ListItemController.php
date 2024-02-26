<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListItemController extends Controller
{
    public function list_item()
    {
        return view("List_item");
    }
}
