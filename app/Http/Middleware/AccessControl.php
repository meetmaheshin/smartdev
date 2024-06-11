<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Freelancer\DashboardController as FreelancerDashboard;
use App\Http\Controllers\Freelancer\InitiateDetailController;
use App\Http\Controllers\Freelancer\MessageController;
use App\Http\Controllers\Freelancer\ProposalSettingController;
use App\Http\Controllers\Freelancer\SettingController;
use App\Http\Controllers\Client\DashboardController;
use App\Http\Controllers\Client\ProjectController;
use Closure;
use App\Models\User;

class AccessControl {

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */

    public function handle($request, Closure $next) {
        $this->allowAccessToRole();
        return $next($request);
    }

    public function accessPath() {

        $freelancerDashboardController = get_class(new FreelancerDashboard());
        $initiateDetailController = get_class(new InitiateDetailController());
        $messageController = get_class(new MessageController());
        $proposalSettingController = get_class(new ProposalSettingController());
        $settingController = get_class(new SettingController());

        $dashboardController = get_class(new DashboardController());
        $projectController = get_class(new ProjectController());


        $roleClient = User::ROLE_CLIENT;
        $roleFreelancer = User::ROLE_FREELANCER;
         
        
        return [
           
            $freelancerDashboardController => [
                $roleFreelancer
            ],
            $initiateDetailController => [
                $roleFreelancer
            ],

            $proposalSettingController=>[
                $roleFreelancer
            ],

            $settingController =>[
                $roleFreelancer
            ],

            $dashboardController => [
                $roleClient
            ],
            $projectController => [
                $roleClient
            ],
        ];
    }

    public function authRole() {
        $authUser = auth()->user();
        return $authUser->is_admin;
    }

    public function allowAccessToRole() {
        $currentAction = \Route::currentRouteAction();
        list($controller, $method) = explode('@', $currentAction);
        $accessPath = $this->accessPath();
        if (!isset($accessPath[$controller])) {
            return;
        }
        if (in_array($this->authRole(), $accessPath[$controller])) {
            return;
        } else {
            $errorMessage = __('Access Forbidden');
            if (request()->wantsJson()) {
                // return Common::returnResponse(false, 403, '', $errorMessage);
            }
            abort(403, $errorMessage);
        }
    }

}
