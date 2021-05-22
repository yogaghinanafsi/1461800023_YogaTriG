<?php
 namespace App\Http\Controllers;

 use illuminate\Http\Request;
  class ArticleController extends Controller
  {
      public function index(){
        $chanelNames="Biraldino Studio";
        $chanelDescriptions="Chanel <b>berbagi</b> <i>informasi</i> <p>IT</p>";
        $articles=array(
            'Pengenalan dan Instal Composer',
            'Pengenalan dan Instal Composer',
            'Pengenalan dan Instal Composer',
        );
        return view('article',compact('chanelNames','chsnelDescriptions','articles'));
    }
  }