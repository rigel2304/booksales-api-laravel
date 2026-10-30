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
    Route::post('/genres', [GenreController::class, 'store']);
    Route::put('/genres/{id}', [GenreController::class, 'update']);
    Route::delete('/genres/{id}', [GenreController::class, 'destroy']);
    Route::post('/authors', [AuthorController::class, 'store']);
    Route::put('/authors/{id}', [AuthorController::class, 'update']);
    Route::delete('/authors/{id}', [AuthorController::class, 'destroy']);
});