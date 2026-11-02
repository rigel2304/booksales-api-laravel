use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;

Route::get('/books', [BookController::class, 'index']);
Route::get('/genres', [GenreController::class, 'index']);       
Route::post('/genres', [GenreController::class, 'store']);
Route::get('/authors', [AuthorController::class, 'index']);     
Route::post('/authors', [AuthorController::class, 'store']);
Route::apiResource('/genres', GenreController::class);
Route::apiResource('/authors', AuthorController::class);
Route::get('/genres', [GenreController::class, 'index']);
Route::get('/genres/{id}', [GenreController::class, 'show']);
Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/authors/{id}', [AuthorController::class, 'show']);
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/books', [BookController::class, 'index']);
    Route::get('/authors', [AuthorController::class, 'index']);
    Route::get('/genres', [GenreController::class, 'index']);
    Route::delete('/books/{id}', [BookController::class, 'destroy']);
    Route::delete('/authors/{id}', [AuthorController::class, 'destroy']);
    Route::delete('/genres/{id}', [GenreController::class, 'destroy']);
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/books/{id}', [BookController::class, 'show']);
    Route::get('/authors/{id}', [AuthorController::class, 'show']);
    Route::get('/genres/{id}', [GenreController::class, 'show']);
    Route::post('/books', [BookController::class, 'store']);
    Route::post('/authors', [AuthorController::class, 'store']);
    Route::post('/genres', [GenreController::class, 'store']);
    Route::put('/books/{id}', [BookController::class, 'update']);
    Route::put('/authors/{id}', [AuthorController::class, 'update']);
    Route::put('/genres/{id}', [GenreController::class, 'update']);
});