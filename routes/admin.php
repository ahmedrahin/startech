<?php

/*
|--------------------------------------------------------------------------
| Admin Web Controllers
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\Apps\PermissionManagementController;
use App\Http\Controllers\Apps\RoleManagementController;
use App\Http\Controllers\Apps\UserManagementController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserManagement\UserController;
use App\Http\Controllers\UserManagement\RoleControllerr;
use App\Http\Controllers\Apps\BrandController;
use App\Http\Controllers\Apps\CategoryController;
use App\Http\Controllers\Apps\SubcategoryController;
use App\Http\Controllers\Apps\SubsubcategoryController;
use App\Http\Controllers\Apps\ProductController;
use App\Http\Controllers\Apps\VariantController;
use App\Http\Controllers\Apps\ShippingController;
use App\Http\Controllers\Apps\ProductEditController;
use App\Http\Controllers\Apps\OrderController;
use App\Http\Controllers\Apps\SettingController;
use App\Http\Controllers\Apps\AdminManagementController;
use App\Http\Controllers\Apps\CouponController;
use App\Http\Controllers\Apps\ReviewController;
use App\Http\Controllers\Apps\SliderController;
use App\Http\Controllers\Apps\ContactMessageController;
use App\Http\Controllers\Apps\SubscriptionController;

/*
|--------------------------------------------------------------------------
| Admin Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/c-clean', function (){
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    session()->flush();
    return env('APP_NAME') . ' All cache cleared.';
});

Route::middleware(['isAdmin'])->group(function () {


    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/all-notification', [DashboardController::class, 'allNotification'])->name('all.notification');

    Route::name('admin-management.')->middleware('can:admin catalouge')->group(function () {
        Route::resource('/admin-list', AdminManagementController::class);
        Route::resource('/admin-management/roles', RoleManagementController::class);
        Route::resource('/admin-management/permissions', PermissionManagementController::class);
    });

    Route::name('user-management.')->group(function () {
        Route::resource('/user-management/users', UserManagementController::class);
    });

    // ->middleware('can:product catalouge')
    Route::prefix('product-catalogue')->name('product-catalogue.')->group(function () {
        Route::get('brand', [BrandController::class, 'index'])->name('brand.index');
        Route::get('category', [CategoryController::class, 'index'])->name('category.index');
        Route::get('subcategory', [SubcategoryController::class, 'index'])->name('subcategory.index');
        Route::get('subsubcategory', [SubsubcategoryController::class, 'index'])->name('subsubcategory.index');
    });

    // product management
    Route::name('product-management.')->group(function () {
        Route::controller(ProductController::class)->group(function () {
            // Apply middleware for permissions
            Route::get('/all-product', 'index')->name('index')->middleware('can:all product');
            Route::get('/create-product', 'create')->name('create');
            Route::post('/store-product', 'store')->name('store');
            Route::get('/product-edit/{id}', [ProductEditController::class, 'edit'])->name('edit')->middleware('can:update product');
            Route::post('/product-update/{id}', [ProductEditController::class, 'update'])->name('update')->middleware('can:update product');
            Route::get('/product-details/{id}', 'show')->name('show')->middleware('can:all product');

            // API for categories (without middleware, as they might be public)
            Route::get('/get-subcategories/{category_id}', [SubcategoryController::class, 'getSubcategories']);
            Route::get('/get-subsubcategories/{subcategory_id}', [SubsubcategoryController::class, 'getSubsubcategories']);

            // API for product variations
            Route::get('/get-attribute-value/{attribute_id}', [VariantController::class, 'getAttributeValue']);
        });
    });

    // product variant
    Route::name('product-variant.')->group(function(){
        Route::controller(VariantController::class)->group(function () {
            Route::get('/product-variant', 'index')->name('index');
        });
    });

    // shipping management
    Route::name('shipping.')->group(function(){
        Route::controller(ShippingController::class)->group(function () {
            Route::get('/shipping-district', 'district')->name('district');
            Route::get('/shipping-method', 'shipping_method')->name('shipping_method');
        });
    });

    // order management
    Route::name('order-management.')->middleware('can:order catalouge')->group(function(){
        Route::resource('/order', OrderController::class);
        Route::get('/today-order', [OrderController::class, 'todayOrder'])->name('order.today');
        Route::get('/monthly-order/{year?}/{month?}', [OrderController::class, 'monthlyOrder'])->name('order.monthly');
        Route::get('/order-invoice/{id}', [OrderController::class, 'order_invoice'])->name('invoice');
    });

    // coupon
    Route::name('coupon.')->group(function(){
        Route::get('coupon', [CouponController::class, 'index'])->name('index');
    });

    // review
    Route::name('review.')->group(function(){
        Route::get('product-reviews', [ReviewController::class, 'index'])->name('index');
    });

    // contact message
    Route::name('contact.')->group(function(){
        Route::get('contact-message', [ContactMessageController::class, 'index'])->name('message');
        Route::get('weekly-contact-message', [ContactMessageController::class, 'weekly'])->name('weekly.message');
        Route::get('contact-message-details/{id}', [ContactMessageController::class, 'show'])->name('message.details');
        Route::post('contact-message-reply/{id}', [ContactMessageController::class, 'reply'])->name('message.reply');
        Route::post('contact-message-delete/{id}', [ContactMessageController::class, 'destroy'])->name('message.delete');
    });

    Route::resource('subscription', SubscriptionController::class);

    // setting
    Route::name('setting.')->group(function(){
        Route::controller(SettingController::class)->group(function(){
            Route::get('/genarel-settings', 'manage')->name('manage');
            Route::post('/new-image-setting', 'new_arrvial_image_setting')->name('new-arrival.store');
            Route::post('/delete-new-arrival-image', 'delete_new_arrival_image')->name('new-arrival.delete');
            Route::get('/website-frontend-settings', 'website_setting')->name('website');
            Route::post('pages-contend-update', 'pagesContent')->name('pages.content.update');
        });
    });

     // home slider
    Route::resource('slider', SliderController::class);

});

Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'redirect']);

