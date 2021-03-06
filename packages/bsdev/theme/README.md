<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Theme

AdminLTE V3 theme is nicely modified for laravel application.It includes all the necessary assets of adminlte v3

## Following are the features

Some of specific features are listed below

-   Easy to use
-   Easy to Customize
-   Can develop futher plugins

## Key Components

-   Authentication with Authorization
-   User Management
-   Site Setting
-   Plugin Enable/Disblae
-   Header and Footer Menus
-   Testimonials
-   Subscription with bulk E-mail
-   Basic CMS for any type of conent such as privay policy,about us, etc.

## Usage

### Authentication

It will provide HasPermission Traits, you must have to include in the User Model

```php
use Bsdev\Theme\Traits\HasPermission;

class User extends Model{
    use HasPermission;
}

```

This will attach user with permissions
To get User Permission

```php

auth()->user()->permission->permission;
// it will provide array response
[ "user_create","user_view","..."]


```

## Theme package has following in-built permissions

```php
        [
            'user_create',
            'user_edit',
            'user_delete',
            'user_menu',
            'user_view',
            'user_update',
            'role_create',
            'role_edit',
            'role_delete',
            'role_menu',
            'role_view',
            'role_update',
            'testimonial_create',
            'testimonial_edit',
            'testimonial_delete',
            'testimonial_menu',
            'testimonial_view',
            'testimonial_update',
            'page_create',
            'page_edit',
            'page_delete',
            'page_menu',
            'page_view',
            'page_update',
            'subscription_create',
            'subscription_edit',
            'subscription_delete',
            'subscription_menu',
            'subscription_view',
            'subscription_update',
            'menu_create',
            'menu_edit',
            'menu_delete',
            'menu_menu',
            'menu_view',
            'menu_update',
            'faq_create',
            'faq_edit',
            'faq_delete',
            'faq_menu',
            'faq_view',
            'faq_update',
            'message_create',
            'message_edit',
            'message_delete',
            'message_menu',
            'message_view',
            'message_update',
            'site_setting',
            'company_profile','
                            ]
```

### It provide Theme Facade class which can perform follwoing

#### Usage

```php
use Theme;

//Site related Content

Theme::siteSetup();

//CMS by slug
Theme::getCMSBySlug($slug);

//Header Menu, it will include child menus
Theme::getHeaderMenu();

//Footer Menu,it will include child menus
Theme::getFooterMenu();

//Testimonials
Theme::testimonials();

//Subscription Creation
//requst must have valid email
Theme::createSubscription($request)

```

## To User Register other plugin

```cmd

php artisan vendor:publish

//choose ThemeServiceProvier

```

It will publish all the assets and theme.php config file
where you can register new plugins

## Create Subscription

```php

use Bsdev\Theme\Models\Subscription;

$data = [
    'email'
];

Subscription::create($data);

```

## Create Message

```php

use Bsdev\Theme\Models\Message;

$data = [
    'name'=>'required|string|max:255',
    'email'=>'nullable|email',
    'phone'=>'required|string|max:255',
    'subject'=>'required|string|max:244',
    'message'=>'required|string|max:2000',
];

Message::create($data);

```
