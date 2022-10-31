<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Home;
use App\Models\Announce;
use App\Models\User;

class QuestionsController extends Controller
{
    public function index(Home $home)
    {
        return view('ques/index');
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    
    public function questions(Question $ques)
    {
    return view('ques/ques')->with(['questions' => $ques->getPaginateByLimit()]);
    //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
    
    public function announces(Announce $anuns)
    {
    return view('ques/anuns')->with(['announces' => $anuns->getPaginateByLimit()]);
    //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
    
    public function favorites(Question $ques,User $user)
    {
    auth()->user()->questions()->attach(2);
    dd(auth()->user()->questions);
    return view('ques/favorites')->with(['favorites' => $favo->get(),'questions' => $ques->get(),'users' => $user->get()]);
    }
}
?>