<?php

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

/*Route::get('/', function () {
    return view('welcome');
});   */
//Route::get('/','HomeController@displayWelcome');
Route::get('/', function () {
    //return view('auth.login');
    if (auth()->guest()) {
        return redirect('/');
    }
    else{
        return redirect('/adminUser');
    }
});

Route::get('/', 'SharingController@displayWelcome');
Route::post('/welcomeSearch', 'SharingController@searchWelcome');
Route::get('/welcomeSearch', 'SharingController@searchWelcome');

//Route::get('/admin', 'SharingController@displayWelcomeAdmin');
Route::get('/adminUser', 'SharingController@displayWelcomeUser');
Route::post('/adminUserSearch', 'SharingController@search');
Route::get('/adminUserSearch', 'SharingController@search');


Route::get('logout','LogoutController@displayLogout');


//before login answer list

Route::get('answersW','AnswerController@listAnswerW')->name('answersW');
Route::get('answersW/addForm','AnswerWController@addAnswerWForm');



//answers  list
Route::get('answers','AnswerController@listAnswer')->name('answers');
Route::get('answers/addForm','AnswerController@addAnswerForm');
Route::get('answers/editForm','AnswerController@editAnswerForm');
Route::get('answers/edit','AnswerController@editAnswer');
Route::get('answers/delete','AnswerController@deleteAnswer');
Route::post('answers/save','AnswerController@saveAnswer');


//question, answer, reply  search when  login  , answer blade
Route::post('answers/search','AnswerController@listAnswerSearch')->name('answers/search');
Route::get('answers/search','AnswerController@listAnswerSearch')->name('answers/search');




//question, answer, reply  search when not  login  , answerWelcome blade
Route::post('answersW/search','AnswerController@listAnswerWSearch')->name('answersW/search');
Route::get('answersW/search','AnswerController@listAnswerWSearch')->name('answersW/search');




//particular category  search for not login  , welcome blade

Route::post('/pCategoryWSearch', 'SharingController@displayParticularCategoryWSearch');
Route::get('/pCategoryWSearch', 'SharingController@displayParticularCategoryWSearch');



//category welcome blade or befor login


Route::get('/pCategoryW', 'SharingController@displayParticularCategoryW');
Route::get('categoriesW','CategoryController@listCategoryW');


//    category welcome blade or befor login with search

Route::post('categoriesW/search', 'CategoryController@listCategoryWSearch');
Route::get('categoriesW/search', 'CategoryController@listCategoryWSearch');


//users
Route::group(['middleware' => 'customAuth'], function(){

     // admin details
    //Route::get('logout','LogoutController@displayLogout');

    Route::get('users','UserController@listUser');
    Route::get('users/add','UserController@addUser');
    Route::get('users/edit','UserController@editUser');
    Route::get('users/delete','UserController@deleteUser');
    Route::post('users/save','UserController@saveUser');


//    userlist with search

    Route::post('users/search', 'UserController@listUserSearch');
    Route::get('users/search', 'UserController@listUserSearch');



//    userdetails    list with search

    Route::post('userDetails/search', 'UserController@listUserDetailsSearch');
    Route::get('userDetails/search', 'UserController@listUserDetailsSearch');




    Route::get('userDetails','UserController@listUserDetails');
    Route::get('userDetails/add','UserController@addUserDetails');
    Route::get('userDetails/edit','UserController@editUserDetails');
    Route::get('userDetails/delete','UserController@deleteUserDetails');
    Route::post('userDetails/save','UserController@saveUserDetails');








// particular   category with search

    Route::post('/pCategorySearch', 'SharingController@displayParticularCategorySearch');
    Route::get('/pCategorySearch', 'SharingController@displayParticularCategorySearch');


//    category with search

    Route::post('categories/search', 'CategoryController@listCategorySearch');
    Route::get('categories/search', 'CategoryController@listCategorySearch');

//category  for welcome userAdmin


    Route::get('categories/add','CategoryController@addCategory');
    Route::get('categories/edit','CategoryController@editCategory');
    Route::get('categories/delete','CategoryController@deleteCategory');
    Route::post('categories/save','CategoryController@saveCategory');








});


Route::get('/pCategory', 'SharingController@displayParticularCategory');
Route::get('categories','CategoryController@listCategory');

//questions

Route::get('questions','QuestionController@listQuestion');
Route::get('questions/add','QuestionController@addQuestion');
Route::get('questions/edit','QuestionController@editQuestion');
Route::get('questions/delete','QuestionController@deleteQuestion');
Route::post('questions/save','QuestionController@saveQuestion');



//Reply

Route::get('replies/addForm','ReplyController@addFormReply');
Route::get('replies/editForm','ReplyController@editFormReply');
Route::get('replies/edit','ReplyController@editReply');
Route::get('replies/delete','ReplyController@deleteReply');
Route::post('replies/save/','ReplyController@saveReply');


Route::get('particularProfile','ProfileController@displayParticularProfile');




// profiles


Route::get('personalInfoDisplay','ProfileController@displayPersonalInfo');
Route::post('personalInfoSave','ProfileController@savePersonalInfo');
Route::get('personalInfoEdit','ProfileController@editPersonalInfo');

Route::get('personalInfoDetailsDisplay','ProfileController@displayPersonalInfoDetails');
Route::post('personalInfoDetailsSave','ProfileController@savePersonalInfoDetails');
Route::get('personalInfoDetailsEdit','ProfileController@editPersonalInfoDetails');



//for not login profile view particular profile

Route::get('particularProfileW','ProfileController@displayParticularProfileW');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
