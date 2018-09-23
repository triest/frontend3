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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/girls', 'GirlsController@index')->name('main');
Route::get('/girls/{id}', 'GirlsController@showGirl')->name('showGirl');

Route::get('/test','GirlsController@test');

Route::get('/test2','GirlsController@test2');

Route::post('/test2','GirlsController@test2');

//пользователь соглашение
Route::get('/Terms','GirlsController@showTerms')->name('showTerms');
Route::get('/createGirlPage','GirlsController@createGirl')->name('createGirlPage');
Route::post('/girls/create','GirlsController@Store')->name('girlsCreate');



Route::post('/girls/payer','GirlsController@payeer')->name('payeer');
Route::post('/success','GirlsController@payeerSucces')->name('payeer');
Route::post('/obr','GirlsController@obr')->name('payeer');

//яндекс денги
//Route::post('/recivedYandexMoney','GirlsController@reciverYandex')->name('recivedYandex');
//Route::post('/yandex','GirlsController@reciverYandexGet')->name('recivedYandexGet');
/*Route::get('/yandex',function (){return response('hello Word',200)
    ->header('Content-Type','text/plain');
});*/
/*
Route::post('/yandex',function (){return response('hello Word',200)
    ->header('Content-Type','text/plain');
});*/

Route::post('/yandex','GirlsController@reciverYandex')->name('yandexPost');

//форма таетирования
Route::get('/testpost',function (){
    return view('testPost');
});



//аутентииакация
Route::get('auth/login', 'Auth\AuthController@getLogin')->name('autorization');
Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', 'Auth\AuthController@logout')->name('logout')->middleware('auth');;
Route::get('/user/anketa', 'GirlsController@girlsShowAuchAnket')->name('girlsShowAuchAnket');

// Маршруты регистрации...
Route::get('auth/register', 'Auth\RegisterController@getRegister')->name('registration');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Auth::routes();

//тут для работы с анкетой за деньги
Route::get('/firtPlase/{id}', 'GirlsController@toFirstPlace')->name('TofirstPlase');
Route::post('/toTop/', 'GirlsController@toTop')->name('ToTop');

Route::get('/testmail','GirlsController@testMail');




// для администратора
Route::get('/adminPanel', 'GirlsController@getAdminPanel')->name('adminPanel');
Route::post('/SetPriceToFirstPlase/', 'GirlsController@SetPriceToFirstPlase')->name('SetToFirstPlase');
Route::post('/SetPriceToTop/', 'GirlsController@SetPriceToTop')->name('SetToTopPrice');


//почта
Route::get('/testmail', 'GirlsController@testemail');


//Route::get('/confirnEmail','GirlsController@confirm')->name('confirm-email');

Route::get('/confirnEmail','GirlsController@MailtoConfurn')->name('sendConfurmEmail');

Route::get('/user/confernd/{token}','GirlsController@conferndEmail')->name('conferndEmail');

//смс
Route::get('/sms', 'GirlsController@sendmail');

//ввод номера телефона
Route::get('/inputphone',function (){return view('inputphone');})->name('inputMobile');

Route::post('/inputPhone', 'GirlsController@inputPhone')->name('inputMobilePhone');
Route::post('/inputCode', 'GirlsController@inputActiveCode')->name('inputActiveCode');

//тут путь для правил
Route::get('/rules',function (){return view('rules');})->name('rules');
Route::post('/rules2','GirlsController@akceptRules')->name('aceptRules');

//ввод телефона без ререхода
Route::get('/inputPhone2', 'GirlsController@inputPhone2')->name('inputMobilePhone2');

Route::get('/user/anketa/edit/', 'GirlsController@girlsEditAuchAnket')->name('girlsEditAuchAnket');
Route::post('/user/anketa/edit/', 'GirlsController@edit')->name('girlsEdit');

//бот
Route::get('/bot', 'GirlsController@bot')->name('bot');

//галерея
Route::get('/galeray','GirlsController@galarayView')->name('galeray');
Route::get('/image/delete/{imege}','GirlsController@deleteimage')->name('deleteImage');
Route::post('/image/upload','GirlsController@uploadimage')->name('uploadImage');

