<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManagePagesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientLogoController;
use App\Http\Controllers\FaqContoller;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\MenuController as MenuPage;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\Check2faController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ServicesController;

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

Route::get('/2fa', [Check2faController::class, 'Index'])->name('check2fa');
Route::post('/2fa/verify/', [Check2faController::class, 'VerifyCode'])->name('VerifyCodes');

Route::group(['prefix' => 'manage', 'as' => 'admin.'], function(){
    Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');
    Route::middleware(['auth'])->group(function(){
     Route::middleware(['check2fa'])->group(function(){
    Route::get('/', [AdminDashboardController::class, 'Index'])->name('index');
    Route::get('/index', [AdminDashboardController::class, 'Index'])->name('index');
    Route::controller(MenuPage::class)->group(function(){
        Route::get('/website/menus', 'Index')->name('menu.index');
        Route::get('/website/menu/create',  'Create')->name('addMenu');
        Route::post('/website/menu/store', 'Store')->name('MenuStore');
        Route::get('/menu/edit/{id}','Edit')->name('menu.edit');
        Route::post('/website/menu/update/{id}',  'Update')->name('MenuUpdate');
        Route::get('/website/menu/disable/{id}',  'Disable')->name('MenuDisable');
        Route::get('/website/menu/enable/{id}',  'Enable')->name('MenuEnable');
        Route::get('/website/submenu/create/{id}',  'SubMenuCreate')->name('subMenu.Create');
        Route::post('/website/submenu/store/{id}', 'SubMenuStore')->name('SubMenuStore');
        Route::get('/website/submenu/edit/{id}',  'SubMenuEdit')->name('subMenu.edit');
        Route::post('/website/submenu/update/{id}', 'SubMenuUpdate')->name('SubMenuUpdate');
        Route::get('/website/submenu/delete/{id}',  'SubMenuDelete')->name('subMenu.delete');

    });

    Route::controller(ManagePagesController::class)->group(function(){
        Route::get('/website/pages', 'Index')->name('manage.pages');
        Route::get('/website/pages/create/',  'PagesCreate')->name('Pages.Create');
        Route::post('/website/pages/store/', 'PagesStore')->name('PagesStore');
        Route::get('/website/pages/edit/{id}',  'PagesEdit')->name('PagesEdit');
        Route::post('/website/pages/update/{id}', 'PagesUpdate')->name('PagesUpdate');
        Route::get('/website/pages/delete/{id}',  'PagesDelete')->name('PagesDelete');
        Route::get('/website/pages/activate/{id}',  'PagesActivate')->name('PagesActivate');
        Route::get('/website/pages/disable/{id}',  'PagesDisable')->name('PagesDisable');
        Route::get('/website/pages/submenu/{id}',  'GetSubMenus')->name('page.getSubmenu');
    });

    Route::controller(BlogController::class)->group(function(){
        Route::get('/wesite/blog', 'Index')->name('blogs.index');
        Route::get('/wesite/blog/create', 'BlogsCreate')->name('BlogsCreate');
        Route::post('/website/blog/store', 'BlogsStore')->name('BlogsStore');
        Route::get('/website/blog/edit/{id}', 'BlogsEdit')->name('BlogsEdit');
        Route::post('/website/blog/update/{id}', 'BlogsUpdate')->name('BlogsUpdate');
        Route::get('/wensite/blog/delete/{id}', 'BlogsDelete')->name('BlogsDelete');
        Route::get('/website/blog/activate/{id}', 'BlogsActivate')->name('BlogsActivate');
        Route::get('/webiste/blog/diabled/{id}', 'BlogsDisable')->name('BlogsDisable');
    });
  

    Route::controller(SettingsController::class)->group(function(){
        Route::get('/website/settings/index', 'Index')->name('settings.index');
        Route::get('/website/settings/testimonias', 'Testimonials')->name('settings.testimonials');
        Route::get('/website/settings/socials', 'Socials')->name('settings.socials');
        Route::get('/website/settings/about', 'Abouts')->name('settings.abouts');
        Route::get('/website/settings/add/testimonial', 'CreateTestimonial')->name('settings.createTestimonial');
        Route::post('/website/settings/store/testimonial', 'StoreTestimonial')->name('settings.storeTestimonial');
        Route::get('/website/settings/edit/testimonial/{id}', 'EditTestimonial')->name('settings.editTestimonial');
        Route::post('/website/settings/update/testimonial/{id}', 'UpdateTestimonial')->name('settings.updateTestimonial');
        Route::get('/website/settings/delete/testimonial/{id}', 'DeleteTestimonial')->name('settings.deleteTestimonial');
        Route::post('/website/settings/update/socials', 'UpdateSocials')->name('settings.updateSocials');
        Route::post('/website/settings/update/settings', 'UpdateSettings')->name('settings.updateSettings');
        Route::get('/website/admin/user', 'UserAccount')->name('userAccount');
        Route::post('/website/admin/uuser/account', 'UpdateAccount')->name('UpdateAccount');
    });

    Route::controller(SliderController::class)->group(function(){
        Route::get('/website/settings/sliders/index', 'Index')->name('settings.sliders');
        Route::get('/website/settings/sliders/create', 'CreateSlider')->name('sliderCreate');
        Route::post('/website/settings/sliders/store', 'StoreSlider')->name('sliderStore');
        Route::get('/website/settings/sliders/edit/{id}', 'EditSlider')->name('sliderEdit');
        Route::post('/website/settings/sliders/update/{id}', 'UpdateSlider')->name('sliderUpdate');
        Route::get('/website/settings/sliders/delete/{id}', 'DeleteSlider')->name('sliderDelete');
        Route::get('/website/settings/sliders/activate/{id}', 'ActivateSlider')->name('sliderActivate');
        Route::get('/website/settings/sliders/deactivate/{id}', 'DeactivateSlider')->name('sliderDeactivate');
    });

    Route::controller(ClientLogoController::class)->group(function(){
        Route::get('/website/settings/logo/index', 'Index')->name('settings.logo');
        Route::get('/website/settings/logo/create', 'Create')->name('logoCreate');
        Route::post('/website/settings/logo/store', 'Store')->name('logoStore');
        Route::get('/website/settings/logo/delete/{id}', 'Delete')->name('logoDelete');
    });

    Route::controller(FaqContoller::class)->group(function(){
        Route::get('/website/faq/faq', 'Index')->name('faq.index');
        Route::get('/website/faq/create', 'Create')->name('faqCreate');
        Route::post('/website/faq/store', 'Store')->name('faqStore');
        Route::get('/website/faq/edit/{id}', 'Edit')->name('faqEdit');
        Route::post('/website/faq/update/{id}', 'Update')->name('faqUpdate');
        Route::get('/website/faq/delete/{id}', 'Delete')->name('faqDelete');
    });

    Route::controller(ServicesController::class)->group(function() {
        Route::get('/website/services/index', 'Index')->name('services.index');
        Route::get('/website/services/create', 'Create')->name('services.Create');
        Route::post('/website/services/store', 'Store')->name('services.Store');
        Route::get('/website/services/edit/{id}', 'Edit')->name('services.Edit');
        Route::post('/website/services/update/{id}', 'Update')->name('services.Update');
        Route::get('/website/services/delete/{id}', 'Delete')->name('services.Delete');

    });

});
});
});




Route::get('/', [DashboardController::class, 'Index'])->name('index');
Route::get('/index', [DashboardController::class, 'Index'])->name('index');

Route::controller(PagesController::class)->group(function(){
Route::get('/page/{slug}', 'Pages')->name('pages');
Route::get('/pages/{slug}',  "SubPages")->name('subpages');
Route::get('/blog/details/{id}',  'BlogDetails')->name('blog.details');
Route::get('/jobs/industries/{id}',  'JobCategory')->name('industries-category');
Route::post('/contactus/request', 'ContactEmails')->name('contact-email');
});

Route::post('/form/registration/', [FormController::class, 'viewForm'])->name('users.viewForm');
Route::post('/form/submission', [FormController::class, 'UpdateForm'])->name('users.UpdateForm');


require __DIR__.'/auth.php';
