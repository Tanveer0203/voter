<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoterController;
use App\Models\Voter;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

    $todayCount = Voter::whereDate('created_at', Carbon::today())->count();

    // Total count of all voters
    $totalCount = Voter::count();

    return view('dashboard', compact('todayCount', 'totalCount'));

})->name('dashboard');

Route::resource('voters', VoterController::class);

require __DIR__.'/auth.php';
