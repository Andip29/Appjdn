<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Dashboard
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', route('dashboard.index'));
});

// Dashboard / Home
Breadcrumbs::for('dashboard_home', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Home','#');
});

// Dashboard / Roles
Breadcrumbs::for('roles', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Roles',route('roles.index'));
});

// Dashboard / Roles / add
Breadcrumbs::for('add_role', function ($trail) {
    $trail->parent('roles');
    $trail->push('Add',route('roles.create'));
});

// Dashboard / Roles / detail
Breadcrumbs::for('detail_role', function ($trail, $role) {
    $trail->parent('roles');
    $trail->push('Detail',route('roles.show', ['role'=> $role]));
    $trail->push($role->name, route('roles.show', ['role'=> $role]));
});

// Dashboard / Roles / edit
Breadcrumbs::for('edit_role', function ($trail, $role) {
    $trail->parent('roles');
    $trail->push('Edit',route('roles.edit', ['role'=> $role]));
    $trail->push($role->name, route('roles.edit', ['role'=> $role]));
});

// Dashboard / User
Breadcrumbs::for('users', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Users',route('users.index'));
});

// Dashboard / Roles / add
Breadcrumbs::for('add_user', function ($trail) {
    $trail->parent('users');
    $trail->push('Add',route('users.create'));
});

// Dashboard / User / edit
Breadcrumbs::for('edit_user', function ($trail, $user) {
    $trail->parent('users');
    $trail->push('Edit',route('users.edit', ['user' => $user]));
    $trail->push($user->name, route('users.edit', ['user'=> $user]));   
});

Breadcrumbs::for('send_message', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Message',route('reminder.form'));
});



Breadcrumbs::for('inventories', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Inventories',route('inventories.index'));
});

// Dashboard / Roles / add
Breadcrumbs::for('add_inventory', function ($trail) {
    $trail->parent('inventories');
    $trail->push('Add',route('inventories.create'));
});

// Dashboard / Inventory / edit
Breadcrumbs::for('edit_inventory', function ($trail, $inventory) {
    $trail->parent('inventories'); 
    $trail->push('Edit', route('inventories.edit', ['inventory' => $inventory]));
    $trail->push($inventory->nama, route('inventories.edit', ['inventory' => $inventory]));
});

// // Home > Blog
// Breadcrumbs::for('blog', function (BreadcrumbTrail $trail) {
//     $trail->parent('home');
//     $trail->push('Blog', route('blog'));
// });

// // Home > Blog > [Category]
// Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
//     $trail->parent('blog');
//     $trail->push($category->title, route('category', $category));
// });