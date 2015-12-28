<?php namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Country;
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
//        $caregory = Category:: {!! \GrahamCampbell\Markdown\Facades\Markdown::convertToHtml( $country->name ) !!}
        $zar_news = Category::findOrFail(1)->articles()->latest('created_at')->limit('3')->get();
		$busad_news = Category::findOrFail(12)->articles()->latest('created_at')->limit('3')->get();
        
        return view('articles.show', compact('article','zar_news','busad_news'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $countries = Country::lists('name', 'id');
        $categories = Category::lists('name', 'id');
        
        return view('articles.create', compact('categories','countries'));
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function store(ArticleRequest $request)
    {
        $article = $this->createArticle($request);
        
        $article->countries()->attach($request->input('country_list'));

        flash()->success('Шинээр нийтлэл үүсгэгдлээ');

        return redirect('allArticles');
    }

    /**
     * @param Article $article
     * @return \Illuminate\View\View
     */
    public function edit(Article $article)
    {
//        $tags = Tag::lists('name', 'id');
        $countries = Country::lists('name', 'id');
        $categories = Category::lists('name', 'id');

        return view('articles.edit', compact('article', 'categories','countries'));
    }

    public function update(ArticleRequest $request, Article $article)
    {
       //
        $article->update($request->all());
        $article->countries()->attach($request->input('country_list'));
//        $this->SyncTags($articles, $request->input('tag_list'));

        return redirect('allArticles');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        //$article->tags()->detach();

        return redirect('allArticles');
    }

    /**
     * Sync up the last of tags in the database
     *
     * @param Article $article
     * @param array $tags
     */
//    private function SyncCategories(Article $article, array $category)
//    {
//        $article->category()->sync($category);
//    }

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
