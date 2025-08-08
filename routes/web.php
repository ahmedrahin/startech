<?php

/*
|--------------------------------------------------------------------------
| Frontend Web Controllers
|--------------------------------------------------------------------------
*/
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\UserDashboardController;
use App\Models\Order;
use App\Http\Controllers\Apps\OrderController;
use App\Http\Controllers\Payment\SSLCommerzController;

/*
|--------------------------------------------------------------------------
| Frontend Web Routes
|--------------------------------------------------------------------------
*/

// home and static pages
Route::get('/', [PagesController::class, 'home'])->name('homepage');
Route::get('/about-us', [PagesController::class, 'about'])->name('about');
Route::get('/contact-us', [PagesController::class, 'contact'])->name('contact');
Route::post('/send-message', [PagesController::class, 'resetToFresh'])->name('message');

Route::get('terms-condition', function(){
    return view('frontend.pages.static.terms');
})->name('terms');
Route::get('privacy-policy', function(){
    return view('frontend.pages.static.privacy-policy');
})->name('privacy.policy');
Route::get('refund-policy', function(){
    return view('frontend.pages.static.refund');
})->name('refund.policy');

// shop page
Route::controller(ShopController::class)->group(function () {
    Route::get('/category/{slug}', 'categoryProduct')->name('category.product');
    Route::get('/wishlist', 'wishlist')->name('wishlist');
});

// product-details page
Route::get('/product/{slug}', [ShopController::class, 'productDetails'])->name('product-details');

// checkout page
Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::get('/success-order/{order_id}', function ($order_id) {
    $order = Order::where('order_id', $order_id)->firstOrFail();
    return view('frontend.pages.order.success', compact('order'));
})->name('success.order');

Route::get('/payment/redirect', [SSLCommerzController::class, 'redirect'])->name('sslcommerz.redirect');
Route::post('/success', [SSLCommerzController::class, 'success'])->name('sslcommerz.success');
Route::post('/fail', [SSLCommerzController::class, 'fail'])->name('sslcommerz.fail');
Route::post('/cancel', [SSLCommerzController::class, 'cancel'])->name('sslcommerz.cancel');

// order invoice download pdf
Route::get('/order-invoice/{order_id}', [OrderController::class, 'downloadInvoice'])->name('order.invoice.pdf');

Route::get('/cart', function(){
    return view('frontend.pages.order.cart');
})->name('cart')->middleware('check.cart');

// user dashboard page
Route::get('/dashboard', [UserDashboardController::class, 'dashboard'])->name('user.dashboard')->middleware('auth');
Route::get('/invoice/{order_id}', [UserDashboardController::class, 'invoice'])->name('order.invoice')->middleware('auth');

Route::fallback(function () {
    return view('pages.system.fallback');
});

require __DIR__ . '/auth.php';
