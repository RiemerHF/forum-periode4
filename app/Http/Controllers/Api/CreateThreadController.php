<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateThreadController extends Controller
{
    public function __invoke($request) {
        Thread::create($request->only(['title', 'description', 'user_id']));
        return response('DONE', 200);
    }
}
