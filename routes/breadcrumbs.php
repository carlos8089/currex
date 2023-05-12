<?php //Breadcrumbs routes
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

//Admin Pages

//Changer Pages

//Customer Pages
    //Dashboard
    Breadcrumbs::for('dashboard', function(BreadcrumbTrail $trail){
        $trail->push('Dashboard', route('dashboard'));
    });
    //Dashboard > {Changer}
    Breadcrumbs::for('changer', function(BreadcrumbTrail $trail){
        $trail->parent('dashboard');
        $trail->push('Changer', url('/changers/jane-doe'));
    });
    //Dashboard > {Changer} > Message
    Breadcrumbs::for('messages', function(BreadcrumbTrail $trail){
        $trail->parent('changer');
        $trail->push('Messages', route('messages'));
    });
