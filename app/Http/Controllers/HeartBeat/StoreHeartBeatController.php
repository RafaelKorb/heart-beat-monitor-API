<?php

namespace App\Http\Controllers\HeartBeat;

class StoreHeartBeatController
{
    public function __invoke()
    {
        return ['ok' => true];
    }
}
