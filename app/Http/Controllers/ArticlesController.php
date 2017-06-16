<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Requests\ArticleRequest;
use App\Category;
use App\Tag;
use App\Article;
use App\Image;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		$articles = Article::search($request->name)->orderBy('id', 'DES')->paginate(9);
		$articles->each(function($articles) {
			$articles->category;
			$articles->user;
		});

		return view('admin.articles.index')->with('articles', $articles);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
		$tags = Tag::orderBy('name', 'ASC')->pluck('name', 'id');
		return view('admin.articles.create')->with('categories', $categories)->with('tags', $tags);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(ArticleRequest $request)
	{

		//Manipulacion de imagenes
		if ($request->file('image')) {

			$file = $request->file('image');
			//$name = 'miblog_' . '.' .      $file->getClientOriginalExtension();
	//        $name = date('Y-m-d-H:i:s')."-". $file->getClientOriginalName();

			$archivo = $file[0];

			//dd($file[0]);
			$name = time()."-". $archivo->getClientOriginalName();

			$path = public_path() . "/images/articles";
			$archivo->move($path, $name);
		}

		$article = new Article($request->all());
		$article->user_id = \Auth::user()->id;
		$article->save();

		$article->tags()->sync($request->tags);


		$image = new Image();
		$image->name = $name;
		$image->article()->associate($article);
        $image->save();

        flash('Se ha registrado ' . $article->title . ' de forma exitosa!')->success()->important();
        return redirect()->route('articles.index');    
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$article = Article::find($id);
        return view('admin.articles.edit')->with('article', $article);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$article = Article::find($id);
        $article->delete();
        flash('El Tag ' . $article->title . ' ha sido eliminado!')->error()->important();
        return redirect()->route('articles.index');
	}
}
