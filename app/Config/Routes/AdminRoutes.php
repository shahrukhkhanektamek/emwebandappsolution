<?php 

$routes->group('admin', ['namespace' => 'App\Controllers\Admin', 'filter'=>'AdminAuth',] ,function ($routes) {
    
    $routes->get('dashboard', 'AdminDashboardController::index', ['as' => 'admin.dashboard']);


    $routes->group('profile', function($routes) {
        $routes->get('/', 'AdminProfileController::index', ['as' => 'admin.profile.index']);
        $routes->post('update', 'AdminProfileController::update', ['as' => 'admin.profile.update']);
        $routes->post('update-profile-image', 'AdminProfileController::update_profile_image', ['as' => 'admin.profile.update-profile-image']);
    });

    $routes->group('password', function($routes) {
        $routes->get('/', 'AdminPasswordController::index', ['as' => 'admin.password.index']);
        $routes->post('update', 'AdminPasswordController::update', ['as' => 'admin.password.update']);
    });

    $routes->group('setting', function($routes) {
        $routes->get('main', 'AdminSettingController::main', ['as' => 'setting.main']);
        $routes->post('main-update', 'AdminSettingController::main_update', ['as' => 'setting.main-update']);

        $routes->get('policy', 'AdminSettingController::policy', ['as' => 'setting.policy']);
        $routes->post('policy-update', 'AdminSettingController::policy_update', ['as' => 'setting.policy-update']);

        $routes->get('logo', 'AdminSettingController::logo', ['as' => 'setting.logo']);
        $routes->post('logo-update', 'AdminSettingController::logo_update', ['as' => 'setting.logo-update']);        
    });

    $routes->group('script', function($routes) {
        $routes->get('/', 'AdminScriptController::index', ['as' => 'script.index']);
        $routes->post('update', 'AdminScriptController::update', ['as' => 'script.update']);
    });

    $routes->group('meta-tag', function($routes) {
        $routes->get('/', 'AdminMetaTagController::index', ['as' => 'meta-tag.list']);
        $routes->get('load_data', 'AdminMetaTagController::load_data', ['as' => 'meta-tag.load_data']);
        $routes->get('add', 'AdminMetaTagController::add', ['as' => 'meta-tag.add']);
        $routes->get('edit/(:any)?', 'AdminMetaTagController::edit/$1', ['as' => 'meta-tag.edit']);
        $routes->get('view/(:any)', 'AdminMetaTagController::view/$1', ['as' => 'meta-tag.view']);
        $routes->post('update', 'AdminMetaTagController::update', ['as' => 'meta-tag.update']);
        $routes->post('delete/(:any)', 'AdminMetaTagController::delete/$1', ['as' => 'meta-tag.delete']);
        $routes->post('block_unblock/(:any)', 'AdminMetaTagController::block_unblock/$1', ['as' => 'meta-tag.block_unblock']);
    });


    $routes->group('state', function($routes) {
        $routes->get('/', 'AdminStateController::index', ['as' => 'state.list']);
        $routes->get('load_data', 'AdminStateController::load_data', ['as' => 'state.load_data']);
        $routes->get('add', 'AdminStateController::add', ['as' => 'state.add']);
        $routes->get('edit/(:any)?', 'AdminStateController::edit/$1', ['as' => 'state.edit']);
        $routes->get('view/(:any)', 'AdminStateController::view/$1', ['as' => 'state.view']);
        $routes->post('update', 'AdminStateController::update', ['as' => 'state.update']);
        $routes->post('delete/(:any)', 'AdminStateController::delete/$1', ['as' => 'state.delete']);
        $routes->post('block_unblock/(:any)', 'AdminStateController::block_unblock/$1', ['as' => 'state.block_unblock']);
    });

    $routes->group('city', function($routes) {
        $routes->get('/', 'AdminCityController::index', ['as' => 'city.list']);
        $routes->get('load_data', 'AdminCityController::load_data', ['as' => 'city.load_data']);
        $routes->get('add', 'AdminCityController::add', ['as' => 'city.add']);
        $routes->get('edit/(:any)?', 'AdminCityController::edit/$1', ['as' => 'city.edit']);
        $routes->get('view/(:any)', 'AdminCityController::view/$1', ['as' => 'city.view']);
        $routes->post('update', 'AdminCityController::update', ['as' => 'city.update']);
        $routes->post('delete/(:any)', 'AdminCityController::delete/$1', ['as' => 'city.delete']);
        $routes->post('block_unblock/(:any)', 'AdminCityController::block_unblock/$1', ['as' => 'city.block_unblock']);
    });

    $routes->group('admin-user', function($routes) {
        $routes->get('/', 'AdminUserController::index', ['as' => 'admin-user.list']);
        $routes->get('load_data', 'AdminUserController::load_data', ['as' => 'admin-user.load_data']);
        $routes->get('add', 'AdminUserController::add', ['as' => 'admin-user.add']);
        $routes->get('edit/(:any)?', 'AdminUserController::edit/$1', ['as' => 'admin-user.edit']);
        $routes->get('view/(:any)', 'AdminUserController::view/$1', ['as' => 'admin-user.view']);
        $routes->post('update', 'AdminUserController::update', ['as' => 'admin-user.update']);
        $routes->post('delete/(:any)', 'AdminUserController::delete/$1', ['as' => 'admin-user.delete']);
        $routes->post('block_unblock/(:any)', 'AdminUserController::block_unblock/$1', ['as' => 'admin-user.block_unblock']);
    });


    $routes->group('transaction', function($routes) {
        $routes->get('/', 'AdminTransactionController::index', ['as' => 'transaction.list']);
        $routes->get('load_data', 'AdminTransactionController::load_data', ['as' => 'transaction.load_data']);
        $routes->get('add', 'AdminTransactionController::add', ['as' => 'transaction.add']);
        $routes->get('edit/(:any)?', 'AdminTransactionController::edit/$1', ['as' => 'transaction.edit']);
        $routes->get('view/(:any)', 'AdminTransactionController::view/$1', ['as' => 'transaction.view']);
        $routes->post('update', 'AdminTransactionController::update', ['as' => 'transaction.update']);
        $routes->post('delete/(:any)', 'AdminTransactionController::delete/$1', ['as' => 'transaction.delete']);
        $routes->post('block_unblock/(:any)', 'AdminTransactionController::block_unblock/$1', ['as' => 'transaction.block_unblock']);
    });

 
    $routes->group('portfolio', function($routes) {
        $routes->get('/', 'AdminPortfolioController::index', ['as' => 'portfolio.list']);
        $routes->get('load_data', 'AdminPortfolioController::load_data', ['as' => 'portfolio.load_data']);
        $routes->get('add', 'AdminPortfolioController::add', ['as' => 'portfolio.add']);
        $routes->get('edit/(:any)?', 'AdminPortfolioController::edit/$1', ['as' => 'portfolio.edit']);
        $routes->get('view/(:any)', 'AdminPortfolioController::view/$1', ['as' => 'portfolio.view']);
        $routes->post('update', 'AdminPortfolioController::update', ['as' => 'portfolio.update']);
        $routes->post('delete/(:any)', 'AdminPortfolioController::delete/$1', ['as' => 'portfolio.delete']);
        $routes->post('block_unblock/(:any)', 'AdminPortfolioController::block_unblock/$1', ['as' => 'portfolio.block_unblock']);
    });

    
    $routes->group('client-logo', function($routes) {
        $routes->get('/', 'AdminClientLogoController::index', ['as' => 'client-logo.list']);
        $routes->get('load_data', 'AdminClientLogoController::load_data', ['as' => 'client-logo.load_data']);
        $routes->get('add', 'AdminClientLogoController::add', ['as' => 'client-logo.add']);
        $routes->get('edit/(:any)?', 'AdminClientLogoController::edit/$1', ['as' => 'client-logo.edit']);
        $routes->get('view/(:any)', 'AdminClientLogoController::view/$1', ['as' => 'client-logo.view']);
        $routes->post('update', 'AdminClientLogoController::update', ['as' => 'client-logo.update']);
        $routes->post('delete/(:any)', 'AdminClientLogoController::delete/$1', ['as' => 'client-logo.delete']);
        $routes->post('block_unblock/(:any)', 'AdminClientLogoController::block_unblock/$1', ['as' => 'client-logo.block_unblock']);
    });



    /*enquiry statrt*/

      

        $routes->group('contact-enquiry', function($routes) {
            $routes->get('/', 'AdminContactEnquiryController::index', ['as' => 'contact-enquiry.list']);
            $routes->get('load_data', 'AdminContactEnquiryController::load_data', ['as' => 'contact-enquiry.load_data']);
            $routes->get('view/(:any)', 'AdminContactEnquiryController::view/$1', ['as' => 'contact-enquiry.view']);
            $routes->post('delete/(:any)', 'AdminContactEnquiryController::delete/$1', ['as' => 'contact-enquiry.delete']);
        });

        $routes->group('lead-enquiry', function($routes) {
            $routes->get('/', 'AdminLeadEnquiryController::index', ['as' => 'lead-enquiry.list']);
            $routes->get('load_data', 'AdminLeadEnquiryController::load_data', ['as' => 'lead-enquiry.load_data']);
            $routes->post('transfer_now', 'AdminLeadEnquiryController::transfer_now', ['as' => 'lead-enquiry.transfer_now']);
            $routes->get('view/(:any)', 'AdminLeadEnquiryController::view/$1', ['as' => 'lead-enquiry.view']);
            $routes->post('delete/(:any)', 'AdminLeadEnquiryController::delete/$1', ['as' => 'lead-enquiry.delete']);
        });

   

    /*enquiry end*/

});

