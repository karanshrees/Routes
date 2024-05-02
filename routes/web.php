<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

/*Route::get('/post/{id}/comment/{commentId}', function (string $id, string $comment) {

    if($id)
     {
       return "<h1>Post ID:" .$id ."</h1> <h2>.$comment. </h2>";
    }
   else{
        return "<h1>No ID Found </h1>";
   }

})->where('id','[0-9]+')->whereAlpha('comment');*/



//Route::get('/post/{id}',function( string $id)
//{
//if($id)
//{
    //return"<h1> Post ID:".$id. " </h1>";
//}


//else{
    //return"<h1>No Id found </h1>";
//}
//})->where('id','[@ 0-9]+');

//Route::get('/poswwwt',function(){
  //  return view('post');
//})->name('post');

//Route::get('/test',function(){
//    return view('about');
//});

//Route::redirect('/about','/test' , 301);

Route::prefix('page')->group(function(){
    Route::get('/about',function(){
        return "<h1> About Page </h1>";
    });
    
    Route::get('/gallery',function(){
        return"<h1>Gallery Pages </h1>";
    });
    
    Route::get('/post/firstpost',function(){
        return"<h1>First Post Pages </h1>";
    });
});

Route::fallback(function(){
    return "<h1>Page not Found.</h1>";
});
