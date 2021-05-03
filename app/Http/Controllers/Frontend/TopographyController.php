<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Agenda;
use App\Models\Announcement;

class TopographyController extends Controller
{
    public function index(){
      try{
        $announcement = Announcement::where('status', 'show')->latest()->limit(5)->get();
        $article = Article::where('status', 'show')->latest()->limit(5)->get();
        $agenda = Agenda::where('status', 'show')->latest()->limit(5)->get();
        return view('public.profil.topography.list', compact('article', 'agenda', 'announcement'));
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->back()->with(['error'=>$error]);
      }
    }

    public function show($slug){
      try{
        $announcement = Announcement::where('status', 'show')->latest()->limit(5)->get();
        $article = Article::where('status', 'show')->latest()->limit(5)->get();
        $agenda = Agenda::where('status', 'show')->latest()->limit(5)->get();
        return view('public.profil.topography.detail', compact('article', 'agenda', 'announcement'));
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->back()->with(['error'=>$error]);
      }
    }
}
