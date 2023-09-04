<?php
namespace Lobeliatechnology\Inspire\Controllers;

use Illuminate\Http\Request;
use Lobeliatechnology\Inspire\Inspire;

class InspirationController
{
    // public function __invoke(Inspire $inspire) {
    //     $quote = $inspire->justDoIt();

    //     return $quote;
    // }

    public function index()
    {
        $inspire = new Inspire;
        $quote = $inspire->justDoIt();
        return view('inspire::index', compact('quote'));

    }
}