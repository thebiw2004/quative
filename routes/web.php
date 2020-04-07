<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GalleryController;


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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/preview', function () {
    return view('preview.preview');
});
Route::get('/previewmock', function () {
    return view('preview.previewmock');
});
Route::get('/previewmock/bag', function () {
    return view('preview.mockup.bag');
});

// Route::get('/select', function () {
//     return view('select');
// });
// Route::get('/showmatch', function () {
//     return view('showmatch');
// });
// Route::get('/vote', function () {
//     return view('vote.vote');
// });
// Route::get('/votedetail', function () {
//     return view('vote.votedetail');
// });
// Route::get('/payment', function () {
//     return view('payment');
// });
// pang edit
 Route::get('/term&condition', function () {
     return view('auth.term');
 });





// Route::get('/showjob', function () {
//     return view('showjob');
// });

Auth::routes();



Route::get('/', 'HomeController@index')->name('home');

Route::get('/search', [
    'as' => 'search.create',
    'uses' => 'HomeController@createSearchStep1']);

Route::post('/search/create/store1', [
    'as' => 'search.create.store',
    'uses' => 'HomeController@storeSearchStep1']);

Route::delete('/search/show/delete/{token}',
    'HomeController@deleteStoreStep1');

// Route::get('/search/step2/{token}', [
//     'as' => 'search.create.step2',
//     'uses' => 'HomeController@createSearchStep2']);

Route::get('/search/ref/{token}', [
    'as' => 'search.ref',
    'uses' => 'HomeController@createSearchRef']);

Route::post('/search/store/ref', [
        'as' => 'search.ref.store',
        'uses' => 'HomeController@storeSearchRef']);
        
Route::get('/search/show/{token}', [
    'as' => 'search.show',
    'uses' => 'HomeController@show']);

//Route::post('/search/create/store2/{token}', [
  //  'as' => 'search.create.store',
    //'uses' => 'HomeController@storeSearchStep2']);
Route::post('/search/create/store2',
    'HomeController@storeSearchStep2');


Route::get('search/showfinal/{token}', [
    'as' => 'search.showfinal',
    'uses' => 'HomeController@searchstep3']);



Route::post('/search/create/store3',
    'HomeController@storeSearchStep3');

Route::get('/matched/{token}', 
'HomeController@matched')->name('matched');

// --------show finish search-------

Route::get('/showjob/{token}', [
    'as' => 'job.show',
    'uses' => 'HomeController@showjob']);

Route::post('/showjob/store',
    'HomeController@storeShowJob');

    Route::post('/showjob/store2',
    'HomeController@storeShowJob2');

Route::get('/reviewjob/{token}', [
    'as' => 'job.review',
    'uses' => 'HomeController@reviewJob']);

Route::post('/reviewjob/store',
    'HomeController@storeReviewJob');

    Route::get('/showpayment/{token}', [
        'as' => 'job.showpayment',
        'uses' => 'HomeController@showpayment']);

Route::get('/payment/{token}', [
        'as' => 'job.payment',
        'uses' => 'HomeController@paymentJob']);
Route::post('/payment/store',
        'HomeController@storePaymentJob');

Route::get('/file/download/{fileimgname}',
            'Homecontroller@getDownload')->name('downloadfile');



Route::get('/alljob', [
        'as' => 'show.alljob',
        'uses' => 'HomeController@alljob']);




    // -------------------------- Designer ---------------------------
// Route::get('/designer','DesignerController@create');
Route::get('/designer', [
    'as' => 'designer.designer',
    'uses' => 'DesignerController@create']);
// Route::get('/edit','DesignerController@edit');
Route::post('/designer/store', [
    'as' => 'designer.create.store',
    'uses' => 'DesignerController@store']);

Route::get('/designer/edit', [
    'as' => 'designer.edit',
    'uses' => 'DesignerController@edit']);


Route::get('/designer/billing', [
        'as' => 'designer.billing',
        'uses' => 'DesignerController@billing']);





// Route::get('/designer/edit','DesignerController@edit');


Route::get('/designer/show/{token}', [
    'as' => 'designer.show',
    'uses' => 'DesignerController@show']);

 Route::get('/requestjob', [
    'as' => 'designer.requestjob',
    'uses' => 'DesignerController@requestjob']);

Route::get('/jobdetail/{id}', [
    'as' => 'designer.jobdetail',
    'uses' => 'DesignerController@showjobdetail']);

Route::post('/jobdetail/jobstatus/store',
    'DesignerController@jobStatusStore');

Route::post('/jobdetail/file/store',
    'DesignerController@storeFilesJob');
    
Route::get('/designer/course/{token}',
    'DesignerController@course')->name('designer.course');

Route::get('/designer/includecourse/{id}',
    'DesignerController@includecourse')->name('designer.includecourse');

Route::post('/designer/coursestore',
    'DesignerController@courseStore');

Route::get('/designer/billing/{token}',
    'DesignerController@billing')->name('designer.billing');

    // -------------------------- Gallery ---------------------------

Route::get('gallery', 'GalleryController@gallery');
Route::get('/gallery/search', 'GalleryController@search');

Route::get('/gallery/{id}', 'GalleryController@galleryDetail')->name('galleryDetail');

Route::group(['middlewere' => 'auth'], function () {
    Route::post('vote/{job}/add','GalleryController@add')->name('job.vote');
    Route::post('comment/{job}','GalleryController@store')->name('comment.store');
});

Route::get('/favouritelist', 'GalleryController@favList');

// Route::post('/gallery/like' , 'GalleryController@likepost')->name('like');
// Route::post('ajaxRequest', 'GalleryController@ajaxRequest')->name('ajaxRequest');

// Route::get('/jobdetail/file/download/{id}',
//     'DesignerController@downloadFile')->name('downloadfile');

// Route::get('/login/designer', 'RegisterDesignerController@show' );

// Route::get('login/designer/{id}',function(){
//     $users = App\RegisterDesigner::select('name' ,'email')->get();
//     return view('auth.registerDesigner',compact('users'));
// });


Route::group(['middleware' => ['auth','admin']], function () {
    // Route::get('/dashboard', function (){
    //     return view('admin.dashboard');
    // });
    // Route::get('/dashboard/userinfo', function (){
    //     return view('admin.userinfo');
    // });
//     Route::get('/dashboard/totaljob', function (){
//        return view('admin.totaljob');
//    });
   Route::get('/dashboard/totalprice', function (){
       return view('admin.totalprice');
   });
    Route::get('/dashboard', 'AdminController@index' )->name('admin');
    Route::get('/dashboard/userinfo', 'AdminController@userinfo' );
    Route::get('/dashboard/totaljob', 'AdminController@jobs' );
    Route::get('/admin/payments', 'AdminController@payments' );
    Route::get('/admin/payments/{id}', 'AdminController@paymentsdetail' )->name('payments.detail');
    Route::post('/admin/payments/store', 'AdminController@storeUpdatePayment' );
    Route::post('/admin/paymentsError/store', 'AdminController@storeErrorPayment' );


});
Route::get('/message', 'MessageController@message');
Route::get('/message/{id}', 'MessageController@getMessage')->name('message');
Route::post('/message', 'MessageController@sendMessage');

Route::get('/jobmessage/{token}', 'MessageController@jobMessage')->name('job.Messages');
Route::get('/jobmessage/{token}/{id}', 'MessageController@jobGetMessage')->name('jobMessage');
Route::post('/jobmessage', 'MessageController@jobSendMessage');

Route::get('/markAsRead',function() {
    auth()->user()->unreadNotifications->markAsRead();
});
/*


// Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
// Route::post('admin','Admin\LoginController@login');
// Route::post('admin-password/email','Admin\ForgotPasswordController@sentResetLinkEmail')->name('admin.password.email');
// Route::get('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
// Route::post('admin-password/reset','Admin\PasswordController@reset');
// Route::get('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
