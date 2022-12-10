<?php

namespace App\Http\Controllers;

use App\Models\portfolio;
use Illuminate\Http\Request;
use DB;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      private $inx;
      public function __construct()
     {
         $this->inx = \cache()->remember('inx', 60 * 60 * 24, function () {
             return DB::table('portfolios')->select(['name', 'link', 'img', 'title', 'rank', 'type'])->where('type','=','Challenges')->get(3);
         });
     }
    public function index(portfolio $portfolio)
    {
        $p1 = \cache()->remember('inx', 60 * 60 * 24, function () {
            return DB::table('portfolios')->select(['name', 'link', 'img', 'title', 'rank', 'type'])->where('type','=','Challenges')->get(3);
        });
        $p = json_decode($p1, true);

//        $p=$portfolio::all(['name', 'link', 'img', 'title', 'rank', 'type'])->take(3);
        $flag=false;
        return view('welcome',compact('p','flag'));
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
     * @param  \App\Models\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(portfolio $portfolio)
    {
//        $p=$portfolio->all(['name', 'link', 'img', 'title', 'rank', 'type']);
        $p=$portfolio->select(['name', 'link', 'img', 'title', 'rank', 'type'])->inRandomOrder()->get();
        return view('portfolio',compact('p'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(portfolio $portfolio)
    {
        //
    }
}
