<?php

namespace App\Http\Controllers\API;

use App\ChatGroup;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatGroupController extends Controller
{
    public function index()
    {
        $chatGroups = ChatGroup::all();
        return $chatGroups;
    }

    public function store(Request $request)
    {
        $chatGroups = ChatGroup::create($request->all());
        return $chatGroups;
    }

    public function show(ChatGroup $chatGroup)
    {
        return $chatGroup;
    }
}
