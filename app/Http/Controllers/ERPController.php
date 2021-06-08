<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ERPController extends Controller
{
    public function add()
    {

        return view(view: 'pages.erp-add-page');

    }
}
