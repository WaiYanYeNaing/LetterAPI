<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all()->random(3);
        return $members;
    }

    public function store(Request $request)
    {
        $member = Member::create($request->all());
        return $member;
    }

    public function show(Member $member)
    {
        return $member;
    }

    public function update(Request $request, Member $member)
    {
        $member->update($request->all());
        return $member;
    }

    public function destroy(Member $member)
    {
        $member->delete();
        return $member;
    }
}
