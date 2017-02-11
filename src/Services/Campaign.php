<?php
/**
 * Project: google-ads.
 * User: Edujugon
 * Email: edujugon@gmail.com
 * Date: 9/2/17
 * Time: 15:59
 */

namespace Edujugon\GoogleAds\Services;

use Google\AdsApi\AdWords\v201609\cm\CampaignService;

class Campaign extends Service
{

    function __construct()
    {
        parent::__construct();

        $this->fields = ['Id', 'Name', 'Status', 'ServingStatus', 'StartDate', 'EndDate'];
        $this->service = $this->adWordsServices->get($this->session, CampaignService::class);
    }


}