<?php

use App\Models\comment;
use App\Models\commentModel;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
    // return view('welcome');


    //Fetching all the data from user Table
    
    //  $user = DB::table('users')->get(); //DB Query
    // $user = DB::select('select *from users where id = 3'); //Raw sql Method
    // $user = User::all();  // Eloquent ORM

    //Fetching all the data from comment Table
    // $comment = Db::table('comments')->get();
    //  $comment = DB::select('select *from comments');
    //  $comment = comment::all();
    //   dump($comment);

    // $user = DB::table('users')->get();
    // dump($user);

    // $user_query2 = DB::table('users')->pluck('email');
    // dump($user_query2);
    
    // $user_query3 = DB::table('users')->where('name','Marjorie Von Jr.')->first();
    // dump($user_query3);

    // $user_query4 = DB::table('users')->where('name','Marjorie Von Jr.')->value('email');
    // dump($user_query4);

    // $user_query5 = DB::table('users')->find(2);
    // dump($user_query5);

    // $comment_query1 = DB::table('comments')->select('content as comment_content')->get();
    // dump($comment_query1);

    // $comment_query2 = DB::table('comments')->select('user_id')->distinct()->get();
    // dump($comment_query2);

    /*Aggregate Functions 
    ===================== */

    // $comment_query3 = DB::table('comments')->count();
    // dump($comment_query3);

    // $comment_query4 = DB::table('comments')->max('user_id');
    // dump($comment_query4);
    
    // $comment_query5 = DB::table('comments')->sum('user_id');
    // dump($comment_query5);

    // $comment_query6 = DB::table('comments')->where('user_id','10')->exists();
    // dump($comment_query6);

    // $comment_query7 = DB::table('comments')->where('content','content')->doesntExist();
    // dump($comment_query7);

    /* where clause using query builder*/
    // $room_query1 = DB::table('rooms')->get();
    // dump($room_query1);

    // $room_query2 = DB::table('rooms')->where('price','<' ,'200')->get();
    // dump($room_query2);

    // $room_query3 = DB::table('rooms')->where([
    //         ['room_size','1'],
    //         ['price','<','500']
    // ])->get(); 
    // dump($room_query3);

    $room_query4 = DB::table('rooms')->where('price','<','500')
    ->orWhere(function($query) {
        $query->where('room_size','>','1')
        ->where('room_size','<','4');
    })->get();
    dump($room_query4);





});
