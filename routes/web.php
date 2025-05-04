<?php

use App\Http\Middleware\TestMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return "<h1>hello</h1>";
});

Route::get('/test/{id}', function ($id) {
    return "<h1>hello " . $id . "</h1>";
})->where('id', "[0-9]+");

Route::get('/test/show', function () {
    return "<h1>asalamo alaykom</h1>";
});


Route::prefix('products')->group(function () {
    Route::get('/', function () {
        return "products";
    });

    Route::get('/create', function () {
        return "<label>nom : </label><input type='text' />";
    });

    Route::get('/{id}', function ($id) {
        return "product" . $id;
    });
});


// Route::resource('products', ProductController::class);

// Route::get("/proudcts", [ProductController::class, "index"])->name("products.index");
// Route::get("/proudcts/{id}/{name}/{work}/{qnte}", [ProductController::class, "show"])
//     ->where('id', '[0-9]+')
//     ->name("products.show");


// public function update(Request $request, $id, $qte, $nom, $work){

// };

// Route::middleware(TestMiddleware::class)->group(function(){
//     Route::get("/products");
// });
