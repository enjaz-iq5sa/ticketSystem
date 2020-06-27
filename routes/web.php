<?php

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



//Users
Auth::routes();
Route::get('/users', 'AuthUsersController@index')->name('users.list');
Route::get('/profile', 'Auth\ProfileController@index')->name('profile');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//home
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

//Invitations
Route::get('/invitation/{id}', 'InvitationController@index')->name('invitation')->where('id',"[0-9]+");
Route::post('/invitation/{id}', 'InvitationController@register')->name('invitation.register')->where('id',"[0-9]+");

//tickets
Route::get('/ticket/add', 'Tickets\SubmitTicketController@index')->name('ticket.add');
Route::post('/ticket/add', 'Tickets\SubmitTicketController@submit')->name('ticket.submit');
Route::get('/tickets/{priority_id}', 'Tickets\HomeTicketsController@ticketsByPriority')->name('ticketsByPriority')->where('priority_id',"[0-9]+");
Route::get('/tickets', 'Tickets\HomeTicketsController@index')->name('tickets');
Route::get('/tickets/modify/{id}', 'Tickets\ModifyTicketController@index')->name('tickets.modify')->where('id',"[0-9]+");
Route::post('/tickets/modify/{id}', 'Tickets\ModifyTicketController@modify')->name('tickets.modify')->where('id',"[0-9]+");
Route::get('/ticket/details/{id}', 'Tickets\TicketDetailsController@index')->name('tickets.details')->where('id',"[0-9]+");


//Comments
Route::post('/comment/submit/{user_id}/{ticket_id}', 'Comments\CommentsController@submit')
    ->name('comment.submit')
    ->where("user_id","[0-9]+")
    ->where("ticket_id","[0-9]+");

