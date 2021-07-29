<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

// Home > Active Clients
Breadcrumbs::for('client', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Active Client', route('client'));
});
// Home > Job Orders
Breadcrumbs::for('joborders', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Job Orders', route('client'));
});

// Home > Client Selection
Breadcrumbs::for('clientselection', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Client Selection', route('client'));
});

// Home > Client Selection 
Breadcrumbs::for('addclient', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Add New Client', route('client'));
});

// Home > Applicants
Breadcrumbs::for('applicants', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Applicant', route('applicant.index'));
});

// Home > Job Selection
Breadcrumbs::for('selectjob', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Select Job', route('client'));
});


// Home > Blog > [Category]
Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category));
});


// Home > Select Job > [Add New Applicant]
// Breadcrumbs::for('clients', function (BreadcrumbTrail $trail, $client) {
//     $trail->parent('home');
//     $trail->push($client->title, route('client', $client));
// });