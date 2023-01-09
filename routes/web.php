<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CompanyCommunicationsController;
use App\Http\Controllers\SendDelegateController;
use App\Http\Controllers\UserSettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\FAQsController;
use App\ModelsExtended\User;
use App\Http\Controllers\InquiresController;
use App\Http\Controllers\PartnersController;
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
    return redirect('/login');
})->name('welcome');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');
Route::post('register-step-one', [RegisteredUserController::class, 'registerStepOne'])->name('registerStepOne');
Route::get('create-account-terms', [RegisteredUserController::class, 'accountTerms'])->name('accountTerms');
Route::get('account-wating-to-approval', [RegisteredUserController::class, 'accountWatingToApproval'])->name('accountWatingToApproval');
Route::get('view-profile-password', [RegisteredUserController::class, 'viewProfilePassword'])->name('viewProfilePassword');
Route::get('thank-you', [RegisteredUserController::class, 'clientComplete'])->name('clientComplete');

Route::get('delegate-edit-client', [SendDelegateController::class, 'delegateEditClient'])->name('delegateEditClient');
Route::post('delegate-update-client/{id}', [SendDelegateController::class, 'delegateUpdateClient'])->name('delegateUpdateClient');
Route::get('delete-document/{id}', [SendDelegateController::class, 'deleteDocument'])->name('deleteDocument');

 // todo
Route::get('notification', [SendDelegateController::class, 'createNotification']);
require __DIR__ . '/auth.php';


Route::middleware('auth')->group(function (  ){
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::get('all-clients', [ClientController::class, 'allClient'])->name('allClient');
    Route::post('add-client', [ClientController::class, 'addClient'])->name('addclient');
    Route::get('client-detail/{id}', [ClientController::class, 'clientDetailView'])->name('clientDetailView');
    Route::post('update-client/{id}', [ClientController::class, 'updateClient'])->name('updateclient');
    Route::post('add-important-number/{id}', [ClientController::class, 'addImportantNumber'])->name('addImportantNumber');
    Route::delete('delete-important-number/{id}', [ClientController::class, 'deleteImportantNumber'])->name('deleteImportantNumber');
    Route::delete('delete-important-date/{id}', [ClientController::class, 'deleteImportantDate'])->name('deleteImportantDate');
    Route::delete('delete-related-contact/{id}', [ClientController::class, 'deleteRelatedContact'])->name('deleteRelatedContact');
    Route::post('add-important-date/{id}', [ClientController::class, 'addImportantDate'])->name('addImportantDate');
    Route::post('add-related-contact/{id}', [ClientController::class, 'addRelatedContact'])->name('addRelatedContact');
    Route::post('add-food-and-allergies/{id}', [ClientController::class, 'addFoodAndAllergies'])->name('addFoodAndAllergies');
    Route::post('add-Preferences/{id}', [ClientController::class, 'addPreferences'])->name('addPreferences');
    Route::post('add-notes/{id}', [ClientController::class, 'addNotes'])->name('addNotes');



    Route::get('new-client', [ClientController::class, 'newClient'])->name('newClient');


    // user setting
     Route::get('settings', [UserSettingController::class, 'userSettings'])->name('settings');
     Route::get('/set-notification-permission', [UserSettingController::class, 'userNotificationSetting']);
     Route::post('user-setting-update', [UserSettingController::class, 'updateUserSetting'])->name('usersettingupdate');
     Route::post('change-password', [UserSettingController::class, 'changePassword'])->name('changepassword');


    // todo routes
    Route::get('to-do', [TodoController::class, 'toDO'])->name('toDO');
    Route::post('add-todo', [TodoController::class, 'addTodo'])->name('addtoDo');
    Route::post('change-todo-status/{id}/{status}', [TodoController::class, 'changeTodoStatus'])->name('changeTodoStatus');

    Route::get('clients-upcoming-trips', [HomeController::class, 'clientUpComingTrip'])->name('clientUpComingTrip');
    Route::get('trips', [HomeController::class, 'trips'])->name('trips');

    Route::get('agents', [\App\Http\Controllers\AgentsController::class, '__invoke'])->name('agents');

    // Route::get('partners', [HomeController::class, 'partners'])->name('partners');
    Route::get('approval', [HomeController::class, 'approval'])->name('approval');

    Route::get('clients-calendar', [HomeController::class, 'clientsCalendar'])->name('clientsCalendar');
    Route::get('client-documents', [HomeController::class, 'clientDocuments'])->name('clientDocuments');
    Route::get('client-review', [HomeController::class, 'clientReview'])->name('clientReview');
    Route::get('login-profile', [HomeController::class, 'loginProfile'])->name('loginProfile');
    Route::post('add-delegate-client', [SendDelegateController::class, 'addNewDelegateClient'])->name('addNewDelegateClient');
    
    // FAQs routes 
    Route::get('faqs/view', [FAQsController::class, 'viewAllFaqs'])->name('faqs.view');
});

Route::middleware(['auth', 'admin'])->group(function (  ){
    // Inquires routes     
     Route::get('inquires', [InquiresController::class, 'inquires'])->name('inquires');
     Route::post('inquires/store', [InquiresController::class, 'addInquiry'])->name('addInquiry');
     Route::get('inquires/{id}', [InquiresController::class, 'viewInquireDetail'])->name('viewInquireDetail');
     Route::post('inquires/{type}/{id}', [InquiresController::class, 'approveOrRejectInquiry'])->name('approveOrRejectInquiry');

    Route::get('partners', [PartnersController::class, 'viewPartners'])->name('partners');
    Route::get('partners/{id}', [PartnersController::class, 'viewPartnerDetail'])->name('viewPartnerDetail');

    //Company Communications routes
    Route::get('company-communications', [CompanyCommunicationsController::class, 'index'])->name('companyCommunications');
    Route::post('company-communications/store', [CompanyCommunicationsController::class, 'addCompCommuni'])->name('companyCommunications.store');
    Route::get('company-communications/edit/{id}', [CompanyCommunicationsController::class, 'editCompCommun'])->name('companyCommunications.edit');
    Route::delete('company-communications/delete/{id}', [CompanyCommunicationsController::class, 'deleteCompCommun'])->name('companyCommunications.delete');

    //FAQs routes
    Route::get('faqs', [FAQsController::class, 'index'])->name('faqs');
    Route::post('faqs/store', [FAQsController::class, 'addFaq'])->name('faqs.store');
    Route::get('faqs/edit/{id}', [FAQsController::class, 'editFaq'])->name('faqs.edit');
    Route::delete('faqs/delete/{id}', [FAQsController::class, 'deleteFaq'])->name('faqs.delete');
});

Route::get('partnership-interest-form/{inquiry_id}', [InquiresController::class, 'partnershipInterestForm'])->name('partnershipInterestForm');
Route::post('partnership-interest-form/store/{inquiry_id}', [InquiresController::class, 'partnershipInterestFormStore'])->name('partnershipInterestForm.store');
Route::get('partnership-interest/thank-you', [InquiresController::class, 'thankYouMeg'])->name('thankYouMeg');

Route::get('/test','TestController' );
