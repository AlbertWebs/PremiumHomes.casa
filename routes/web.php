<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\PaymentsController;


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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('soon');
Route::get('/homepage', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('/home', [App\Http\Controllers\VendorController::class, 'index'])->name('home');
Route::get('/search-home', [App\Http\Controllers\HomeController::class, 'search'])->name('search-home');
Route::get('/listed-properties/{id}', [App\Http\Controllers\HomeController::class, 'properties'])->name('properties-home');
Route::get('/properties/{slung}', [App\Http\Controllers\HomeController::class, 'property'])->name('property-single');
Route::get('/plots-for-sale/{id}', [App\Http\Controllers\HomeController::class, 'plots'])->name('plots-home');
Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'privacy'])->name('privacy');
Route::get('/terms-and-conditions', [App\Http\Controllers\HomeController::class, 'terms'])->name('terms');
Route::get('/copyright', [App\Http\Controllers\HomeController::class, 'copyright'])->name('copyright');

Route::get('/invoices', [App\Http\Controllers\HomeController::class, 'invoice'])->name('invoice');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode2 = Artisan::call('config:clear');
    echo "Done";
});


Auth::routes();

Route::group(['prefix'=>'admin'], function(){
    Route::get('/', [App\Http\Controllers\AdminsController::class, 'adminHome'])->name('admin.home');
    Route::get('/home', [App\Http\Controllers\AdminsController::class, 'adminHome'])->name('admin.home');
    // SiteSettings
    Route::get('/credentials', [AdminsController::class, 'systemsCredentials'])->middleware('is_admin');
    Route::get('/SiteSettings', [AdminsController::class, 'SiteSettings'])->middleware('is_admin');
    Route::get('/SocialMediaSettings', [AdminsController::class, 'SocialMediaSettings'])->middleware('is_admin');
    Route::get('/logo-and-favicon', [AdminsController::class, 'logo_and_favicon'])->middleware('is_admin');
    Route::post('/logo-and-favicon-update', [AdminsController::class, 'logo_and_favicon_update'])->middleware('is_admin');

    // mailerSettings
    Route::get('/mailerSettings', [AdminsController::class, 'mailerSettings'])->middleware('is_admin');

    // Terms and Conditions
    Route::get('/terms', [AdminsController::class, 'terms'])->middleware('is_admin');
    Route::get('/addTerms', [AdminsController::class, 'addTerms'])->middleware('is_admin');
    Route::get('/editTerm/{id}', [AdminsController::class, 'editTerm'])->middleware('is_admin');
    Route::post('/add_term', [AdminsController::class, 'add_term'])->middleware('is_admin');
    Route::post('/edit_term/{id}', [AdminsController::class, 'edit_term'])->middleware('is_admin');
    Route::get('/delete_term/{id}', [AdminsController::class, 'delete_term'])->middleware('is_admin');

    // Privacy Policy
    Route::get('/privacy', [AdminsController::class, 'privacy'])->middleware('is_admin');
    Route::get('/addPrivacy', [AdminsController::class, 'addPrivacy'])->middleware('is_admin');
    Route::get('/editPrivacy/{id}', [AdminsController::class, 'editPrivacy'])->middleware('is_admin');
    Route::post('/add_privacy', [AdminsController::class, 'add_privacy'])->middleware('is_admin');
    Route::post('/edit_privacy/{id}', [AdminsController::class, 'edit_privacy'])->middleware('is_admin');
    Route::get('/delete_privacy/{id}', [AdminsController::class, 'delete_privacy'])->middleware('is_admin');

    // Frequently Asked Questions
    Route::get('/faq', [AdminsController::class, 'faq'])->middleware('is_admin');
    Route::get('/addFaq', [AdminsController::class, 'addFaq'])->middleware('is_admin');
    Route::get('/editFaq/{id}', [AdminsController::class, 'editFaq'])->middleware('is_admin');
    Route::post('/add_Faq', [AdminsController::class, 'add_Faq'])->middleware('is_admin');
    Route::post('/edit_Faq/{id}', [AdminsController::class, 'edit_Faq'])->middleware('is_admin');
    Route::get('/delete_Faq/{id}', [AdminsController::class, 'delete_Faq'])->middleware('is_admin');

    // Risks Declaration
    Route::get('/editRisk', [AdminsController::class, 'editRisk'])->middleware('is_admin');
    Route::post('/edit_Risk', [AdminsController::class, 'edit_Risk'])->middleware('is_admin');

    // Video Upload
    Route::post('//store-file', [FileController::class, 'store'])->middleware('store-file');

    // How It Works
    Route::get('/how', [AdminsController::class, 'how'])->middleware('is_admin');
    Route::get('/addHow', [AdminsController::class, 'addHow'])->middleware('is_admin');
    Route::get('/editHow/{id}', [AdminsController::class, 'editHow'])->middleware('is_admin');
    Route::post('/add_How', [AdminsController::class, 'add_How'])->middleware('is_admin');
    Route::post('/edit_How/{id}', [AdminsController::class, 'edit_How'])->middleware('is_admin');
    Route::get('/delete_How/{id}', [AdminsController::class, 'delete_How'])->middleware('is_admin');

    // Courses
    Route::get('/courses', [AdminsController::class, 'courses'])->middleware('is_admin');
    Route::get('/addCourse', [AdminsController::class, 'addCourse'])->middleware('is_admin');
    Route::get('/editCourse/{id}', [AdminsController::class, 'editCourse'])->middleware('is_admin');
    Route::post('/add_Course', [AdminsController::class, 'add_Course'])->middleware('is_admin');
    Route::post('/edit_Course/{id}', [AdminsController::class, 'edit_Course'])->middleware('is_admin');
    Route::get('/delete_Course/{id}', [AdminsController::class, 'delete_Course'])->middleware('is_admin');

    // Topics
    Route::get('/topics', [AdminsController::class, 'topics'])->middleware('is_admin');
    Route::get('/addTopic', [AdminsController::class, 'addTopic'])->middleware('is_admin');
    Route::get('/editTopic/{id}', [AdminsController::class, 'editTopic'])->middleware('is_admin');
    Route::post('/add_Topic', [AdminsController::class, 'add_Topic'])->middleware('is_admin');
    Route::post('/edit_Topic/{id}', [AdminsController::class, 'edit_Topic'])->middleware('is_admin');
    Route::get('/delete_Topic/{id}', [AdminsController::class, 'delete_Topic'])->middleware('is_admin');

    // Copyright Statement
    Route::get('/editCopyright', [AdminsController::class, 'copyright'])->middleware('is_admin');
    Route::post('/edit_Copyright', [AdminsController::class, 'edit_copyright'])->middleware('is_admin');

    // Sliders
    Route::get('/sliders', [AdminsController::class, 'slider'])->middleware('is_admin');
    Route::get('/addSlider', [AdminsController::class, 'addSlider'])->middleware('is_admin');
    Route::post('/add_Slider', [AdminsController::class, 'add_Slider'])->middleware('is_admin');
    Route::get('/editSlider/{id}', [AdminsController::class, 'editSlider'])->middleware('is_admin');
    Route::post('/edit_Slider/{id}', [AdminsController::class, 'edit_Slider'])->middleware('is_admin');
    Route::get('/deleteSlider/{id}', [AdminsController::class, 'deleteSlider'])->middleware('is_admin');

    // Banners
    Route::get('/banners', [AdminsController::class, 'banners'])->middleware('is_admin');
    Route::get('/editBanner/{id}', [AdminsController::class, 'editBanner'])->middleware('is_admin');
    Route::post('/edit_Banner/{id}', [AdminsController::class, 'edit_Banner'])->middleware('is_admin');

    // Messages
    Route::get('/allMessages', [AdminsController::class, 'allMessages'])->middleware('is_admin');
    Route::get('/unread', [AdminsController::class, 'unread'])->middleware('is_admin');
    Route::post('/reply', [AdminsController::class, 'reply'])->middleware('is_admin');
    Route::get('/read/{id}', [AdminsController::class, 'read'])->middleware('is_admin');
    Route::get('/deleteMessage/{id}', [AdminsController::class, 'deleteMessage'])->middleware('is_admin');

    // Categories
    Route::get('/categories', [AdminsController::class, 'categories'])->middleware('is_admin');
    Route::get('/addCategory', [AdminsController::class, 'addCategory'])->middleware('is_admin');
    Route::post('/add_Category', [AdminsController::class, 'add_Category'])->middleware('is_admin');
    Route::get('/editCategories/{id}', [AdminsController::class, 'editCategories'])->middleware('is_admin');
    Route::post('/edit_Category/{id}', [AdminsController::class, 'edit_Category'])->middleware('is_admin');
    Route::get('/deleteCategory/{id}', [AdminsController::class, 'deleteCategory'])->middleware('is_admin');

    // Categories
    Route::get('/testimonials', [AdminsController::class, 'testimonials'])->middleware('is_admin');
    Route::get('/addTestimonial', [AdminsController::class, 'addTestimonial'])->middleware('is_admin');
    Route::post('/add_Testimonial', [AdminsController::class, 'add_Testimonial'])->middleware('is_admin');
    Route::get('/editTestimonial/{id}', [AdminsController::class, 'editTestimonial'])->middleware('is_admin');
    Route::post('/edit_Testimonial/{id}', [AdminsController::class, 'edit_Testimonial'])->middleware('is_admin');

    // Signal
    Route::get('/signals', [AdminsController::class, 'signals'])->middleware('is_admin');
    Route::get('/addSignal', [AdminsController::class, 'addSignal'])->middleware('is_admin');
    Route::post('/add_Signal', [AdminsController::class, 'add_Signal'])->middleware('is_admin');
    Route::get('/editSignal/{id}', [AdminsController::class, 'editSignal'])->middleware('is_admin');
    Route::post('/edit_Signal/{id}', [AdminsController::class, 'edit_Signal'])->middleware('is_admin');

    // Blog
    Route::get('/blog', [AdminsController::class, 'blog'])->middleware('is_admin');
    Route::get('/addBlog', [AdminsController::class, 'addBlog'])->middleware('is_admin');
    Route::post('/add_Blog', [AdminsController::class, 'add_Blog'])->middleware('is_admin');
    Route::get('/editBlog/{id}', [AdminsController::class, 'editBlog'])->middleware('is_admin');
    Route::post('/edit_Blog/{id}', [AdminsController::class, 'edit_Blog'])->middleware('is_admin');
    Route::get('/delete_Blog/{id}', [AdminsController::class, 'delete_Blog'])->middleware('is_admin');


    // Payments
    Route::get('/b2b', [AdminsController::class, 'b2b'])->middleware('is_admin');
    Route::get('/b2c', [AdminsController::class, 'b2c'])->middleware('is_admin');
    Route::get('/lnmo_api_response', [AdminsController::class, 'lnmo_api_response'])->middleware('is_admin');
    Route::get('/mobile_payments', [AdminsController::class, 'mobile_payments'])->middleware('is_admin');
    Route::get('/reverse_transaction', [AdminsController::class, 'reverse_transaction'])->middleware('is_admin');
    Route::get('/transaction_status', [AdminsController::class, 'transaction_status'])->middleware('is_admin');
    Route::get('/accountbalance', [AdminsController::class, 'accountbalance'])->middleware('is_admin');
    Route::get('/approve-transaction/{id}', [AdminsController::class, 'approve_transaction'])->middleware('is_admin');
    Route::get('/approve-transaction-stk/{id}', [AdminsController::class, 'approve_transaction_stk'])->middleware('is_admin');

    // Enroll Users
    Route::get('/enroll-users', [AdminsController::class, 'enroll_users'])->middleware('is_admin');
    Route::get('/enroll-users-post/{id}', [AdminsController::class, 'enroll_users_post'])->middleware('is_admin');
    Route::post('/enroll-user-now', [AdminsController::class, 'enroll_user_now'])->middleware('is_admin');
    Route::get('/enroll-users-posts/{email}', [AdminsController::class, 'enroll_users_now'])->middleware('is_admin');

    //Manage Users
    Route::get('/users', [AdminsController::class, 'users'])->middleware('is_admin');
    Route::get('/admins', [AdminsController::class, 'admins'])->middleware('is_admin');
    Route::get('/addUser', [AdminsController::class, 'addUser'])->middleware('is_admin');
    Route::get('/editUser/{id}', [AdminsController::class, 'editUser'])->middleware('is_admin');
    Route::post('/add_User', [AdminsController::class, 'add_User'])->middleware('is_admin');
    Route::post('/edit_User/{id}', [AdminsController::class, 'edit_User'])->middleware('is_admin');
    Route::get('/delete_user/{id}', [AdminsController::class, 'delete_user'])->middleware('is_admin');
    Route::get('/switchRole/{id}', [AdminsController::class, 'switchRole'])->middleware('is_admin');
    Route::get('/switchStatus/{id}', [AdminsController::class, 'switchStatus'])->middleware('is_admin');

    Route::get('/updateSlung', [AdminsController::class, 'updateSlung'])->middleware('is_admin');




    Route::get('/activitylogs', [AdminsController::class, 'activitylogs'])->middleware('is_admin');


    // AJAX REQUESTS
    Route::post('/addCategoryAjaxRequest', [AdminsController::class, 'addCategoryAjaxRequest'])->middleware('is_admin');
    Route::post('/deleteBlogAjax', [AdminsController::class, 'deleteBlogAjax'])->middleware('is_admin');
    Route::put('/updateSiteSettingsAjax', [AdminsController::class, 'updateSiteSettingsAjax'])->middleware('is_admin');
    Route::put('/updateMailerAjax', [AdminsController::class, 'updateMailerAjax'])->middleware('is_admin');
    Route::put('/updateSiteSocialMediaAjax', [AdminsController::class, 'updateSiteSocialMediaAjax'])->middleware('is_admin');
    Route::put('/updateSiteCredentials', [AdminsController::class, 'updateSiteCredentials'])->middleware('is_admin');
    Route::post('/deleteCategoryAjax', [AdminsController::class, 'deleteCategoryAjax'])->middleware('is_admin');
    Route::post('/deleteTestimonialAjax', [AdminsController::class, 'deleteTestimonialAjax'])->middleware('is_admin');
    Route::post('/deleteSliderAjax', [AdminsController::class, 'deleteSliderAjax'])->middleware('is_admin');
    Route::post('/deleteC2BAjax', [AdminsController::class, 'deleteC2BAjax'])->middleware('is_admin');
    Route::post('/deleteB2BAjax', [AdminsController::class, 'deleteB2BAjax'])->middleware('is_admin');
    Route::post('/deleteB2CAjax', [AdminsController::class, 'deleteB2CAjax'])->middleware('is_admin');
    Route::post('/deleteBalAjax', [AdminsController::class, 'deleteBalAjax'])->middleware('is_admin');
    Route::post('/deleteSTKAjax', [AdminsController::class, 'deleteSTKAjax'])->middleware('is_admin');
    Route::post('/deleteReverseAjax', [AdminsController::class, 'deleteReverseAjax'])->middleware('is_admin');
    Route::post('/deleteTransactionAjax', [AdminsController::class, 'deleteTransactionAjax'])->middleware('is_admin');
    Route::post('/deleteUserAjax', [AdminsController::class, 'deleteUserAjax'])->middleware('is_admin');
    Route::post('/deleteFaqAjax', [AdminsController::class, 'deleteFaqAjax'])->middleware('is_admin');
    Route::post('/deletePrivacyAjax', [AdminsController::class, 'deletePrivacyAjax'])->middleware('is_admin');
    Route::post('/deleteTermsAjax', [AdminsController::class, 'deleteTermsAjax'])->middleware('is_admin');
    Route::post('/deleteHowAjax', [AdminsController::class, 'deleteHowAjax'])->middleware('is_admin');
    Route::post('/deleteCoursesAjax', [AdminsController::class, 'deleteCoursesAjax'])->middleware('is_admin');
    Route::post('/deleteTopicsAjax', [AdminsController::class, 'deleteTopicsAjax'])->middleware('is_admin');
    Route::post('/deleteSignalsAjax', [AdminsController::class, 'deleteSignalsAjax'])->middleware('is_admin');
});



// Users Routes
Auth::routes();
Route::group(['prefix'=>'vendors'], function(){
    Route::get('/', [App\Http\Controllers\VendorController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [App\Http\Controllers\VendorController::class, 'index'])->name('vendor.home');
    Route::get('/user-profile', [App\Http\Controllers\VendorController::class, 'user_profile'])->name('user-profile');
    Route::get('/my-listings', [App\Http\Controllers\VendorController::class, 'my_listings'])->name('my-listings');
    Route::get('/add-property', [App\Http\Controllers\VendorController::class, 'add_property'])->name('add-property');
    Route::get('/payment-method', [App\Http\Controllers\VendorController::class, 'payment_method'])->name('payment-method');
    Route::get('/invoice', [App\Http\Controllers\VendorController::class, 'invoice'])->name('invoice');
    Route::get('/invoices', [App\Http\Controllers\VendorController::class, 'invoices'])->name('invoices');
    Route::get('/change-password', [App\Http\Controllers\VendorController::class, 'change_password'])->name('change-password');
    Route::get('/invoice', [App\Http\Controllers\VendorController::class, 'invoice'])->name('invoice');
    Route::get('/add-gallery/{id}', [App\Http\Controllers\VendorController::class, 'add_gallery'])->name('add_gallery');
    Route::get('/edit-properties/{id}', [App\Http\Controllers\VendorController::class, 'edit_properties'])->name('edit-properties');
    Route::get('/update-gallery/{id}', [App\Http\Controllers\VendorController::class, 'update_gallery'])->name('update_gallery');
    Route::get('/delete-gallery/{id}', [App\Http\Controllers\VendorController::class, 'delete_gallery'])->name('delete-gallery');
    Route::get('/delete-nearby/{id}', [App\Http\Controllers\VendorController::class, 'delete_nearby'])->name('delete-nearby');

    Route::get('/edit-image/{select}/{id}', [App\Http\Controllers\VendorController::class, 'edit_image'])->name('edit-image');
    Route::get('/edit-gallery/{id}', [App\Http\Controllers\VendorController::class, 'edit_gallery'])->name('edit-gallery');
    Route::get('/edit-nearby/{id}', [App\Http\Controllers\VendorController::class, 'edit_nearby'])->name('edit-nearby');

    Route::get('/update-nearby/{id}', [App\Http\Controllers\VendorController::class, 'update_nearby'])->name('update-nearby');

    Route::get('/upgrade/{id}', [App\Http\Controllers\VendorController::class, 'upgrade'])->name('upgrade');
    Route::get('/downgrade/{id}', [App\Http\Controllers\VendorController::class, 'downgrade'])->name('downgrade');

    Route::get('/delete-properties/{id}', [App\Http\Controllers\VendorController::class, 'delete_property'])->name('delete-properties');
    Route::get('/view-gallery/{id}', [App\Http\Controllers\VendorController::class, 'view_gallery'])->name('view_gallery');


    // Post
    Route::post('/add-property', [App\Http\Controllers\VendorController::class, 'add_properties'])->name('add-property-post');
    Route::post('/save-property', [App\Http\Controllers\VendorController::class, 'save_property_post'])->name('save-property-post');
    Route::post('/save-gallery-post', [App\Http\Controllers\VendorController::class, 'save_gallery_post'])->name('save-gallery-post');
    Route::post('/save-image-post', [App\Http\Controllers\VendorController::class, 'save_image_post'])->name('save-image-post');
    Route::post('/save-nearby-post/{id}', [App\Http\Controllers\VendorController::class, 'save_nearby_post'])->name('save-nearby-post');
    Route::post('/invoice-make', [App\Http\Controllers\VendorController::class, 'invoice_make'])->name('invoice-make');
    Route::post('/verify-payment', [App\Http\Controllers\VendorController::class, 'verify_payment'])->name('verify-payment');



    Route::get('/invoice-page/{id}', [App\Http\Controllers\VendorController::class, 'invoice_page'])->name('invoice-page');


    // SocialMedia
    Route::get('/facebook', [LoginController::class, 'facebook'])->name('facebook-login');
    Route::get('/facebook/redirect', [LoginController::class, 'facebookRedirect']);
    Route::get('/google', [LoginController::class, 'google'])->name('google-login');
    Route::get('/google/redirect', [LoginController::class, 'googleRedirect']);
    Route::get('/linkedin', [LoginController::class, 'linkedin'])->name('linkedin-login');
    Route::get('/linkedin/redirect', [LoginController::class, 'linkedinRedirect']);
});

Route::get('/image/upload', [App\Http\Controllers\ImageUploadController::class, 'fileCreate'])->name('fileCreate');
Route::post('/image/upload/store', [App\Http\Controllers\ImageUploadController::class, 'fileStore'])->name('fileStore');
Route::get('/image/delete', [App\Http\Controllers\ImageUploadController::class, 'fileDestroy'])->name('fileDestroy');

Route::post('/create-invoice', [App\Http\Controllers\InvoiceController::class, 'create'])->name('create-invoice');

Route::post('make-payment', [App\Http\Controllers\PaymentsController::class, 'payment'])->name('make-payment');
Route::group(['prefix' => '/webhooks'], function () {
    //PESAPAL
    Route::get('donepayment', [App\Http\Controllers\PaymentsController::class, 'paymentsuccess'])->name('paymentsuccess');
    Route::get('paymentconfirmation', [App\Http\Controllers\PaymentsController::class, 'paymentconfirmation']);
});
