# Ringba

Ringba’s APIs allow you to interact, gather information, and make dynamic changes in real-time. All functions found within the Ringba portal are also available programmatically through our API.

If this is your first time using our API, please read the __Getting Started__ section below.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/diablomedia/ringba-php-sdk.git"
    }
  ],
  "require": {
    "diablomedia/ringba-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/Ringba/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Ringba\Api\APITokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apiTokenId = 'apiTokenId_example'; // string
$contentType = application/x-www-form-urlencoded; charset=UTF-8; // string
$authorization = Bearer {{accessToken}}; // string | Get a [Bearer accessToken](#how-to-generate-and-utilize-your-bearer-token)

try {
    $result = $apiInstance->apiTokensApiTokenIdDelete($apiTokenId, $contentType, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APITokensApi->apiTokensApiTokenIdDelete: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ringba.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*APITokensApi* | [**apiTokensApiTokenIdDelete**](docs/Api/APITokensApi.md#apitokensapitokeniddelete) | **DELETE** /ApiTokens/{apiTokenId} | Delete Api Token
*APITokensApi* | [**apiTokensGet**](docs/Api/APITokensApi.md#apitokensget) | **GET** /ApiTokens | Get API Tokens
*APITokensApi* | [**apiTokensPost**](docs/Api/APITokensApi.md#apitokenspost) | **POST** /ApiTokens | Create Api Token
*AccountInformationApi* | [**ringbaaccountsGet**](docs/Api/AccountInformationApi.md#ringbaaccountsget) | **GET** /ringbaaccounts | Get Account Info using API Token
*AddressesApi* | [**accountIdAddressesAddressIdDelete**](docs/Api/AddressesApi.md#accountidaddressesaddressiddelete) | **DELETE** /{accountId}/addresses/{addressId} | Delete Address
*AddressesApi* | [**accountIdAddressesAddressIdGet**](docs/Api/AddressesApi.md#accountidaddressesaddressidget) | **GET** /{accountId}/addresses/{addressId} | Get Address by ID
*AddressesApi* | [**accountIdAddressesAddressIdPatch**](docs/Api/AddressesApi.md#accountidaddressesaddressidpatch) | **PATCH** /{accountId}/addresses/{addressId} | Edit Address
*AddressesApi* | [**accountIdAddressesAddressIdSetDefaultPost**](docs/Api/AddressesApi.md#accountidaddressesaddressidsetdefaultpost) | **POST** /{accountId}/addresses/{addressId}/SetDefault | Set Default Address
*AddressesApi* | [**accountIdAddressesCountriesGet**](docs/Api/AddressesApi.md#accountidaddressescountriesget) | **GET** /{accountId}/addresses/countries | Get Countries Associated With Account
*AddressesApi* | [**accountIdAddressesGet**](docs/Api/AddressesApi.md#accountidaddressesget) | **GET** /{accountId}/addresses | Get Addresses
*AddressesApi* | [**accountIdAddressesPost**](docs/Api/AddressesApi.md#accountidaddressespost) | **POST** /{accountId}/addresses | Create New Address
*AddressesApi* | [**accountIdAddressesRequirementsCountryCodeGet**](docs/Api/AddressesApi.md#accountidaddressesrequirementscountrycodeget) | **GET** /{accountId}/addresses/requirements/{countryCode} | Get Details and Requirements for a Specific Country
*BearerTokensApi* | [**tokenPost**](docs/Api/BearerTokensApi.md#tokenpost) | **POST** /token | Get User Authentication Bearer Token
*BlockedNumbersApi* | [**accountIdBlockedNumbersBlockedNumberIdDelete**](docs/Api/BlockedNumbersApi.md#accountidblockednumbersblockednumberiddelete) | **DELETE** /{accountId}/blockedNumbers/{blockedNumberId} | Unblock a Phone Number
*BlockedNumbersApi* | [**accountIdBlockedNumbersBlockedNumberIdGet**](docs/Api/BlockedNumbersApi.md#accountidblockednumbersblockednumberidget) | **GET** /{accountId}/blockedNumbers/{blockedNumberId} | Get Details About a Single Blocked Number
*BlockedNumbersApi* | [**accountIdBlockedNumbersBlockedNumberIdPatch**](docs/Api/BlockedNumbersApi.md#accountidblockednumbersblockednumberidpatch) | **PATCH** /{accountId}/blockedNumbers/{blockedNumberId} | Update a Blocked Phone Number
*BlockedNumbersApi* | [**accountIdBlockedNumbersGet**](docs/Api/BlockedNumbersApi.md#accountidblockednumbersget) | **GET** /{accountId}/blockedNumbers | Get Blocked Phone Numbers
*BlockedNumbersApi* | [**accountIdBlockedNumbersPost**](docs/Api/BlockedNumbersApi.md#accountidblockednumberspost) | **POST** /{accountId}/blockedNumbers | Block a Phone Number
*BuyersApi* | [**accountIdBuyersGet**](docs/Api/BuyersApi.md#accountidbuyersget) | **GET** /{accountId}/Buyers | Get Buyers
*CallAdjustmentsApi* | [**accountIdCallsAnnotatePost**](docs/Api/CallAdjustmentsApi.md#accountidcallsannotatepost) | **POST** /{accountId}/calls/annotate | Add Annotation to a Call
*CallAdjustmentsApi* | [**accountIdCallsPaymentsOverridePost**](docs/Api/CallAdjustmentsApi.md#accountidcallspaymentsoverridepost) | **POST** /{accountId}/calls/payments/override | Adjust Revenue and/or Payment for a Call (with absolute adjustments)
*CallAdjustmentsApi* | [**accountIdCallsPaymentsPost**](docs/Api/CallAdjustmentsApi.md#accountidcallspaymentspost) | **POST** /{accountId}/calls/payments | Adjust Revenue and/or Payment for a Call (with relative adjustments)
*CallAdjustmentsApi* | [**accountIdCallsVoidPost**](docs/Api/CallAdjustmentsApi.md#accountidcallsvoidpost) | **POST** /{accountId}/calls/void | Void Revenue and/or Payment for a Call
*CallAdjustmentsApi* | [**buyerAccountIdCallsRequestConversionAdjustmentPost**](docs/Api/CallAdjustmentsApi.md#buyeraccountidcallsrequestconversionadjustmentpost) | **POST** /{buyerAccountId}/calls/requestConversionAdjustment | BUYER Request for Payout Adjustment (with relative adjustment)
*CallAdjustmentsApi* | [**buyerAccountIdCallsRequestConversionOverridePost**](docs/Api/CallAdjustmentsApi.md#buyeraccountidcallsrequestconversionoverridepost) | **POST** /{buyerAccountId}/calls/requestConversionOverride | BUYER Request for Payout Adjustment (with absolute adjustment)
*CallLogsExportCallLogsApi* | [**accountIdCalllogsExportCSVJobIdGet**](docs/Api/CallLogsExportCallLogsApi.md#accountidcalllogsexportcsvjobidget) | **GET** /{accountId}/calllogs/export/{CSVJobId} | Export CSV By Job Id
*CallLogsExportCallLogsApi* | [**accountIdCalllogsExportCsvPost**](docs/Api/CallLogsExportCallLogsApi.md#accountidcalllogsexportcsvpost) | **POST** /{accountId}/calllogs/export/csv | Export Call Log - CSV
*CallLogsGetCallLogsApi* | [**accountIdCalllogsColumnsGet**](docs/Api/CallLogsGetCallLogsApi.md#accountidcalllogscolumnsget) | **GET** /{accountId}/calllogs/columns | Get Column Names
*CallLogsGetCallLogsApi* | [**accountIdCalllogsDetailPost**](docs/Api/CallLogsGetCallLogsApi.md#accountidcalllogsdetailpost) | **POST** /{accountId}/calllogs/detail | Get Details About Specific Calls
*CallLogsGetCallLogsApi* | [**accountIdCalllogsPost**](docs/Api/CallLogsGetCallLogsApi.md#accountidcalllogspost) | **POST** /{accountId}/calllogs | Get Call Log
*CallLogsGetCallLogsApi* | [**accountIdCalllogsTagsGet**](docs/Api/CallLogsGetCallLogsApi.md#accountidcalllogstagsget) | **GET** /{accountId}/calllogs/tags | Get Tags for Filtering Call Log
*CampaignsCampaignInformationApi* | [**accountIdCampaignsCampaignIdClonePost**](docs/Api/CampaignsCampaignInformationApi.md#accountidcampaignscampaignidclonepost) | **POST** /{accountId}/campaigns/{campaignId}/clone | Clone a Campaign
*CampaignsCampaignInformationApi* | [**accountIdCampaignsCampaignIdDelete**](docs/Api/CampaignsCampaignInformationApi.md#accountidcampaignscampaigniddelete) | **DELETE** /{accountId}/campaigns/{campaignId} | Delete a Campaign
*CampaignsCampaignInformationApi* | [**accountIdCampaignsCampaignIdGet**](docs/Api/CampaignsCampaignInformationApi.md#accountidcampaignscampaignidget) | **GET** /{accountId}/campaigns/{campaignId} | Get Information About a Single Campaign
*CampaignsCampaignInformationApi* | [**accountIdCampaignsCampaignIdInboundReferencesGet**](docs/Api/CampaignsCampaignInformationApi.md#accountidcampaignscampaignidinboundreferencesget) | **GET** /{accountId}/campaigns/{campaignId}/InboundReferences | Get Inbound References for a Single Campaign
*CampaignsCampaignInformationApi* | [**accountIdCampaignsCampaignIdPatch**](docs/Api/CampaignsCampaignInformationApi.md#accountidcampaignscampaignidpatch) | **PATCH** /{accountId}/campaigns/{campaignId} | Update a Campaign
*CampaignsCampaignInformationApi* | [**accountIdCampaignsGet**](docs/Api/CampaignsCampaignInformationApi.md#accountidcampaignsget) | **GET** /{accountId}/campaigns | Get Campaigns
*CampaignsCampaignInformationApi* | [**accountIdCampaignsPost**](docs/Api/CampaignsCampaignInformationApi.md#accountidcampaignspost) | **POST** /{accountId}/campaigns | Create New Campaign
*CampaignsCampaignInformationApi* | [**accountIdCampaignsStatsGet**](docs/Api/CampaignsCampaignInformationApi.md#accountidcampaignsstatsget) | **GET** /{accountId}/campaigns/stats | Get Campaigns Stats only
*CampaignsCampaignNumbersApi* | [**accountIdCampaignsCampaignIdAffiliateNumbersPatch**](docs/Api/CampaignsCampaignNumbersApi.md#accountidcampaignscampaignidaffiliatenumberspatch) | **PATCH** /{accountId}/campaigns/{campaignId}/affiliateNumbers | Add Publisher Number to a Campaign
*CampaignsCampaignNumbersApi* | [**accountIdCampaignsCampaignIdDefaultNumberDelete**](docs/Api/CampaignsCampaignNumbersApi.md#accountidcampaignscampaigniddefaultnumberdelete) | **DELETE** /{accountId}/campaigns/{campaignId}/defaultNumber | Remove Default Number from a Campaign
*CampaignsCampaignNumbersApi* | [**accountIdCampaignsCampaignIdDefaultNumberPatch**](docs/Api/CampaignsCampaignNumbersApi.md#accountidcampaignscampaigniddefaultnumberpatch) | **PATCH** /{accountId}/campaigns/{campaignId}/defaultNumber | Add a Default Number for a Campaign
*CampaignsCampaignOffersApi* | [**accountIdCampaignsCampaignIdOffersDraftDelete**](docs/Api/CampaignsCampaignOffersApi.md#accountidcampaignscampaignidoffersdraftdelete) | **DELETE** /{accountId}/campaigns/{campaignId}/Offers/Draft | Delete a Draft Offer Before Publishing
*CampaignsCampaignOffersApi* | [**accountIdCampaignsCampaignIdOffersDraftGet**](docs/Api/CampaignsCampaignOffersApi.md#accountidcampaignscampaignidoffersdraftget) | **GET** /{accountId}/campaigns/{campaignId}/Offers/Draft | Get Draft Offers for a Campaign
*CampaignsCampaignOffersApi* | [**accountIdCampaignsCampaignIdOffersDraftPublishPost**](docs/Api/CampaignsCampaignOffersApi.md#accountidcampaignscampaignidoffersdraftpublishpost) | **POST** /{accountId}/campaigns/{campaignId}/Offers/Draft/Publish | Publish Draft Offers
*CampaignsCampaignOffersApi* | [**accountIdCampaignsCampaignIdOffersDraftPut**](docs/Api/CampaignsCampaignOffersApi.md#accountidcampaignscampaignidoffersdraftput) | **PUT** /{accountId}/campaigns/{campaignId}/Offers/Draft | Create a Draft Offer for a Campaign
*CampaignsCampaignOffersApi* | [**accountIdCampaignsCampaignIdOffersGet**](docs/Api/CampaignsCampaignOffersApi.md#accountidcampaignscampaignidoffersget) | **GET** /{accountId}/campaigns/{campaignId}/Offers | Get All Offers for a Campaign
*CampaignsCampaignOffersApi* | [**accountIdCampaignsCampaignIdOffersPublishedDelete**](docs/Api/CampaignsCampaignOffersApi.md#accountidcampaignscampaignidofferspublisheddelete) | **DELETE** /{accountId}/campaigns/{campaignId}/Offers/Published | Delete Published Offer for a Campaign
*CampaignsCampaignOffersApi* | [**accountIdCampaignsCampaignIdOffersPublishedGet**](docs/Api/CampaignsCampaignOffersApi.md#accountidcampaignscampaignidofferspublishedget) | **GET** /{accountId}/campaigns/{campaignId}/Offers/Published | Get Published Offers for a Campaign
*CampaignsCampaignOffersApi* | [**accountIdCampaignsCampaignIdOffersPublishedInvitePost**](docs/Api/CampaignsCampaignOffersApi.md#accountidcampaignscampaignidofferspublishedinvitepost) | **POST** /{accountId}/campaigns/{campaignId}/Offers/Published/Invite | Invite Publisher to Participate in Offer
*CampaignsCampaignOffersApi* | [**accountIdCampaignsCampaignIdOffersPublishedParticipantsGet**](docs/Api/CampaignsCampaignOffersApi.md#accountidcampaignscampaignidofferspublishedparticipantsget) | **GET** /{accountId}/campaigns/{campaignId}/Offers/Published/Participants | View Publishers Participating in Published Offer
*CampaignsCampaignOffersApi* | [**accountIdCampaignsCampaignIdOffersPublishedPausePost**](docs/Api/CampaignsCampaignOffersApi.md#accountidcampaignscampaignidofferspublishedpausepost) | **POST** /{accountId}/campaigns/{campaignId}/Offers/Published/Pause | Pause a Published Offer for a Campaign
*CampaignsCampaignOffersApi* | [**accountIdCampaignsCampaignIdOffersPublishedResumePost**](docs/Api/CampaignsCampaignOffersApi.md#accountidcampaignscampaignidofferspublishedresumepost) | **POST** /{accountId}/campaigns/{campaignId}/Offers/Published/Resume | Resume a Paused Offer
*CampaignsCampaignPublishersApi* | [**accountIdCampaignsCampaignIdAffiliatesPatch**](docs/Api/CampaignsCampaignPublishersApi.md#accountidcampaignscampaignidaffiliatespatch) | **PATCH** /{accountId}/campaigns/{campaignId}/affiliates | Add Publisher to a Campaign
*CampaignsCampaignPublishersApi* | [**accountIdCampaignsCampaignIdAffiliatesPublisherIdDelete**](docs/Api/CampaignsCampaignPublishersApi.md#accountidcampaignscampaignidaffiliatespublisheriddelete) | **DELETE** /{accountId}/campaigns/{campaignId}/affiliates/{publisherId} | Remove Publisher from a Campaign
*CampaignsCampaignRTBSettingsApi* | [**accountIdCampaignsCampaignIdRtbDelete**](docs/Api/CampaignsCampaignRTBSettingsApi.md#accountidcampaignscampaignidrtbdelete) | **DELETE** /{accountId}/campaigns/{campaignId}/rtb | Disable RTB for a Campaign
*CampaignsCampaignRTBSettingsApi* | [**accountIdCampaignsCampaignIdRtbGet**](docs/Api/CampaignsCampaignRTBSettingsApi.md#accountidcampaignscampaignidrtbget) | **GET** /{accountId}/campaigns/{campaignId}/rtb | Get RTB for Campaign
*CampaignsCampaignRTBSettingsApi* | [**accountIdCampaignsCampaignIdRtbPatch**](docs/Api/CampaignsCampaignRTBSettingsApi.md#accountidcampaignscampaignidrtbpatch) | **PATCH** /{accountId}/campaigns/{campaignId}/rtb | Edit RTB Settings for a Campaign
*CampaignsCampaignRTBSettingsApi* | [**accountIdCampaignsCampaignIdRtbPut**](docs/Api/CampaignsCampaignRTBSettingsApi.md#accountidcampaignscampaignidrtbput) | **PUT** /{accountId}/campaigns/{campaignId}/rtb | Enable RTB for a Campaign
*CampaignsCampaignTargetRoutesApi* | [**accountIdCampaignsCampaignIdRoutesDelete**](docs/Api/CampaignsCampaignTargetRoutesApi.md#accountidcampaignscampaignidroutesdelete) | **DELETE** /{accountId}/campaigns/{campaignId}/Routes | Remove Target Route from a Campaign
*CampaignsCampaignTargetRoutesApi* | [**accountIdCampaignsCampaignIdRoutesPost**](docs/Api/CampaignsCampaignTargetRoutesApi.md#accountidcampaignscampaignidroutespost) | **POST** /{accountId}/campaigns/{campaignId}/Routes | Add Target Group Route to a Campaign
*CampaignsDefaultPayoutsForCampaignApi* | [**accountIdCampaignsCampaignIdDefaultPayoutsPayoutIdDelete**](docs/Api/CampaignsDefaultPayoutsForCampaignApi.md#accountidcampaignscampaigniddefaultpayoutspayoutiddelete) | **DELETE** /{accountId}/campaigns/{campaignId}/DefaultPayouts/{payoutId} | Remove Default Payout Setting form a Campaign
*CampaignsDefaultPayoutsForCampaignApi* | [**accountIdCampaignsCampaignIdDefaultPayoutsPayoutIdPatch**](docs/Api/CampaignsDefaultPayoutsForCampaignApi.md#accountidcampaignscampaigniddefaultpayoutspayoutidpatch) | **PATCH** /{accountId}/campaigns/{campaignId}/DefaultPayouts/{payoutId} | Update Single Default Payout Settings
*CampaignsDefaultPayoutsForCampaignApi* | [**accountIdCampaignsCampaignIdDefaultPayoutsPost**](docs/Api/CampaignsDefaultPayoutsForCampaignApi.md#accountidcampaignscampaigniddefaultpayoutspost) | **POST** /{accountId}/campaigns/{campaignId}/DefaultPayouts | Add New Default Payout for a Campaign
*CampaignsDefaultPayoutsForCampaignApi* | [**accountIdCampaignsCampaignIdDefaultPayoutsPut**](docs/Api/CampaignsDefaultPayoutsForCampaignApi.md#accountidcampaignscampaigniddefaultpayoutsput) | **PUT** /{accountId}/campaigns/{campaignId}/DefaultPayouts | Update ALL Default Payout Settings for a Campaign
*CampaignsNumberJsTagsApi* | [**accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagDelete**](docs/Api/CampaignsNumberJsTagsApi.md#accountidcampaignscampaignidaffiliatespublisheridnumbersnumberidjstagdelete) | **DELETE** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/Numbers/{numberId}/JsTag | Remove a Js Tag from a Number
*CampaignsNumberJsTagsApi* | [**accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagGet**](docs/Api/CampaignsNumberJsTagsApi.md#accountidcampaignscampaignidaffiliatespublisheridnumbersnumberidjstagget) | **GET** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/Numbers/{numberId}/JsTag | Get Js Tags for a Number
*CampaignsNumberJsTagsApi* | [**accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagJsTagIdPatch**](docs/Api/CampaignsNumberJsTagsApi.md#accountidcampaignscampaignidaffiliatespublisheridnumbersnumberidjstagjstagidpatch) | **PATCH** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/Numbers/{numberId}/JsTag/{JsTagId} | Modify Js Tag for a Number
*CampaignsNumberJsTagsApi* | [**accountIdCampaignsCampaignIdAffiliatesPublisherIdNumbersNumberIdJsTagPost**](docs/Api/CampaignsNumberJsTagsApi.md#accountidcampaignscampaignidaffiliatespublisheridnumbersnumberidjstagpost) | **POST** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/Numbers/{numberId}/JsTag | Create New Js Tag for a Number
*CampaignsPublisherPayoutOverridesApi* | [**accountIdCampaignsCampaignIdAffiliatesPublisherIdPayoutsGet**](docs/Api/CampaignsPublisherPayoutOverridesApi.md#accountidcampaignscampaignidaffiliatespublisheridpayoutsget) | **GET** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/payouts | Get Publisher Payout Overrides
*CampaignsPublisherPayoutOverridesApi* | [**accountIdCampaignsCampaignIdAffiliatesPublisherIdPayoutsPayoutIdDelete**](docs/Api/CampaignsPublisherPayoutOverridesApi.md#accountidcampaignscampaignidaffiliatespublisheridpayoutspayoutiddelete) | **DELETE** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/payouts/{payoutId} | Remove a Publisher Payout Override
*CampaignsPublisherPayoutOverridesApi* | [**accountIdCampaignsCampaignIdAffiliatesPublisherIdPayoutsPayoutIdPatch**](docs/Api/CampaignsPublisherPayoutOverridesApi.md#accountidcampaignscampaignidaffiliatespublisheridpayoutspayoutidpatch) | **PATCH** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/payouts/{payoutId} | Update Single Publisher Payout Override
*CampaignsPublisherPayoutOverridesApi* | [**accountIdCampaignsCampaignIdAffiliatesPublisherIdPayoutsPost**](docs/Api/CampaignsPublisherPayoutOverridesApi.md#accountidcampaignscampaignidaffiliatespublisheridpayoutspost) | **POST** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/payouts | Create New Publisher Payout Override
*CampaignsPublisherPayoutOverridesApi* | [**accountIdCampaignsCampaignIdAffiliatesPublisherIdPayoutsPut**](docs/Api/CampaignsPublisherPayoutOverridesApi.md#accountidcampaignscampaignidaffiliatespublisheridpayoutsput) | **PUT** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/payouts | Update ALL Publisher Payout Overrides
*CampaignsPublisherRTBOverridesApi* | [**accountIdCampaignsCampaignIdRtbPublishersPublisherIdGet**](docs/Api/CampaignsPublisherRTBOverridesApi.md#accountidcampaignscampaignidrtbpublisherspublisheridget) | **GET** /{accountId}/campaigns/{campaignId}/rtb/publishers/{publisherId} | Get RTB Settings for a Publisher
*CampaignsPublisherRTBOverridesApi* | [**accountIdCampaignsCampaignIdRtbPublishersPublisherIdPatch**](docs/Api/CampaignsPublisherRTBOverridesApi.md#accountidcampaignscampaignidrtbpublisherspublisheridpatch) | **PATCH** /{accountId}/campaigns/{campaignId}/rtb/publishers/{publisherId} | Override RTB Settings for a Publisher
*CampaignsPublisherRTBOverridesApi* | [**accountIdCampaignsCampaignIdRtbPublishersPublisherIdUrlGet**](docs/Api/CampaignsPublisherRTBOverridesApi.md#accountidcampaignscampaignidrtbpublisherspublisheridurlget) | **GET** /{accountId}/campaigns/{campaignId}/rtb/publishers/{publisherId}/url | Get RTB URLs for a Publisher
*IVRTreesApi* | [**accountIdCampaignsCampaignIdIVRTreeDelete**](docs/Api/IVRTreesApi.md#accountidcampaignscampaignidivrtreedelete) | **DELETE** /{accountId}/campaigns/{campaignId}/IVRTree | Remove IVR Tree from a Campaign
*IVRTreesApi* | [**accountIdCampaignsCampaignIdIVRTreePost**](docs/Api/IVRTreesApi.md#accountidcampaignscampaignidivrtreepost) | **POST** /{accountId}/campaigns/{campaignId}/IVRTree | Add IVR Tree to a Campaign
*IVRTreesApi* | [**accountIdIvrtreeGet**](docs/Api/IVRTreesApi.md#accountidivrtreeget) | **GET** /{accountId}/ivrtree | Get IVR Trees Associated with Account
*NumberPoolsApi* | [**accountIdNumberpoolsGet**](docs/Api/NumberPoolsApi.md#accountidnumberpoolsget) | **GET** /{accountId}/numberpools | Get Number Pools Associated With Your Account
*NumberPoolsApi* | [**accountIdNumberpoolsNumberPoolIdAffiliatePublisherIdDelete**](docs/Api/NumberPoolsApi.md#accountidnumberpoolsnumberpoolidaffiliatepublisheriddelete) | **DELETE** /{accountId}/numberpools/{numberPoolId}/Affiliate/{publisherId} | Remove a Publisher from a Number Pool
*NumberPoolsApi* | [**accountIdNumberpoolsNumberPoolIdAffiliatePut**](docs/Api/NumberPoolsApi.md#accountidnumberpoolsnumberpoolidaffiliateput) | **PUT** /{accountId}/numberpools/{numberPoolId}/Affiliate | Assign a Publisher to a  Number Pool
*NumberPoolsApi* | [**accountIdNumberpoolsNumberPoolIdAllocateMoreNumbersPut**](docs/Api/NumberPoolsApi.md#accountidnumberpoolsnumberpoolidallocatemorenumbersput) | **PUT** /{accountId}/numberpools/{numberPoolId}/AllocateMoreNumbers | Allocate More Numbers to a Number Pool
*NumberPoolsApi* | [**accountIdNumberpoolsNumberPoolIdAllocationJobsAllocationJobIdDelete**](docs/Api/NumberPoolsApi.md#accountidnumberpoolsnumberpoolidallocationjobsallocationjobiddelete) | **DELETE** /{accountId}/numberpools/{numberPoolId}/AllocationJobs/{allocationJobId} | Delete an Allocation Job
*NumberPoolsApi* | [**accountIdNumberpoolsNumberPoolIdAllocationJobsAllocationJobIdGet**](docs/Api/NumberPoolsApi.md#accountidnumberpoolsnumberpoolidallocationjobsallocationjobidget) | **GET** /{accountId}/numberpools/{numberPoolId}/AllocationJobs/{allocationJobId} | Get Details About an Allocation Job
*NumberPoolsApi* | [**accountIdNumberpoolsNumberPoolIdAllocationJobsGet**](docs/Api/NumberPoolsApi.md#accountidnumberpoolsnumberpoolidallocationjobsget) | **GET** /{accountId}/numberpools/{numberPoolId}/AllocationJobs | Get Allocation Jobs
*NumberPoolsApi* | [**accountIdNumberpoolsNumberPoolIdDelete**](docs/Api/NumberPoolsApi.md#accountidnumberpoolsnumberpooliddelete) | **DELETE** /{accountId}/numberpools/{numberPoolId} | Delete a Number Pool
*NumberPoolsApi* | [**accountIdNumberpoolsNumberPoolIdExpandPut**](docs/Api/NumberPoolsApi.md#accountidnumberpoolsnumberpoolidexpandput) | **PUT** /{accountId}/numberpools/{numberPoolId}/Expand | Increase Size of a Number Pool
*NumberPoolsApi* | [**accountIdNumberpoolsNumberPoolIdFreeNumberCountGet**](docs/Api/NumberPoolsApi.md#accountidnumberpoolsnumberpoolidfreenumbercountget) | **GET** /{accountId}/numberpools/{numberPoolId}/FreeNumberCount | Get Count of Available Numbers in a Number Pool
*NumberPoolsApi* | [**accountIdNumberpoolsNumberPoolIdGet**](docs/Api/NumberPoolsApi.md#accountidnumberpoolsnumberpoolidget) | **GET** /{accountId}/numberpools/{numberPoolId} | Get Details About a Single Number Pool
*NumberPoolsApi* | [**accountIdNumberpoolsNumberPoolIdInboundReferencesGet**](docs/Api/NumberPoolsApi.md#accountidnumberpoolsnumberpoolidinboundreferencesget) | **GET** /{accountId}/numberpools/{numberPoolId}/InboundReferences | Get Inbound References for a Number Pool
*NumberPoolsApi* | [**accountIdNumberpoolsNumberPoolIdNumbersGet**](docs/Api/NumberPoolsApi.md#accountidnumberpoolsnumberpoolidnumbersget) | **GET** /{accountId}/numberpools/{numberPoolId}/Numbers | Get Numbers for a Number Pool
*NumberPoolsApi* | [**accountIdNumberpoolsNumberPoolIdNumbersInUseGet**](docs/Api/NumberPoolsApi.md#accountidnumberpoolsnumberpoolidnumbersinuseget) | **GET** /{accountId}/numberpools/{numberPoolId}/Numbers/InUse | Get Numbers Currently In Use
*NumberPoolsApi* | [**accountIdNumberpoolsNumberPoolIdNumbersNumberIdDelete**](docs/Api/NumberPoolsApi.md#accountidnumberpoolsnumberpoolidnumbersnumberiddelete) | **DELETE** /{accountId}/numberpools/{numberPoolId}/Numbers/{numberId} | Delete a Specific Number from a Number Pool
*NumberPoolsApi* | [**accountIdNumberpoolsNumberPoolIdNumbersPut**](docs/Api/NumberPoolsApi.md#accountidnumberpoolsnumberpoolidnumbersput) | **PUT** /{accountId}/numberpools/{numberPoolId}/Numbers | Add a Specific Number to a Number Pool
*NumberPoolsApi* | [**accountIdNumberpoolsNumberPoolIdNumbersVerifyGet**](docs/Api/NumberPoolsApi.md#accountidnumberpoolsnumberpoolidnumbersverifyget) | **GET** /{accountId}/numberpools/{numberPoolId}/Numbers/Verify | Verify Numbers in Number Pool
*NumberPoolsApi* | [**accountIdNumberpoolsNumberPoolIdPatch**](docs/Api/NumberPoolsApi.md#accountidnumberpoolsnumberpoolidpatch) | **PATCH** /{accountId}/numberpools/{numberPoolId} | Edit Information for a Number Pool
*NumberPoolsApi* | [**accountIdNumberpoolsNumberPoolIdReplacePost**](docs/Api/NumberPoolsApi.md#accountidnumberpoolsnumberpoolidreplacepost) | **POST** /{accountId}/numberpools/{numberPoolId}/Replace | Replace Numbers In a Number Pool
*NumberPoolsApi* | [**accountIdNumberpoolsNumberPoolIdShrinkPost**](docs/Api/NumberPoolsApi.md#accountidnumberpoolsnumberpoolidshrinkpost) | **POST** /{accountId}/numberpools/{numberPoolId}/Shrink | Decrease Size of a Number Pool
*NumberPoolsApi* | [**accountIdNumberpoolsPost**](docs/Api/NumberPoolsApi.md#accountidnumberpoolspost) | **POST** /{accountId}/numberpools | Create New Number Pool
*NumberPoolsApi* | [**accountidStatsNumberPoolsGet**](docs/Api/NumberPoolsApi.md#accountidstatsnumberpoolsget) | **GET** /{accountid}/stats/numberPools | Get number pool stats
*NumbersApi* | [**accountIdNumbersGet**](docs/Api/NumbersApi.md#accountidnumbersget) | **GET** /{accountId}/numbers | Get Numbers Associated with Account
*NumbersApi* | [**accountIdNumbersNumberIdAffiliatePublisherIdDelete**](docs/Api/NumbersApi.md#accountidnumbersnumberidaffiliatepublisheriddelete) | **DELETE** /{accountId}/numbers/{numberId}/Affiliate/{publisherId} | Remove a Publisher from a Number
*NumbersApi* | [**accountIdNumbersNumberIdAffiliatePut**](docs/Api/NumbersApi.md#accountidnumbersnumberidaffiliateput) | **PUT** /{accountId}/numbers/{numberId}/affiliate | Add a Publisher to a Number
*NumbersApi* | [**accountIdNumbersNumberIdDelete**](docs/Api/NumbersApi.md#accountidnumbersnumberiddelete) | **DELETE** /{accountId}/numbers/{numberId} | Delete a Number From Your Account
*NumbersApi* | [**accountIdNumbersNumberIdGet**](docs/Api/NumbersApi.md#accountidnumbersnumberidget) | **GET** /{accountId}/numbers/{numberId} | Get Details About a Specific Number
*NumbersApi* | [**accountIdNumbersNumberIdInboundReferencesGet**](docs/Api/NumbersApi.md#accountidnumbersnumberidinboundreferencesget) | **GET** /{accountId}/numbers/{numberId}/InboundReferences | Get Inbound References for a Specific Number
*NumbersApi* | [**accountIdNumbersPost**](docs/Api/NumbersApi.md#accountidnumberspost) | **POST** /{accountId}/numbers | Create New Number
*NumbersApi* | [**accountIdNumbersReleaseNonUsedNumbersDelete**](docs/Api/NumbersApi.md#accountidnumbersreleasenonusednumbersdelete) | **DELETE** /{accountId}/numbers/ReleaseNonUsedNumbers | Delete Unused Numbers From Your Account
*NumbersApi* | [**accountIdNumbersUCLTDOMQPatch**](docs/Api/NumbersApi.md#accountidnumbersucltdomqpatch) | **PATCH** /{accountId}/numbers/UCLTDOMQ | Edit Information About a Number
*PublisherInvitationsApi* | [**accountIdAffiliatesPublisherIdInvitationsGet**](docs/Api/PublisherInvitationsApi.md#accountidaffiliatespublisheridinvitationsget) | **GET** /{accountId}/Affiliates/{publisherId}/Invitations | Get Invitations for a Publisher
*PublisherInvitationsApi* | [**accountIdAffiliatesPublisherIdInvitationsInvitationIdDelete**](docs/Api/PublisherInvitationsApi.md#accountidaffiliatespublisheridinvitationsinvitationiddelete) | **DELETE** /{accountId}/Affiliates/{publisherId}/Invitations/{invitationId} | Delete an Invitation
*PublisherInvitationsApi* | [**accountIdAffiliatesPublisherIdInvitationsInvitationIdGet**](docs/Api/PublisherInvitationsApi.md#accountidaffiliatespublisheridinvitationsinvitationidget) | **GET** /{accountId}/Affiliates/{publisherId}/Invitations/{invitationId} | Get Details About an Invitation
*PublisherInvitationsApi* | [**accountIdAffiliatesPublisherIdInvitationsPost**](docs/Api/PublisherInvitationsApi.md#accountidaffiliatespublisheridinvitationspost) | **POST** /{accountId}/Affiliates/{publisherId}/Invitations | Invite User to Join Publisher
*PublishersApi* | [**accountIdPublishersGet**](docs/Api/PublishersApi.md#accountidpublishersget) | **GET** /{accountId}/Publishers | Get Publishers
*PublishersApi* | [**accountIdPublishersPost**](docs/Api/PublishersApi.md#accountidpublisherspost) | **POST** /{accountId}/Publishers | Create New Publisher
*PublishersApi* | [**accountIdPublishersPublisherIdDelete**](docs/Api/PublishersApi.md#accountidpublisherspublisheriddelete) | **DELETE** /{accountId}/Publishers/{publisherId} | Delete a Publisher
*PublishersApi* | [**accountIdPublishersPublisherIdGet**](docs/Api/PublishersApi.md#accountidpublisherspublisheridget) | **GET** /{accountId}/Publishers/{publisherId} | Get Details About Single Publisher
*PublishersApi* | [**accountIdPublishersPublisherIdInboundReferencesGet**](docs/Api/PublishersApi.md#accountidpublisherspublisheridinboundreferencesget) | **GET** /{accountId}/Publishers/{publisherId}/InboundReferences | Get Inbound References for a Publisher
*PublishersApi* | [**accountIdPublishersPublisherIdNumbersGet**](docs/Api/PublishersApi.md#accountidpublisherspublisheridnumbersget) | **GET** /{accountId}/Publishers/{publisherId}/Numbers | Get Phone Numbers for a Single Publisher
*PublishersApi* | [**accountIdPublishersPublisherIdPatch**](docs/Api/PublishersApi.md#accountidpublisherspublisheridpatch) | **PATCH** /{accountId}/Publishers/{publisherId} | Edit a Publisher
*PublishersApi* | [**accountIdPublishersPublisherIdUsersGet**](docs/Api/PublishersApi.md#accountidpublisherspublisheridusersget) | **GET** /{accountId}/Publishers/{publisherId}/Users | Get User Details for a Publisher
*PublishersApi* | [**accountIdPublishersStatsGet**](docs/Api/PublishersApi.md#accountidpublishersstatsget) | **GET** /{accountId}/Publishers/stats | Get Call Statistics for Publishers
*RTBBulkModifiersApi* | [**accountIdRtbBulkModifiersFromCSVPut**](docs/Api/RTBBulkModifiersApi.md#accountidrtbbulkmodifiersfromcsvput) | **PUT** /{accountId}/rtb/bulk-modifiers/fromCSV | Create RTB Bulk Adjustment from CSV
*RealTimeBiddingRTBApi* | [**v1EnvironmentRtbIdJsonGet**](docs/Api/RealTimeBiddingRTBApi.md#v1environmentrtbidjsonget) | **GET** /v1/{environment}/{rtbId}.json | GET JSON
*RealTimeBiddingRTBApi* | [**v1EnvironmentRtbIdJsonPost**](docs/Api/RealTimeBiddingRTBApi.md#v1environmentrtbidjsonpost) | **POST** /v1/{environment}/{rtbId}.json | POST JSON
*RealTimeBiddingRTBApi* | [**v1EnvironmentRtbIdXmlGet**](docs/Api/RealTimeBiddingRTBApi.md#v1environmentrtbidxmlget) | **GET** /v1/{environment}/{rtbId}.xml | GET XML
*RealTimeBiddingRTBApi* | [**v1EnvironmentRtbIdXmlPost**](docs/Api/RealTimeBiddingRTBApi.md#v1environmentrtbidxmlpost) | **POST** /v1/{environment}/{rtbId}.xml | POST XML
*TCPAShieldApi* | [**apiV1AccountIdLookupGet**](docs/Api/TCPAShieldApi.md#apiv1accountidlookupget) | **GET** /api/v1/{accountId}/lookup | Lookup Number
*TCPAShieldApi* | [**apiV1AccountIdLookupbulkPost**](docs/Api/TCPAShieldApi.md#apiv1accountidlookupbulkpost) | **POST** /api/v1/{accountId}/lookupbulk | Lookup Numbers Bulk
*TargetGroupsApi* | [**accountIdTargetGroupsGet**](docs/Api/TargetGroupsApi.md#accountidtargetgroupsget) | **GET** /{accountId}/TargetGroups | Get Target Groups
*TargetGroupsApi* | [**accountIdTargetGroupsTargetGroupIdBuyerBuyerIdDelete**](docs/Api/TargetGroupsApi.md#accountidtargetgroupstargetgroupidbuyerbuyeriddelete) | **DELETE** /{accountId}/TargetGroups/{targetGroupId}/Buyer/{buyerId} | Remove Buyer from Target Group
*TargetGroupsApi* | [**accountIdTargetGroupsTargetGroupIdBuyerPut**](docs/Api/TargetGroupsApi.md#accountidtargetgroupstargetgroupidbuyerput) | **PUT** /{accountId}/TargetGroups/{targetGroupId}/Buyer | Assign Target Group to a Buyer
*TargetGroupsApi* | [**accountIdTargetGroupsTargetGroupIdCountsGet**](docs/Api/TargetGroupsApi.md#accountidtargetgroupstargetgroupidcountsget) | **GET** /{accountId}/TargetGroups/{targetGroupId}/Counts | Get Stats for Specific Target Group
*TargetGroupsApi* | [**accountIdTargetGroupsTargetGroupIdDelete**](docs/Api/TargetGroupsApi.md#accountidtargetgroupstargetgroupiddelete) | **DELETE** /{accountId}/TargetGroups/{targetGroupId} | Delete Target Group
*TargetGroupsApi* | [**accountIdTargetGroupsTargetGroupIdGet**](docs/Api/TargetGroupsApi.md#accountidtargetgroupstargetgroupidget) | **GET** /{accountId}/TargetGroups/{targetGroupId} | Get Details about Specific Target Group
*TargetGroupsApi* | [**accountIdTargetGroupsTargetGroupIdInboundReferencesGet**](docs/Api/TargetGroupsApi.md#accountidtargetgroupstargetgroupidinboundreferencesget) | **GET** /{accountId}/TargetGroups/{targetGroupId}/InboundReferences | Get Inbound References for Specific Target Group
*TargetGroupsApi* | [**accountIdTargetGroupsTargetGroupIdPatch**](docs/Api/TargetGroupsApi.md#accountidtargetgroupstargetgroupidpatch) | **PATCH** /{accountId}/TargetGroups/{targetGroupId}/ | Edit Target Group
*TargetGroupsApi* | [**accountIdTargetGroupsTargetGroupIdResetCountDelete**](docs/Api/TargetGroupsApi.md#accountidtargetgroupstargetgroupidresetcountdelete) | **DELETE** /{accountId}/TargetGroups/{targetGroupId}/ResetCount | Reset Counts for Target Group
*TargetGroupsApi* | [**accountIdTargetGroupsTargetGroupIdTargetsGet**](docs/Api/TargetGroupsApi.md#accountidtargetgroupstargetgroupidtargetsget) | **GET** /{accountId}/TargetGroups/{targetGroupId}/Targets | Get Targets for Target Group
*TargetGroupsApi* | [**accountIdTargetGroupsTargetGroupIdTargetsPatch**](docs/Api/TargetGroupsApi.md#accountidtargetgroupstargetgroupidtargetspatch) | **PATCH** /{accountId}/TargetGroups/{targetGroupId}/Targets | Add Single Target to Target Group
*TargetGroupsApi* | [**accountIdTargetGroupsTargetGroupIdTargetsTargetIdDelete**](docs/Api/TargetGroupsApi.md#accountidtargetgroupstargetgroupidtargetstargetiddelete) | **DELETE** /{accountId}/TargetGroups/{targetGroupId}/Targets/{targetId} | Delete Single Target from Target Group
*TargetGroupsApi* | [**accountIdTargetgroupsPost**](docs/Api/TargetGroupsApi.md#accountidtargetgroupspost) | **POST** /{accountId}/targetgroups | Create Target Group
*TargetGroupsApi* | [**accountIdTargetgroupsTargetGroupIdTargetsBulkUpdatePatch**](docs/Api/TargetGroupsApi.md#accountidtargetgroupstargetgroupidtargetsbulkupdatepatch) | **PATCH** /{accountId}/targetgroups/{targetGroupId}/targets/bulkUpdate | Add/Remove Multiple Targets to/from Target Group
*TargetsApi* | [**accountIdTargetsGet**](docs/Api/TargetsApi.md#accountidtargetsget) | **GET** /{accountId}/targets | Get Targets
*TargetsApi* | [**accountIdTargetsIsDuplicatePost**](docs/Api/TargetsApi.md#accountidtargetsisduplicatepost) | **POST** /{accountId}/targets/isDuplicate | Check Duplicate Targets
*TargetsApi* | [**accountIdTargetsPost**](docs/Api/TargetsApi.md#accountidtargetspost) | **POST** /{accountId}/targets | Create New Target
*TargetsApi* | [**accountIdTargetsTargetIdBuyerBuyerIdDelete**](docs/Api/TargetsApi.md#accountidtargetstargetidbuyerbuyeriddelete) | **DELETE** /{accountId}/targets/{targetId}/Buyer/{buyerId} | Delete Buyer From Target
*TargetsApi* | [**accountIdTargetsTargetIdBuyerPut**](docs/Api/TargetsApi.md#accountidtargetstargetidbuyerput) | **PUT** /{accountId}/targets/{targetId}/Buyer | Assign Target to Buyer
*TargetsApi* | [**accountIdTargetsTargetIdCountsGet**](docs/Api/TargetsApi.md#accountidtargetstargetidcountsget) | **GET** /{accountId}/targets/{targetId}/Counts | Get Stats for a Specific Target
*TargetsApi* | [**accountIdTargetsTargetIdDelete**](docs/Api/TargetsApi.md#accountidtargetstargetiddelete) | **DELETE** /{accountId}/targets/{targetId} | Delete Target
*TargetsApi* | [**accountIdTargetsTargetIdGet**](docs/Api/TargetsApi.md#accountidtargetstargetidget) | **GET** /{accountId}/targets/{targetId} | Get Details About a Specific Target
*TargetsApi* | [**accountIdTargetsTargetIdInboundReferencesGet**](docs/Api/TargetsApi.md#accountidtargetstargetidinboundreferencesget) | **GET** /{accountId}/targets/{targetId}/InboundReferences | Get Inbound References for a Specific Target
*TargetsApi* | [**accountIdTargetsTargetIdPatch**](docs/Api/TargetsApi.md#accountidtargetstargetidpatch) | **PATCH** /{accountId}/targets/{targetId} | Update Target
*TargetsApi* | [**accountIdTargetsTargetIdResetCountDelete**](docs/Api/TargetsApi.md#accountidtargetstargetidresetcountdelete) | **DELETE** /{accountId}/targets/{targetId}/ResetCount | Reset Count for a Specific Target
*WebhooksApi* | [**accountIdWebHooksCreateConversionPost**](docs/Api/WebhooksApi.md#accountidwebhookscreateconversionpost) | **POST** /{accountId}/WebHooks/CreateConversion | Create New Webhook
*WebhooksApi* | [**accountIdWebHooksGet**](docs/Api/WebhooksApi.md#accountidwebhooksget) | **GET** /{accountId}/WebHooks | Get Webhooks
*WebhooksApi* | [**accountIdWebHooksWebHookIdDelete**](docs/Api/WebhooksApi.md#accountidwebhookswebhookiddelete) | **DELETE** /{accountId}/WebHooks/{webHookId} | Delete a Webhook
*WebhooksApi* | [**accountIdWebHooksWebHookIdGet**](docs/Api/WebhooksApi.md#accountidwebhookswebhookidget) | **GET** /{accountId}/WebHooks/{webHookId} | Get Details for a Single Webhook

## Models


## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
