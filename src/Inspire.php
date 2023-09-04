<?php

namespace Lobeliatechnology\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire {
    public function justDoIt() {
        $response = Http::get('https://zenquotes.io/api/random');

        return $response[0]['q'] . ' -' . $response[0]['a'];
    }
}