<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\TenantDashboardController;
use App\Http\Controllers\TenantUserController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\KycController;
use App\Http\Controllers\FaceVerificationController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\VisitorInvitationController;
use App\Http\Controllers\GateVerificationController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\AdminSubscriptionPlanController;
use App\Http\Controllers\AdminTenantDashboardController;
use App\Http\Controllers\AdminVisitorInvitationController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\SubaccountController;
use App\Http\Controllers\AdminKycController;
use App\Http\Controllers\AdminFaceVerificationController;
use App\Http\Controllers\CacheController;
use App\Http\Controllers\IdcardController;


$domain = parse_url(config('app.url'), PHP_URL_HOST);

Route::get('/refresh-csrf', function () {
    return response()->json(['csrf_token' => csrf_token()]);
})->middleware('refresh_token');


Route::get('/clear', [CacheController::class, 'clear'])->name('clear');
Route::get('/clearer', [CacheController::class, 'clearer']);
Route::get('/link', [CacheController::class, 'storageLink'])->name('link');



// Route::controller(GateVerificationController::class)->group(function () {
//     Route::get('/security/scan','showScanForm')->name('showScanForm');
//     Route::post('/security/verify','verify')->name('verifyscan');
// });

 Route::controller(SecurityController::class)->group(function () {         
        Route::get('/security/scan_verify', 'form')->name('security.form');
        Route::post('/security/verify', 'verify')->name('security.verify');
        Route::get('/security/emergency_scan', 'emergencyForm')->name('emergency_scan');
        Route::post('/security/emergency_verify', 'verifyEmergencyPin')->name('emergency_verify');
});

Route::get('/security/inside-count', function() {
    $count = \App\Models\VisitorInvitation::where('status', 'used')->count();
    return response()->json(['inside' => $count]);
});

Route::controller(MainController::class)->group(function () {

      Route::get('/', 'index')->name('home');
      Route::get('/about', 'About')->name('about');
      Route::get('/price', 'Price')->name('price');
      Route::get('/blog', 'Blog')->name('blog');
      Route::get('/contact', 'Contact')->name('contact');
      Route::get('/product', 'Product')->name('product');
      Route::get('/blog_details', 'BlogDetails')->name('blog_details');
      Route::get('/privacy_policy', 'PrivacyPolicy')->name('privacy_policy');
      Route::get('/terms', 'TermService')->name('terms');
      Route::get('/privacy_pdf/{file}','newPrivacyPolicy')->name('new_privacy_policy');
      Route::get('/terms_pdf/{file}','newTerms')->name('new_terms');
});

Route::controller(TenantController::class)->group(function () {
      
      Route::get('/register', 'create')->name('tenant_create');
      Route::post('/register', 'store')->name('tenant_store');
      Route::get('/service_pdf/{servicefile}','newServiceAgreement')->name('new_service_agreement');
});


Route::get('/lgas/{state}', [KycController::class, 'lgas'])->name('lgas');




Route::domain('{tenant}.' . $domain)
     ->middleware('tenant')->group(function () {


     /* Resident */

      Route::get('kyc/document/preview', [KycController::class, 'documentPreview'])
    ->name('kyc.document.preview')->middleware('tenant.auth');
    
      Route::controller(TenantUserController::class)->group(function () {
         Route::get('/estate_register', 'showRegistrationForm')->name('tenant_user_reg');
         Route::get('/estate_resident_register', 'showResidentRegistrationForm')->name('tenant_new_user_reg');
         Route::post('/estate_registerr', 'storeRegister')->name('tenant_user_store_reg');
         Route::post('/estate_register_admin', 'storeRegisterAdmin')->name('estate_register_admin');
         Route::get('/estate_login','showLoginForm')->name('tenant_user_login');
         Route::get('/useragreement_pdf/{useragreefile}','newUserAgreement')->name('new_user_agreement');
         
        Route::middleware(['block.ip'])->group(function () {
         Route::post('/estate_loginn', 'userLogin')->name('tenant_user_submit'); // login post
        });  

         Route::get('/verify-email', 'showVerifyForm')->name('verify.email.form');
         Route::get('/admin-verify-email', 'showVerifyAdminForm')->name('verifyadmin.email.form');
         Route::post('/verify-email', 'verifyEmail')->name('verify_email');
         Route::post('/verify-admin-email', 'verifyAdminEmail')->name('verify_admin_email');
         Route::post('/resend_verification', 'resendCode')->name('resend_verification');
       });
       

       Route::controller(VisitorInvitationController::class)->group(function () {

             Route::get('/resident/show/{invitation}',  'show')->name('visitor.show');
       });
       
       Route::controller(ForgotPasswordController::class)->group(function () {

          Route::get('/forgot-password', 'showForgotPasswordForm')->name('tenant_forgot_password');
          Route::post('/forgot-password', 'sendResetCode')->name('tenant_send_reset_code');
          Route::get('/reset-mypassword', 'showResetPasswordForm')->name('tenant_reset_password_form');
          Route::post('/reset-password','resetPassword')->name('tenant_reset_password');
          Route::get('/reset-password','verifyCodePassword')->name('verify_code_password');
          Route::post('/resend-reset-verification', 'resendResetCode')->name('resend_reset_verification');
          Route::post('/verify-pass-code', 'verifyPassCode')->name('verifypasscode');
          
       });

       Route::middleware(['tenant.auth', 'role:user'])->group(function () {



            Route::controller(IdcardController::class)->group(function () {

                  Route::get('/resident-card','show')->name('resident.card.show');
            });

            
            

            Route::controller(KycController::class)->group(function () {
           
                 Route::get('/kyc', 'index')->name('kyc.verify');
                 Route::post('/kyc/bio', 'storeBio')->name('kyc.bio');
                 Route::post('/kyc/doc', 'storeDoc')->name('kyc.doc');
                 Route::get('/all_states', 'state')->name('states.lgas');
                 Route::post('/kyc/face/compare', 'compareFace')->name('kyc.face.compare');
                 Route::post('/emergency-pin/regenerate', 'regenerateResidentEmergencyPin')->name('emergency.pin.regenerate'); 
                 Route::post('/emergency-visitor-pin/regenerate', 'regenerateResidentEmergencyVisitorPin')
                  ->name('emergency.visitor.pin.regenerate');
                  
            });

            Route::controller(FaceVerificationController::class)->group(function () {
                     
                    Route::get('/facial', 'index')->name('facial.verify'); 
            });

          
            Route::post('/estate_logout', [TenantUserController::class, 'logout'])->name('tenant.logout');
           
         Route::middleware(['tenant.auth', 'role:user','kyc.completed'])->group(function () {
              
           
            Route::controller(TenantDashboardController::class)->group(function () {
             Route::get('/estate_dashboard', 'index')->name('tenant_user_dashboard');
            });

            Route::controller(ResidentController::class)->group(function () {

              Route::get('/resident_transaction', 'residentTransaction')->name('resident_transaction');
              Route::get('/resident/details', [ResidentController::class, 'details'])->name('resident.details');
            });

            Route::controller(WalletController::class)->group(function () {
                  
                  Route::get('/fundwallet', 'fundWallet')->name('fundwallet');
                  Route::post('/savefundWallet', 'saveFundWallet')->name('savefundWallet');
                  Route::get('/wallet', 'allWallet')->name('allwallet');
                  Route::get('/payment_callback','paymentCallback')->name('paystack.payment_callback');
            });

            Route::controller(NotificationController::class)->group(function () {
                Route::get('/notifications','index')->name('notifications.index');
                Route::post('/notifications/mark-as-read','markNotifications');
                Route::get('/notifications/load-more','loadMoreNotifications')->name('notifications.loadMore');
                Route::get('/notifications/{notif}/read', 'read')->name('notifications.read');
                
            });

            Route::middleware(['subscription'])->group(function () {

                Route::controller(VisitorInvitationController::class)->group(function () {
                
                    Route::get('visitor-invite','create')->name('visitor.create');
                    Route::post('/visitor-invite', 'store')->name('visitor.store');
                    Route::get('/resident/invitations',  'index')->name('resident.invitations.index');
                    Route::post('/resident/invitations/{invitation}/resend', 'resendQr')->name('resident.invitations.resend');
                    Route::delete('/resident/invitations/{invitation}','destroy')->name('resident.invitations.destroy');
                    
                });
            });

            

            Route::controller(SubscriptionController::class)->group(function () {
                
                Route::get('subscription','allSub')->name('subscription.create');
                Route::get('subscription_checkout/{plan_id}','subCheckout')->name('subscription_checkout');
                Route::post('/subscribe', 'subscribe')->name('subscribe');
                Route::get('/subscription_callback','callback')->name('sub_callback');
               
            });
              
         });
            
  
       });

      /* Admin */
       Route::middleware(['tenant.auth', 'role:admin'])->group(function () {

            Route::controller(AdminKycController::class)->group(function () {
           
                 Route::get('/adminkyc', 'index')->name('adminkyc.verify');
                 Route::post('/adminkyc/bio', 'storeBio')->name('adminkyc.bio');
                 Route::post('/adminkyc/doc', 'storeDoc')->name('adminkyc.doc');
                 Route::get('/all_states', 'state')->name('adminstates.lgas');
                 Route::post('/adminkyc/face/compare', 'compareFace')->name('adminkyc.face.compare');
                 Route::post('/admin-emergency-pin/regenerate', 'regenerateEmergencyPin')->name('admin.emergency.pin.regenerate'); 
                 Route::post('/admin-emergency-visitor-pin/regenerate', 'regenerateEmergencyVisitorPin')->name('admin.emergency.visitor.pin.regenerate');
            });

            Route::controller(IdcardController::class)->group(function () {

                  Route::get('/admin-card','adminShowCard')->name('admin.card.show');
                  
            });

            

            Route::controller(AdminFaceVerificationController::class)->group(function () {
                     
                    Route::get('/facial', 'index')->name('adminfacial.verify'); 
            });

       
            Route::post('/admin_estate_logout', [TenantUserController::class, 'adminLogout'])->name('admin_tenant.logout');

          Route::middleware(['tenant.auth', 'role:admin','adminkyc.completed'])->group(function () {  
            Route::controller(AdminTenantDashboardController::class)->group(function () {
            Route::get('/admin_estate_dashboard', 'adminIndex')->name('tenant_admin_dashboard');
            });

            Route::controller(ResidentController::class)->group(function () {

              Route::get('/admin_resident_transaction', 'adminTransaction')->name('admin_transaction');
              Route::get('/allresidents', 'allResidents')->name('allresident.details');
              Route::get('/account/details', 'admindetails')->name('admin.details');
              Route::post('/residents/export', 'exportResidents')->name('residents.export');
              Route::get('/export_status/{export_id}', 'exportStatus')->name('residents.export.status');
              Route::get('/export_download/{id}' ,'downloadExport')->name('residents.exports.download');
              Route::get('/residents/print', 'printResidents')->name('residents.print');
            });

            Route::controller(AdminSubscriptionPlanController::class)->group(function () {

              Route::get('/plans', 'index')->name('admin_plans');
              Route::get('/create', 'create')->name('admin_create_plan');
              Route::post('/store', 'store')->name('admin_store_plan');

            });

            Route::controller(AdminVisitorInvitationController::class)->group(function () {

              Route::get('/allvisitorlog', 'adminVisitorLog')->name('admin_visitor_logs');
              Route::get('/allinvitelog', 'adminInviteLog')->name('admin_invite_logs');
              

            });

          });


       }); 
});



/* Super Admin */

Route::controller(SuperAdminController::class)->group(function () {
      
      Route::get('/superadmin_login','showAdminLoginForm')->name('superadmin_login');
      Route::post('/superadmin_loginn', 'superadminLogin')->name('superadmin_loginn'); // login post
});

Route::middleware(['superadmin.auth'])->group(function () {
    
   Route::controller(SuperAdminController::class)->group(function () {
      Route::get('/superadmin_dashboard', 'superAdminIndex')->name('superadmin_dashboard');
      Route::get('/tenants', 'AllTenantS')->name('alltenants');
      Route::post('/superadmin_logout','superAdminLogout')->name('superadmin.logout'); 
      Route::get('/superadmin/estate/{tenant}','estate')->name('superadmin.estate.users');
      Route::get('/superadmin/estate/{tenant}/{user}','getSuperEmergency')->name('emergency_code');
      Route::post('/super-admin-emergency-pin/{tenant}/{user}', 'regenerateSuperAdminEmergencyPin')->name('super.admin.emergency.pin.regenerate'); 
      Route::post('/super-admin-emergency-visitor-pin/{tenant}/{user}', 'regenerateSuperAdminVisitorEmergencyPin')->name('super.admin.visitor.emergency.pin.regenerate');
      Route::post('/superadmin/residents/export/{tenant_id}/{user_id}', 'superAdminExportResidents')->name('superadmin.residents.export');
      Route::get('/superadmin_export_status/{tenant_domain}/{export_id}', 'exportSuperAdminStatus')->name('superadmin_residents.export.status');
      Route::get('/superadmin_export_download/{tenant_domain}/{id}' ,'downloadSuperAdminExport')->name('superadmin.residents.exports.download');
});


 Route::controller(SubaccountController::class)->group(function () {

      Route::get('/superadmin/subaccount','createSubAccount')->name('create_subaccount');
      Route::post('/verify-account','verifyAccount')->name('verify.account');
      Route::post('/subaccount', 'store')->name('subaccount.store');
 });


         
});


 

