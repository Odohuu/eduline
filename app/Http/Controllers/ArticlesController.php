<?php namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class ArticlesController extends Controller {

    /**
     *Create a new articles controller instance
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * @return \Illuminate\View\View
     */
    public function index()
	{
		$articles = Category::findOrFail(1)->articles()->latest('created_at')->published()->get();

        return view('articles.index', compact('articles'));
	}

    public function all()
    {
        $articles = Article::latest('created_at')->paginate(10);


         return view('articles.all', compact('articles'));
    }

    /**
     * @param Article $article
     * @return \Illuminate\View\View
     * @internal param $id
     */
    public function show(Article $article)
    {
//        $caregory = Category::
        return view('articles.show', compact('article'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {

        $categories = Category::lists('name', 'id');
        
        return view('articles.create', compact('categories'));
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function store(ArticleRequest $request)
    {
        $this->createArticle($request);


        flash()->success('Шинээр нийтлэл үүсгэгдлээ');

        return redirect('allArticles');
    }

    /**
     * @param Article $article
     * @return \Illuminate\View\View
     */
    public function edit(Article $article)
    {
        $categories = Category::lists('name', 'id');

        return view('articles.edit', compact('article', 'categories' ));
    }

    public function update(ArticleRequest $request, Article $article)
    {
        $article->update($request->all());

        return redirect('allArticles');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect('allArticles');
    }

    /**
     * Save a new articles
     *
     * @param ArticleRequest $request
     */
    private function createArticle(ArticleRequest $request)
    {
        $article = Auth::user()->articles()->create($request->all());

        return $article;
    }

}
