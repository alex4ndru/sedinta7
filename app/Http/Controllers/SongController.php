<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use DB;
use Illuminate\Database\Eloquent\Model;
use App\Songs;

class SongController extends Controller
{
    public function index(){

        return view('pages.index')
                ->with('songs', $this->getSongs());
    }

    public function show($slurp){

        //$song= DB::table('songs')->where('slug', $slurp)->get()[0];
        $song= Songs::where('slug', $slurp)->first();

        return view('pages.details')
                ->with('song', $song);
    }

    private function getSongs(){
        //return DB::table('songs')->get();
        return Songs::get();
    }
    
    public function updateLyrics()
    {
        return "updated !";
    }
    
    public function editLyrics($slurp)
    {
        $song= Songs::whereSlug($slurp)->first();
        return view('pages.edit')
                ->with('song', $song);
    }
    
    public function update($slug, Request $request)
    {
        //$song = new Songs();
        //$song->fill(['lyrics'=>$request->get('lyrics')])->save(); //new entry
        Songs::where('slug',$slug)->update(['lyrics'=>$request->get('lyrics')]);
        return redirect('songs/'.$slug);
    }
}
