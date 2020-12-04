<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'root']);

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index']);

// Language Translation

Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

/////////////////////////////////////////////////////////////////////////////////////

Route::get('user/notifications', [App\Http\Controllers\NotificationsController::class, 'notifications'])->name('notifications');

Route::get('edit/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');


// SUPPORT

Route::group([
    
    'prefix' => 'support',

    'middleware' => 'auth'

    ], function () {

    //////////tickets

    Route::get('/tickets/read', [App\Http\Controllers\Support\TicketsController::class, 'read'])->name('support.tickets.read');

    Route::get('/tickets/all', [App\Http\Controllers\Support\TicketsController::class, 'all'])->name('support.tickets.all');

    Route::get('/tickets/unread', [App\Http\Controllers\Support\TicketsController::class, 'unread'])->name('support.tickets.unread');

    Route::get('/tickets/replied', [App\Http\Controllers\Support\TicketsController::class, 'replied'])->name('support.tickets.replied');

    Route::get('/tickets/starred', [App\Http\Controllers\Support\TicketsController::class, 'starred'])->name('support.tickets.starred');

    Route::get('/tickets/escalated', [App\Http\Controllers\Support\TicketsController::class, 'escalated'])->name('support.tickets.escalated');

    Route::get('/tickets/closed', [App\Http\Controllers\Support\TicketsController::class, 'closed'])->name('support.tickets.closed');


    /////////// email

    Route::get('/email', [App\Http\Controllers\Support\EmailController::class, 'email'])->name('support.email');

    Route::get('/email/starred', [App\Http\Controllers\Support\EmailController::class, 'starred'])->name('support.email.starred');

    Route::get('/email/important', [App\Http\Controllers\Support\EmailController::class, 'important'])->name('support.email.important');

    Route::get('/email/draft', [App\Http\Controllers\Support\EmailController::class, 'draft'])->name('support.email.draft');

    Route::get('/email/sent', [App\Http\Controllers\Support\EmailController::class, 'sent'])->name('support.email.sent');

    Route::get('/email/archived', [App\Http\Controllers\Support\EmailController::class, 'archived'])->name('support.email.archived');

    Route::get('/email/folder', [App\Http\Controllers\Support\EmailController::class, 'folder'])->name('support.email.folder');

    Route::get('/email/read', [App\Http\Controllers\Support\EmailController::class, 'read'])->name('support.email.read');

    
    /////////// chat

    Route::get('/chat', [App\Http\Controllers\Support\ChatController::class, 'chat'])->name('support.chat');

    
    /////////// helpdesk

    Route::get('/helpdesk', [App\Http\Controllers\Support\HelpdeskController::class, 'helpdesk'])->name('support.helpdesk');


    /////// user inbox

    Route::get('/users/inbox', [App\Http\Controllers\Support\UsersInboxController::class, 'inbox'])->name('support.users.inbox');

    Route::get('/users/inbox/read', [App\Http\Controllers\Support\UsersInboxController::class, 'read'])->name('support.users.inbox.read');


    /////// invitations

    Route::get('/invitations', [App\Http\Controllers\Support\InvitationsController::class, 'invitations'])->name('support.invitations');


    ///// referral

    Route::get('/referral', [App\Http\Controllers\Support\ReferralController::class, 'referral'])->name('support.referral');


    ////// announcements

    Route::get('/announcements/new', [App\Http\Controllers\Support\AnnouncementsController::class, 'new'])->name('support.announcements.new');

    Route::get('/announcements/list', [App\Http\Controllers\Support\AnnouncementsController::class, 'list'])->name('support.announcements.list');


    /////// suspicious activity

    Route::get('/suspicious/activity', [App\Http\Controllers\Support\SuspiciousActivityController::class, 'activity'])->name('support.suspicious.activity');

});


/////////////////////////////////////////////////////////////////////////////////////

// USERS

Route::group([
    
    'prefix' => 'users',

    'middleware' => 'auth'

    ], function () {

    ////////// user list

    Route::get('/user/list', [App\Http\Controllers\Users\UserController::class, 'list'])->name('users.user.list');

    Route::get('/user/details', [App\Http\Controllers\Users\UserController::class, 'details'])->name('users.user.details');
    
    Route::get('/user/kyc/list', [App\Http\Controllers\Users\UserController::class, 'kyc'])->name('users.user.kyc');

    Route::get('/user/kyc/rejected', [App\Http\Controllers\Users\UserController::class, 'rejected'])->name('users.user.kyc.rejected');

    ////////// Cash station

    Route::get('/cash/station/list', [App\Http\Controllers\Users\CashStationController::class, 'list'])->name('users.cash.station.list');

    Route::get('/cash/station/reported', [App\Http\Controllers\Users\CashStationController::class, 'reported'])->name('users.cash.station.reported');

    Route::get('/cash/station/suspended', [App\Http\Controllers\Users\CashStationController::class, 'suspended'])->name('users.cash.station.suspended');

    ////////// Merchant

    Route::get('/merchant/list', [App\Http\Controllers\Users\MerchantController::class, 'list'])->name('users.merchant.list');

    Route::get('/merchant/qrcodes', [App\Http\Controllers\Users\MerchantController::class, 'qrcodes'])->name('users.merchant.qrcodes');

    Route::get('/merchant/subscriptions', [App\Http\Controllers\Users\MerchantController::class, 'subscriptions'])->name('users.merchant.subscriptions');

    Route::get('/merchant/limited', [App\Http\Controllers\Users\MerchantController::class, 'limited'])->name('users.merchant.limited');

    Route::get('/merchant/locked', [App\Http\Controllers\Users\MerchantController::class, 'locked'])->name('users.merchant.locked');

    Route::get('/merchant/terminated', [App\Http\Controllers\Users\MerchantController::class, 'terminated'])->name('users.merchant.terminated');

    //// Wallet    

    Route::get('/wallet/balances', [App\Http\Controllers\Users\WalletController::class, 'balances'])->name('users.wallet.balances');

    Route::get('/wallet/cryptoswab', [App\Http\Controllers\Users\WalletController::class, 'cryptoswab'])->name('users.wallet.cryptoswab');

    Route::get('/wallet/transactions', [App\Http\Controllers\Users\WalletController::class, 'transactions'])->name('users.wallet.transactions');

    // Admin

    Route::get('admin/list', [App\Http\Controllers\Users\AdminController::class, 'admin'])->name('users.admin.list');

    Route::get('privilege/list', [App\Http\Controllers\Users\AdminController::class, 'privilege'])->name('users.admin.privilege');

    // Log

    Route::get('logs', [App\Http\Controllers\Users\LogController::class, 'log'])->name('users.log');

});



/////////////////////////////////////////////////////////////////////////////////////

// Exchanger

Route::group([
    
    'prefix' => 'exchanger',

    'middleware' => 'auth'

    ], function () {

    ////////// pairs

    Route::get('/pairs', [App\Http\Controllers\Exchanger\PairsController::class, 'pairs'])->name('exchanger.pairs');

    ////////// postponed

    Route::get('/postponed/exchange', [App\Http\Controllers\Exchanger\PairsController::class, 'postponed'])->name('exchanger.postponed.exchange');

    ////////// block list

    Route::get('/block/list', [App\Http\Controllers\Exchanger\PairsController::class, 'block'])->name('exchanger.block.list');

    ////////// Currency

    Route::get('/currency/list', [App\Http\Controllers\Exchanger\CurrencyController::class, 'list'])->name('exchanger.currency.list');
    Route::get('/currency/request', [App\Http\Controllers\Exchanger\CurrencyController::class, 'request'])->name('exchanger.currency.request');
    Route::get('/currency/rejected', [App\Http\Controllers\Exchanger\CurrencyController::class, 'rejected'])->name('exchanger.currency.rejected');

    ////////// Emoney

    Route::get('/emoney/list', [App\Http\Controllers\Exchanger\EmoneyController::class, 'all'])->name('exchanger.emoney.list');
    Route::get('/emoney/request', [App\Http\Controllers\Exchanger\EmoneyController::class, 'request'])->name('exchanger.emoney.request');
    Route::get('/emoney/rejected', [App\Http\Controllers\Exchanger\EmoneyController::class, 'rejected'])->name('exchanger.emoney.rejected');

    ////////// Arbitation

    Route::get('/arbitration/list', [App\Http\Controllers\Exchanger\ArbitrationController::class, 'list'])->name('exchanger.arbitration.list');
    Route::get('/arbitration/history', [App\Http\Controllers\Exchanger\ArbitrationController::class, 'history'])->name('exchanger.arbitration.history');
    Route::get('/arbitration/view', [App\Http\Controllers\Exchanger\ArbitrationController::class, 'view'])->name('exchanger.arbitration.view');
    

});


/////////////////////////////////////////////////////////////////////////////////////

// Finance

Route::group([
    
    'prefix' => 'finance',

    'middleware' => 'auth'

    ], function () {

    ////////// incomes

    Route::get('/incomes', [App\Http\Controllers\Finance\IncomeController::class, 'incomes'])->name('finance.incomes');

    ////////// expenses

    Route::get('/expenses', [App\Http\Controllers\Finance\ExpenseController::class, 'expenses'])->name('finance.expenses');
    
    ////////// Segragated

    Route::get('/segragated/history', [App\Http\Controllers\Finance\SegragateController::class, 'history'])->name('finance.segragated.history');

    Route::get('/segragated/list', [App\Http\Controllers\Finance\SegragateController::class, 'list'])->name('finance.segragated.list');

    ////////// user termination

    Route::get('/user/termination/review', [App\Http\Controllers\Finance\UserTerminationController::class, 'review'])->name('finance.termination.review');

    Route::get('/user/termination/completed', [App\Http\Controllers\Finance\UserTerminationController::class, 'completed'])->name('finance.termination.completed');

    ////////// Book keeping

    Route::get('/bookeeping/balanace/sheet', [App\Http\Controllers\Finance\BookeepingController::class, 'sheet'])->name('finance.bookeeping.sheet');

    Route::get('/bookeeping/history', [App\Http\Controllers\Finance\BookeepingController::class, 'history'])->name('finance.bookeeping.history');

    

});



/////////////////////////////////////////////////////////////////////////////////////

// LEGAL

Route::group([
    
    'prefix' => 'legal',

    'middleware' => 'auth'

    ], function () {

    Route::get('/cases', [App\Http\Controllers\Legal\LegalController::class, 'cases'])->name('legal.cases');

    Route::get('/history', [App\Http\Controllers\Legal\LegalController::class, 'history'])->name('legal.history');

});


/////////////////////////////////////////////////////////////////////////////////////

// Marketing

Route::group([
    
    'prefix' => 'marketing',

    'middleware' => 'auth'

    ], function () {

    Route::get('/promotion', [App\Http\Controllers\Marketing\PromotionController::class, 'promotion'])->name('marketing.promotion');

    Route::get('/daily/mail', [App\Http\Controllers\Marketing\DailyMailController::class, 'mail'])->name('marketing.mail');

    Route::get('/medium/articles', [App\Http\Controllers\Marketing\MediumArticlesController::class, 'articles'])->name('marketing.articles');

});

/////////////////////////////////////////////////////////////////////////////////////

// System

Route::group([
    
    'prefix' => 'system',

    'middleware' => 'auth'

    ], function () {

    Route::get('/important/notice', [App\Http\Controllers\System\SystemController::class, 'notice'])->name('system.notice');
    Route::get('/meetings', [App\Http\Controllers\System\SystemController::class, 'meetings'])->name('system.meetings');
    Route::get('/action/plan', [App\Http\Controllers\System\SystemController::class, 'plan'])->name('system.plan');

});