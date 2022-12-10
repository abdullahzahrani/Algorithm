<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Cache;



class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('member');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        try {
//            $p = Cache::remember('posts', 0, function () {
//                return Member::where('is_admin', '=', 1)
//                    ->inRandomOrder()
//                    ->get(['name', 'rank', 'tw', 'li', 'em','img']);
//            });
            $p1=$member->where('is_admin', '=', 1)
                ->inRandomOrder()
                ->get(['name', 'rank', 'tw', 'li', 'em','img']);
            $p=$member->where('is_admin', '==', 0)
                ->inRandomOrder()
                ->get(['name', 'rank', 'tw', 'li', 'em','img']);
            return view('member',compact('p1','p'));
        }catch (\Exception $e){
            return redirect('/');
            dd();
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
