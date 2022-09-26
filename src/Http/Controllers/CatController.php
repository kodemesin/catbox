<?php

namespace Kodemesin\Catbox\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class CatController extends Controller
{
    public function index()
    {
        $response = Http::get("https://api.thecatapi.com/v1/images/search");
        $cat = $response->json();
        return view("catbox::index",["cat" => $cat[0]]);
    }
}
