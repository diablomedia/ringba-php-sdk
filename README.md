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



// Configure Bearer authorization: httpBearer
$config = Ringba\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ringba\Api\APITokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createApiTokenRequest = {"name":"Test"}; // \Ringba\Model\CreateApiTokenRequest | 

try {
    $apiInstance->createApiToken($createApiTokenRequest);
} catch (Exception $e) {
    echo 'Exception when calling APITokensApi->createApiToken: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ringba.com/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*APITokensApi* | [**createApiToken**](docs/Api/APITokensApi.md#createapitoken) | **POST** /ApiTokens | Create Api Token
*APITokensApi* | [**deleteApiToken**](docs/Api/APITokensApi.md#deleteapitoken) | **DELETE** /ApiTokens/{apiTokenId} | Delete Api Token
*APITokensApi* | [**getAPITokens**](docs/Api/APITokensApi.md#getapitokens) | **GET** /ApiTokens | Get API Tokens
*AccountInformationApi* | [**getAccountInfousingAPIToken**](docs/Api/AccountInformationApi.md#getaccountinfousingapitoken) | **GET** /ringbaaccounts | Get Account Info using API Token
*AddressesApi* | [**createNewAddress**](docs/Api/AddressesApi.md#createnewaddress) | **POST** /{accountId}/addresses | Create New Address
*AddressesApi* | [**deleteAddress**](docs/Api/AddressesApi.md#deleteaddress) | **DELETE** /{accountId}/addresses/{addressId} | Delete Address
*AddressesApi* | [**editAddress**](docs/Api/AddressesApi.md#editaddress) | **PATCH** /{accountId}/addresses/{addressId} | Edit Address
*AddressesApi* | [**getAddressbyID**](docs/Api/AddressesApi.md#getaddressbyid) | **GET** /{accountId}/addresses/{addressId} | Get Address by ID
*AddressesApi* | [**getAddresses**](docs/Api/AddressesApi.md#getaddresses) | **GET** /{accountId}/addresses | Get Addresses
*AddressesApi* | [**getCountriesAssociatedWithAccount**](docs/Api/AddressesApi.md#getcountriesassociatedwithaccount) | **GET** /{accountId}/addresses/countries | Get Countries Associated With Account
*AddressesApi* | [**getDetailsandRequirementsforaSpecificCountry**](docs/Api/AddressesApi.md#getdetailsandrequirementsforaspecificcountry) | **GET** /{accountId}/addresses/requirements/{countryCode} | Get Details and Requirements for a Specific Country
*AddressesApi* | [**setDefaultAddress**](docs/Api/AddressesApi.md#setdefaultaddress) | **POST** /{accountId}/addresses/{addressId}/SetDefault | Set Default Address
*BearerTokensApi* | [**getUserAuthenticationBearerToken**](docs/Api/BearerTokensApi.md#getuserauthenticationbearertoken) | **POST** /token | Get User Authentication Bearer Token
*BlockedNumbersApi* | [**blockaPhoneNumber**](docs/Api/BlockedNumbersApi.md#blockaphonenumber) | **POST** /{accountId}/blockedNumbers | Block a Phone Number
*BlockedNumbersApi* | [**getBlockedPhoneNumbers**](docs/Api/BlockedNumbersApi.md#getblockedphonenumbers) | **GET** /{accountId}/blockedNumbers | Get Blocked Phone Numbers
*BlockedNumbersApi* | [**getDetailsAboutaSingleBlockedNumber**](docs/Api/BlockedNumbersApi.md#getdetailsaboutasingleblockednumber) | **GET** /{accountId}/blockedNumbers/{blockedNumberId} | Get Details About a Single Blocked Number
*BlockedNumbersApi* | [**unblockaPhoneNumber**](docs/Api/BlockedNumbersApi.md#unblockaphonenumber) | **DELETE** /{accountId}/blockedNumbers/{blockedNumberId} | Unblock a Phone Number
*BlockedNumbersApi* | [**updateaBlockedPhoneNumber**](docs/Api/BlockedNumbersApi.md#updateablockedphonenumber) | **PATCH** /{accountId}/blockedNumbers/{blockedNumberId} | Update a Blocked Phone Number
*BuyersApi* | [**getBuyers**](docs/Api/BuyersApi.md#getbuyers) | **GET** /{accountId}/Buyers | Get Buyers
*CallAdjustmentsApi* | [**addAnnotationtoaCall**](docs/Api/CallAdjustmentsApi.md#addannotationtoacall) | **POST** /{accountId}/calls/annotate | Add Annotation to a Call
*CallAdjustmentsApi* | [**adjustRevenueandOrPaymentforaCallWithabsoluteadjustments**](docs/Api/CallAdjustmentsApi.md#adjustrevenueandorpaymentforacallwithabsoluteadjustments) | **POST** /{accountId}/calls/payments/override | Adjust Revenue and/or Payment for a Call (with absolute adjustments)
*CallAdjustmentsApi* | [**adjustRevenueandOrPaymentforaCallWithrelativeadjustments**](docs/Api/CallAdjustmentsApi.md#adjustrevenueandorpaymentforacallwithrelativeadjustments) | **POST** /{accountId}/calls/payments | Adjust Revenue and/or Payment for a Call (with relative adjustments)
*CallAdjustmentsApi* | [**bUYERRequestforPayoutAdjustmentWithabsoluteadjustment**](docs/Api/CallAdjustmentsApi.md#buyerrequestforpayoutadjustmentwithabsoluteadjustment) | **POST** /{buyerAccountId}/calls/requestConversionOverride | BUYER Request for Payout Adjustment (with absolute adjustment)
*CallAdjustmentsApi* | [**bUYERRequestforPayoutAdjustmentWithrelativeadjustment**](docs/Api/CallAdjustmentsApi.md#buyerrequestforpayoutadjustmentwithrelativeadjustment) | **POST** /{buyerAccountId}/calls/requestConversionAdjustment | BUYER Request for Payout Adjustment (with relative adjustment)
*CallAdjustmentsApi* | [**voidRevenueandOrPaymentforaCall**](docs/Api/CallAdjustmentsApi.md#voidrevenueandorpaymentforacall) | **POST** /{accountId}/calls/void | Void Revenue and/or Payment for a Call
*CampaignInformationApi* | [**cloneaCampaign**](docs/Api/CampaignInformationApi.md#cloneacampaign) | **POST** /{accountId}/campaigns/{campaignId}/clone | Clone a Campaign
*CampaignInformationApi* | [**createNewCampaign**](docs/Api/CampaignInformationApi.md#createnewcampaign) | **POST** /{accountId}/campaigns | Create New Campaign
*CampaignInformationApi* | [**deleteaCampaign**](docs/Api/CampaignInformationApi.md#deleteacampaign) | **DELETE** /{accountId}/campaigns/{campaignId} | Delete a Campaign
*CampaignInformationApi* | [**getCampaigns**](docs/Api/CampaignInformationApi.md#getcampaigns) | **GET** /{accountId}/campaigns | Get Campaigns
*CampaignInformationApi* | [**getCampaignsStatsonly**](docs/Api/CampaignInformationApi.md#getcampaignsstatsonly) | **GET** /{accountId}/campaigns/stats | Get Campaigns Stats only
*CampaignInformationApi* | [**getInboundReferencesforaSingleCampaign**](docs/Api/CampaignInformationApi.md#getinboundreferencesforasinglecampaign) | **GET** /{accountId}/campaigns/{campaignId}/InboundReferences | Get Inbound References for a Single Campaign
*CampaignInformationApi* | [**getInformationAboutaSingleCampaign**](docs/Api/CampaignInformationApi.md#getinformationaboutasinglecampaign) | **GET** /{accountId}/campaigns/{campaignId} | Get Information About a Single Campaign
*CampaignInformationApi* | [**updateaCampaign**](docs/Api/CampaignInformationApi.md#updateacampaign) | **PATCH** /{accountId}/campaigns/{campaignId} | Update a Campaign
*CampaignNumbersApi* | [**addPublisherNumbertoaCampaign**](docs/Api/CampaignNumbersApi.md#addpublishernumbertoacampaign) | **PATCH** /{accountId}/campaigns/{campaignId}/affiliateNumbers | Add Publisher Number to a Campaign
*CampaignNumbersApi* | [**addaDefaultNumberforaCampaign**](docs/Api/CampaignNumbersApi.md#addadefaultnumberforacampaign) | **PATCH** /{accountId}/campaigns/{campaignId}/defaultNumber | Add a Default Number for a Campaign
*CampaignNumbersApi* | [**removeDefaultNumberfromaCampaign**](docs/Api/CampaignNumbersApi.md#removedefaultnumberfromacampaign) | **DELETE** /{accountId}/campaigns/{campaignId}/defaultNumber | Remove Default Number from a Campaign
*CampaignOffersApi* | [**createaDraftOfferforaCampaign**](docs/Api/CampaignOffersApi.md#createadraftofferforacampaign) | **PUT** /{accountId}/campaigns/{campaignId}/Offers/Draft | Create a Draft Offer for a Campaign
*CampaignOffersApi* | [**deletePublishedOfferforaCampaign**](docs/Api/CampaignOffersApi.md#deletepublishedofferforacampaign) | **DELETE** /{accountId}/campaigns/{campaignId}/Offers/Published | Delete Published Offer for a Campaign
*CampaignOffersApi* | [**deleteaDraftOfferBeforePublishing**](docs/Api/CampaignOffersApi.md#deleteadraftofferbeforepublishing) | **DELETE** /{accountId}/campaigns/{campaignId}/Offers/Draft | Delete a Draft Offer Before Publishing
*CampaignOffersApi* | [**getAllOffersforaCampaign**](docs/Api/CampaignOffersApi.md#getalloffersforacampaign) | **GET** /{accountId}/campaigns/{campaignId}/Offers | Get All Offers for a Campaign
*CampaignOffersApi* | [**getDraftOffersforaCampaign**](docs/Api/CampaignOffersApi.md#getdraftoffersforacampaign) | **GET** /{accountId}/campaigns/{campaignId}/Offers/Draft | Get Draft Offers for a Campaign
*CampaignOffersApi* | [**getPublishedOffersforaCampaign**](docs/Api/CampaignOffersApi.md#getpublishedoffersforacampaign) | **GET** /{accountId}/campaigns/{campaignId}/Offers/Published | Get Published Offers for a Campaign
*CampaignOffersApi* | [**invitePublishertoParticipateinOffer**](docs/Api/CampaignOffersApi.md#invitepublishertoparticipateinoffer) | **POST** /{accountId}/campaigns/{campaignId}/Offers/Published/Invite | Invite Publisher to Participate in Offer
*CampaignOffersApi* | [**pauseaPublishedOfferforaCampaign**](docs/Api/CampaignOffersApi.md#pauseapublishedofferforacampaign) | **POST** /{accountId}/campaigns/{campaignId}/Offers/Published/Pause | Pause a Published Offer for a Campaign
*CampaignOffersApi* | [**publishDraftOffers**](docs/Api/CampaignOffersApi.md#publishdraftoffers) | **POST** /{accountId}/campaigns/{campaignId}/Offers/Draft/Publish | Publish Draft Offers
*CampaignOffersApi* | [**resumeaPausedOffer**](docs/Api/CampaignOffersApi.md#resumeapausedoffer) | **POST** /{accountId}/campaigns/{campaignId}/Offers/Published/Resume | Resume a Paused Offer
*CampaignOffersApi* | [**viewPublishersParticipatinginPublishedOffer**](docs/Api/CampaignOffersApi.md#viewpublishersparticipatinginpublishedoffer) | **GET** /{accountId}/campaigns/{campaignId}/Offers/Published/Participants | View Publishers Participating in Published Offer
*CampaignPublishersApi* | [**addPublishertoaCampaign**](docs/Api/CampaignPublishersApi.md#addpublishertoacampaign) | **PATCH** /{accountId}/campaigns/{campaignId}/affiliates | Add Publisher to a Campaign
*CampaignPublishersApi* | [**removePublisherfromaCampaign**](docs/Api/CampaignPublishersApi.md#removepublisherfromacampaign) | **DELETE** /{accountId}/campaigns/{campaignId}/affiliates/{publisherId} | Remove Publisher from a Campaign
*CampaignRTBSettingsApi* | [**disableRTBforaCampaign**](docs/Api/CampaignRTBSettingsApi.md#disablertbforacampaign) | **DELETE** /{accountId}/campaigns/{campaignId}/rtb | Disable RTB for a Campaign
*CampaignRTBSettingsApi* | [**editRTBSettingsforaCampaign**](docs/Api/CampaignRTBSettingsApi.md#editrtbsettingsforacampaign) | **PATCH** /{accountId}/campaigns/{campaignId}/rtb | Edit RTB Settings for a Campaign
*CampaignRTBSettingsApi* | [**enableRTBforaCampaign**](docs/Api/CampaignRTBSettingsApi.md#enablertbforacampaign) | **PUT** /{accountId}/campaigns/{campaignId}/rtb | Enable RTB for a Campaign
*CampaignRTBSettingsApi* | [**getRTBforCampaign**](docs/Api/CampaignRTBSettingsApi.md#getrtbforcampaign) | **GET** /{accountId}/campaigns/{campaignId}/rtb | Get RTB for Campaign
*CampaignTargetRoutesApi* | [**addTargetRoutetoaCampaign**](docs/Api/CampaignTargetRoutesApi.md#addtargetroutetoacampaign) | **POST** /{accountId}/campaigns/{campaignId}/Routes | Add Target Route to a Campaign
*CampaignTargetRoutesApi* | [**removeTargetRoutefromaCampaign**](docs/Api/CampaignTargetRoutesApi.md#removetargetroutefromacampaign) | **DELETE** /{accountId}/campaigns/{campaignId}/Routes | Remove Target Route from a Campaign
*DefaultPayoutsForCampaignApi* | [**addNewDefaultPayoutforaCampaign**](docs/Api/DefaultPayoutsForCampaignApi.md#addnewdefaultpayoutforacampaign) | **POST** /{accountId}/campaigns/{campaignId}/DefaultPayouts | Add New Default Payout for a Campaign
*DefaultPayoutsForCampaignApi* | [**removeDefaultPayoutSettingformaCampaign**](docs/Api/DefaultPayoutsForCampaignApi.md#removedefaultpayoutsettingformacampaign) | **DELETE** /{accountId}/campaigns/{campaignId}/DefaultPayouts/{payoutId} | Remove Default Payout Setting form a Campaign
*DefaultPayoutsForCampaignApi* | [**updateALLDefaultPayoutSettingsforaCampaign**](docs/Api/DefaultPayoutsForCampaignApi.md#updatealldefaultpayoutsettingsforacampaign) | **PUT** /{accountId}/campaigns/{campaignId}/DefaultPayouts | Update ALL Default Payout Settings for a Campaign
*DefaultPayoutsForCampaignApi* | [**updateSingleDefaultPayoutSettings**](docs/Api/DefaultPayoutsForCampaignApi.md#updatesingledefaultpayoutsettings) | **PATCH** /{accountId}/campaigns/{campaignId}/DefaultPayouts/{payoutId} | Update Single Default Payout Settings
*ExportCallLogsApi* | [**exportCSVByJobId**](docs/Api/ExportCallLogsApi.md#exportcsvbyjobid) | **GET** /{accountId}/calllogs/export/{CSVJobId} | Export CSV By Job Id
*ExportCallLogsApi* | [**exportCallLogCSV**](docs/Api/ExportCallLogsApi.md#exportcalllogcsv) | **POST** /{accountId}/calllogs/export/csv | Export Call Log - CSV
*GetCallLogsApi* | [**getCallLog**](docs/Api/GetCallLogsApi.md#getcalllog) | **POST** /{accountId}/calllogs | Get Call Log
*GetCallLogsApi* | [**getColumnNames**](docs/Api/GetCallLogsApi.md#getcolumnnames) | **GET** /{accountId}/calllogs/columns | Get Column Names
*GetCallLogsApi* | [**getDetailsAboutSpecificCalls**](docs/Api/GetCallLogsApi.md#getdetailsaboutspecificcalls) | **POST** /{accountId}/calllogs/detail | Get Details About Specific Calls
*GetCallLogsApi* | [**getTagsforFilteringCallLog**](docs/Api/GetCallLogsApi.md#gettagsforfilteringcalllog) | **GET** /{accountId}/calllogs/tags | Get Tags for Filtering Call Log
*IVRTreesApi* | [**addIVRTreetoaCampaign**](docs/Api/IVRTreesApi.md#addivrtreetoacampaign) | **POST** /{accountId}/campaigns/{campaignId}/IVRTree | Add IVR Tree to a Campaign
*IVRTreesApi* | [**getIVRTreesAssociatedwithAccount**](docs/Api/IVRTreesApi.md#getivrtreesassociatedwithaccount) | **GET** /{accountId}/ivrtree | Get IVR Trees Associated with Account
*IVRTreesApi* | [**removeIVRTreefromaCampaign**](docs/Api/IVRTreesApi.md#removeivrtreefromacampaign) | **DELETE** /{accountId}/campaigns/{campaignId}/IVRTree | Remove IVR Tree from a Campaign
*NumberJsTagsApi* | [**createNewJsTagforaNumber**](docs/Api/NumberJsTagsApi.md#createnewjstagforanumber) | **POST** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/Numbers/{numberId}/JsTag | Create New Js Tag for a Number
*NumberJsTagsApi* | [**getJsTagsforaNumber**](docs/Api/NumberJsTagsApi.md#getjstagsforanumber) | **GET** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/Numbers/{numberId}/JsTag | Get Js Tags for a Number
*NumberJsTagsApi* | [**modifyJsTagforaNumber**](docs/Api/NumberJsTagsApi.md#modifyjstagforanumber) | **PATCH** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/Numbers/{numberId}/JsTag/{JsTagId} | Modify Js Tag for a Number
*NumberJsTagsApi* | [**removeaJsTagfromaNumber**](docs/Api/NumberJsTagsApi.md#removeajstagfromanumber) | **DELETE** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/Numbers/{numberId}/JsTag | Remove a Js Tag from a Number
*NumberPoolsApi* | [**addaSpecificNumbertoaNumberPool**](docs/Api/NumberPoolsApi.md#addaspecificnumbertoanumberpool) | **PUT** /{accountId}/numberpools/{numberPoolId}/Numbers | Add a Specific Number to a Number Pool
*NumberPoolsApi* | [**allocateMoreNumberstoaNumberPool**](docs/Api/NumberPoolsApi.md#allocatemorenumberstoanumberpool) | **PUT** /{accountId}/numberpools/{numberPoolId}/AllocateMoreNumbers | Allocate More Numbers to a Number Pool
*NumberPoolsApi* | [**assignaPublishertoaNumberPool**](docs/Api/NumberPoolsApi.md#assignapublishertoanumberpool) | **PUT** /{accountId}/numberpools/{numberPoolId}/Affiliate | Assign a Publisher to a  Number Pool
*NumberPoolsApi* | [**createNewNumberPool**](docs/Api/NumberPoolsApi.md#createnewnumberpool) | **POST** /{accountId}/numberpools | Create New Number Pool
*NumberPoolsApi* | [**decreaseSizeofaNumberPool**](docs/Api/NumberPoolsApi.md#decreasesizeofanumberpool) | **POST** /{accountId}/numberpools/{numberPoolId}/Shrink | Decrease Size of a Number Pool
*NumberPoolsApi* | [**deleteaNumberPool**](docs/Api/NumberPoolsApi.md#deleteanumberpool) | **DELETE** /{accountId}/numberpools/{numberPoolId} | Delete a Number Pool
*NumberPoolsApi* | [**deleteaSpecificNumberfromaNumberPool**](docs/Api/NumberPoolsApi.md#deleteaspecificnumberfromanumberpool) | **DELETE** /{accountId}/numberpools/{numberPoolId}/Numbers/{numberId} | Delete a Specific Number from a Number Pool
*NumberPoolsApi* | [**deleteanAllocationJob**](docs/Api/NumberPoolsApi.md#deleteanallocationjob) | **DELETE** /{accountId}/numberpools/{numberPoolId}/AllocationJobs/{allocationJobId} | Delete an Allocation Job
*NumberPoolsApi* | [**editInformationforaNumberPool**](docs/Api/NumberPoolsApi.md#editinformationforanumberpool) | **PATCH** /{accountId}/numberpools/{numberPoolId} | Edit Information for a Number Pool
*NumberPoolsApi* | [**getAllocationJobs**](docs/Api/NumberPoolsApi.md#getallocationjobs) | **GET** /{accountId}/numberpools/{numberPoolId}/AllocationJobs | Get Allocation Jobs
*NumberPoolsApi* | [**getCountofAvailableNumbersinaNumberPool**](docs/Api/NumberPoolsApi.md#getcountofavailablenumbersinanumberpool) | **GET** /{accountId}/numberpools/{numberPoolId}/FreeNumberCount | Get Count of Available Numbers in a Number Pool
*NumberPoolsApi* | [**getDetailsAboutaSingleNumberPool**](docs/Api/NumberPoolsApi.md#getdetailsaboutasinglenumberpool) | **GET** /{accountId}/numberpools/{numberPoolId} | Get Details About a Single Number Pool
*NumberPoolsApi* | [**getDetailsAboutanAllocationJob**](docs/Api/NumberPoolsApi.md#getdetailsaboutanallocationjob) | **GET** /{accountId}/numberpools/{numberPoolId}/AllocationJobs/{allocationJobId} | Get Details About an Allocation Job
*NumberPoolsApi* | [**getInboundReferencesforaNumberPool**](docs/Api/NumberPoolsApi.md#getinboundreferencesforanumberpool) | **GET** /{accountId}/numberpools/{numberPoolId}/InboundReferences | Get Inbound References for a Number Pool
*NumberPoolsApi* | [**getNumberPoolsAssociatedWithYourAccount**](docs/Api/NumberPoolsApi.md#getnumberpoolsassociatedwithyouraccount) | **GET** /{accountId}/numberpools | Get Number Pools Associated With Your Account
*NumberPoolsApi* | [**getNumbersCurrentlyInUse**](docs/Api/NumberPoolsApi.md#getnumberscurrentlyinuse) | **GET** /{accountId}/numberpools/{numberPoolId}/Numbers/InUse | Get Numbers Currently In Use
*NumberPoolsApi* | [**getNumbersforaNumberPool**](docs/Api/NumberPoolsApi.md#getnumbersforanumberpool) | **GET** /{accountId}/numberpools/{numberPoolId}/Numbers | Get Numbers for a Number Pool
*NumberPoolsApi* | [**getnumberpoolstats**](docs/Api/NumberPoolsApi.md#getnumberpoolstats) | **GET** /{accountid}/stats/numberPools | Get number pool stats
*NumberPoolsApi* | [**increaseSizeofaNumberPool**](docs/Api/NumberPoolsApi.md#increasesizeofanumberpool) | **PUT** /{accountId}/numberpools/{numberPoolId}/Expand | Increase Size of a Number Pool
*NumberPoolsApi* | [**removeaPublisherfromaNumberPool**](docs/Api/NumberPoolsApi.md#removeapublisherfromanumberpool) | **DELETE** /{accountId}/numberpools/{numberPoolId}/Affiliate/{publisherId} | Remove a Publisher from a Number Pool
*NumberPoolsApi* | [**replaceNumbersInaNumberPool**](docs/Api/NumberPoolsApi.md#replacenumbersinanumberpool) | **POST** /{accountId}/numberpools/{numberPoolId}/Replace | Replace Numbers In a Number Pool
*NumberPoolsApi* | [**verifyNumbersinNumberPool**](docs/Api/NumberPoolsApi.md#verifynumbersinnumberpool) | **GET** /{accountId}/numberpools/{numberPoolId}/Numbers/Verify | Verify Numbers in Number Pool
*NumbersApi* | [**addaPublishertoaNumber**](docs/Api/NumbersApi.md#addapublishertoanumber) | **PUT** /{accountId}/numbers/{numberId}/affiliate | Add a Publisher to a Number
*NumbersApi* | [**createNewNumber**](docs/Api/NumbersApi.md#createnewnumber) | **POST** /{accountId}/numbers | Create New Number
*NumbersApi* | [**deleteUnusedNumbersFromYourAccount**](docs/Api/NumbersApi.md#deleteunusednumbersfromyouraccount) | **DELETE** /{accountId}/numbers/ReleaseNonUsedNumbers | Delete Unused Numbers From Your Account
*NumbersApi* | [**deleteaNumberFromYourAccount**](docs/Api/NumbersApi.md#deleteanumberfromyouraccount) | **DELETE** /{accountId}/numbers/{numberId} | Delete a Number From Your Account
*NumbersApi* | [**editInformationAboutaNumber**](docs/Api/NumbersApi.md#editinformationaboutanumber) | **PATCH** /{accountId}/numbers/UCLTDOMQ | Edit Information About a Number
*NumbersApi* | [**getDetailsAboutaSpecificNumber**](docs/Api/NumbersApi.md#getdetailsaboutaspecificnumber) | **GET** /{accountId}/numbers/{numberId} | Get Details About a Specific Number
*NumbersApi* | [**getInboundReferencesforaSpecificNumber**](docs/Api/NumbersApi.md#getinboundreferencesforaspecificnumber) | **GET** /{accountId}/numbers/{numberId}/InboundReferences | Get Inbound References for a Specific Number
*NumbersApi* | [**getNumbersAssociatedwithAccount**](docs/Api/NumbersApi.md#getnumbersassociatedwithaccount) | **GET** /{accountId}/numbers | Get Numbers Associated with Account
*NumbersApi* | [**removeaPublisherfromaNumber**](docs/Api/NumbersApi.md#removeapublisherfromanumber) | **DELETE** /{accountId}/numbers/{numberId}/Affiliate/{publisherId} | Remove a Publisher from a Number
*PublisherInvitationsApi* | [**deleteanInvitation**](docs/Api/PublisherInvitationsApi.md#deleteaninvitation) | **DELETE** /{accountId}/Affiliates/{publisherId}/Invitations/{invitationId} | Delete an Invitation
*PublisherInvitationsApi* | [**getDetailsAboutanInvitation**](docs/Api/PublisherInvitationsApi.md#getdetailsaboutaninvitation) | **GET** /{accountId}/Affiliates/{publisherId}/Invitations/{invitationId} | Get Details About an Invitation
*PublisherInvitationsApi* | [**getInvitationsforaPublisher**](docs/Api/PublisherInvitationsApi.md#getinvitationsforapublisher) | **GET** /{accountId}/Affiliates/{publisherId}/Invitations | Get Invitations for a Publisher
*PublisherInvitationsApi* | [**inviteUsertoJoinPublisher**](docs/Api/PublisherInvitationsApi.md#inviteusertojoinpublisher) | **POST** /{accountId}/Affiliates/{publisherId}/Invitations | Invite User to Join Publisher
*PublisherPayoutOverridesApi* | [**createNewPublisherPayoutOverride**](docs/Api/PublisherPayoutOverridesApi.md#createnewpublisherpayoutoverride) | **POST** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/payouts | Create New Publisher Payout Override
*PublisherPayoutOverridesApi* | [**getPublisherPayoutOverrides**](docs/Api/PublisherPayoutOverridesApi.md#getpublisherpayoutoverrides) | **GET** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/payouts | Get Publisher Payout Overrides
*PublisherPayoutOverridesApi* | [**removeaPublisherPayoutOverride**](docs/Api/PublisherPayoutOverridesApi.md#removeapublisherpayoutoverride) | **DELETE** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/payouts/{payoutId} | Remove a Publisher Payout Override
*PublisherPayoutOverridesApi* | [**updateALLPublisherPayoutOverrides**](docs/Api/PublisherPayoutOverridesApi.md#updateallpublisherpayoutoverrides) | **PUT** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/payouts | Update ALL Publisher Payout Overrides
*PublisherPayoutOverridesApi* | [**updateSinglePublisherPayoutOverride**](docs/Api/PublisherPayoutOverridesApi.md#updatesinglepublisherpayoutoverride) | **PATCH** /{accountId}/campaigns/{campaignId}/Affiliates/{publisherId}/payouts/{payoutId} | Update Single Publisher Payout Override
*PublisherRTBOverridesApi* | [**getRTBSettingsforaPublisher**](docs/Api/PublisherRTBOverridesApi.md#getrtbsettingsforapublisher) | **GET** /{accountId}/campaigns/{campaignId}/rtb/publishers/{publisherId} | Get RTB Settings for a Publisher
*PublisherRTBOverridesApi* | [**getRTBURLsforaPublisher**](docs/Api/PublisherRTBOverridesApi.md#getrtburlsforapublisher) | **GET** /{accountId}/campaigns/{campaignId}/rtb/publishers/{publisherId}/url | Get RTB URLs for a Publisher
*PublisherRTBOverridesApi* | [**overrideRTBSettingsforaPublisher**](docs/Api/PublisherRTBOverridesApi.md#overridertbsettingsforapublisher) | **PATCH** /{accountId}/campaigns/{campaignId}/rtb/publishers/{publisherId} | Override RTB Settings for a Publisher
*PublishersApi* | [**createNewPublisher**](docs/Api/PublishersApi.md#createnewpublisher) | **POST** /{accountId}/Publishers | Create New Publisher
*PublishersApi* | [**deleteaPublisher**](docs/Api/PublishersApi.md#deleteapublisher) | **DELETE** /{accountId}/Publishers/{publisherId} | Delete a Publisher
*PublishersApi* | [**editaPublisher**](docs/Api/PublishersApi.md#editapublisher) | **PATCH** /{accountId}/Publishers/{publisherId} | Edit a Publisher
*PublishersApi* | [**getCallStatisticsforPublishers**](docs/Api/PublishersApi.md#getcallstatisticsforpublishers) | **GET** /{accountId}/Publishers/stats | Get Call Statistics for Publishers
*PublishersApi* | [**getDetailsAboutSinglePublisher**](docs/Api/PublishersApi.md#getdetailsaboutsinglepublisher) | **GET** /{accountId}/Publishers/{publisherId} | Get Details About Single Publisher
*PublishersApi* | [**getInboundReferencesforaPublisher**](docs/Api/PublishersApi.md#getinboundreferencesforapublisher) | **GET** /{accountId}/Publishers/{publisherId}/InboundReferences | Get Inbound References for a Publisher
*PublishersApi* | [**getPhoneNumbersforaSinglePublisher**](docs/Api/PublishersApi.md#getphonenumbersforasinglepublisher) | **GET** /{accountId}/Publishers/{publisherId}/Numbers | Get Phone Numbers for a Single Publisher
*PublishersApi* | [**getPublishers**](docs/Api/PublishersApi.md#getpublishers) | **GET** /{accountId}/Publishers | Get Publishers
*PublishersApi* | [**getUserDetailsforaPublisher**](docs/Api/PublishersApi.md#getuserdetailsforapublisher) | **GET** /{accountId}/Publishers/{publisherId}/Users | Get User Details for a Publisher
*RTBBulkModifiersApi* | [**createRTBBulkAdjustmentfromCSV**](docs/Api/RTBBulkModifiersApi.md#creatertbbulkadjustmentfromcsv) | **PUT** /{accountId}/rtb/bulk-modifiers/fromCSV | Create RTB Bulk Adjustment from CSV
*RealTimeBiddingRTBApi* | [**gETJSON**](docs/Api/RealTimeBiddingRTBApi.md#getjson) | **GET** /{rtbId}.json | GET JSON
*RealTimeBiddingRTBApi* | [**gETXML**](docs/Api/RealTimeBiddingRTBApi.md#getxml) | **GET** /{rtbId}.xml | GET XML
*RealTimeBiddingRTBApi* | [**pOSTJSON**](docs/Api/RealTimeBiddingRTBApi.md#postjson) | **POST** /{rtbId}.json | POST JSON
*RealTimeBiddingRTBApi* | [**pOSTXML**](docs/Api/RealTimeBiddingRTBApi.md#postxml) | **POST** /{rtbId}.xml | POST XML
*TCPAShieldApi* | [**lookupNumber**](docs/Api/TCPAShieldApi.md#lookupnumber) | **GET** /api/v1/{accountId}/lookup | Lookup Number
*TCPAShieldApi* | [**lookupNumbersBulk**](docs/Api/TCPAShieldApi.md#lookupnumbersbulk) | **POST** /api/v1/{accountId}/lookupbulk | Lookup Numbers Bulk
*TargetGroupsApi* | [**addRemoveMultipleTargetstoFromTargetGroup**](docs/Api/TargetGroupsApi.md#addremovemultipletargetstofromtargetgroup) | **PATCH** /{accountId}/targetgroups/{targetGroupId}/targets/bulkUpdate | Add/Remove Multiple Targets to/from Target Group
*TargetGroupsApi* | [**addSingleTargettoTargetGroup**](docs/Api/TargetGroupsApi.md#addsingletargettotargetgroup) | **PATCH** /{accountId}/TargetGroups/{targetGroupId}/Targets | Add Single Target to Target Group
*TargetGroupsApi* | [**assignTargetGrouptoaBuyer**](docs/Api/TargetGroupsApi.md#assigntargetgrouptoabuyer) | **PUT** /{accountId}/TargetGroups/{targetGroupId}/Buyer | Assign Target Group to a Buyer
*TargetGroupsApi* | [**createTargetGroup**](docs/Api/TargetGroupsApi.md#createtargetgroup) | **POST** /{accountId}/targetgroups | Create Target Group
*TargetGroupsApi* | [**deleteSingleTargetfromTargetGroup**](docs/Api/TargetGroupsApi.md#deletesingletargetfromtargetgroup) | **DELETE** /{accountId}/TargetGroups/{targetGroupId}/Targets/{targetId} | Delete Single Target from Target Group
*TargetGroupsApi* | [**deleteTargetGroup**](docs/Api/TargetGroupsApi.md#deletetargetgroup) | **DELETE** /{accountId}/TargetGroups/{targetGroupId} | Delete Target Group
*TargetGroupsApi* | [**editTargetGroup**](docs/Api/TargetGroupsApi.md#edittargetgroup) | **PATCH** /{accountId}/TargetGroups/{targetGroupId} | Edit Target Group
*TargetGroupsApi* | [**getDetailsaboutSpecificTargetGroup**](docs/Api/TargetGroupsApi.md#getdetailsaboutspecifictargetgroup) | **GET** /{accountId}/TargetGroups/{targetGroupId} | Get Details about Specific Target Group
*TargetGroupsApi* | [**getInboundReferencesforSpecificTargetGroup**](docs/Api/TargetGroupsApi.md#getinboundreferencesforspecifictargetgroup) | **GET** /{accountId}/TargetGroups/{targetGroupId}/InboundReferences | Get Inbound References for Specific Target Group
*TargetGroupsApi* | [**getStatsforSpecificTargetGroup**](docs/Api/TargetGroupsApi.md#getstatsforspecifictargetgroup) | **GET** /{accountId}/TargetGroups/{targetGroupId}/Counts | Get Stats for Specific Target Group
*TargetGroupsApi* | [**getTargetGroups**](docs/Api/TargetGroupsApi.md#gettargetgroups) | **GET** /{accountId}/TargetGroups | Get Target Groups
*TargetGroupsApi* | [**getTargetsforTargetGroup**](docs/Api/TargetGroupsApi.md#gettargetsfortargetgroup) | **GET** /{accountId}/TargetGroups/{targetGroupId}/Targets | Get Targets for Target Group
*TargetGroupsApi* | [**removeBuyerfromTargetGroup**](docs/Api/TargetGroupsApi.md#removebuyerfromtargetgroup) | **DELETE** /{accountId}/TargetGroups/{targetGroupId}/Buyer/{buyerId} | Remove Buyer from Target Group
*TargetGroupsApi* | [**resetCountsforTargetGroup**](docs/Api/TargetGroupsApi.md#resetcountsfortargetgroup) | **DELETE** /{accountId}/TargetGroups/{targetGroupId}/ResetCount | Reset Counts for Target Group
*TargetsApi* | [**assignTargettoBuyer**](docs/Api/TargetsApi.md#assigntargettobuyer) | **PUT** /{accountId}/targets/{targetId}/Buyer | Assign Target to Buyer
*TargetsApi* | [**checkDuplicateTargets**](docs/Api/TargetsApi.md#checkduplicatetargets) | **POST** /{accountId}/targets/isDuplicate | Check Duplicate Targets
*TargetsApi* | [**createNewTarget**](docs/Api/TargetsApi.md#createnewtarget) | **POST** /{accountId}/targets | Create New Target
*TargetsApi* | [**deleteBuyerFromTarget**](docs/Api/TargetsApi.md#deletebuyerfromtarget) | **DELETE** /{accountId}/targets/{targetId}/Buyer/{buyerId} | Delete Buyer From Target
*TargetsApi* | [**deleteTarget**](docs/Api/TargetsApi.md#deletetarget) | **DELETE** /{accountId}/targets/{targetId} | Delete Target
*TargetsApi* | [**getDetailsAboutaSpecificTarget**](docs/Api/TargetsApi.md#getdetailsaboutaspecifictarget) | **GET** /{accountId}/targets/{targetId} | Get Details About a Specific Target
*TargetsApi* | [**getInboundReferencesforaSpecificTarget**](docs/Api/TargetsApi.md#getinboundreferencesforaspecifictarget) | **GET** /{accountId}/targets/{targetId}/InboundReferences | Get Inbound References for a Specific Target
*TargetsApi* | [**getStatsforaSpecificTarget**](docs/Api/TargetsApi.md#getstatsforaspecifictarget) | **GET** /{accountId}/targets/{targetId}/Counts | Get Stats for a Specific Target
*TargetsApi* | [**getTargets**](docs/Api/TargetsApi.md#gettargets) | **GET** /{accountId}/targets | Get Targets
*TargetsApi* | [**resetCountforaSpecificTarget**](docs/Api/TargetsApi.md#resetcountforaspecifictarget) | **DELETE** /{accountId}/targets/{targetId}/ResetCount | Reset Count for a Specific Target
*TargetsApi* | [**updateTarget**](docs/Api/TargetsApi.md#updatetarget) | **PATCH** /{accountId}/targets/{targetId} | Update Target
*WebhooksApi* | [**createNewWebhook**](docs/Api/WebhooksApi.md#createnewwebhook) | **POST** /{accountId}/WebHooks/CreateConversion | Create New Webhook
*WebhooksApi* | [**deleteaWebhook**](docs/Api/WebhooksApi.md#deleteawebhook) | **DELETE** /{accountId}/WebHooks/{webHookId} | Delete a Webhook
*WebhooksApi* | [**getDetailsforaSingleWebhook**](docs/Api/WebhooksApi.md#getdetailsforasinglewebhook) | **GET** /{accountId}/WebHooks/{webHookId} | Get Details for a Single Webhook
*WebhooksApi* | [**getWebhooks**](docs/Api/WebhooksApi.md#getwebhooks) | **GET** /{accountId}/WebHooks | Get Webhooks

## Models

- [AFb7d373dc873c4792b3b3e27dd9317a73](docs/Model/AFb7d373dc873c4792b3b3e27dd9317a73.md)
- [AFbd21c4a3274c4382aa98919d5149baf3](docs/Model/AFbd21c4a3274c4382aa98919d5149baf3.md)
- [Account](docs/Model/Account.md)
- [Account1](docs/Model/Account1.md)
- [AccountAddress](docs/Model/AccountAddress.md)
- [AddAnnotationtoaCall](docs/Model/AddAnnotationtoaCall.md)
- [AddAnnotationtoaCallRequest](docs/Model/AddAnnotationtoaCallRequest.md)
- [AddBulkModifiertoaCampaign](docs/Model/AddBulkModifiertoaCampaign.md)
- [AddBuyertoTarget](docs/Model/AddBuyertoTarget.md)
- [AddBuyertoTargetGroup](docs/Model/AddBuyertoTargetGroup.md)
- [AddIVRTreetoaCampaign](docs/Model/AddIVRTreetoaCampaign.md)
- [AddIVRTreetoaCampaignRequest](docs/Model/AddIVRTreetoaCampaignRequest.md)
- [AddMultipleTargetstoTargetGroup](docs/Model/AddMultipleTargetstoTargetGroup.md)
- [AddNewDefaultPayoutforaCampaignRequest](docs/Model/AddNewDefaultPayoutforaCampaignRequest.md)
- [AddNewDefaultPayoutforaCampaignWithAllOptionalParametersSpecified](docs/Model/AddNewDefaultPayoutforaCampaignWithAllOptionalParametersSpecified.md)
- [AddNewDefaultPayoutforaCampaignwithFixedAmountwithrequiredparametersonly](docs/Model/AddNewDefaultPayoutforaCampaignwithFixedAmountwithrequiredparametersonly.md)
- [AddNewDefaultPayoutforaCampaignwithRevenueSharewithrequiredparametersonly](docs/Model/AddNewDefaultPayoutforaCampaignwithRevenueSharewithrequiredparametersonly.md)
- [AddPublisherNumbertoaCampaign](docs/Model/AddPublisherNumbertoaCampaign.md)
- [AddPublisherNumbertoaCampaignRequest](docs/Model/AddPublisherNumbertoaCampaignRequest.md)
- [AddPublishertoaCampaign](docs/Model/AddPublishertoaCampaign.md)
- [AddPublishertoaCampaignRequest](docs/Model/AddPublishertoaCampaignRequest.md)
- [AddRemoveMultipleTargetstofromTargetGroupRequest](docs/Model/AddRemoveMultipleTargetstofromTargetGroupRequest.md)
- [AddSingleTargettoTargetGroup](docs/Model/AddSingleTargettoTargetGroup.md)
- [AddSingleTargettoTargetGroupRequest](docs/Model/AddSingleTargettoTargetGroupRequest.md)
- [AddTargetGroupRoutetoaCampaignRequest](docs/Model/AddTargetGroupRoutetoaCampaignRequest.md)
- [AddTargetGroupRoutetoaCampaignconvertingoncalllength](docs/Model/AddTargetGroupRoutetoaCampaignconvertingoncalllength.md)
- [AddTargetRoutetoaCampaignRequest](docs/Model/AddTargetRoutetoaCampaignRequest.md)
- [AddTargetRoutetoaCampaignconvertingoncalllength](docs/Model/AddTargetRoutetoaCampaignconvertingoncalllength.md)
- [AddTargetRoutetoaCampaignwithdefaulttargetsettings](docs/Model/AddTargetRoutetoaCampaignwithdefaulttargetsettings.md)
- [AddaDefaultNumberforaCampaign](docs/Model/AddaDefaultNumberforaCampaign.md)
- [AddaDefaultNumberforaCampaignRequest](docs/Model/AddaDefaultNumberforaCampaignRequest.md)
- [AddaPublishertoaNumber](docs/Model/AddaPublishertoaNumber.md)
- [AddaPublishertoaNumberRequest](docs/Model/AddaPublishertoaNumberRequest.md)
- [AddaSpecificNumbertoaNumberPool](docs/Model/AddaSpecificNumbertoaNumberPool.md)
- [AddaSpecificNumbertoaNumberPoolRequest](docs/Model/AddaSpecificNumbertoaNumberPoolRequest.md)
- [Address](docs/Model/Address.md)
- [AdjustPaymentOnlyforaCallwithrelativeadjustments](docs/Model/AdjustPaymentOnlyforaCallwithrelativeadjustments.md)
- [AdjustRevenueOnlyforaCallwithrelativeadjustments](docs/Model/AdjustRevenueOnlyforaCallwithrelativeadjustments.md)
- [AdjustRevenueandPaymentforaCallwithrelativeadjustment](docs/Model/AdjustRevenueandPaymentforaCallwithrelativeadjustment.md)
- [AdjustRevenueandorPaymentforaCallwithabsoluteadjustments](docs/Model/AdjustRevenueandorPaymentforaCallwithabsoluteadjustments.md)
- [AdjustRevenueandorPaymentforaCallwithabsoluteadjustmentsRequest](docs/Model/AdjustRevenueandorPaymentforaCallwithabsoluteadjustmentsRequest.md)
- [AdjustRevenueandorPaymentforaCallwithrelativeadjustmentsRequest](docs/Model/AdjustRevenueandorPaymentforaCallwithrelativeadjustmentsRequest.md)
- [Affiliate](docs/Model/Affiliate.md)
- [Affiliate17](docs/Model/Affiliate17.md)
- [Affiliate2](docs/Model/Affiliate2.md)
- [Affiliate3](docs/Model/Affiliate3.md)
- [Affiliate4](docs/Model/Affiliate4.md)
- [Affiliate43](docs/Model/Affiliate43.md)
- [Affiliate43PayoutConversionSettingsInner](docs/Model/Affiliate43PayoutConversionSettingsInner.md)
- [Affiliate45](docs/Model/Affiliate45.md)
- [Affiliate4PayoutConversionSettingsInner](docs/Model/Affiliate4PayoutConversionSettingsInner.md)
- [Affiliate5](docs/Model/Affiliate5.md)
- [Affiliate52](docs/Model/Affiliate52.md)
- [Affiliate7](docs/Model/Affiliate7.md)
- [Affiliate9](docs/Model/Affiliate9.md)
- [Affiliate9PayoutConversionSettingsInner](docs/Model/Affiliate9PayoutConversionSettingsInner.md)
- [AffiliateNumber](docs/Model/AffiliateNumber.md)
- [AffiliateNumber11](docs/Model/AffiliateNumber11.md)
- [AffiliateNumber2](docs/Model/AffiliateNumber2.md)
- [AffiliateNumber25](docs/Model/AffiliateNumber25.md)
- [AffiliateNumber3](docs/Model/AffiliateNumber3.md)
- [AffiliateNumber6](docs/Model/AffiliateNumber6.md)
- [AllPayout](docs/Model/AllPayout.md)
- [AllPayout1](docs/Model/AllPayout1.md)
- [AllPayoutAllTimeSumCap](docs/Model/AllPayoutAllTimeSumCap.md)
- [AllPayoutPayoutAmount](docs/Model/AllPayoutPayoutAmount.md)
- [AllocateMoreNumbersFailed](docs/Model/AllocateMoreNumbersFailed.md)
- [AllocateMoreNumberstoaNumberPoolRequest](docs/Model/AllocateMoreNumberstoaNumberPoolRequest.md)
- [AllocationJob](docs/Model/AllocationJob.md)
- [ApiToken](docs/Model/ApiToken.md)
- [ApiToken1](docs/Model/ApiToken1.md)
- [AssignTargetGrouptoaBuyerRequest](docs/Model/AssignTargetGrouptoaBuyerRequest.md)
- [AssignTargettoBuyerRequest](docs/Model/AssignTargettoBuyerRequest.md)
- [AssignaPublishertoaNumberPool](docs/Model/AssignaPublishertoaNumberPool.md)
- [AssignaPublishertoaNumberPoolRequest](docs/Model/AssignaPublishertoaNumberPoolRequest.md)
- [AssignmentSettings](docs/Model/AssignmentSettings.md)
- [AssignmentSettings2](docs/Model/AssignmentSettings2.md)
- [AssignmentSettings4](docs/Model/AssignmentSettings4.md)
- [AssignmentSettings41](docs/Model/AssignmentSettings41.md)
- [BUYERRequestforPayoutAdjustmentwithabsoluteadjustment](docs/Model/BUYERRequestforPayoutAdjustmentwithabsoluteadjustment.md)
- [BUYERRequestforPayoutAdjustmentwithabsoluteadjustmentRequest](docs/Model/BUYERRequestforPayoutAdjustmentwithabsoluteadjustmentRequest.md)
- [BUYERRequestforPayoutAdjustmentwithrelativeadjustment](docs/Model/BUYERRequestforPayoutAdjustmentwithrelativeadjustment.md)
- [BUYERRequestforPayoutAdjustmentwithrelativeadjustmentRequest](docs/Model/BUYERRequestforPayoutAdjustmentwithrelativeadjustmentRequest.md)
- [Bid](docs/Model/Bid.md)
- [Bid2](docs/Model/Bid2.md)
- [BidAdjustment](docs/Model/BidAdjustment.md)
- [BidAdjustment1](docs/Model/BidAdjustment1.md)
- [BidAdjustment2](docs/Model/BidAdjustment2.md)
- [BidAdjustmentsOverride](docs/Model/BidAdjustmentsOverride.md)
- [BidAdjustmentsOverride1](docs/Model/BidAdjustmentsOverride1.md)
- [BidExpirationPolicy](docs/Model/BidExpirationPolicy.md)
- [BidExpirationPolicy1](docs/Model/BidExpirationPolicy1.md)
- [BidRequest](docs/Model/BidRequest.md)
- [BidSettings](docs/Model/BidSettings.md)
- [BidSettingsOverride](docs/Model/BidSettingsOverride.md)
- [BlockaPhoneNumberRequest](docs/Model/BlockaPhoneNumberRequest.md)
- [BlockaPhoneNumberinallcampaignsforever](docs/Model/BlockaPhoneNumberinallcampaignsforever.md)
- [BlockaPhoneNumberinonecampaignfor24hours](docs/Model/BlockaPhoneNumberinonecampaignfor24hours.md)
- [Blockallnumberswithaspecifiedprefixinallcampaignsforever](docs/Model/Blockallnumberswithaspecifiedprefixinallcampaignsforever.md)
- [Blockanonymousnumbersfor8hoursinspecificcampaign](docs/Model/Blockanonymousnumbersfor8hoursinspecificcampaign.md)
- [BlockedNumber](docs/Model/BlockedNumber.md)
- [Buyer](docs/Model/Buyer.md)
- [CA74c0b7f1f3824246b73e72a9238b4bfc](docs/Model/CA74c0b7f1f3824246b73e72a9238b4bfc.md)
- [CA9f6800fa2f074f41afde0aadd88292bd](docs/Model/CA9f6800fa2f074f41afde0aadd88292bd.md)
- [CAa2714586592f464f817efc493f3a4b50](docs/Model/CAa2714586592f464f817efc493f3a4b50.md)
- [CallConversion](docs/Model/CallConversion.md)
- [CallIVRTree](docs/Model/CallIVRTree.md)
- [CallIVRTree6](docs/Model/CallIVRTree6.md)
- [CallTarget](docs/Model/CallTarget.md)
- [CallTarget1](docs/Model/CallTarget1.md)
- [CallTarget8](docs/Model/CallTarget8.md)
- [CallTargetGroup](docs/Model/CallTargetGroup.md)
- [Campaign](docs/Model/Campaign.md)
- [Campaign1](docs/Model/Campaign1.md)
- [Campaign10](docs/Model/Campaign10.md)
- [Campaign11](docs/Model/Campaign11.md)
- [Campaign14](docs/Model/Campaign14.md)
- [Campaign15](docs/Model/Campaign15.md)
- [Campaign16](docs/Model/Campaign16.md)
- [Campaign19](docs/Model/Campaign19.md)
- [Campaign2](docs/Model/Campaign2.md)
- [Campaign22](docs/Model/Campaign22.md)
- [Campaign24](docs/Model/Campaign24.md)
- [Campaign25](docs/Model/Campaign25.md)
- [Campaign28](docs/Model/Campaign28.md)
- [Campaign29](docs/Model/Campaign29.md)
- [Campaign3](docs/Model/Campaign3.md)
- [Campaign30](docs/Model/Campaign30.md)
- [Campaign31](docs/Model/Campaign31.md)
- [Campaign32](docs/Model/Campaign32.md)
- [Campaign4](docs/Model/Campaign4.md)
- [Campaign5](docs/Model/Campaign5.md)
- [Campaign6](docs/Model/Campaign6.md)
- [Campaign7](docs/Model/Campaign7.md)
- [Campaign8](docs/Model/Campaign8.md)
- [Campaign9](docs/Model/Campaign9.md)
- [CampaignAffiliateNumbersInner](docs/Model/CampaignAffiliateNumbersInner.md)
- [Capacity](docs/Model/Capacity.md)
- [Capacity21](docs/Model/Capacity21.md)
- [Caps](docs/Model/Caps.md)
- [Caps1](docs/Model/Caps1.md)
- [Caps2](docs/Model/Caps2.md)
- [CheckDuplicateTargetsRequest](docs/Model/CheckDuplicateTargetsRequest.md)
- [CheckDuplicateTargetswithduplicatetarget](docs/Model/CheckDuplicateTargetswithduplicatetarget.md)
- [CheckDuplicateTargetswithnonDuplicatetarget](docs/Model/CheckDuplicateTargetswithnonDuplicatetarget.md)
- [ChildLink](docs/Model/ChildLink.md)
- [ChildLink1](docs/Model/ChildLink1.md)
- [ChildLink3](docs/Model/ChildLink3.md)
- [ChildLink33](docs/Model/ChildLink33.md)
- [ChildLink33CriteriaInner](docs/Model/ChildLink33CriteriaInner.md)
- [ChildLink3CriteriaInner](docs/Model/ChildLink3CriteriaInner.md)
- [CloneaCampaign](docs/Model/CloneaCampaign.md)
- [CloseTime](docs/Model/CloseTime.md)
- [Column](docs/Model/Column.md)
- [ConversionArgs](docs/Model/ConversionArgs.md)
- [ConversionArgs1](docs/Model/ConversionArgs1.md)
- [ConversionArgs3](docs/Model/ConversionArgs3.md)
- [ConversionSetting](docs/Model/ConversionSetting.md)
- [ConversionSetting1](docs/Model/ConversionSetting1.md)
- [ConversionSetting10](docs/Model/ConversionSetting10.md)
- [ConversionSetting8](docs/Model/ConversionSetting8.md)
- [ConversionSetting9](docs/Model/ConversionSetting9.md)
- [CreateApiTokenRequest](docs/Model/CreateApiTokenRequest.md)
- [CreateNewAddress](docs/Model/CreateNewAddress.md)
- [CreateNewAddressRequest](docs/Model/CreateNewAddressRequest.md)
- [CreateNewCampaignRequest](docs/Model/CreateNewCampaignRequest.md)
- [CreateNewCampaignwithallavailableparametersspecified](docs/Model/CreateNewCampaignwithallavailableparametersspecified.md)
- [CreateNewCampaignwithnameonlyanddefaultvaluesforoptionalparameters](docs/Model/CreateNewCampaignwithnameonlyanddefaultvaluesforoptionalparameters.md)
- [CreateNewJsTagforaNumber](docs/Model/CreateNewJsTagforaNumber.md)
- [CreateNewJsTagforaNumberRequest](docs/Model/CreateNewJsTagforaNumberRequest.md)
- [CreateNewNumberNotTollFree](docs/Model/CreateNewNumberNotTollFree.md)
- [CreateNewNumberPool](docs/Model/CreateNewNumberPool.md)
- [CreateNewNumberPoolRequest](docs/Model/CreateNewNumberPoolRequest.md)
- [CreateNewNumberRequest](docs/Model/CreateNewNumberRequest.md)
- [CreateNewNumberTollFree](docs/Model/CreateNewNumberTollFree.md)
- [CreateNewNumberfailedduetolackofinventory1](docs/Model/CreateNewNumberfailedduetolackofinventory1.md)
- [CreateNewPublisher](docs/Model/CreateNewPublisher.md)
- [CreateNewPublisherPayoutOverride](docs/Model/CreateNewPublisherPayoutOverride.md)
- [CreateNewPublisherPayoutOverrideRequest](docs/Model/CreateNewPublisherPayoutOverrideRequest.md)
- [CreateNewPublisherRequest](docs/Model/CreateNewPublisherRequest.md)
- [CreateNewTargetRequest](docs/Model/CreateNewTargetRequest.md)
- [CreateNewTargetWithAllAvailableParameters](docs/Model/CreateNewTargetWithAllAvailableParameters.md)
- [CreateNewTargetWithConcurrencyMatrix](docs/Model/CreateNewTargetWithConcurrencyMatrix.md)
- [CreateNewTargetWithHoursofOperation](docs/Model/CreateNewTargetWithHoursofOperation.md)
- [CreateNewTargetWithPhoneNumber](docs/Model/CreateNewTargetWithPhoneNumber.md)
- [CreateNewTargetWithSIPURI](docs/Model/CreateNewTargetWithSIPURI.md)
- [CreateNewWebhook](docs/Model/CreateNewWebhook.md)
- [CreateNewWebhookRequest](docs/Model/CreateNewWebhookRequest.md)
- [CreateRTBBulkAdjustmentfromCSV](docs/Model/CreateRTBBulkAdjustmentfromCSV.md)
- [CreateTargetGroup](docs/Model/CreateTargetGroup.md)
- [CreateTargetGroupRequest](docs/Model/CreateTargetGroupRequest.md)
- [CreateaDraftOffer](docs/Model/CreateaDraftOffer.md)
- [CreateaDraftOfferforaCampaignRequest](docs/Model/CreateaDraftOfferforaCampaignRequest.md)
- [Criteria](docs/Model/Criteria.md)
- [Criteria5](docs/Model/Criteria5.md)
- [Criteria51](docs/Model/Criteria51.md)
- [Criterion](docs/Model/Criterion.md)
- [Criterion1](docs/Model/Criterion1.md)
- [CustomIntegrations](docs/Model/CustomIntegrations.md)
- [DeDupeSetting](docs/Model/DeDupeSetting.md)
- [DeDupeSettings](docs/Model/DeDupeSettings.md)
- [DecreaseRevenueandIncreasePaymentforaCallwithrelativeadjustment](docs/Model/DecreaseRevenueandIncreasePaymentforaCallwithrelativeadjustment.md)
- [DecreaseSizeofaNumberPool](docs/Model/DecreaseSizeofaNumberPool.md)
- [DecreaseSizeofaNumberPoolRequest](docs/Model/DecreaseSizeofaNumberPoolRequest.md)
- [DefaultNumber](docs/Model/DefaultNumber.md)
- [DefaultPayout](docs/Model/DefaultPayout.md)
- [DefaultPayout2](docs/Model/DefaultPayout2.md)
- [DefaultPayout3](docs/Model/DefaultPayout3.md)
- [DefaultPayout40](docs/Model/DefaultPayout40.md)
- [DeleteAddress](docs/Model/DeleteAddress.md)
- [DeleteApiToken](docs/Model/DeleteApiToken.md)
- [DeleteBuyerFromTarget](docs/Model/DeleteBuyerFromTarget.md)
- [DeletePublishedOfferforaCampaign](docs/Model/DeletePublishedOfferforaCampaign.md)
- [DeletePublishedOfferforaCampaignwhennopublishedoffersarepresent1](docs/Model/DeletePublishedOfferforaCampaignwhennopublishedoffersarepresent1.md)
- [DeleteSingleTargetfromTargetGroup](docs/Model/DeleteSingleTargetfromTargetGroup.md)
- [DeleteTarget](docs/Model/DeleteTarget.md)
- [DeleteTargetGroup](docs/Model/DeleteTargetGroup.md)
- [DeleteTargetGroupError1](docs/Model/DeleteTargetGroupError1.md)
- [DeleteUnusedNumbersFromYourAccount](docs/Model/DeleteUnusedNumbersFromYourAccount.md)
- [DeleteaCampaign](docs/Model/DeleteaCampaign.md)
- [DeleteaDraftOfferBeforePublishing](docs/Model/DeleteaDraftOfferBeforePublishing.md)
- [DeleteaNumberFromYourAccount](docs/Model/DeleteaNumberFromYourAccount.md)
- [DeleteaNumberFromYourAccountfailedbecausenumberislinkedtootherobjects1](docs/Model/DeleteaNumberFromYourAccountfailedbecausenumberislinkedtootherobjects1.md)
- [DeleteaNumberFromYourAccountfailedrequestTryingtodeleteanumberthatwasalreadydeleted1](docs/Model/DeleteaNumberFromYourAccountfailedrequestTryingtodeleteanumberthatwasalreadydeleted1.md)
- [DeleteaNumberFromYourAccountwithunlinkqueryparameter](docs/Model/DeleteaNumberFromYourAccountwithunlinkqueryparameter.md)
- [DeleteaNumberPool](docs/Model/DeleteaNumberPool.md)
- [DeleteaNumberPool2](docs/Model/DeleteaNumberPool2.md)
- [DeleteaPublisher](docs/Model/DeleteaPublisher.md)
- [DeleteaSpecificNumberfromaNumberPool](docs/Model/DeleteaSpecificNumberfromaNumberPool.md)
- [DeleteaWebhook](docs/Model/DeleteaWebhook.md)
- [DeleteanAllocationJob](docs/Model/DeleteanAllocationJob.md)
- [DeleteanInvitation](docs/Model/DeleteanInvitation.md)
- [DialSettings](docs/Model/DialSettings.md)
- [DisableRTBforaCampaign](docs/Model/DisableRTBforaCampaign.md)
- [Draft](docs/Model/Draft.md)
- [DuplicateSettings](docs/Model/DuplicateSettings.md)
- [EditAddress](docs/Model/EditAddress.md)
- [EditAddressRequest](docs/Model/EditAddressRequest.md)
- [EditInformationAboutaNumber](docs/Model/EditInformationAboutaNumber.md)
- [EditInformationAboutaNumberRequest](docs/Model/EditInformationAboutaNumberRequest.md)
- [EditInformationforaNumberPool](docs/Model/EditInformationforaNumberPool.md)
- [EditInformationforaNumberPoolRequest](docs/Model/EditInformationforaNumberPoolRequest.md)
- [EditRTBSettingsforaCampaignRequest](docs/Model/EditRTBSettingsforaCampaignRequest.md)
- [EditTargetGroup](docs/Model/EditTargetGroup.md)
- [EditTargetGroupRequest](docs/Model/EditTargetGroupRequest.md)
- [EditaPublisher](docs/Model/EditaPublisher.md)
- [EditaPublisherRequest](docs/Model/EditaPublisherRequest.md)
- [EnableRTBforaCampaign](docs/Model/EnableRTBforaCampaign.md)
- [EnableRTBforaCampaignRequest](docs/Model/EnableRTBforaCampaignRequest.md)
- [EnableRTBforaCampaignwithadjustments](docs/Model/EnableRTBforaCampaignwithadjustments.md)
- [Event](docs/Model/Event.md)
- [ExportByJobId](docs/Model/ExportByJobId.md)
- [ExportCallLogCSV](docs/Model/ExportCallLogCSV.md)
- [ExportCallLogCSVRequest](docs/Model/ExportCallLogCSVRequest.md)
- [GETJSONwithCIDandSipOk](docs/Model/GETJSONwithCIDandSipOk.md)
- [GatherNode247B0ca44469eda1906948cf8d5](docs/Model/GatherNode247B0ca44469eda1906948cf8d5.md)
- [GetAPITokens](docs/Model/GetAPITokens.md)
- [GetAPITokenswithusage](docs/Model/GetAPITokenswithusage.md)
- [GetAccountInfo](docs/Model/GetAccountInfo.md)
- [GetAddressbyID](docs/Model/GetAddressbyID.md)
- [GetAddresses](docs/Model/GetAddresses.md)
- [GetAddressesbyCountry](docs/Model/GetAddressesbyCountry.md)
- [GetAllOffersforaCampaign](docs/Model/GetAllOffersforaCampaign.md)
- [GetAllTagTypes](docs/Model/GetAllTagTypes.md)
- [GetAllocationJobs](docs/Model/GetAllocationJobs.md)
- [GetBlockedPhoneNumbers](docs/Model/GetBlockedPhoneNumbers.md)
- [GetBuyers](docs/Model/GetBuyers.md)
- [GetCallLog](docs/Model/GetCallLog.md)
- [GetCallLogRequest](docs/Model/GetCallLogRequest.md)
- [GetCallLogSorted](docs/Model/GetCallLogSorted.md)
- [GetCallLogWithFilters](docs/Model/GetCallLogWithFilters.md)
- [GetCallLogWithSpecifiedColumns](docs/Model/GetCallLogWithSpecifiedColumns.md)
- [GetCallStatisticsforPublishers](docs/Model/GetCallStatisticsforPublishers.md)
- [GetCampaigns](docs/Model/GetCampaigns.md)
- [GetCampaignsStatsOnly](docs/Model/GetCampaignsStatsOnly.md)
- [GetColumnNames](docs/Model/GetColumnNames.md)
- [GetCountofAvailableNumbersinaNumberPool](docs/Model/GetCountofAvailableNumbersinaNumberPool.md)
- [GetDetailsAboutMultipleCalls](docs/Model/GetDetailsAboutMultipleCalls.md)
- [GetDetailsAboutSingleCall](docs/Model/GetDetailsAboutSingleCall.md)
- [GetDetailsAboutSinglePublisher](docs/Model/GetDetailsAboutSinglePublisher.md)
- [GetDetailsAboutSpecificCallsRequest](docs/Model/GetDetailsAboutSpecificCallsRequest.md)
- [GetDetailsAboutaSingleBlockedNumber](docs/Model/GetDetailsAboutaSingleBlockedNumber.md)
- [GetDetailsAboutaSingleNumberPool](docs/Model/GetDetailsAboutaSingleNumberPool.md)
- [GetDetailsAboutaSpecificNumber](docs/Model/GetDetailsAboutaSpecificNumber.md)
- [GetDetailsAboutaSpecificTarget](docs/Model/GetDetailsAboutaSpecificTarget.md)
- [GetDetailsAboutanAllocationJob](docs/Model/GetDetailsAboutanAllocationJob.md)
- [GetDetailsAboutanInvitation](docs/Model/GetDetailsAboutanInvitation.md)
- [GetDetailsaboutSpecificTargetGroup](docs/Model/GetDetailsaboutSpecificTargetGroup.md)
- [GetDetailsaboutaspecificcountry](docs/Model/GetDetailsaboutaspecificcountry.md)
- [GetDetailsforaSingleWebhook](docs/Model/GetDetailsforaSingleWebhook.md)
- [GetDraftOffersforaCampaign](docs/Model/GetDraftOffersforaCampaign.md)
- [GetDraftOffersforaCampaignwithnodraftoffersincampaign](docs/Model/GetDraftOffersforaCampaignwithnodraftoffersincampaign.md)
- [GetInboundReferencesforSpecificTargetGroup](docs/Model/GetInboundReferencesforSpecificTargetGroup.md)
- [GetInboundReferencesforaNumberPool](docs/Model/GetInboundReferencesforaNumberPool.md)
- [GetInboundReferencesforaPublisher](docs/Model/GetInboundReferencesforaPublisher.md)
- [GetInboundReferencesforaSingleCampaign](docs/Model/GetInboundReferencesforaSingleCampaign.md)
- [GetInboundReferencesforaSpecificNumberlinkedtoacampaign](docs/Model/GetInboundReferencesforaSpecificNumberlinkedtoacampaign.md)
- [GetInboundReferencesforaSpecificNumberwithaJsTag](docs/Model/GetInboundReferencesforaSpecificNumberwithaJsTag.md)
- [GetInboundReferencesforaSpecificNumberwithnoreferences](docs/Model/GetInboundReferencesforaSpecificNumberwithnoreferences.md)
- [GetInboundReferencesforaSpecificTarget](docs/Model/GetInboundReferencesforaSpecificTarget.md)
- [GetInformationAboutaSingleCampaign](docs/Model/GetInformationAboutaSingleCampaign.md)
- [GetInvitationsforaPublisher](docs/Model/GetInvitationsforaPublisher.md)
- [GetJsTagsforaNumber](docs/Model/GetJsTagsforaNumber.md)
- [GetNumberPoolsAssociatedWithYourAccount](docs/Model/GetNumberPoolsAssociatedWithYourAccount.md)
- [GetNumbersAssociatedwithAccount](docs/Model/GetNumbersAssociatedwithAccount.md)
- [GetNumbersCurrentlyInUse](docs/Model/GetNumbersCurrentlyInUse.md)
- [GetNumbersforaNumberPool](docs/Model/GetNumbersforaNumberPool.md)
- [GetPhoneNumbersforaSinglePublisher](docs/Model/GetPhoneNumbersforaSinglePublisher.md)
- [GetPublishedOffersforaCampaign](docs/Model/GetPublishedOffersforaCampaign.md)
- [GetPublishers](docs/Model/GetPublishers.md)
- [GetRTBURLsforaPublisher](docs/Model/GetRTBURLsforaPublisher.md)
- [GetRTBforCampaignwithRTBenabled](docs/Model/GetRTBforCampaignwithRTBenabled.md)
- [GetRTBforCampaignwithoutRTBenabled1](docs/Model/GetRTBforCampaignwithoutRTBenabled1.md)
- [GetStatsforSpecificTargetGroup](docs/Model/GetStatsforSpecificTargetGroup.md)
- [GetStatsforaSpecificTarget](docs/Model/GetStatsforaSpecificTarget.md)
- [GetTagNameforTypeTime](docs/Model/GetTagNameforTypeTime.md)
- [GetTagNamesforTypeCallInfo](docs/Model/GetTagNamesforTypeCallInfo.md)
- [GetTagNamesforTypeInboundNumbers](docs/Model/GetTagNamesforTypeInboundNumbers.md)
- [GetTargetGroups](docs/Model/GetTargetGroups.md)
- [GetTargets](docs/Model/GetTargets.md)
- [GetTargetsWithStats](docs/Model/GetTargetsWithStats.md)
- [GetTargetsforTargetGroup](docs/Model/GetTargetsforTargetGroup.md)
- [GetUserAuthenticationBearerToken](docs/Model/GetUserAuthenticationBearerToken.md)
- [GetUserDetailsforaPublisher](docs/Model/GetUserDetailsforaPublisher.md)
- [GetWebhooks](docs/Model/GetWebhooks.md)
- [Getnumberpoolwithmisses](docs/Model/Getnumberpoolwithmisses.md)
- [HangupNode035D4dd499598fd3888b1665f67](docs/Model/HangupNode035D4dd499598fd3888b1665f67.md)
- [HangupNode3d0291a43a281dcF9d3a85007e9](docs/Model/HangupNode3d0291a43a281dcF9d3a85007e9.md)
- [HoursOfOperation](docs/Model/HoursOfOperation.md)
- [HoursOfOperationNode3c608194e02AbcbB9c684fa83e7](docs/Model/HoursOfOperationNode3c608194e02AbcbB9c684fa83e7.md)
- [HourseOfOperationSetting](docs/Model/HourseOfOperationSetting.md)
- [IncreaseSizeofaNumberPool](docs/Model/IncreaseSizeofaNumberPool.md)
- [IncreaseSizeofaNumberPoolRequest](docs/Model/IncreaseSizeofaNumberPoolRequest.md)
- [Instructions](docs/Model/Instructions.md)
- [Instructions25](docs/Model/Instructions25.md)
- [InvitePublishertoParticipateinOffer](docs/Model/InvitePublishertoParticipateinOffer.md)
- [InvitePublishertoParticipateinOfferRequest](docs/Model/InvitePublishertoParticipateinOfferRequest.md)
- [InviteUser](docs/Model/InviteUser.md)
- [InviteUsertoJoinPublisherRequest](docs/Model/InviteUsertoJoinPublisherRequest.md)
- [ItemAccess](docs/Model/ItemAccess.md)
- [JSa2b90017a080483990caef061b03c370](docs/Model/JSa2b90017a080483990caef061b03c370.md)
- [JSf208d4fa391d4a88b0120e1cad94ac98](docs/Model/JSf208d4fa391d4a88b0120e1cad94ac98.md)
- [JournayaTCPA](docs/Model/JournayaTCPA.md)
- [JsTags](docs/Model/JsTags.md)
- [JsTags1](docs/Model/JsTags1.md)
- [Jstags11](docs/Model/Jstags11.md)
- [LookupNumberBlacklisednumber](docs/Model/LookupNumberBlacklisednumber.md)
- [LookupNumberNumbernotblocked](docs/Model/LookupNumberNumbernotblocked.md)
- [LookupNumbersBulkRequest](docs/Model/LookupNumbersBulkRequest.md)
- [MenuNode9b1C8b041858fa76c6631b178cc](docs/Model/MenuNode9b1C8b041858fa76c6631b178cc.md)
- [MenuNode9b1C8b041858fa76c6631b178cc6](docs/Model/MenuNode9b1C8b041858fa76c6631b178cc6.md)
- [MenuPrompt](docs/Model/MenuPrompt.md)
- [MessageTag](docs/Model/MessageTag.md)
- [ModifyJsTagforaNumber](docs/Model/ModifyJsTagforaNumber.md)
- [ModifyJsTagforaNumberRequest](docs/Model/ModifyJsTagforaNumberRequest.md)
- [Node](docs/Model/Node.md)
- [Node1](docs/Model/Node1.md)
- [Node2](docs/Model/Node2.md)
- [Node3](docs/Model/Node3.md)
- [Node5](docs/Model/Node5.md)
- [Nodes](docs/Model/Nodes.md)
- [Nodes6](docs/Model/Nodes6.md)
- [Number](docs/Model/Number.md)
- [Number1](docs/Model/Number1.md)
- [Number10](docs/Model/Number10.md)
- [Number11](docs/Model/Number11.md)
- [Number13](docs/Model/Number13.md)
- [Number1TagsInner](docs/Model/Number1TagsInner.md)
- [Number3](docs/Model/Number3.md)
- [Number3TagsInner](docs/Model/Number3TagsInner.md)
- [Number4](docs/Model/Number4.md)
- [Number5](docs/Model/Number5.md)
- [Number7](docs/Model/Number7.md)
- [Number8](docs/Model/Number8.md)
- [Number9](docs/Model/Number9.md)
- [NumberPool](docs/Model/NumberPool.md)
- [NumberPool2](docs/Model/NumberPool2.md)
- [NumberPool3](docs/Model/NumberPool3.md)
- [NumberRestrictions](docs/Model/NumberRestrictions.md)
- [OCapacity](docs/Model/OCapacity.md)
- [OConcurrency](docs/Model/OConcurrency.md)
- [ORouteSettings](docs/Model/ORouteSettings.md)
- [OSchedule](docs/Model/OSchedule.md)
- [Offers](docs/Model/Offers.md)
- [OpenTime](docs/Model/OpenTime.md)
- [OrderByColumn](docs/Model/OrderByColumn.md)
- [OverrideRTBSettingsforaPublisher](docs/Model/OverrideRTBSettingsforaPublisher.md)
- [OverrideRTBSettingsforaPublisherRequest](docs/Model/OverrideRTBSettingsforaPublisherRequest.md)
- [Owner](docs/Model/Owner.md)
- [Owner1](docs/Model/Owner1.md)
- [Owner20](docs/Model/Owner20.md)
- [Owner21](docs/Model/Owner21.md)
- [POSTJSONusingaXMLbody](docs/Model/POSTJSONusingaXMLbody.md)
- [POSTJSONwithCIDandsipOk](docs/Model/POSTJSONwithCIDandsipOk.md)
- [POSTXMLREQUEST](docs/Model/POSTXMLREQUEST.md)
- [ParticipationRecord](docs/Model/ParticipationRecord.md)
- [PauseRTBforaCampaign](docs/Model/PauseRTBforaCampaign.md)
- [PauseaPublishedOfferforaCampaign](docs/Model/PauseaPublishedOfferforaCampaign.md)
- [PauseaPublishedOfferforaCampaignwhenthereisnoactiveoffertopause1](docs/Model/PauseaPublishedOfferforaCampaignwhenthereisnoactiveoffertopause1.md)
- [PayoutConversionArgs](docs/Model/PayoutConversionArgs.md)
- [PayoutConversionSetting](docs/Model/PayoutConversionSetting.md)
- [PayoutConversionSetting1](docs/Model/PayoutConversionSetting1.md)
- [PayoutConversionSetting22](docs/Model/PayoutConversionSetting22.md)
- [PayoutConversionSetting221](docs/Model/PayoutConversionSetting221.md)
- [PayoutConversionSetting23](docs/Model/PayoutConversionSetting23.md)
- [PayoutConversionSetting5](docs/Model/PayoutConversionSetting5.md)
- [PayoutConversionSetting7](docs/Model/PayoutConversionSetting7.md)
- [PayoutHour](docs/Model/PayoutHour.md)
- [PreviousNumber](docs/Model/PreviousNumber.md)
- [Priority](docs/Model/Priority.md)
- [Prompt](docs/Model/Prompt.md)
- [PubNumberEnrichmentUrls](docs/Model/PubNumberEnrichmentUrls.md)
- [PubNumberEnrichmentUrls1](docs/Model/PubNumberEnrichmentUrls1.md)
- [PubNumberEnrichmentUrls7](docs/Model/PubNumberEnrichmentUrls7.md)
- [PublishDraftOffers](docs/Model/PublishDraftOffers.md)
- [Published](docs/Model/Published.md)
- [Publisher](docs/Model/Publisher.md)
- [Publisher1](docs/Model/Publisher1.md)
- [Publisher2](docs/Model/Publisher2.md)
- [PublisherRtb](docs/Model/PublisherRtb.md)
- [Publishers](docs/Model/Publishers.md)
- [QPathMap](docs/Model/QPathMap.md)
- [RateLimit](docs/Model/RateLimit.md)
- [RateLimitOverride](docs/Model/RateLimitOverride.md)
- [Record](docs/Model/Record.md)
- [Record2](docs/Model/Record2.md)
- [Record3](docs/Model/Record3.md)
- [Record4](docs/Model/Record4.md)
- [RecordNodeE41625f469598112c4f5d658473](docs/Model/RecordNodeE41625f469598112c4f5d658473.md)
- [RecordSetting](docs/Model/RecordSetting.md)
- [RecordSetting2](docs/Model/RecordSetting2.md)
- [RemoveBuyerfromTargetGroup](docs/Model/RemoveBuyerfromTargetGroup.md)
- [RemoveDefaultNumberfromaCampaign](docs/Model/RemoveDefaultNumberfromaCampaign.md)
- [RemoveDefaultNumberfromaCampaignRequest](docs/Model/RemoveDefaultNumberfromaCampaignRequest.md)
- [RemoveDefaultPayoutSettingformaCampaign](docs/Model/RemoveDefaultPayoutSettingformaCampaign.md)
- [RemoveIVRTreefromaCampaign](docs/Model/RemoveIVRTreefromaCampaign.md)
- [RemoveMultipleTargetsfromTargetGroup](docs/Model/RemoveMultipleTargetsfromTargetGroup.md)
- [RemovePublisherfromaCampaign](docs/Model/RemovePublisherfromaCampaign.md)
- [RemoveTargetRoutefromaCampaign](docs/Model/RemoveTargetRoutefromaCampaign.md)
- [RemoveTargetRoutefromaCampaignRequest](docs/Model/RemoveTargetRoutefromaCampaignRequest.md)
- [RemoveaJsTagfromaNumber](docs/Model/RemoveaJsTagfromaNumber.md)
- [RemoveaPublisherPayoutOverride](docs/Model/RemoveaPublisherPayoutOverride.md)
- [RemoveaPublisherfromaNumber](docs/Model/RemoveaPublisherfromaNumber.md)
- [RemoveaPublisherfromaNumberPool](docs/Model/RemoveaPublisherfromaNumberPool.md)
- [ReplaceNumbersInaNumberPool](docs/Model/ReplaceNumbersInaNumberPool.md)
- [ReplaceNumbersInaNumberPoolRequest](docs/Model/ReplaceNumbersInaNumberPoolRequest.md)
- [Report](docs/Model/Report.md)
- [Report2](docs/Model/Report2.md)
- [Report3](docs/Model/Report3.md)
- [Report4](docs/Model/Report4.md)
- [ResetCountforaSpecificTarget](docs/Model/ResetCountforaSpecificTarget.md)
- [ResetCountsforTargetGroup](docs/Model/ResetCountsforTargetGroup.md)
- [Result](docs/Model/Result.md)
- [Result2](docs/Model/Result2.md)
- [Result3](docs/Model/Result3.md)
- [Result6](docs/Model/Result6.md)
- [Result8](docs/Model/Result8.md)
- [ResumeaPausedOffer](docs/Model/ResumeaPausedOffer.md)
- [ResumeaPausedOfferwhennopausedoffersarepresent1](docs/Model/ResumeaPausedOfferwhennopausedoffersarepresent1.md)
- [Ringbauser](docs/Model/Ringbauser.md)
- [Root](docs/Model/Root.md)
- [Route](docs/Model/Route.md)
- [Route1](docs/Model/Route1.md)
- [Route10](docs/Model/Route10.md)
- [Route8](docs/Model/Route8.md)
- [Route9](docs/Model/Route9.md)
- [RouterNode22e45d24155A9ab0c3db0abc485](docs/Model/RouterNode22e45d24155A9ab0c3db0abc485.md)
- [Rtb](docs/Model/Rtb.md)
- [Rtb19](docs/Model/Rtb19.md)
- [Rtb20](docs/Model/Rtb20.md)
- [Rtb21](docs/Model/Rtb21.md)
- [Rtb22](docs/Model/Rtb22.md)
- [Rtb24](docs/Model/Rtb24.md)
- [RtbBulkModifierList](docs/Model/RtbBulkModifierList.md)
- [Say](docs/Model/Say.md)
- [Schedule](docs/Model/Schedule.md)
- [Schedule24](docs/Model/Schedule24.md)
- [Schedule27](docs/Model/Schedule27.md)
- [Schedule28](docs/Model/Schedule28.md)
- [Schedule30](docs/Model/Schedule30.md)
- [SetDefaultAddress](docs/Model/SetDefaultAddress.md)
- [Settings](docs/Model/Settings.md)
- [Settings1](docs/Model/Settings1.md)
- [Settings2](docs/Model/Settings2.md)
- [Settings3](docs/Model/Settings3.md)
- [Sip](docs/Model/Sip.md)
- [SpamDetection](docs/Model/SpamDetection.md)
- [SpamDetection1](docs/Model/SpamDetection1.md)
- [Stats](docs/Model/Stats.md)
- [Stats1](docs/Model/Stats1.md)
- [Stats2](docs/Model/Stats2.md)
- [Stats3](docs/Model/Stats3.md)
- [Stats4](docs/Model/Stats4.md)
- [Stats5](docs/Model/Stats5.md)
- [Stats6](docs/Model/Stats6.md)
- [Stats7](docs/Model/Stats7.md)
- [Stats9](docs/Model/Stats9.md)
- [Status](docs/Model/Status.md)
- [TA234457e6f96945cfa312938d4e358015](docs/Model/TA234457e6f96945cfa312938d4e358015.md)
- [TA2f6961e921ef4b92b7304dd76db8336f](docs/Model/TA2f6961e921ef4b92b7304dd76db8336f.md)
- [TA2f6961e921ef4b92b7304dd76db8336f1](docs/Model/TA2f6961e921ef4b92b7304dd76db8336f1.md)
- [TA2f6961e921ef4b92b7304dd76db8336f2](docs/Model/TA2f6961e921ef4b92b7304dd76db8336f2.md)
- [TA2f6961e921ef4b92b7304dd76db8336f4](docs/Model/TA2f6961e921ef4b92b7304dd76db8336f4.md)
- [TA4286d3a65fb446e59030d105a34d2ac7](docs/Model/TA4286d3a65fb446e59030d105a34d2ac7.md)
- [TA6bd8e3e01cc0492b9427e04f0312fa98](docs/Model/TA6bd8e3e01cc0492b9427e04f0312fa98.md)
- [TAc915194e11ab428f91178e897e1d67cb](docs/Model/TAc915194e11ab428f91178e897e1d67cb.md)
- [TAfa4c37e44a274af8b8927ed67d536d89](docs/Model/TAfa4c37e44a274af8b8927ed67d536d89.md)
- [TAfa4c37e44a274af8b8927ed67d536d891](docs/Model/TAfa4c37e44a274af8b8927ed67d536d891.md)
- [Tag](docs/Model/Tag.md)
- [Tag1](docs/Model/Tag1.md)
- [Tag2](docs/Model/Tag2.md)
- [Tag5](docs/Model/Tag5.md)
- [Tag61](docs/Model/Tag61.md)
- [Tag7](docs/Model/Tag7.md)
- [TagCriterion](docs/Model/TagCriterion.md)
- [Target](docs/Model/Target.md)
- [Target11](docs/Model/Target11.md)
- [Target13](docs/Model/Target13.md)
- [Target2](docs/Model/Target2.md)
- [Target3](docs/Model/Target3.md)
- [Target4](docs/Model/Target4.md)
- [Target5](docs/Model/Target5.md)
- [Target6](docs/Model/Target6.md)
- [Target8](docs/Model/Target8.md)
- [Target9](docs/Model/Target9.md)
- [TargetGroup](docs/Model/TargetGroup.md)
- [TargetGroup1](docs/Model/TargetGroup1.md)
- [TargetGroup4](docs/Model/TargetGroup4.md)
- [TargetGroup6](docs/Model/TargetGroup6.md)
- [UnblockaPhoneNumber](docs/Model/UnblockaPhoneNumber.md)
- [UpdateALLDefaultPayoutSettingsforaCampaignRequest](docs/Model/UpdateALLDefaultPayoutSettingsforaCampaignRequest.md)
- [UpdateALLPublisherPayoutOverrides](docs/Model/UpdateALLPublisherPayoutOverrides.md)
- [UpdateALLPublisherPayoutOverridesRequest](docs/Model/UpdateALLPublisherPayoutOverridesRequest.md)
- [UpdateAllDefaultPayoutSettingsforaCampaign](docs/Model/UpdateAllDefaultPayoutSettingsforaCampaign.md)
- [UpdateSingleDefaultPayoutSettings](docs/Model/UpdateSingleDefaultPayoutSettings.md)
- [UpdateSingleDefaultPayoutSettingsRequest](docs/Model/UpdateSingleDefaultPayoutSettingsRequest.md)
- [UpdateSingleDefaultPayoutSettingswithonlyonechange](docs/Model/UpdateSingleDefaultPayoutSettingswithonlyonechange.md)
- [UpdateSinglePublisherPayoutOverride](docs/Model/UpdateSinglePublisherPayoutOverride.md)
- [UpdateSinglePublisherPayoutOverrideRequest](docs/Model/UpdateSinglePublisherPayoutOverrideRequest.md)
- [UpdateSinglePublisherPayoutOverridewithonlyonechange](docs/Model/UpdateSinglePublisherPayoutOverridewithonlyonechange.md)
- [UpdateTarget](docs/Model/UpdateTarget.md)
- [UpdateaBlockedPhoneNumber](docs/Model/UpdateaBlockedPhoneNumber.md)
- [UpdateaBlockedPhoneNumberRequest](docs/Model/UpdateaBlockedPhoneNumberRequest.md)
- [UpdateaCampaign](docs/Model/UpdateaCampaign.md)
- [UpdateaCampaignRequest](docs/Model/UpdateaCampaignRequest.md)
- [Urls](docs/Model/Urls.md)
- [Usage](docs/Model/Usage.md)
- [UsageStats](docs/Model/UsageStats.md)
- [User](docs/Model/User.md)
- [UserInvitation](docs/Model/UserInvitation.md)
- [Value](docs/Model/Value.md)
- [Value1](docs/Model/Value1.md)
- [ValueColumn](docs/Model/ValueColumn.md)
- [VerifyNumbersinNumberPool](docs/Model/VerifyNumbersinNumberPool.md)
- [ViewPublishersParticipatinginPublishedOffers](docs/Model/ViewPublishersParticipatinginPublishedOffers.md)
- [VoidRevenueandPaymentforaCall](docs/Model/VoidRevenueandPaymentforaCall.md)
- [VoidRevenueandorPaymentforaCallRequest](docs/Model/VoidRevenueandorPaymentforaCallRequest.md)
- [Warning](docs/Model/Warning.md)
- [Warning1](docs/Model/Warning1.md)
- [Warnings](docs/Model/Warnings.md)
- [Warnings1](docs/Model/Warnings1.md)
- [WebHook](docs/Model/WebHook.md)

## Authorization

### httpBearer

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
