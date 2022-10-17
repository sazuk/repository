<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questions;

class QuestionsController extends Controller
{
    public function index(Questions $ques)//インポートしたPostをインスタンス化して$postとして使用。
    {
    return $ques->get();//$postの中身を戻り値にする。
    }
}
