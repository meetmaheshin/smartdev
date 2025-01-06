<?php

namespace App\Http\Traits;

use App\Models\ClientCompanyDetail;

trait RedirectClientTrait
{
    public function redirectClient($userId)
    {
        $route = 'dashboard';

        // Check if the client has company details
        $clientDetails = ClientCompanyDetail::where('user_id', $userId)->first();

        if (empty($clientDetails)) {
            // dd("here");
            $route = 'create_client.company_details';
        }
        elseif (empty($clientDetails->phone) || empty($clientDetails->address)) {
            $route = 'create_client.location';
        }
        return $route;
    }
}
