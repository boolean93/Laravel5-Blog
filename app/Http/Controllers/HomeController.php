<?php namespace App\Http\Controllers;
use App\Article;
class HomeController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	$router->get('/', 'HomeController@index');
	|
	*/

	/**
	 * @Get("/", as="home")
	 */
	public function index()
	{
        $articles = Article::get();
		return view('index', compact('articles'));
	}

    public function detail($nickname){
        Article::whereArticleId($nickname)->increment('article_click');
        $article = Article::whereArticleId($nickname)->first();
        return view('detail', compact('article'));
    }
}
