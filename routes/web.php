<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Client\ProjectController;
use App\Http\Controllers\Client\DashboardController;
use App\Http\Controllers\Client\ClientSettingController;
use App\Http\Controllers\Client\ProjectReviewProposalController;
use App\Http\Controllers\Freelancer\DashboardController as FreelancerDashboard;
use App\Http\Controllers\Freelancer\ProposalSettingController;
use App\Http\Controllers\Freelancer\SettingController;
use App\Http\Controllers\Freelancer\PortfolioController;
use App\Http\Controllers\Freelancer\InitiateDetailController;
use App\Http\Controllers\Freelancer\MessageController;
use App\Http\Controllers\Search\SearchController;
use App\Http\Controllers\TransactionHistoryController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\Auth\JobController as AdminJobController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ShareableLinkController;


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
Route::get('/home',  [HomeController::class, 'index'] );

// admin

Route::middleware(['auth','prevent-back-history','accessControl'])->group(function () {

    //  Dashboard and JOb 
    Route::get('/admin/dashboard',  [AdminDashboardController::class, 'index'] )->name('admin.dashboard');
    Route::get('/admin/jobs',  [AdminJobController::class, 'index'] )->name('admin.jobs');
    Route::get('/admin/jobs/edit/{id}',  [AdminJobController::class, 'edit'] )->name('admin.jobs.edit');
    Route::post('admin/getSpeciality', [AdminJobController::class, 'getSpeciality'])->name('admin.jobs.getSpeciality');
    Route::post('admin/job/update/{id}', [AdminJobController::class, 'project_review'])->name('admin.jobs.review');
    Route::post('admin/job/delete', [AdminJobController::class, 'jobDelete'])->name('admin.jobs.delete');

    // Catgeory 
    Route::get('/admin/category',  [AdminJobController::class, 'category'] )->name('admin.category');
    Route::get('/admin/category/edit/{id}',  [AdminJobController::class, 'categoryEdit'] )->name('admin.category.edit');
    Route::get('/admin/category/add',  [AdminJobController::class, 'categoryAdd'] )->name('admin.category.add');
    Route::post('admin/category/update', [AdminJobController::class, 'categoryUpdate'])->name('admin.category.update');
    Route::post('/admin/category/delete', [AdminJobController::class, 'categoryDelete'])->name('admin.category.delete');


    // SPeciality
    Route::get('/admin/speciality',  [AdminJobController::class, 'speciality'] )->name('admin.speciality');
    Route::get('/admin/speciality/edit/{id}',  [AdminJobController::class, 'specialityEdit'] )->name('admin.speciality.edit');
    Route::get('/admin/speciality/add',  [AdminJobController::class, 'specialityAdd'] )->name('admin.speciality.add');
    Route::post('admin/speciality/update', [AdminJobController::class, 'specialityUpdate'])->name('admin.speciality.update');
    Route::post('/admin/speciality/delete', [AdminJobController::class, 'specialityDelete'])->name('admin.speciality.delete');

    // Skills
    Route::get('/admin/skills',  [AdminJobController::class, 'skills'] )->name('admin.skills');
    Route::get('/admin/skills/edit/{id}',  [AdminJobController::class, 'skillsEdit'] )->name('admin.skills.edit');
    Route::get('/admin/skills/add',  [AdminJobController::class, 'skillsAdd'] )->name('admin.skills.add');
    Route::post('admin/skills/update', [AdminJobController::class, 'skillsUpdate'])->name('admin.skills.update');
    Route::post('/admin/skills/delete', [AdminJobController::class, 'skillsDelete'])->name('admin.skills.delete');

    // Popular Skills
    // Route::get('/admin/popular-skills',  [AdminJobController::class, 'popularSkills'] )->name('admin.popularSkills');
    // Route::get('/admin/popular-skills/edit/{id}',  [AdminJobController::class, 'popularSkillsEdit'] )->name('admin.popularSkills.edit');
    // Route::get('/admin/popular-skills/add',  [AdminJobController::class, 'popularSkillsAdd'] )->name('admin.popularSkills.add');
    // Route::post('admin/popular-skills/update', [AdminJobController::class, 'popularSkillsUpdate'])->name('admin.popularSkills.update');
    // Route::post('/admin/popular-skills/delete', [AdminJobController::class, 'popularSkillsDelete'])->name('admin.popularSkills.delete');

    // contact us
    Route::get('/admin/contact-us',  [AdminJobController::class, 'contactUs'] )->name('admin.contactUs');
    Route::get('/admin/contact-us/edit/{id}',  [AdminJobController::class, 'contactUsEdit'] )->name('admin.contactUs.edit');
    Route::post('admin/contact-us/update', [AdminJobController::class, 'contactUsUpdate'])->name('admin.contactUs.update');
    Route::post('/admin/contact-us/delete', [AdminJobController::class, 'contactUsDelete'])->name('admin.contactUs.delete');

    // Users
    Route::get('/admin/user',  [AdminJobController::class, 'user'] )->name('admin.user');
    Route::get('/admin/user/edit/{id}',  [AdminJobController::class, 'userEdit'] )->name('admin.user.edit');
    Route::get('/admin/user/add',  [AdminJobController::class, 'userAdd'] )->name('admin.user.add');
    Route::post('admin/user/update', [AdminJobController::class, 'userUpdate'])->name('admin.user.update');
    Route::post('/admin/user/delete', [AdminJobController::class, 'userDelete'])->name('admin.user.delete');

    // profile
    Route::get('/admin/profile',  [AdminDashboardController::class, 'profile'] )->name('admin.profile');
    Route::post('/admin/profile',  [AdminDashboardController::class, 'saveProfile'] )->name('admin.profile.save');

    // certification
    Route::get('/admin/certification',  [AdminDashboardController::class, 'certification'] )->name('admin.certification');
    Route::get('/admin/certification/edit/{id}',  [AdminDashboardController::class, 'certificationEdit'] )->name('admin.certification.edit');
    Route::get('/admin/certification/add',  [AdminDashboardController::class, 'certificationAdd'] )->name('admin.certification.add');
    Route::post('admin/certification/update', [AdminDashboardController::class, 'certificationUpdate'])->name('admin.certification.update');
    Route::post('/admin/certification/delete', [AdminDashboardController::class, 'certificationDelete'])->name('admin.certification.delete');


     // portfolio
     Route::get('/admin/portfolio',  [AdminDashboardController::class, 'portfolio'] )->name('admin.portfolio');
     Route::get('/admin/portfolio/edit/{id}',  [AdminDashboardController::class, 'portfolioEdit'] )->name('admin.portfolio.edit');
     Route::post('admin/portfolio/update', [AdminDashboardController::class, 'portfolioUpdate'])->name('admin.portfolio.update');
     Route::post('/admin/portfolio/delete', [AdminDashboardController::class, 'portfolioDelete'])->name('admin.portfolio.delete');



     Route::post('/admin/imageDestroy', [ProjectController::class, 'destroyProjectImage'])->name('project.image.destroys');



});



// end admn

Route::get('/', function () {
    return view('static.index');
    //return redirect('/login');
});
Route::view('/privacy-policy', 'static.privacy-policy');
Route::view('/hire-us', 'static.hire_us');
Route::view('/faqs', 'static.faqs');
Route::view('/consultation', 'static.book-free-consultation');

Route::post('/contact-us', [ContactUsController::class, 'contactUsForm'])->name('contactUsForm');
Route::post('/submit-consultation', [ConsultationController::class, 'store'])->name('consultation.store');

Route::group(['middleware' => 'prevent-back-history'], function () {
    Auth::routes();
    Route::get('/admin/login', function () {
        return view('admin.auth.login');
    });
    Route::get('/email/verify', function () {
        return view('auth.verify',['title'=>'Verify your email - '.config('app.name')]);
    })->name('auth.verify')->middleware('unverified');;
});

  
// Route::post('email/resend', [VerificationController::class, 'resend'])->middleware([ 'throttle:6,1'])->name('verification.resend');
// Route to show the resend form
Route::get('/email/resend',  [VerificationController::class, 'showResendForm'] )->name('verification.resend.form');

// Route to handle the resend request
Route::post('/email/resend',  [VerificationController::class, 'resend'])->name('verification.resend');



Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])
    ->middleware(['signed'])->name('verification.verify');

// Route::post('email/resend', 'VerificationController@resend')
//     ->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

/* 
is_admin middleware check user is client
*/
Route::middleware(['auth', 'prevent-back-history','verified'])->group(function () {
    Route::get('/search_project', [SearchController::class, 'searchProjectView'])->name('search_project_view');
    Route::get('/search_projects', [SearchController::class, 'searchProject'])->name('search_project');
    Route::get('/freelancerDetails', [SearchController::class, 'freelancerDetails'])->name('search.details');
    Route::get('/getDatahistory', [SearchController::class, 'getDatahistory'])->name('setting.getDatahistory');
    Route::get('/messages', [MessageController::class, 'index'])->name('messages.list');
    Route::post('/messages/store', [MessageController::class, 'store'])->name('store_messages');
    Route::post('/messages/url_freelancer_message', [MessageController::class, 'Urlfreelancer_message'])->name('url_freelancer_message');

    Route::post('/messages/getMessages', [MessageController::class, 'getMessages'])->name('get_messages');
    Route::post('/messages/read_message', [MessageController::class, 'updateReadMessage'])->name('read_message');
    Route::post('/messages/usersList', [MessageController::class, 'getUserList'])->name('user_list');
    Route::post('/messages/update-user-status', [MessageController::class, 'UpdateUserStatus'])->name('update_user_status');
    Route::controller(DashboardController::class)->group(function () {
        Route::post('/fetch-state', 'fetchState')->name('fetch-state');
        Route::post('/fetch-city', 'fetchCity')->name('fetch-city');
        Route::post('/fetch-country-code', 'fetchCountry')->name('fetch-country-code');
        Route::get('/ab/notifications/','getNotification')->name('notifications');
        Route::get('/ab/notifications/delete/{id}','NotificationDestroy')->name('notifications.destroy');
        Route::get('/ab/notifications/read_noti/{id}','NotificationRead')->name('notifications.read');
        Route::post('/fetch-timezone-code', 'fetchTimezone')->name('fetch-timezone');
    });
    Route::prefix('nx/payments/reports')->group(function () {
        Route::get('/transaction-history', [TransactionHistoryController::class, 'index'])->name('transaction-history');
    });

    Route::group(['middleware' => 'accessControl'], function () {
        // for client
        Route::group(['prefix' => 'client'], function () {
            Route::get('/details', [DashboardController::class, 'details'])->name('client.details');
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('clientdashboard');
            Route::get('/all-jobs', [DashboardController::class, 'showAllJobs'])->name('project.all_jobs');
            Route::get('/all-contracts', [DashboardController::class, 'showAllContracts'])->name('project.all_contracts');
            Route::post('/show-contract-details', [DashboardController::class, 'showContractDetails'])->name('show-contract-details');
            Route::get('/payments/milestone_payments/{projectId}/{freelancerId}', [DashboardController::class, 'contract_milestone'])->name('contract.milestone');
            Route::get('autocomplete', [ProjectController::class, 'autocomplete'])->name('autocomplete');
            Route::get('/project_started', [ProjectController::class, 'index'])->name('project_started');
            Route::post('/project_started', [ProjectController::class, 'project_started'])->name('project.started');
            Route::get('/job-post/instant/title', [ProjectController::class, 'project_title_view'])->name('project.title.view');
            Route::post('/job-post/instant/title', [ProjectController::class, 'project_title'])->name('project.title');
            Route::post('/imageDestroy', [ProjectController::class, 'destroyProjectImage'])->name('project.image.destroy');
            Route::get('/job-post/regular/skills', [ProjectController::class, 'project_skill_view'])->name('project.skill.view');
            Route::post('/job-post/regular/skills', [ProjectController::class, 'project_skill'])->name('project.skill');
            Route::post('/getSpeciality', [ProjectController::class, 'getSpeciality'])->name('project.getSpeciality');
            Route::post('/getSpecialityName', [ProjectController::class, 'getSpecialityName'])->name('project.getSpecialityName');
            Route::get('/job-post/regular/scope', [ProjectController::class, 'project_scope_view'])->name('project.scope.view');
            Route::post('/job-post/regular/scope', [ProjectController::class, 'project_scope'])->name('project.scope');
            Route::get('/job-post/regular/budget', [ProjectController::class, 'project_budget_view'])->name('project.budget.view');
            Route::post('/job-post/regular/budget', [ProjectController::class, 'project_budget'])->name('project.budget');
            Route::get('/job-post/regular/review/ajax', [ProjectController::class, 'project_review_view_ajax'])->name('project.review.ajax');
            Route::get('/job-post/regular/review/{id}', [ProjectController::class, 'project_review_view'])->name('project.review.view');
            Route::post('/job-post/regular/review/{id}', [ProjectController::class, 'project_review'])->name('project.review');
            Route::post('/projectsDrafts/delete', [ProjectController::class, 'projectDraftDelete'])->name('project.delete');
            Route::post('/projectstatus/delete', [ProjectController::class, 'projectStatusChange'])->name('projectstatus.change');
            Route::post('/reviewCategoryUpdate', [ProjectController::class, 'categoryUpdate'])->name('project.reviewCategoryUpdate');
            Route::post('/reviewScopeUpdate', [ProjectController::class, 'scopeUpdate'])->name('project.reviewScopeUpdate');
            Route::post('/reviewBudgetUpdate', [ProjectController::class, 'editBudget'])->name('project.reviewBudgetUpdate');
            Route::post('/reviewEditSkill', [ProjectController::class, 'editSkillListing'])->name('project.reviewEditSkill');
            Route::get('/projects/proposals/ajax', [ProjectReviewProposalController::class, 'showViewByajax'])->name('project.proposal.ajax');
            Route::get('/projects/proposals/{proposalId}', [ProjectReviewProposalController::class, 'index'])->name('project.proposal.view');
            Route::get('/freelancer-proposal', [ProjectReviewProposalController::class, 'showFreelancerData'])->name('freelancer-proposal');
            // invite to job
            Route::get('/invite_to_job', [ProjectReviewProposalController::class, 'inviteToJob'])->name('invite_to_job');
            Route::get('/uninvite_to_job', [ProjectReviewProposalController::class, 'unInviteToJob'])->name('uninvite_to_job');

            Route::post('/send_invitation', [ProjectReviewProposalController::class, 'sendInvitation'])->name('send_invitation');
            // offer to freelancer
            Route::get('/send-offer/userId/{userId}/projectId/{projectId}', [ProjectReviewProposalController::class, 'sendOffer'])->name('send.offer.view');
            Route::get('/review-send-offer/userId/{userId}/projectId/{projectId}', [ProjectReviewProposalController::class, 'sendOfferByReview'])->name('send.offer.view.review');
            Route::post('/send-offer/hire-freelancer', [ProjectReviewProposalController::class, 'hireFreelancer'])->name('send.offer.hire-freelancer');
            Route::get('/payments/checkout/{projectId}/{userId}', [ProjectReviewProposalController::class, 'checkout'])->name('payments.checkout.view');
            Route::post('/payments/approve_tokens', [ProjectReviewProposalController::class, 'approveTokens'])->name('approve_tokens');
            Route::post('/payments/payment_done/finish', [ProjectReviewProposalController::class, 'paymentDone'])->name('paymentDone.finish');
            Route::post('/update_milestone', [ProjectReviewProposalController::class, 'updateMilestone'])->name('update_milestone');
            Route::post('/delete_milestone', [ProjectReviewProposalController::class, 'deleteMilestone'])->name('delete_milestone');

            Route::controller(ClientSettingController::class)->group(function () {
                Route::get('/settings/myinfo', 'index')->name('settings.myinfo');
                Route::post('/settings/update-password', 'updatePassword')->name('update-password');
                Route::post('/deployContract', 'deployContract')->name('setting.deployContract');
                Route::post('/store-account-info', 'storeAccountInfo')->name('store-account-info');
                Route::post('/company-details', 'storeCompanyDetails')->name('company-details');
                Route::post('/company-contact', 'storeCompanyContact')->name('company-contact');
                Route::post('/setting/delete-account','deleteAccount')->name('setting.delete-account');
                Route::get('/settings/changePassword','changePassword')->name('settings.changePassword');
            });
        });

        // for freelancer Detail
        Route::group(['prefix' => '/create-profile'], function () {
            Route::get('/welcome', [InitiateDetailController::class, 'freelancerWelcome'])->name('freelancer.welcome');
            Route::get('/title', [InitiateDetailController::class, 'createProfileTitle'])->name('create_profile.title');
            Route::post('/title', [InitiateDetailController::class, 'storeTitle'])->name('storeTitle');
            Route::get('/education', [InitiateDetailController::class, 'education'])->name('create_education');
            Route::post('/education', [InitiateDetailController::class, 'storeEducation'])->name('storeEducation');
            Route::get('/experience', [InitiateDetailController::class, 'experience'])->name('create_experience');
            Route::post('/experience', [InitiateDetailController::class, 'storeExperience'])->name('storeExperience');
            Route::get('/getexperienceData/{id}', [InitiateDetailController::class, 'getexperienceDataAjax'])->name('getexperienceData');
            Route::get('/geteducationData/{id}', [InitiateDetailController::class, 'geteducationDataAjax'])->name('geteducationData');
            Route::get('/skills', [InitiateDetailController::class, 'skills'])->name('create_skills');
            Route::post('/skills', [InitiateDetailController::class, 'storeSkills'])->name('storeSkills');
            Route::post('/deleteEducation', [InitiateDetailController::class, 'deleteEducation'])->name('deleteEducation');
            Route::post('/deleteExperience', [InitiateDetailController::class, 'deleteExperience'])->name('deleteExperience');

            Route::get('/bio', [InitiateDetailController::class, 'bio'])->name('create_bio');
            Route::get('/services', [InitiateDetailController::class, 'services'])->name('create_services');
            Route::get('/rate', [InitiateDetailController::class, 'rate'])->name('create_rate');
            Route::get('/location', [InitiateDetailController::class, 'location'])->name('create_location');

            Route::post('/store_bio', [InitiateDetailController::class, 'storeBio'])->name('store_bio');
            Route::post('/store_services', [InitiateDetailController::class, 'storeServices'])->name('store_services');
            Route::post('/store_rate', [InitiateDetailController::class, 'storeRate'])->name('store_rate');
            Route::post('/store_location', [InitiateDetailController::class, 'storeLocation'])->name('store_location');

            Route::post('/wallet/check', [InitiateDetailController::class, 'checkWallet'])->name('wallet.check');
            Route::get('/wallet-address', [InitiateDetailController::class, 'primaryWallet'])->name('add_wallet');
            Route::post('/store_wallet_address', [InitiateDetailController::class, 'primaryStoreWallet'])->name('store_wallet');
        });
        Route::group(['prefix' => 'freelancer'], function () {
            Route::get('/dashboard', [FreelancerDashboard::class, 'index'])->name('dashboard');
            Route::get('/details', [FreelancerDashboard::class, 'details'])->name('details');
            Route::post('saveProject', [FreelancerDashboard::class, 'saveProject'])->name('saveProject');
            Route::get('/search-project-freelancer-view', [FreelancerDashboard::class, 'searchProjectView'])->name('search-project-freelancer-view');
            // saved job page
            Route::post('/remove-saved-jobs', [FreelancerDashboard::class, 'removeSavedJobs'])->name('remove-saved-jobs');
            // my job
            Route::get('/home', [FreelancerDashboard::class, 'home'])->name('home');
            //offer-accept-detail
            Route::post('/offer-accept-detail', [FreelancerDashboard::class, 'acceptOfferDetail'])->name('see.offer-detail');
            Route::post('/offer-accepted', [FreelancerDashboard::class, 'offerAccepted'])->name('offer-accepted');
            Route::post('/contract-finshed', [FreelancerDashboard::class, 'contractFinshed'])->name('contract-finshed');

            Route::get('/proposals/job/{id}', [ProposalSettingController::class, 'index'])->name('job.proposal');
            Route::post('/proposals/submit', [ProposalSettingController::class, 'proposalSubmit'])->name('proposal.submit');
            Route::get('/proposals/interview/uid/{id}', [ProposalSettingController::class, 'invitationInterview'])->name('proposal.interview');
            Route::get('/proposals', [ProposalSettingController::class, 'proposals'])->name('proposals.list');
            Route::get('/freelance_job_proposal/{id}', [ProposalSettingController::class, 'proposalDetail'])->name('freelance_job_proposal');
            Route::post('/withdraw_proposal', [ProposalSettingController::class, 'withdrawProposal'])->name('withdraw_proposal');
            Route::get('/interview-proposals/decline/{project_id}', [ProposalSettingController::class, 'interviewProposalDecline'])->name('interview.proposal.decline');
            Route::post('/interview-proposals/submit', [ProposalSettingController::class, 'interviewProposalSubmit'])->name('interview.proposal.submit');

            // change password freelancer
            Route::controller(SettingController::class)->group(function () {
                Route::get('/setting/change-password', 'changeUserPassword')->name('setting.change-user-password');
                Route::post('/settings/update-user-password', 'updateUserPassword')->name('setting.update-user-password');
                Route::get('/setting/plans/tokens/buy', 'buyConnects')->name('setting.buy-tokens');
                // load rovi token
                Route::post('/setting/plans/tokens/buy', 'loadRoviToken')->name('setting.load-rovi-tokens');
                Route::post('/setting/plans/tokens/buy/tx', 'loadRoviTokenTx')->name('setting.load-rovi-tokens-tx');
                Route::post('/update-contact-info', 'updateContactInfo')->name('update-contact-info');
                // Wallet
                Route::get('/setting/plans/wallet', 'wallet')->name('setting.wallet');
                Route::post('/setting/plans/wallet', 'addWallet')->name('setting.store.wallet');
                Route::post('delete-wallet', 'deleteWallet')->name('delete-wallet');
                Route::post('delete-account', 'deleteAccount')->name('delete-account');
                Route::post('/setting/update-myprofile', 'updateMyProfile')->name('update-myprofile');
                Route::get('/settings/profile','index')->name('settings');
                Route::get('/settings/contact-info','contactInfo')->name('contact.info.settings');
                Route::post('/getSkillsByID','getSkillsByID')->name('getSkillsByID');
                Route::post('/profile-preference','profileProjectPrefer')->name('profile-preference');
                Route::post('/profile-category','profileCategories')->name('profile-category');
                Route::post('/title','profileTitle')->name('title');
                Route::post('/desc','profileDesc')->name('desc');
                Route::post('/specialized-profiles','specializedProfiles')->name('specialized-profiles');
                Route::get('/specialized-profiles/delete/{specialty_id}','specializedProfilesDelete')->name('specialized-profiles-delete');
            });

            Route::controller(PortfolioController::class)->group(function () {
                Route::get('/settings/myprofile','index')->name('myprofile');
                Route::post('/settings/myprofile/create','create')->name('myprofile.create');
                Route::get('/portfolio/autocomplete', 'autocomplete')->name('portfolio.autocomplete');
                Route::post('/portfolio/getPortfolioDetails', 'getPortfolioDetails')->name('portfolio.getPortfolioDetails');
                Route::post('/portfolio/attachment/delete', 'deleteAttachment')->name('portfolio.attachment.delete');
                Route::post('/portfolio/delete', 'deletePortfolio')->name('portfolio.delete');
                Route::post('/settings/myprofile/title','updateTitle')->name('myprofile.title');
                Route::post('/settings/myprofile/description','updateDescription')->name('myprofile.description');
                Route::post('/settings/myprofile/certification','certification')->name('myprofile.certification');
                Route::post('/portfolio/certification/delete', 'deleteCertification')->name('portfolio.certification.delete');

            });
        });
    });
});

Route::get('/freelance-jobs/apply/{slug}', [ShareableLinkController::class, 'showShareableLink'])->name('project.shareable.link');


// new static pages
// Route::get('/new-static-page', function () {
//     return view('layouts.new_static');
// })->name('new.static.page');

// cryptocurrency
Route::get('/cryptocurrency-development', function () {
    return view('static.cryptocurrency-development');
})->name('cryptocurrency-development');

Route::get('/token-development', function () {
    return view('static.token-development');
})->name('token-development');

Route::get('/ethereum-token-development', function () {
    return view('static.ethereum-token-development');
})->name('ethereum-token-development');

Route::get('/tron-token-development', function () {
    return view('static.tron-token-development');
})->name('tron-token-development');


Route::get('/rebase-token-development', function () {
    return view('static.rebase-token-development');
})->name('rebase-token-development');

Route::get('/brc-20-token-development', function () {
    return view('static.brc-20-token-development');
})->name('brc-20-token-development');

Route::get('/src-20-token-development', function () {
    return view('static.src-20-token-development');
})->name('src-20-token-development');

// bep20-token-development
Route::get('/bep20-token-development', function () {
    return view('static.bep20-token-development');
})->name('bep20-token-development');

Route::get('/altcoin-development', function () {
    return view('static.altcoin-development');
})->name('altcoin-development');

// stable-coin-development
Route::get('/stable-coin-development', function () {
    return view('static.stable-coin-development');
})->name('stable-coin-development');


Route::get('/gaming-utility-token-development', function () {
    return view('static.gaming-utility-token-development');
})->name('gaming-utility-token-development');

Route::get('/cryptocurrency-mlm-software-development', function () {
    return view('static.cryptocurrency-mlm-software-development');
})->name('cryptocurrency-mlm-software-development');

// lsd-token-development
Route::get('/lsd-token-development', function () {
    return view('static.lsd-token-development');
})->name('lsd-token-development');


Route::get('/ai-token-development', function () {
    return view('static.ai-token-development');
})->name('ai-token-development');

Route::get('/ai-crypto-coin-development', function () {
    return view('static.ai-crypto-coin-development');
})->name('ai-crypto-coin-development');

Route::get('/central-bank-digital-currency-development', function () {
    return view('static.central-bank-digital-currency-development');
})->name('central-bank-digital-currency-development');


Route::get('/token-sale-services', function () {
    return view('static.token-sale-services');
})->name('token-sale-services');


Route::get('/crypto-consulting', function () {
    return view('static.crypto-consulting');
})->name('crypto-consulting');


Route::get('/tokenomics-consulting', function () {
    return view('static.tokenomics-consulting');
})->name('tokenomics-consulting');

// hire-token-developer
Route::get('/hire-token-developer', function () {
    return view('static.hire-token-developer');
})->name('hire-token-developer');

// art-tokenization
Route::get('/art-tokenization', function () {
    return view('static.art-tokenization');
})->name('art-tokenization');

Route::get('/real-world-asset-tokenization', function () {
    return view('static.real-world-asset-tokenization');
})->name('real-world-asset-tokenization');

Route::get('/real-estate-tokenization', function () {
    return view('static.real-estate-tokenization');
})->name('real-estate-tokenization');

Route::get('/tokenization-platform-development', function () {
    return view('static.tokenization-platform-development');
})->name('tokenization-platform-development');

Route::get('/crypto-etf-development', function () {
    return view('static.crypto-etf-development');
})->name('crypto-etf-development');

Route::get('/bitcoin-ordinals-token-development', function () {
    return view('static.bitcoin-ordinals-token-development');
})->name('bitcoin-ordinals-token-development');

Route::get('/bitcoin-ordinals-token-marketing', function () {
    return view('static.bitcoin-ordinals-token-marketing');
})->name('bitcoin-ordinals-token-marketing');

Route::get('/rwa-tokenization-use-cases', function () {
    return view('static.rwa-tokenization-use-cases');
})->name('rwa-tokenization-use-cases');

Route::get('/gold-tokenization', function () {
    return view('static.gold-tokenization');
})->name('gold-tokenization');

Route::get('/crypto-prediction-market-platform', function () {
    return view('static.crypto-prediction-market-platform');
})->name('crypto-prediction-market-platform');

Route::get('/decentralized-sports-betting-platform', function () {
    return view('static.decentralized-sports-betting-platform');
})->name('decentralized-sports-betting-platform');

Route::get('/know-your-transaction-platform-development', function () {
    return view('static.know-your-transaction-platform-development');
})->name('know-your-transaction-platform-development');

Route::get('/carbon-credits-development', function () {
    return view('static.carbon-credits-development');
})->name('carbon-credits-development');

Route::get('/crypto-banking-solutions', function () {
    return view('static.crypto-banking-solutions');
})->name('crypto-banking-solutions');

Route::get('/solana-blockchain-development-company', function () {
    return view('static.solana-blockchain-development-company');
})->name('solana-blockchain-development-company');

Route::get('/solana-token-development', function () {
    return view('static.solana-token-development');
})->name('solana-token-development');

Route::get('/solana-meme-coin-development', function () {
    return view('static.solana-meme-coin-development');
})->name('solana-meme-coin-development');

Route::get('/solana-dapp-development', function () {
    return view('static.solana-dapp-development');
})->name('solana-dapp-development');

Route::get('/solana-based-nft-marketplace-development', function () {
    return view('static.solana-based-nft-marketplace-development');
})->name('solana-based-nft-marketplace-development');

Route::get('/ido-launchpad-on-solana', function () {
    return view('static.ido-launchpad-on-solana');
})->name('ido-launchpad-on-solana');

Route::get('/crypto-launchpad-development', function () {
    return view('static.crypto-launchpad-development');
})->name('crypto-launchpad-development');

Route::get('/meme-coin-development', function () {
    return view('static.meme-coin-development');
})->name('meme-coin-development');

Route::get('/bitcoin-ordinals-meme-coin-development', function () {
    return view('static.bitcoin-ordinals-meme-coin-development');
})->name('bitcoin-ordinals-meme-coin-development');

Route::get('/how-to-launch-crypto-token', function () {
    return view('static.how-to-launch-crypto-token');
})->name('how-to-launch-crypto-token');

Route::get('/cryptocurrency-exchange-software', function () {
    return view('static.cryptocurrency-exchange-software');
})->name('cryptocurrency-exchange-software');

Route::get('/white-label-crypto-exchange', function () {
    return view('static.white-label-crypto-exchange');
})->name('white-label-crypto-exchange');

Route::get('/decentralized-exchange-development', function () {
    return view('static.decentralized-exchange-development');
})->name('decentralized-exchange-development');

Route::get('/p2p-exchange-development', function () {
    return view('static.p2p-exchange-development');
})->name('p2p-exchange-development');

Route::get('/listing-service', function () {
    return view('static.listing-service');
})->name('listing-service');

Route::get('/centralized-exchange-development', function () {
    return view('static.centralized-exchange-development');
})->name('centralized-exchange-development');

Route::get('/ai-powered-crypto-exchange-development', function () {
    return view('static.ai-powered-crypto-exchange-development');
})->name('ai-powered-crypto-exchange-development');

Route::get('/crypto-derivatives-exchange-development', function () {
    return view('static.crypto-derivatives-exchange-development');
})->name('crypto-derivatives-exchange-development');

Route::get('/otc-crypto-exchange-development', function () {
    return view('static.otc-crypto-exchange-development');
})->name('otc-crypto-exchange-development');

Route::get('/leverage-margin-trading-exchange', function () {
    return view('static.leverage-margin-trading-exchange');
})->name('leverage-margin-trading-exchange');

Route::get('/binance-clone', function () {
    return view('static.binance-clone');
})->name('binance-clone');

Route::get('/coinbase-clone', function () {
    return view('static.coinbase-clone');
})->name('coinbase-clone');

Route::get('/poloniex-clone', function () {
    return view('static.poloniex-clone');
})->name('poloniex-clone');

Route::get('/sushiswap-clone', function () {
    return view('static.sushiswap-clone');
})->name('sushiswap-clone');

Route::get('/bitstamp-clone', function () {
    return view('static.bitstamp-clone');
})->name('bitstamp-clone');

Route::get('/bitfinex-clone', function () {
    return view('static.bitfinex-clone');
})->name('bitfinex-clone');

Route::get('/bakeryswap-clone', function () {
    return view('static.bakeryswap-clone');
})->name('bakeryswap-clone');

Route::get('/okx-clone', function () {
    return view('static.okx-clone');
})->name('okx-clone');

Route::get('/huobi-clone', function () {
    return view('static.huobi-clone');
})->name('huobi-clone');

Route::get('/kraken-clone', function () {
    return view('static.kraken-clone');
})->name('kraken-clone');

Route::get('/dydx-clone', function () {
    return view('static.dydx-clone');
})->name('dydx-clone');

Route::get('/wazirx-clone', function () {
    return view('static.wazirx-clone');
})->name('wazirx-clone');

Route::get('/cash-app-clone', function () {
    return view('static.cash-app-clone');
})->name('cash-app-clone');

Route::get('/uniswap-clone', function () {
    return view('static.uniswap-clone');
})->name('uniswap-clone');

Route::get('/remitano-clone', function () {
    return view('static.remitano-clone');
})->name('remitano-clone');

Route::get('/crypto-exchange-like-wazirx', function () {
    return view('static.crypto-exchange-like-wazirx');
})->name('crypto-exchange-like-wazirx');

Route::get('/crypto-exchange-like-binance', function () {
    return view('static.crypto-exchange-like-binance');
})->name('crypto-exchange-like-binance');

Route::get('/crypto-exchange-like-coinbase', function () {
    return view('static.crypto-exchange-like-coinbase');
})->name('crypto-exchange-like-coinbase');

Route::get('/cryptocurrency-wallet-development', function () {
    return view('static.cryptocurrency-wallet-development');
})->name('cryptocurrency-wallet-development');

Route::get('/crypto-payments-gateway', function () {
    return view('static.crypto-payments-gateway');
})->name('crypto-payments-gateway');

Route::get('/metamask-like-wallet-development', function () {
    return view('static.metamask-like-wallet-development');
})->name('metamask-like-wallet-development');

Route::get('/bitcoin-ordinals-wallet-development', function () {
    return view('static.bitcoin-ordinals-wallet-development');
})->name('bitcoin-ordinals-wallet-development');

Route::get('/crypto-trading-bot-development', function () {
    return view('static.crypto-trading-bot-development');
})->name('crypto-trading-bot-development');

Route::get('/crypto-arbitrage-bot-development', function () {
    return view('static.crypto-arbitrage-bot-development');
})->name('crypto-arbitrage-bot-development');

Route::get('/flash-loan-arbitrage-bot-development', function () {
    return view('static.flash-loan-arbitrage-bot-development');
})->name('flash-loan-arbitrage-bot-development');

Route::get('/nft-marketplace-development', function () {
    return view('static.nft-marketplace-development');
})->name('nft-marketplace-development');

Route::get('/white-label-nft-marketplace', function () {
    return view('static.white-label-nft-marketplace');
})->name('white-label-nft-marketplace');

Route::get('/bitcoin-ordinals-marketplace-development', function () {
    return view('static.bitcoin-ordinals-marketplace-development');
})->name('bitcoin-ordinals-marketplace-development');

Route::get('/zksync2-integration-in-nft-platform', function () {
    return view('static.zksync2-integration-in-nft-platform');
})->name('zksync2-integration-in-nft-platform');

Route::get('/ai-powered-nft-marketplace-development', function () {
    return view('static.ai-powered-nft-marketplace-development');
})->name('ai-powered-nft-marketplace-development');

Route::get('/nft-music-marketplace-development', function () {
    return view('static.nft-music-marketplace-development');
})->name('nft-music-marketplace-development');

Route::get('/nft-art-marketplace-development', function () {
    return view('static.nft-art-marketplace-development');
})->name('nft-art-marketplace-development');

Route::get('/nft-for-sports', function () {
    return view('static.nft-for-sports');
})->name('nft-for-sports');

Route::get('/nft-for-realestate', function () {
    return view('static.nft-for-realestate');
})->name('nft-for-realestate');

Route::get('/nft-ticketing-marketplace', function () {
    return view('static.nft-ticketing-marketplace');
})->name('nft-ticketing-marketplace');

Route::get('/nft-aggregator-marketplace-development', function () {
    return view('static.nft-aggregator-marketplace-development');
})->name('nft-aggregator-marketplace-development');

Route::get('/carbon-credits-platform', function () {
    return view('static.carbon-credits-platform');
})->name('carbon-credits-platform');

Route::get('/phygital-nft-marketplace', function () {
    return view('static.phygital-nft-marketplace');
})->name('phygital-nft-marketplace');

Route::get('/fractional-nft-marketplace-development', function () {
    return view('static.fractional-nft-marketplace-development');
})->name('fractional-nft-marketplace-development');

Route::get('/nft-development-services', function () {
    return view('static.nft-development-services');
})->name('nft-development-services');

Route::get('/nft-launchpad-development', function () {
    return view('static.nft-launchpad-development');
})->name('nft-launchpad-development');

Route::get('/nft-exchange-development', function () {
    return view('static.nft-exchange-development');
})->name('nft-exchange-development');

Route::get('/nft-wallet-development', function () {
    return view('static.nft-wallet-development');
})->name('nft-wallet-development');

Route::get('/nft-minting-platform-development', function () {
    return view('static.nft-minting-platform-development');
})->name('nft-minting-platform-development');

Route::get('/nft-layer-2-development', function () {
    return view('static.nft-layer-2-development');
})->name('nft-layer-2-development');

Route::get('/nft-carbon-credits-development', function () {
    return view('static.nft-carbon-credits-development');
})->name('nft-carbon-credits-development');

Route::get('/semi-fungible-token-development', function () {
    return view('static.semi-fungible-token-development');
})->name('semi-fungible-token-development');

Route::get('/social-token-development-platform', function () {
    return view('static.social-token-development-platform');
})->name('social-token-development-platform');

Route::get('/nft-staking-platform-development', function () {
    return view('static.nft-staking-platform-development');
})->name('nft-staking-platform-development');

Route::get('/nft-streaming-platform-development-solutions', function () {
    return view('static.nft-streaming-platform-development-solutions');
})->name('nft-streaming-platform-development-solutions');

Route::get('/nft-consulting', function () {
    return view('static.nft-consulting');
})->name('nft-consulting');

Route::get('/nft-studio', function () {
    return view('static.nft-studio');
})->name('nft-studio');

Route::get('/nft-art-design-services', function () {
    return view('static.nft-art-design-services');
})->name('nft-art-design-services');

Route::get('/ar-and-vr-for-nft-development', function () {
    return view('static.ar-and-vr-for-nft-development');
})->name('ar-and-vr-for-nft-development');

Route::get('/nft-loyalty-program', function () {
    return view('static.nft-loyalty-program');
})->name('nft-loyalty-program');

Route::get('/token-gating-platform', function () {
    return view('static.token-gating-platform');
})->name('token-gating-platform');

Route::get('/nft-adoption-market-analysis-report', function () {
    return view('static.nft-adoption-market-analysis-report');
})->name('nft-adoption-market-analysis-report');

Route::get('/opensea-clone', function () {
    return view('static.opensea-clone');
})->name('opensea-clone');

Route::get('/blur-clone', function () {
    return view('static.blur-clone');
})->name('blur-clone');

Route::get('/crypto-marketing-agency', function () {
    return view('static.crypto-marketing-agency');
})->name('crypto-marketing-agency');

Route::get('/token-marketing-services', function () {
    return view('static.token-marketing-services');
})->name('token-marketing-services');

Route::get('/crypto-advertising-agency', function () {
    return view('static.crypto-advertising-agency');
})->name('crypto-advertising-agency');

Route::get('/crypto-pr-agency', function () {
    return view('static.crypto-pr-agency');
})->name('crypto-pr-agency');

Route::get('/crypto-influencer-marketing', function () {
    return view('static.crypto-influencer-marketing');
})->name('crypto-influencer-marketing');

Route::get('/crypto-community-management', function () {
    return view('static.crypto-community-management');
})->name('crypto-community-management');

Route::get('/discord-marketing-agency', function () {
    return view('static.discord-marketing-agency');
})->name('discord-marketing-agency');

Route::get('/discord-game-marketing-agency', function () {
    return view('static.discord-game-marketing-agency');
})->name('discord-game-marketing-agency');

Route::get('/defi-marketing-company', function () {
    return view('static.defi-marketing-company');
})->name('defi-marketing-company');

Route::get('/cryptocurrency-exchange-marketing', function () {
    // return view('static.cryptocurrency-exchange-marketing');
})->name('cryptocurrency-exchange-marketing');

// web3-marketing-services
Route::get('/web3-marketing-services', function () {
    // return view('static.web3-marketing-services');
})->name('web3-marketing-services');