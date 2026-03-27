<?php

if ($currentpage == 'dashboard.php') {
    $dashboard_active = "active";
}

if ($currentpage == 'vendor_dashboard.php') {
    $vendor_dashboard_active = "active";
}

if ($currentpage == 'hotel.php') {
    $hotel_active = "active";
}

if ($currentpage == 'dailymoment.php') {
    $dailymoment_active = "active";
}

if ($currentpage == 'dailymoment_tracker.php') {
    $dailymoment_tracker_active = "active";
}

if ($currentpage == 'hotel_overall_pricebook.php' || $currentpage == 'vehicle_cost_pricebook.php' || $currentpage == 'guide_cost_pricebook.php' || $currentpage == 'activity_overall_pricebook.php') {
    $price_book_open = "open";
}

if ($currentpage == 'newvendor.php' || $currentpage == 'driver.php' || $currentpage == 'vehicle.php' || $currentpage == 'vehicle_availability_chart.php') {
    $vendor_open = "open";
    $vendor_management = "active";
}

if ($currentpage == 'newhotspot.php' || $currentpage == 'hotspot_parking_charge_pricebook.php') {
    $hotspot_open = "open";
    $hotspot_management = "active";
}

if ($currentpage == 'locations.php' || $currentpage == 'location_toll_charge_pricebook.php') {
    $location_open = "open";
    $location_management = "active";
}

if ($currentpage == 'hotelcategory.php' || $currentpage == 'vehicle_type.php' || $currentpage == 'entry_ticket.php' || $currentpage == 'inbuild_amenities.php' || $currentpage == 'staff.php' || $currentpage == 'agent.php' || $currentpage == 'kmslimit.php' || $currentpage == 'timelimit.php'  || $currentpage == 'gstsetting.php' || $currentpage == 'agent_configuration.php' || $currentpage == 'route_config.php' || $currentpage == 'rolepermission.php' || $currentpage == 'allowedpersoncount.php' || $currentpage == 'language.php' || $currentpage == 'global_settings.php' || $currentpage == 'agent_subscription_plan.php') {
    $settings_category_open = "open";
    $settings_management = "active";
}

if ($currentpage == 'agent.php') {
    $agent_active = "active";
}

if ($currentpage == 'vehicle_availability_chart.php') {
    $vehicle_availability_chart_active = "active";
}

if ($currentpage == 'agent_staff_request.php') {
    $agent_staff_request_active = "active";
}

if ($currentpage == 'hotelcategory.php') {
    $hotel_category_active = "active";
}

if ($currentpage == 'cities.php') {
    $cities_active = "active";
}

if ($currentpage == 'vehicle_type.php') {
    $vehicle_type_active = "active";
}

if ($currentpage == 'entry_ticket.php') {
    $entry_ticket_active = "active";
}

if ($currentpage == 'rolepermission.php') {
    $rolepermission_active = "active";
}

if ($currentpage == 'agent_subscription_plan.php') {
    $agent_subscription_plan_active = "active";
}

if ($currentpage == 'agent_configuration.php') {
    $agent_configuration_active = "active";
}

if ($currentpage == 'staff.php') {
    $staff_active = "active";
}


if ($currentpage == 'timelimit.php') {
    $timelimit_active = "active";
}

if ($currentpage == 'route_config.php') {
    $routeconfig_active = "active";
}

if ($currentpage == 'kmslimit.php') {
    $kmslimit_active = "active";
}

if ($currentpage == 'permitcost.php') {
    $permitcost_active = "active";
}

if ($currentpage == 'gstsetting.php') {
    $gst_setting_active = "active";
}
if ($currentpage == 'inbuild_amenities.php') {
    $inbuild_amenities_active = "active";
}

if ($currentpage == 'hotel_overall_pricebook.php') {
    $pricebook_hotel_active = "active";
}

if ($currentpage == 'hotel_amenities_pricebook.php') {
    $amenities_active = "active";
}

if ($currentpage == 'hotel_room_pricebook.php') {
    $room_active = "active";
}

if ($currentpage == 'monument_cost_pricebook.php') {
    $monument_active = "active";
}

if ($currentpage == 'vehicle_cost_pricebook.php') {
    $pricebook_vehicle_active = "active";
}
if ($currentpage == 'activity_overall_pricebook.php') {
    $pricebook_activity_active = "active";
}

if ($currentpage == 'guide_cost_pricebook.php') {
    $guide_vehicle_active = "active";
}

// if ($currentpage == 'hotel_overall_pricebook.php') {
//     $hotel_overall_pricebook_active = "active";
// }

if ($currentpage == 'guide.php') {
    $guide_active = "active";
}

if ($currentpage == 'newstaff.php') {
    $staff_active = "active";
}
if ($currentpage == 'wallet.php') {
    $wallet_active = "active";
}
if ($currentpage == 'agent_subscription_history.php') {
    $agent_subscription_history_active = "active";
}
if ($currentpage == 'export_pricebook_details.php') {

    $export_pricebook_details_active = "active";
}

if ($currentpage == 'driver.php') {
    $driver_active = "active";
}

if ($currentpage == 'newvendor.php') {
    $vendor_active = "active";
}

// if ($currentpage == 'vehicle.php' || $currentpage == 'vehicle_cost_pricebook.php') {
//     $vehicle_active = "active";
// }
if ($currentpage == 'vehicle.php') {
    $vendor_vehicle_active = "active";
}
if ($currentpage == 'itinerary.php') {
    $itinerary_active = "active";
}
if ($currentpage == 'latestitinerary.php' && empty($_GET['route']) || $currentpage == 'latestitinerary.php' && isset($_GET['id']) || $currentpage == 'latestitinerary.php' && $_GET['route'] == 'add' && $_GET['formtype'] == 'basic_info' && $_GET['id'] != '') {
    $lastest_itinerary_active = "active";
}

if ($currentpage == 'latestitinerary.php' && $_GET['route'] == 'add' && $_GET['formtype'] == 'basic_info' && $_GET['id'] == '') {
    $create_itinerary_active = "active";
}

if ($currentpage == 'latest_default_itinerary.php') {
    $create_itinerary_active = "active";
}

if ($currentpage == 'latestconfirmeditinerary.php') {
    $confirmed_itinerary_active = "active";
}
if ($currentpage == 'payoutlists.php') {
    $payoutlists_active = "active";
}
if ($currentpage == 'activitydetails.php') {
    $activities_active = "active";
}

if ($currentpage == 'accountsmanager.php' || $currentpage == 'accountsmanagerledger.php' || $currentpage == 'accountsmanagerquotefilter.php' || $currentpage == 'accountsmanagerdatefilter.php') {
    $accounts_open = "open";
    $accounts_manager = "active";
}

if ($currentpage == 'accountsmanager.php') {
    $accountsmanager_active = "active";
}
if ($currentpage == 'accountsmanagerquotefilter.php') {
    $accountsmanager_history_active = "active";
}
if ($currentpage == 'accountsmanagerledger.php') {
    $accountsmanager_ledger_active = "active";
}
if ($currentpage == 'accountsmanagerdatefilter.php') {
    $accountsmanager_history_date_active = "active";
}
if ($currentpage == 'newhotspot.php') {
    $hotspot_active = "active";
}
if ($currentpage == 'hotspot_parking_charge_pricebook.php') {
    $parking_active = "active";
}
if ($currentpage == 'language.php') {
    $language_active = "active";
}
if ($currentpage == 'api_configuration.php') {
    $api_configuration_active = "active";
}
if ($currentpage == 'allowedpersoncount.php') {
    $allowedpersoncount_active = "active";
}
if ($currentpage == 'route_config.php') {
    $routeconfig_active = "active";
}
if ($currentpage == 'global_settings.php') {
    $globalsettings_active = "active";
}

if ($currentpage == 'vendor_invoice.php' || $currentpage == 'driver_invoice.php' || $currentpage == 'guide_invoice.php') {
    $vendor_invoice_open = "open";
    $vendor_invoice_management = "active";
}

if ($currentpage == 'vendor_invoice.php') {
    $vendor_invoice_active = "active";
}

if ($currentpage == 'driver_invoice.php') {
    $driver_invoice_active = "active";
}

if ($currentpage == 'guide_invoice.php') {
    $guide_invoice_active = "active";
}

if ($currentpage == 'locations.php') {
    $locations_active = "active";
}
if ($currentpage == 'location_toll_charge_pricebook.php') {
    $toll_active = "active";
}

if ($logged_agent_id != '' && $logged_agent_id != '0') :

    $travel_expert_id = getAGENT_details($logged_agent_id, '', 'travel_expert_id');
    $travel_name = getTRAVEL_EXPERT($travel_expert_id, 'label');
    $travel_mobile = getTRAVEL_EXPERT($travel_expert_id, 'staff_mobile');

    $selected_query = sqlQUERY_LABEL("SELECT `subscription_plan_title`, `subscription_amount`, `validity_start`, `validity_end` FROM `dvi_agent_subscribed_plans` WHERE `deleted` = '0' AND `status`='1' AND `agent_ID` = '$logged_agent_id' ORDER BY `agent_subscribed_plan_ID` DESC LIMIT 1") or die("#-getAGENTDETAILS: Getting Agent Id: " . sqlERROR_LABEL());
    while ($fetch_data = sqlFETCHARRAY_LABEL($selected_query)) :
        $subscription_plan_title = $fetch_data['subscription_plan_title'];
        $subscription_amount = $fetch_data['subscription_amount'];
        $validity_start = $fetch_data['validity_start'];
        $validity_end = $fetch_data['validity_end'];

        // Get the current date
        $current_date = strtotime(date('Y-m-d'));
        // Get the validity end date
        $validity_end_date = strtotime(date('Y-m-d', strtotime($validity_end)));

        // Calculate the difference in seconds
        $difference_in_seconds = $validity_end_date - $current_date;
        $days_remaining = floor($difference_in_seconds / (60 * 60 * 24));

        if ($difference_in_seconds < 0) :
            $message = "Your $subscription_plan_title plan has expired.";
            $url = 'subscriptionrenewal.php'; // Set the URL you want to redirect to
            echo "<script type='text/javascript'>document.location.href='{$url}';</script>";
        elseif ($days_remaining == 0) :
            $message = "Your subscription expires today.";
        elseif ($days_remaining == 1) :
            $message = "Your subscription expires tomorrow.";
        else :
            $message = "Your $subscription_plan_title plan will expire in $days_remaining days.";
        endif;
    endwhile;

    $coupen_wallet = (getAGENT_details($logged_agent_id, '', 'get_total_agent_coupon_wallet'));
    $cash_wallet = (getAGENT_details($logged_agent_id, '', 'get_total_agent_cash_wallet'));
    $total_wallet_agent = $cash_wallet + $coupen_wallet;
?>

    <div class="d-flex notification-strip-container">
        <?php if ($subscription_amount == 0 || $days_remaining <= 15) : ?>
            <div class="position-relative" style="margin-right: 33px;">
                <h6 class="m-0 subscription-plan-alert">
                    <img class="me-1" src="../head/assets/img/subscription-fee.png" width="22px" />
                    <span id='message'><?= $message; ?></span>
                </h6>
            </div>
        <?php endif; ?>
        <?php if (($logged_agent_id != '' && $logged_agent_id != '0') && ($logged_staff_id == '' || $logged_staff_id == '0')): ?>
            <div class="position-relative" style="margin-right: 5px;z-index: 136;">
                <h6 class="m-0 text-white subscription-plan-alert-config" data-toggle="tooltip" placement="top" title="Click ">
                    <img class="me-1" src="../head/assets/img/badge.png" width="20px" />
                    <span id='message'>Travel Expert - <?= $travel_name; ?> - <a class="text-white" href="https://wa.me/<?= $travel_mobile; ?>" target="_blank"><?= $travel_mobile; ?></a></span>
                </h6>
            </div>
        <?php endif; ?>

        <?php if (($logged_staff_id != '' && $logged_staff_id != '0') && ($logged_agent_id != '' && $logged_agent_id != '0')):
            $agent_name = getAGENT_details($logged_agent_id, '', 'label');
            $agent_mobile_no = getAGENT_details($logged_agent_id, '', 'get_agent_mobile_number'); ?>
            <div class="position-relative" style="margin-right: 5px;z-index: 136;">
                <h6 class="m-0 text-white subscription-plan-alert-config" data-toggle="tooltip" placement="top" title="Click ">
                    <img class="me-1" src="../head/assets/img/badge.png" width="20px" />
                    <span id='message'>Agent - <?= $agent_name; ?> - <a class="text-white" href="https://wa.me/<?= $agent_mobile_no; ?>" target="_blank"><?= $agent_mobile_no; ?></a></span>
                </h6>
            </div>
        <?php endif; ?>
        <?php /* <div>
            <h6 class="m-0 subscription-plan-alert-wallet cursor-pointer text-white" data-toggle="tooltip" placement="top" title="Cash wallet - <?= $cash_wallet; ?>, Coupon wallet - <?= $coupen_wallet; ?>">
                <img class="me-1" src="../head/assets/img/wallet.png" width="20px" />
                <span id='message'>Total Wallet amount is <?= general_currency_symbol; ?> <?= number_format($total_wallet_agent, 2); ?></span>
            </h6>
        </div>
        <div class="marquee">
            <div>
                <span>Route Optimization Coming Soon....</span>
            </div>
        </div> */ ?>
    </div>

<?php endif; ?>

<?php /* if ($logged_agent_id == '0' || $logged_agent_id == '') : ?>
    <div class="marquee2">
        <div>
            <span>Route Optimization Coming Soon....</span>
        </div>
    </div>
<?php endif; */ ?>

<aside id="layout-menu" class="layout-menu menu bg-menu-theme menu-vertical" data-bg-class="bg-menu-theme" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
    <!-- <div class="ribbon-wrapper">
    <div class="ribbon">Beta Version</div>
  </div> -->

    <!-- <div class="app-brand demo ms-2">
        <a href="dashboard.php" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bold logo-default logo-state-1-3 m-0 d-flex align-items-center">
                <h4 class="m-4 ms-0 me-3" style="font-size: 23px;"><span class="text-danger">DVi</span> Holidays</h4>
                <div class="beta-version">
                    <span> </span>
                    <span> </span>
                    <span> </span>
                    <span> </span>
                    Beta
                </div>
            </span>
            <span class="logo-hidden logo-state-2">
                <img src="../assets/img/logo.png" class="sidebar_logo" alt="Logo" />
            </span>
        </a>
    </div> -->

    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <span class="text-primary">
                    <img src="assets/img/DVi-Logo1-2048x1860.png" class="img-fluid" alt="Logo" />
                </span>
            </span>
            <span class="app-brand-text menu-text fw-bold ms-3 mt-3">DoView Holidays</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto mt-3">
            <i class="icon-base ti menu-toggle-icon d-none d-xl-block"></i>
            <i class="icon-base ti tabler-x d-block d-xl-none"></i>
        </a>
    </div>

    <div class="menu-inner-shadow" style="display: none;"></div>

    <ul class="menu-inner py-1 ps ps--active-y">
        <!-- Dashboards -->
        <?php
        $dashboard_page_ID = checkmenu('Dashboard');
        if ($dashboard_page_ID != '' && checkrolemenu($dashboard_page_ID, $logged_user_level)) :
        ?>
            <li class="menu-item">
                <a href="dashboard.php" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                    <div data-i18n="Dashboard">Dashboard</div>
                </a>
            </li>
        <?php endif; ?>

        <?php
        $latest_itinerary_page_ID = checkmenu('Latest Itinerary');
        if ($latest_itinerary_page_ID != '' && checkrolemenu($latest_itinerary_page_ID, $logged_user_level)) :
        ?>
            <li class="menu-item <?= $create_itinerary_active; ?>">
                <a href="latestitinerary.php?route=add&formtype=basic_info&regen=y" class="menu-link <?= $create_itinerary_active; ?>">
                    <i class="menu-icon tf-icons ti ti-adjustments-search"></i>
                    <div data-i18n="Create Itinerary">Create Itinerary</div>
                </a>
            </li>
        <?php
        endif; ?>

        <?php
        $latest_itinerary_page_ID = checkmenu('Latest Itinerary');
        if ($latest_itinerary_page_ID != '' && checkrolemenu($latest_itinerary_page_ID, $logged_user_level)) :
        ?>
            <li class="menu-item <?= $lastest_itinerary_active; ?>">
                <a href="latestitinerary.php" class="menu-link <?= $lastest_itinerary_active; ?>">
                    <i class="menu-icon tf-icons ti ti-adjustments-search"></i>
                    <div data-i18n="Latest Itinerary">Latest Itinerary</div>
                </a>
            </li>
        <?php endif;
        ?>

        <?php
        $confirmed_itinerary_page_ID = checkmenu('Confirmed Itinerary');
        if ($confirmed_itinerary_page_ID != '' && checkrolemenu($confirmed_itinerary_page_ID, $logged_user_level)) :
        ?>
            <li class="menu-item <?= $confirmed_itinerary_active; ?>">
                <a href="latestconfirmeditinerary.php" class="menu-link <?= $confirmed_itinerary_active; ?>">
                    <i class="menu-icon tf-icons ti ti-adjustments-search"></i>
                    <div data-i18n="Confirmed Itinerary">Confirmed Itinerary</div>
                </a>
            </li>
        <?php endif; ?>

        <?php
        /* $payout_lists_page_ID = checkmenu('Payouts List');
         if ($payout_lists_page_ID != '' && checkrolemenu($payout_lists_page_ID, $logged_user_level)) :
        ?>
            <li class="menu-item <?= $payoutlists_active; ?>">
                <a href="payoutlists.php" class="menu-link <?= $payoutlists_active; ?>">
                    <i class="menu-icon tf-icons ti ti-calendar-share"></i>
                    <div data-i18n="List of Payouts">List of Payouts</div>
                </a>
            </li>
        <?php endif; */ ?>

        <?php
        $accountsmanager_page_ID = checkmenu('Accounts Manager');
        $accountsmanager_page_ledger_ID = checkmenu('Accounts Manager Ledger');
        $accountsmanager_history_ID = checkmenu('Accounts Manager History');
        $accountsmanager_history_date_ID = checkmenu('Accounts Manager Date History');

        if (($accountsmanager_page_ID != '' && checkrolemenu($accountsmanager_page_ID, $logged_user_level)) || ($accountsmanager_history_ID != '' && checkrolemenu($accountsmanager_history_ID, $logged_user_level)) || ($accountsmanager_page_ledger_ID != '' && checkrolemenu($accountsmanager_page_ledger_ID, $logged_user_level)) ||  ($accountsmanager_history_date_ID != '' && checkrolemenu($accountsmanager_history_date_ID, $logged_user_level))) :
        ?>

            <li class="menu-item <?= $accounts_manager; ?> <?= $accounts_open; ?>">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="tf-icons ti ti-currency-rupee me-2"></i>
                    <div data-i18n="Accounts">Accounts</div>
                </a>
                <ul class="menu-sub">
                    <?php
                    if ($accountsmanager_page_ID != '' && checkrolemenu($accountsmanager_page_ID, $logged_user_level)) :
                    ?>
                        <li class="menu-item <?= $accountsmanager_active; ?>">
                            <a href="accountsmanager.php" class="menu-link <?= $accountsmanager_active; ?>">
                                <i class="ti ti-coin-rupee me-2"></i>
                                <div data-i18n="Accounts Manager" class="">Accounts Manager</div>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if ($accountsmanager_page_ledger_ID != '' && checkrolemenu($accountsmanager_page_ledger_ID, $logged_user_level)) : ?>
                        <li class="menu-item <?= $accountsmanager_ledger_active; ?>">
                            <a href="accountsmanagerledger.php" class="menu-link <?= $accountsmanager_ledger_active; ?>">
                                <!-- <img src="assets/img/svg/financial-report.svg" class="me-2" width="20" alt="Avatar" class="rounded-circle"> -->
                                <i class="tf-icons ti ti-currency-rupee me-2"></i>
                                <div data-i18n="Accounts Ledger" class="">Accounts Ledger</div>
                            </a>
                        </li>
                    <?php
                    endif; ?>
                    <?php  /* if ($accountsmanager_history_ID != '' && checkrolemenu($accountsmanager_history_ID, $logged_user_level)) : ?>
                        <li class="menu-item <?= $accountsmanager_history_active; ?>">
                            <a href="accountsmanagerquotefilter.php" class="menu-link <?= $accountsmanager_history_active; ?>">
                                <i class="ti ti-currency-rupee-nepalese me-2"></i>
                                <div data-i18n="Accounts History" class="">Accounts History</div>
                            </a>
                        </li>
                    <?php
                    endif; ?>
                    <?php if ($accountsmanager_history_date_ID != '' && checkrolemenu($accountsmanager_history_date_ID, $logged_user_level)) : ?>
                        <li class="menu-item <?= $accountsmanager_history_date_active; ?>">
                            <a href="accountsmanagerdatefilter.php" class="menu-link <?= $accountsmanager_history_date_active; ?>">
                                <i class="ti ti-currency-rupee-nepalese me-2"></i>
                                <div data-i18n="Accounts Date History" class="">Accounts Date History</div>
                            </a>
                        </li>
                    <?php
                    endif;  */ ?>
                </ul>
            </li>
        <?php endif; ?>

        <?php
        $vendor_dashboard_page_ID = checkmenu('Vendor Dashboard');
        if ($vendor_dashboard_page_ID != '' && checkrolemenu($vendor_dashboard_page_ID, $logged_user_level)) :
        ?>
            <li class="menu-item <?= $vendor_dashboard_active; ?>">
                <a href="vendor_dashboard.php" class="menu-link <?= $vendor_dashboard_active; ?>">
                    <i class="menu-icon tf-icons ti ti-dashboard"></i>
                    <div data-i18n="Vendor Dashboard">Vendor Dashboard</div>
                </a>
            </li>
        <?php endif; ?>

        <?php
        $hotels_dashboard_page_ID = checkmenu('Hotels');
        if ($hotels_dashboard_page_ID != '' && checkrolemenu($hotels_dashboard_page_ID, $logged_user_level)) :
        ?>
            <li class="menu-item <?= $hotel_active; ?>">
                <a href="hotel.php" class="menu-link <?= $hotel_active; ?>">
                    <i class="menu-icon tf-icons ti ti-building-estate"></i>
                    <div data-i18n="Hotels">Hotels</div>
                </a>
            </li>
        <?php endif; ?>

        <?php
        /* $dailymoment_page_ID = checkmenu('Dailymoment');
        if ($dailymoment_page_ID != '' && checkrolemenu($dailymoment_page_ID, $logged_user_level)) :
        ?>
            <li class="menu-item <?= $dailymoment_active; ?>">
                <a href="dailymoment.php" class="menu-link <?= $dailymoment_active; ?>">
                    <i class="menu-icon tf-icons ti ti-building-estate"></i>
                    <div data-i18n="Daily Moment">Daily Moment</div>
                </a>
            </li>
        <?php endif; */ ?>

        <?php
        $dailymoment_tracker_page_ID = checkmenu('Dailymoment Tracker');

        if ($dailymoment_tracker_page_ID != '' && checkrolemenu($dailymoment_tracker_page_ID, $logged_user_level)) :
        ?>
            <li class="menu-item <?= $dailymoment_tracker_active; ?>">
                <a href="dailymoment_tracker.php" class="menu-link <?= $dailymoment_tracker_active; ?>">
                    <i class="menu-icon tf-icons ti ti-building-estate"></i>
                    <div data-i18n="Daily Moment Tracker">Daily Moment Tracker</div>
                </a>
            </li>
        <?php endif; ?>

        <?php
        $vendor_page_ID = checkmenu('Vendor');
        $driver_page_ID = checkmenu('Driver');
        $vehicle_page_ID = checkmenu('Vehicle');
        $vehicle_availability_chart_page_ID = checkmenu('Vehicle Availability Chart');
        if (($vendor_page_ID != '' && checkrolemenu($vendor_page_ID, $logged_user_level)) || ($driver_page_ID != '' && checkrolemenu($driver_page_ID, $logged_user_level)) || ($vehicle_page_ID != '' && checkrolemenu($vehicle_page_ID, $logged_user_level)) || ($vehicle_availability_chart_page_ID != '' && checkrolemenu($vehicle_availability_chart_page_ID, $logged_user_level))) :
        ?>
            <li class="menu-item <?= $vendor_management; ?> <?= $vendor_open; ?>">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="tf-icons ti ti-user me-2"></i>
                    <div data-i18n="Vendor Management">Vendor Management</div>
                </a>
                <ul class="menu-sub">
                    <?php if ($vendor_page_ID != '' && checkrolemenu($vendor_page_ID, $logged_user_level)) : ?>
                        <li class="menu-item <?= $vendor_active; ?>">
                            <a href="newvendor.php" class="menu-link <?= $vendor_active; ?>">
                                <div data-i18n="Vendor" class="ms-4">Vendor</div>
                            </a>
                        </li>
                    <?php
                    endif;
                    if ($driver_page_ID != '' && checkrolemenu($driver_page_ID, $logged_user_level)) : ?>
                        <li class="menu-item <?= $driver_active; ?>">
                            <a href="driver.php" class="menu-link <?= $driver_active; ?>">
                                <div data-i18n="Driver" class="ms-4">Driver</div>
                            </a>
                        </li>
                    <?php
                    endif;
                    if ($vehicle_availability_chart_page_ID != '' && checkrolemenu($vehicle_availability_chart_page_ID, $logged_user_level)) : ?>
                        <li class="menu-item <?= $vehicle_availability_chart_active; ?>">
                            <a href="vehicle_availability_chart.php" class="menu-link <?= $vehicle_availability_chart_active; ?>">
                                <div data-i18n="Vehicle Availability Chart" class="ms-4">Vehicle Availability Chart</div>
                            </a>
                        </li>
                    <?php
                    endif; ?>
                </ul>
            </li>
        <?php endif; ?>

        <?php
        $new_hotspot_dashboard_page_ID = checkmenu('New Hotspot');
        $parking_page_ID = checkmenu('Parking Charge');
        if (($new_hotspot_dashboard_page_ID != '' && checkrolemenu($new_hotspot_dashboard_page_ID, $logged_user_level)) || ($parking_page_ID != '' && checkrolemenu($parking_page_ID, $logged_user_level))) :
        ?>
            <li class="menu-item <?= $hotspot_management; ?> <?= $hotspot_open; ?>">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="tf-icons ti ti-user me-2"></i>
                    <div data-i18n="Hotspot">Hotspot</div>
                </a>
                <ul class="menu-sub">
                    <?php if ($new_hotspot_dashboard_page_ID != '' && checkrolemenu($new_hotspot_dashboard_page_ID, $logged_user_level)) : ?>
                        <li class="menu-item <?= $hotspot_active; ?>">
                            <a href="newhotspot.php" class="menu-link <?= $hotspot_active; ?>">
                                <div data-i18n="New Hotspot" class="ms-4">New Hotspot</div>
                            </a>
                        </li>
                    <?php
                    endif; ?>
                </ul>
                <ul class="menu-sub">
                    <?php if ($parking_page_ID != '' && checkrolemenu($parking_page_ID, $logged_user_level)) : ?>
                        <li class="menu-item <?= $parking_active; ?>">
                            <a href="hotspot_parking_charge_pricebook.php?route=import" class="menu-link <?= $parking_active; ?>">
                                <div data-i18n="Parking Charge" class="ms-4">Parking Charge</div>
                            </a>
                        </li>
                    <?php
                    endif; ?>
                </ul>
            </li>
        <?php endif; ?>

        <?php
        $activity_page_ID = checkmenu('Activity');
        if ($activity_page_ID != '' && checkrolemenu($activity_page_ID, $logged_user_level)) :
        ?>
            <li class="menu-item <?= $activities_active; ?>">
                <a href="activitydetails.php" class="menu-link <?= $activities_active; ?>">
                    <i class="tf-icons ti ti-air-balloon me-2"></i>
                    <div data-i18n="Activity" class="">Activity</div>
                </a>
            </li>
        <?php endif; ?>

        <?php
        $locations_ID = checkmenu('Locations');
        $toll_page_ID = checkmenu('Toll Charge');
        if (($locations_ID != '' && checkrolemenu($locations_ID, $logged_user_level)) || ($toll_page_ID != '' && checkrolemenu($toll_page_ID, $logged_user_level))) :
        ?>
            <li class="menu-item <?= $location_management; ?> <?= $location_open; ?>">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="tf-icons ti ti-user me-2"></i>
                    <div data-i18n="Locations" class="">Locations</div>
                </a>
                <ul class="menu-sub">
                    <?php if ($locations_ID != '' && checkrolemenu($locations_ID, $logged_user_level)) : ?>
                        <li class="menu-item <?= $locations_active; ?>">
                            <a href="locations.php" class="menu-link <?= $locations_active; ?>">
                                <div data-i18n="Locations" class="ms-4">Location</div>
                            </a>
                        </li>
                    <?php
                    endif; ?>
                </ul>
                <ul class="menu-sub">
                    <?php if ($toll_page_ID != '' && checkrolemenu($toll_page_ID, $logged_user_level)) : ?>
                        <li class="menu-item <?= $toll_active; ?>">
                            <a href="location_toll_charge_pricebook.php?route=import" class="menu-link <?= $toll_active; ?>">
                                <div data-i18n="Toll Charge" class="ms-4">Toll Charge</div>
                            </a>
                        </li>
                    <?php
                    endif; ?>
                </ul>
            </li>
        <?php endif; ?>

        <?php
        $guide_dashboard_page_ID = checkmenu('Guide');
        if ($guide_dashboard_page_ID != '' && checkrolemenu($guide_dashboard_page_ID, $logged_user_level)) :
        ?>
            <li class="menu-item <?= $guide_active; ?>">
                <a href="guide.php" class="menu-link <?= $guide_active; ?>">
                    <i class="tf-icons ti ti-user-star me-2"></i>
                    <div data-i18n="Guide">Guide</div>
                </a>
            </li>
        <?php endif; ?>

        <?php
        if (($logged_staff_id == '' || $logged_staff_id == '0')):
            $staff_dashboard_page_ID = checkmenu('Staff');
            if ($staff_dashboard_page_ID != '' && checkrolemenu($staff_dashboard_page_ID, $logged_user_level)) :
        ?>
                <li class="menu-item <?= $staff_active; ?>">
                    <a href="newstaff.php" class="menu-link <?= $staff_active; ?>">
                        <i class="tf-icons ti ti-user-star me-2"></i>
                        <div data-i18n="Staff">Staff</div>
                    </a>
                </li>
        <?php endif;
        endif; ?>

        <?php
        $wallet_dashboard_page_ID = checkmenu('Wallet');
        if ($wallet_dashboard_page_ID != '' && checkrolemenu($wallet_dashboard_page_ID, $logged_user_level)) :
        ?>
            <li class="menu-item <?= $wallet_active; ?>">
                <a href="wallet.php" class="menu-link <?= $wallet_active; ?>">
                    <i class="tf-icons ti ti-user-star me-2"></i>
                    <div data-i18n="Wallet">Wallet</div>
                </a>
            </li>
        <?php endif; ?>

        <?php
        $agent_subscription_history_dashboard_page_ID = checkmenu('Subscription History');
        if ($agent_subscription_history_dashboard_page_ID != '' && checkrolemenu($agent_subscription_history_dashboard_page_ID, $logged_user_level)) :
        ?>
            <li class="menu-item <?= $agent_subscription_history_active; ?>">
                <a href="agent_subscription_history.php" class="menu-link <?= $agent_subscription_history_active; ?>">
                    <i class="tf-icons ti ti-user-star me-2"></i>
                    <div data-i18n="Subscription History">Subscription History</div>
                </a>
            </li>
        <?php endif; ?>

        <?php
        $agent_page = checkmenu('Agent');
        if ($agent_page != '' && checkrolemenu($agent_page, $logged_user_level)) :
        ?>

            <li class="menu-item <?= $agent_active; ?>">
                <a href="agent.php" class="menu-link <?= $agent_active; ?>">
                    <i class="tf-icons ti ti-user me-2"></i>
                    <div data-i18n="Agent">Agent</div>
                </a>
            </li>

        <?php endif; ?>
        <?php
        $additional_staff_info = checkmenu('Agent Staff Request');
        if ($additional_staff_info != '' && checkrolemenu($additional_staff_info, $logged_user_level)) :
        ?>

            <li class="menu-item <?= $agent_staff_request_active; ?>">
                <a href="agent_staff_request.php" class="menu-link <?= $agent_staff_request_active; ?>">
                    <i class="tf-icons ti ti-user me-2"></i>
                    <div data-i18n="Agent Staff Request">Agent Staff Request</div>
                </a>
            </li>

        <?php endif; ?>

        <?php
        $price_export_dashboard_page_ID = checkmenu('Pricebook Export');
        if ($price_export_dashboard_page_ID != '' && checkrolemenu($price_export_dashboard_page_ID, $logged_user_level)) :
        ?>

            <li class="menu-item <?= $export_pricebook_details_active; ?>">
                <a href="export_pricebook_details.php" class="menu-link <?= $export_pricebook_details_active; ?>">
                    <i class="tf-icons ti ti-download me-2"></i>
                    <div data-i18n="Pricebook Export">Pricebook Export</div>
                </a>
            </li>

        <?php endif; ?>


        <?php /* <li class="menu-item <?= $itinerary_active; ?>">
            <a href="itinerary.php" class="menu-link <?= $itinerary_active; ?>">
                <i class="menu-icon tf-icons ti ti-adjustments-search"></i>
                <div data-i18n="Itinerary">Itinerary</div>
            </a>
        </li> -->

        <!-- <li class="menu-item <?= $entry_ticket_active; ?>">
            <a href="entry_ticket.php" class="menu-link <?= $entry_ticket_active; ?>">
                <i class="menu-icon tf-icons ti ti-adjustments-search"></i>
                <div data-i18n="Entry Ticket">Entry Ticket</div>
            </a>
        </li> */ ?>

        <?php
        $hotel_pricebook_dashboard_page_ID = checkmenu('Hotel Pricebook');
        $vehicle_pricebook_dashboard_page_ID = checkmenu('Vehicle Pricebook');
        $guide_pricebook_dashboard_page_ID = checkmenu('Guide Pricebook');
        $activity_pricebook_dashboard_page_ID = checkmenu('Activity Pricebook');
        if (($hotel_pricebook_dashboard_page_ID != '' && checkrolemenu($hotel_pricebook_dashboard_page_ID, $logged_user_level)) || ($vehicle_pricebook_dashboard_page_ID != '' && checkrolemenu($vehicle_pricebook_dashboard_page_ID, $logged_user_level)) || ($guide_pricebook_dashboard_page_ID != '' && checkrolemenu($guide_pricebook_dashboard_page_ID, $logged_user_level)) || ($activity_pricebook_dashboard_page_ID != '' && checkrolemenu($activity_pricebook_dashboard_page_ID, $logged_user_level))) :
        ?>
            <?php /* <li class="menu-item d-none <?= $price_book_open; ?> ">
                <a href="javascript:void(0);" class="menu-link menu-toggle <?= $hotel_overall_pricebook_active; ?>">
                    <i class="tf-icons ti ti-currency-rupee me-2"></i>
                    <div data-i18n="Price Book">Price Book</div>
                </a>
                <ul class="menu-sub">
                    <?php if ($hotel_pricebook_dashboard_page_ID != '' && checkrolemenu($hotel_pricebook_dashboard_page_ID, $logged_user_level)) : ?>
                        <li class="menu-item <?= $pricebook_hotel_active; ?>">
                            <a href="hotel_overall_pricebook.php" class="menu-link <?= $pricebook_hotel_active; ?>">
                                <div data-i18n="Hotel" class="ms-4">Hotel</div>
                            </a>
                        </li>
                    <?php
                    endif;

                    if ($vehicle_pricebook_dashboard_page_ID != '' && checkrolemenu($vehicle_pricebook_dashboard_page_ID, $logged_user_level)) : ?>
                        <li class="menu-item <?= $pricebook_vehicle_active; ?>">
                            <a href="vehicle_cost_pricebook.php" class="menu-link <?= $pricebook_vehicle_active; ?>">
                                <div data-i18n="Vehicle" class="ms-4">Vehicle</div>
                            </a>
                        </li>
                    <?php
                    endif;

                    if ($activity_pricebook_dashboard_page_ID != '' && checkrolemenu($activity_pricebook_dashboard_page_ID, $logged_user_level)) : ?>
                        <li class="menu-item <?= $pricebook_activity_active; ?>">
                            <a href="activity_overall_pricebook.php" class="menu-link <?= $pricebook_activity_active; ?>">
                                <div data-i18n="Activity" class="ms-4">Activity</div>
                            </a>
                        </li>
                    <?php endif;

                    if ($guide_pricebook_dashboard_page_ID != '' && checkrolemenu($guide_pricebook_dashboard_page_ID, $logged_user_level)) : ?>
                        <li class="menu-item <?= $guide_vehicle_active; ?>">
                            <a href="guide_cost_pricebook.php" class="menu-link <?= $guide_vehicle_active; ?>">
                                <div data-i18n="Guide" class="ms-4">Guide</div>
                            </a>
                        </li>
                    <?php
                    endif; ?>
                </ul>
            </li> */ ?>
        <?php endif; ?>
        <?php
        $vendor_invoice_page_ID = checkmenu('Vendor Invoice');
        $driver_invoice_page_ID = checkmenu('Driver Invoice');
        $guide_invoice_page_ID = checkmenu('Guide Invoice');
        if (($vendor_invoice_page_ID != '' && checkrolemenu($vendor_invoice_page_ID, $logged_user_level)) || ($driver_invoice_page_ID != '' && checkrolemenu($driver_invoice_page_ID, $logged_user_level)) || ($guide_invoice_page_ID != '' && checkrolemenu($guide_invoice_page_ID, $logged_user_level))) :
        ?>
            <li class="menu-item <?= $vendor_invoice_management; ?> <?= $vendor_invoice_open; ?>">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="tf-icons ti ti-file me-2"></i>
                    <div data-i18n="Invoice Management">Invoice Management</div>
                </a>
                <ul class="menu-sub">
                    <?php if ($vendor_invoice_page_ID != '' && checkrolemenu($vendor_invoice_page_ID, $logged_user_level)) : ?>
                        <li class="menu-item <?= $vendor_invoice_active; ?>">
                            <a href="vendor_invoice.php" class="menu-link <?= $vendor_invoice_active; ?>">
                                <div data-i18n="Vendor Invoice" class="ms-4">Vendor Invoice</div>
                            </a>
                        </li>
                    <?php
                    endif;
                    if ($driver_invoice_page_ID != '' && checkrolemenu($driver_invoice_page_ID, $logged_user_level)) : ?>
                        <li class="menu-item <?= $driver_invoice_active; ?>">
                            <a href="driver_invoice.php" class="menu-link <?= $driver_invoice_active; ?>">
                                <div data-i18n="Driver Invoice" class="ms-4">Driver Invoice</div>
                            </a>
                        </li>
                    <?php
                    endif;
                    if ($guide_invoice_page_ID != '' && checkrolemenu($guide_invoice_page_ID, $logged_user_level)) : ?>
                        <li class="menu-item <?= $guide_invoice_active; ?>">
                            <a href="guide_invoice.php" class="menu-link <?= $guide_invoice_active; ?>">
                                <div data-i18n="Guide Invoice" class="ms-4">Guide Invoice</div>
                            </a>
                        </li>
                    <?php
                    endif; ?>
                </ul>
            </li>
        <?php endif; ?>

        <?php
        $hotel_category_dashboard_page_ID = checkmenu('Hotel Category');
        $vehicle_type_dashboard_page_ID = checkmenu('Vehicle Type');
        $inbuild_amenities_dashboard_page_ID = checkmenu('Inbuild Amenities');
        $language_dashboard_page_ID = checkmenu('Language');
        $gst_setting_dashboard_page_ID = checkmenu('GST Setting');
        $role_permission_dashboard_page_ID = checkmenu('Role Permission');
        $agent_subscription_dashboard_page_ID = checkmenu('Agent Subscription Plan');
        $agent_configuration_page_ID = checkmenu('Agent configuration');
        $cities_dashboard_page_ID = checkmenu('Cities');

        // $staff_dashboard_page_ID = checkmenu('Staff');
        $agent_dashboard_page_ID = checkmenu('Agent');
        $kilometer_limit_dashboard_page_ID = checkmenu('Kilometer Limit');
        $time_limit_dashboard_page_ID = checkmenu('Time Limit');
        $global_settings_dashboard_page_ID = checkmenu('Global Settings');
        if (($hotel_category_dashboard_page_ID != '' && checkrolemenu($hotel_category_dashboard_page_ID, $logged_user_level)) || ($vehicle_type_dashboard_page_ID != '' && checkrolemenu($vehicle_type_dashboard_page_ID, $logged_user_level)) || ($inbuild_amenities_dashboard_page_ID != '' && checkrolemenu($inbuild_amenities_dashboard_page_ID, $logged_user_level)) || ($language_dashboard_page_ID != '' && checkrolemenu($language_dashboard_page_ID, $logged_user_level)) || ($gst_setting_dashboard_page_ID != '' && checkrolemenu($gst_setting_dashboard_page_ID, $logged_user_level)) || ($role_permission_dashboard_page_ID != '' && checkrolemenu($role_permission_dashboard_page_ID, $logged_user_level)) || ($agent_subscription_dashboard_page_ID != '' && checkrolemenu($agent_subscription_dashboard_page_ID, $logged_user_level))  || ($$agent_configuration_page_ID != '' && checkrolemenu($$agent_configuration_page_ID, $logged_user_level)) || ($staff_dashboard_page_ID != '' && checkrolemenu($staff_dashboard_page_ID, $logged_user_level)) || ($agent_dashboard_page_ID != '' && checkrolemenu($agent_dashboard_page_ID, $logged_user_level)) || ($kilometer_limit_dashboard_page_ID != '' && checkrolemenu($kilometer_limit_dashboard_page_ID, $logged_user_level)) || ($time_limit_dashboard_page_ID != '' && checkrolemenu($time_limit_dashboard_page_ID, $logged_user_level)) || ($global_settings_dashboard_page_ID != '' && checkrolemenu($global_settings_dashboard_page_ID, $logged_user_level)) || ($cities_dashboard_page_ID != '' && checkrolemenu($cities_dashboard_page_ID, $logged_user_level))) :
        ?>

            <?php if ($logged_agent_id == '0') : ?>
                <li class="menu-item <?= $settings_management; ?> <?= $settings_category_open; ?> ">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="tf-icons ti ttf-icons ti ti-settings-automation me-2"></i>
                        <div data-i18n="Settings">Settings</div>
                    </a>
                    <ul class="menu-sub">
                        <?php
                        if ($global_settings_dashboard_page_ID != '' && checkrolemenu($global_settings_dashboard_page_ID, $logged_user_level)) : ?>
                            <li class="menu-item <?= $globalsettings_active; ?>">
                                <a href="global_settings.php" class="menu-link <?= $globalsettings_active; ?>">
                                    <div data-i18n="Global Settings" class="ms-4">Global Settings</div>
                                </a>
                            </li>
                        <?php endif;

                        if ($gst_setting_dashboard_page_ID != '' && checkrolemenu($gst_setting_dashboard_page_ID, $logged_user_level)) : ?>
                            <li class="menu-item <?= $gst_setting_active; ?>">
                                <a href="gstsetting.php" class="menu-link <?= $gst_setting_active; ?>">
                                    <div data-i18n="GST Setting" class="ms-4">GST Setting</div>
                                </a>
                            </li>
                        <?php
                        endif;

                        if ($hotel_category_dashboard_page_ID != '' && checkrolemenu($hotel_category_dashboard_page_ID, $logged_user_level)) : ?>
                            <li class="menu-item <?= $hotel_category_active; ?>">
                                <a href="hotelcategory.php" class="menu-link <?= $hotel_category_active; ?>">
                                    <div data-i18n="Hotel Category" class="ms-4">Hotel Category</div>
                                </a>
                            </li>
                        <?php
                        endif;

                        if ($inbuild_amenities_dashboard_page_ID != '' && checkrolemenu($inbuild_amenities_dashboard_page_ID, $logged_user_level)) : ?>
                            <li class="menu-item <?= $inbuild_amenities_active; ?>">
                                <a href="inbuild_amenities.php" class="menu-link <?= $inbuild_amenities_active; ?>">
                                    <div data-i18n="Inbuild Amenities" class="ms-4">Inbuild Amenities</div>
                                </a>
                            </li>
                        <?php
                        endif;

                        if ($vehicle_type_dashboard_page_ID != '' && checkrolemenu($vehicle_type_dashboard_page_ID, $logged_user_level)) : ?>
                            <li class="menu-item <?= $vehicle_type_active; ?>">
                                <a href="vehicle_type.php" class="menu-link <?= $vehicle_type_active; ?>">
                                    <div data-i18n="Vehicle Type" class="ms-4">Vehicle Type</div>
                                </a>
                            </li>
                        <?php endif;

                        if ($cities_dashboard_page_ID != '' && checkrolemenu($cities_dashboard_page_ID, $logged_user_level)) : ?>
                            <li class="menu-item <?= $cities_active; ?>">
                                <a href="cities.php" class="menu-link <?= $cities_active; ?>">
                                    <div data-i18n="Cities" class="ms-4">Cities</div>
                                </a>
                            </li>
                        <?php
                        endif;

                        if ($kilometer_limit_dashboard_page_ID != '' && checkrolemenu($kilometer_limit_dashboard_page_ID, $logged_user_level)) : ?>
                            <?php /* <li class="menu-item <?= $kmslimit_active; ?>">
                                <a href="kmslimit.php" class="menu-link <?= $kmslimit_active; ?>">
                                    <div data-i18n="Outstation KM Limit" class="ms-4">Outstation KM Limit</div>
                                </a>
                            </li> */ ?>
                        <?php
                        endif;

                        if ($time_limit_dashboard_page_ID != '' && checkrolemenu($time_limit_dashboard_page_ID, $logged_user_level)) : ?>
                            <?php /* <li class="menu-item <?= $timelimit_active; ?>">
                                <a href="timelimit.php" class="menu-link <?= $timelimit_active; ?>">
                                    <div data-i18n="Local KM Limit" class="ms-4">Local KM Limit</div>
                                </a>
                            </li> */ ?>
                        <?php endif; ?>



                        <?php

                        if ($language_dashboard_page_ID != '' && checkrolemenu($language_dashboard_page_ID, $logged_user_level)) : ?>
                            <li class="menu-item <?= $language_active; ?>">
                                <a href="language.php" class="menu-link <?= $language_active; ?>">
                                    <div data-i18n="Language" class="ms-4">Language</div>
                                </a>
                            </li>
                        <?php
                        endif;



                        if ($role_permission_dashboard_page_ID != '' && checkrolemenu($role_permission_dashboard_page_ID, $logged_user_level)) : ?>
                            <li class="menu-item <?= $rolepermission_active; ?>">
                                <a href="rolepermission.php" class="menu-link <?= $rolepermission_active; ?>">
                                    <div data-i18n="Role Permission" class="ms-4">Role Permission</div>
                                </a>
                            </li>

                        <?php endif;

                        if ($agent_subscription_dashboard_page_ID != '' && checkrolemenu($agent_subscription_dashboard_page_ID, $logged_user_level)) : ?>
                            <li class="menu-item <?= $agent_subscription_plan_active; ?>">
                                <a href="agent_subscription_plan.php" class="menu-link <?= $agent_subscription_plan_active; ?>">
                                    <div data-i18n="Agent Subscription Plan" class="ms-4">Agent Subscription Plan</div>
                                </a>
                            </li>
                        <?php endif; ?>

                    </ul>
                </li>
            <?php endif; ?>
        <?php endif; ?>


        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 295px; right: 4px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 49px;"></div>
        </div>
    </ul>
    <?php
    $list_user_datas = sqlQUERY_LABEL("SELECT `username`, `useremail`,`staff_id`, `agent_id`,`guide_id`, `user_profile`, `roleID` FROM `dvi_users` where `userID` ='$logged_user_id'") or die("#1_UNABLE_TO_FETCH_USER_DATA:" . sqlERROR_LABEL());
    while ($row = sqlFETCHARRAY_LABEL($list_user_datas)) :
        $username =  ucwords($row["username"]);
        $useremail = $row["useremail"];
        $staff_id = $row["staff_id"];
        $agent_id = $row["agent_id"];
        $guide_id = $row["guide_id"];
        $user_profile = $row["user_profile"];
        $roleID = $row["roleID"];

        $roleName = getRole($roleID, 'label');
        if (($staff_id != '' && $staff_id != '0') && ($agent_id != '' && $agent_id != '0')):
            $username = ucwords(getAGENT_STAFF_DETAILS($staff_id, '', 'label'));
            $roleName = "Staff";
        elseif (($agent_id != '' && $agent_id != '0') && ($staff_id == '' || $staff_id == '0')):
            $username = ucwords(getAGENT_details($agent_id, '', 'label'));
        elseif (($roleID == 3)):
            $username = ucwords(getTRAVEL_EXPERT($staff_id, 'label'));
        elseif (($roleID == 6)):
            $username = ucwords(getAGENT_STAFF_DETAILS($staff_id, '', 'label'));
        endif;
        if (($guide_id != '' && $guide_id != '0') && ($roleID == 5)):
            $username = ucwords(getGUIDEDETAILS($guide_id, 'label'));
        endif;
    endwhile;
    ?>

    <?php if ($logged_agent_id != '0' && $logged_agent_id != '') : ?>
        <div class="border rounded m-2 px-3 py-2 wallet-section" href="javascript:void(0);">
            <div class="d-flex align-items-center">
                <img class="me-3" src="../head/assets/img/wallet.png" width="24px">
                <div>
                    <h6 class="m-0"><?= general_currency_symbol; ?> <?= number_format($total_wallet_agent, 2); ?></h6>
                    <a class=" text-primary" href="javascript:;" style="font-size: 14px;">
                        <!-- <i class="ti ti-logout me-1 ti-sm" ></i> -->
                        <small class="text-muted">Total Wallet Amount</small>
                    </a>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="app-brand demo profile-container justify-content-between" href="javascript:void(0);" data-bs-toggle="dropdown">
        <div class="d-flex align-items-center">
            <div class="avatar avatar-md me-3 ms-1 profile-image-container">
                <img src="assets/img/avatars/1.png" alt="Avatar" class="rounded-circle">
            </div>
            <div class="profile-info">
                <h6 class="m-0"><?= $username; ?></h6>
                <a class="text-primary" href="javascript:;" style="font-size: 14px;">
                    <small class="text-muted"><?= $roleName; ?></small>
                </a>
            </div>
        </div>
    </div>

    <ul class="dropdown-menu dropdown-menu-end p-0" style="width: 93%; margin-bottom:5px">
        <?php if (($logged_agent_id != '' && $logged_agent_id != '0') && ($logged_staff_id == '' || $logged_staff_id == '0')): ?>
            <li>
                <a class="dropdown-item text-primary" href="profile.php">
                    <i class="ti ti-user me-2 ti-sm"></i>
                    <span class="align-middle">Profile</span>
                </a>
            </li>
            <div class="dropdown-divider"></div>
        <?php endif; ?>
        <li onclick="showCHANGEPASSWORDMODAL(0);">
            <a class="dropdown-item text-primary" href="javascript:;"><svg class="me-2" width="19" height="19" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="rgba(114, 49, 207, 1)" />
                            <stop offset="50%" stop-color="rgba(195, 60, 166, 1)" />
                            <stop offset="100%" stop-color="rgba(238, 63, 206, 1)" />
                        </linearGradient>
                    </defs>
                    <path fill="none" stroke="url(#gradient)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" d="M16.334 2.75H7.665C4.644 2.75 2.75 4.889 2.75 7.916V16.084C2.75 19.111 4.635 21.25 7.665 21.25H16.333C19.364 21.25 21.25 19.111 21.25 16.084V7.916C21.25 4.889 19.364 2.75 16.334 2.75Z" />
                    <path fill="none" stroke="url(#gradient)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" d="M10.6889 11.9999C10.6889 13.0229 9.85986 13.8519 8.83686 13.8519C7.81386 13.8519 6.98486 13.0229 6.98486 11.9999C6.98486 10.9769 7.81386 10.1479 8.83686 10.1479H8.83986C9.86086 10.1489 10.6889 10.9779 10.6889 11.9999Z" />
                    <path fill="none" stroke="url(#gradient)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" d="M10.6919 12H17.0099V13.852" />
                    <path fill="none" stroke="url(#gradient)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" d="M14.1816 13.852V12" />
                </svg>
                <span class="align-middle">Change Password</span></a>
        </li>
        <div class="dropdown-divider"></div>
        <li>
            <a class="dropdown-item text-primary" href="logout.php">
                <i class="ti ti-logout me-2 ti-sm"></i>
                <span class="align-middle">Log Out</span>
            </a>
        </li>
    </ul>
</aside>

<div class="modal fade" id="CHANGE_PASSWORD" tabindex="-1" role="dialog" aria-labelledby="CHANGE_PASSWORDLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- <div class="modal-header border-0">
                <button class="btn-close me-1 mt-1 " type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> -->
            <div class="modal-body pe-5 ps-5 pb-5  pt-5 receiving-change-password-form-data">

            </div>
        </div>
    </div>
</div>

<script>
    function showCHANGEPASSWORDMODAL() {
        $('.receiving-change-password-form-data').load('engine/ajax/__ajax_change_password_form.php?type=show_form', function() {
            const container = document.getElementById("CHANGE_PASSWORD");
            const modal = new bootstrap.Modal(container);
            modal.show();
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        const profileInfo = document.querySelector('.profile-info');

        // Replace 'menu-collapsed-class' with the actual class used when your menu is collapsed
        const isMenuCollapsed = document.body.classList.contains('menu-collapsed-class');

        if (isMenuCollapsed) {
            profileInfo.classList.add('d-none');
        } else {
            profileInfo.classList.remove('d-none');
        }
    });


    // function checkCompletion(percentage) {
    //     var alertConfig = document.getElementById('alertConfig');

    //     if (percentage === 100) {
    //         alertConfig.style.display = 'none'; // Hide the alert when 100%
    //     } else {
    //         alertConfig.style.display = 'block'; // Show the alert when not 100%
    //     }
    // }
</script>
