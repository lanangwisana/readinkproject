<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/registrasi', function () {
//     return view('registrasi');
// });

// Route author start
// Route::get('/dashboard-author', function () {
//     return view('Author.Dashboard');
// });

// Route::get('/halamanbaca-author', function () {
//     return view('Author.halamanBaca');
// });

// Route::get('/halamanbaca2-author', function () {
//     return view('Author.halamanBaca2');
// });

// Route::get('/mulaibaca-author', function () {
//     return view('Author.mulaiBaca');
// });


// Route::get('/bookmark-author', function () {
//     return view('Author.Bookmark');
// });

// Route::get('/favorit-author', function () {
//     return view('Author.Favorit');
// });

// Route::get('/history-author', function () {
//     return view('Author.History');
// });

// Route::get('/tulis-author', function () {
//     return view('Author.Tulis');
// });

// Route::get('/addcerita-author', function () {
//     return view('Author.Addcerita');
// });

// Route::get('/addcerita-author', [AuthorController::class, 'index'] );

// Route::get('/tuliscerita-author', function () {
//     return view('Author.Tuliscerita');
// });

// Route::get('/editcerita-author', function () {
//     return view('Author.Editcerita');
// });
// Route author end



// Route pembaca start
// Route::get('/dashboard-pembaca', function () {
//     return view('Pembaca.Dashboard');
// });

// Route::get('/mulaibaca-pembaca', function () {
//     return view('Pembaca.mulaiBaca');
// });

// Route::get('/halamanbaca-pembaca', function () {
//     return view('Pembaca.halamanBaca');
// });

// Route::get('/halamanbaca2-pembaca', function () {
//     return view('Pembaca.halamanBaca2');
// });

// Route::get('/mulaibaca-pembaca', function () {
//     return view('Pembaca.mulaiBaca');
// });

// Route::get('/bookmark-pembaca', function () {
//     return view('Pembaca.Bookmark');
// });

// Route::get('/favorit-pembaca', function () {
//     return view('Pembaca.Favorit');
// });

// Route::get('/histori-pembaca', function () {
//     return view('Pembaca.Histori');
// });

// Route::get('/setting-pembaca', function () {
//     return view('Pembaca.setting');
// });
// Route pembaca end

//Route Author

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard-author', function () {
        return view('Author.Dashboard');
    })->name('dashboard');
    Route::get('/halamanbaca-author', function () {
        return view('Author.halamanBaca');
    })->name('halamanBaca');
    Route::get('/halamanbaca2-author', function () {
        return view('Author.halamanBaca2');
    })->name('halamanBaca2');
    Route::get('/mulaibaca-author', function () {
        return view('Author.mulaiBaca');
    })->name('mulaiBaca');
    Route::get('/bookmark-author', function () {
        return view('Author.Bookmark');
    })->name('Bookmark');
    Route::get('/favorit-author', function () {
        return view('Author.Favorit');
    })->name('Favorit');
    Route::get('/history-author', function () {
        return view('Author.History');
    })->name('History');
});

// Route Pembaca
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard-pembaca', function () {
        return view('Pembaca.Dashboard');
    })->name('dashboard');
    Route::get('/mulaibaca-pembaca', function () {
        return view('Pembaca.mulaiBaca');
    })->name('mulaiBaca');
    Route::get('/halamanbaca-pembaca', function () {
        return view('Pembaca.halamanBaca');
    })->name('halamanBaca');
    Route::get('/halamanbaca2-pembaca', function () {
        return view('Pembaca.halamanBaca2');
    })->name('halamanBaca2');
    Route::get('/mulaibaca-pembaca', function () {
        return view('Pembaca.mulaiBaca');
    })->name('mulaiBaca');
    Route::get('/bookmark-pembaca', function () {
        return view('Pembaca.Bookmark');
    })->name('Bookmark');
    Route::get('/favorit-pembaca', function () {
        return view('Pembaca.Favorit');
    })->name('Favorit');
    Route::get('/histori-pembaca', function () {
        return view('Pembaca.Histori');
    })->name('Histori');
});
