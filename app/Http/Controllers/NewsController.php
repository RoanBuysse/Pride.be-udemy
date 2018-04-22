<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\News;
use App\NewsCategory;
use App\Photo;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Carbon\Carbon;
class NewsController extends Controller
{
    public function __construct()
    {
      $this->middleware('isWriter',['only' => ['create','edit']]);
    }
    public function index()
    {
        $news = News::latest()->get();
        return view('news.index' , compact('news'));
        // dd($news);
        // dd($newstranslation);
    }
    public function create()
    { 
    if(LaravelLocalization::getCurrentLocale()=='nl')
    { $news_categories  = NewsCategory::pluck('nameNl','id');
     return view('news.create', compact('news_categories'));
    }
    if(LaravelLocalization::getCurrentLocale()=='fr')
    { $news_categories  = NewsCategory::pluck('nameFr','id');
     return view('news.create', compact('news_categories'));
    }
    if(LaravelLocalization::getCurrentLocale()=='en')
    { $news_categories  = NewsCategory::pluck('nameEn','id');
     return view('news.create', compact('news_categories'));
    }
    
    }
    
    public function store(Request $request)
    {
       $input = $request->all();

       if ($file = $request->file('photo_id')) {
        $name = $file->getClientOriginalName();
        $file->move('images/news', $name);
        $photo = Photo::create(['photo' => $name, 'title' => $name]);
        $input['photo_id'] = $photo->id;
    }



       $news = News::create($input);
       
       if ($categoryIds = $request->news_category_id){
           $news->category()->sync($categoryIds);
       }
       return redirect('/news');
    }
    public function show($id)
    {
        $news = News::findOrFail($id);
        // var_dump($news);
        return view('news.show', compact('news'));
    }
    public function edit($id)
    {
        $news = News::findOrFail($id);
        if(LaravelLocalization::getCurrentLocale()=='nl')
        { $news_categories  = NewsCategory::pluck('nameNl','id');
         
        }
        if(LaravelLocalization::getCurrentLocale()=='fr')
        { $news_categories  = NewsCategory::pluck('nameFr','id');
         
        }
        if(LaravelLocalization::getCurrentLocale()=='en')
        { $news_categories  = NewsCategory::pluck('nameEn','id');
       
        }
        
        
        return view('news.edit', compact('news', 'news_categories'));
    }
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $news = News::findOrFail($id);

        if ($file = $request->file('photo_id')) {

            if($news->photo){
                unlink('images/news/'.$news->photo->photo);
                $news->photo()->delete('photo');
            }
            $name = $file->getClientOriginalName();
            $file->move('images/news', $name);
            $photo = Photo::create(['photo' => $name, 'title' => $name]);
            $input['photo_id'] = $photo->id;
        }

        $news->update($input);
        if ($categoryIds = $request->news_category_id){
            $news->category()->sync($categoryIds);
        }
        return redirect('/news');
       
        
    }
    public function destroy(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $news->delete($request->all());
        $categoryIds = $request->news_category_id;
        $news->category()->detach($categoryIds);
        if($news->photo){
            unlink('images/news/'.$news->photo->photo);
            $news->photo()->delete('photo');
        }
        return back();
    }
}