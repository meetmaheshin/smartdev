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