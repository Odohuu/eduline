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
        $this->middleware('auth', ['except' => 'index', 'show']);
    }
    /**
     * @return \Illuminate\View\View
     */
    public function index()
	{
		$articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
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
        //$tags = Tag::lists('name', 'id');
//        , compact('tags')
        $category = Category::lists('name', 'id');

        return view('articles.create', compact('category'));
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function store(ArticleRequest $request)
    {
        $this->createArticle($request);

//        Auth::user()->articles()->create($request->all());

        flash()->success('Шинээр нийтлэл үүсгэгдлээ');

        return redirect('articles');
    }

    /**
     * @param Article $article
     * @return \Illuminate\View\View
     */
    public function edit(Article $article)
    {
//        $tags = Tag::lists('name', 'id');

        return view('articles.edit', compact('article'));
    }

    public function update(ArticleRequest $request, Article $article)
    {
       //
        $article->update($request->all());

//        $this->SyncTags($articles, $request->input('tag_list'));

        return redirect('articles');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        //$article->tags()->detach();

        return redirect('articles');
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
//        dd($request->input('category_list'));
//        $this->articles()->category_id($request->input('category_list'));
//        dd($request->all());

        $article = Auth::user()->articles()->create($request->all());
        //$this->articles()->category_id($request->input('category_id'));
//

        return $article;
    }

}
