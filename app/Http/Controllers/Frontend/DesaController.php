<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
// use App\Models\Desa;
use App\Models\Article;
use App\Models\Agenda;
use App\Models\Announcement;

class DesaController extends Controller
{
    public function index(){
      try{
        $announcement = Announcement::where('status', 'show')->latest()->limit(5)->get();
        $article = Article::where('status', 'show')->latest()->limit(5)->get();
        $agenda = Agenda::where('status', 'show')->latest()->limit(5)->get();
        // $desa = Desa::where(['status'=>'show'])->latest()->paginate(1);
        return view('public.pemerintahan.desa.list', compact(/* 'desa' ,*/ 'article', 'agenda', 'announcement'));
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->back()->with(['error'=>$error]);
      }
    }

    public function foto($slug){
      try{
        $announcement = Announcement::where('status', 'show')->latest()->limit(5)->get();
        $article = Article::where('status', 'show')->latest()->limit(5)->get();
        $agenda = Agenda::where('status', 'show')->latest()->limit(5)->get();
        // $desa = Desa::where('slug', $slug)->first();
        return view('public.pemerintahan.desa.detail', compact(/* 'desa',*/ 'article', 'agenda', 'announcement'));
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->back()->with(['error'=>$error]);
      }
    }
}
