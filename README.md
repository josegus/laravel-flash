# Flash messages an validations for your Laravel apps

[![Build Status](https://travis-ci.com/josegus/laravel-flash.svg?branch=master)](https://travis-ci.com/josegus/laravel-flash)

This composer package offers an easy way to manage and show laravel flash message notifications.

It includes defaults messages for most commonly use cases such as default "success" o "error" message, 
or CRUD operations (stored, updated, deleted.)


## Installation

Require the package by executing:

```bash
composer require josegus/laravel-flash
```


## Usage

Inside any place of your app (typically a controller or middleware) call the "flash" helper included with the package:

```php
public function store()
{
    // Perform store action...

    flash()->success('Your item has been saved successfully!');
    
    return back();
}
```

The package includes most of common messages for different actions inside most laravel applications:

```
- flash('Nice job')                      : Flash an alert of type "success" with a custom message
- flash()->success('Good job!')          : Flash an alert of type "success" with the given message
- flash()->error('Something went wrong') : Flash an alert of type "danger" with the given message
- flash()->warning('Be careful!')        : Flash an alert of type "warning" with the given message 
- flash()->stored()                      : Flash an alert of type "success" with a default message (founded in flash.messages.stored) 
- flash()->stored('Custom message')      : Flash an alert of type "success" with a custom message 
- flash()->updated()                     : Flash an alert of type "success" with a default message (founded in flash.messages.updated)
- flash()->deleted()                     : Flash an alert of type "success" with a default message (founded in flash.messages.deleted)
- flash()->stored()->dismissible()       : Flash an alert of type "success" with a default message (founded in flash.messages.stored) that can be dismissible
- flash()->stored()->dismissible(false)  : Flash an alert of type "success" with a default message (founded in flash.messages.stored) that should not be dismissible
```

Once you have flashed a message in session, you will need to display it in your view. You can use the view included 
with the package:

```php
@include('flash::message')
``` 

## Configuration

You can export the config file to change default messages, views and enable some extra features. You may do su executing:

```bash
php artisan vendor:publish --tag=laravel-flash:config
```

Now you should have a `flash.php` file inside the config folder. Don't forget to use `--force` if you need to force to re-publish the config file.


## Customizing views

You can export the included views to adapt to your needs. You may do su executing:

```bash
php artisan vendor:publish --tag=laravel-flash:views
```

Now you should have views inside `resources/views/vendor/flash` folder. Don't forget to use `--force` if you need to force to re-publish the config file.


## Using default validations view

By default, the package show the validation errors inside the `flash::message` view. Validation errors are showed inside a "alert-danger" as an unordered list by default.

You can disable this behaviour by changing `flash.validations.enabled` to `false` in config/flash.php file.

If you wish, you can modify this view to adapt to your needs, executing:

```bash
php artisan vendor:publish --tag=laravel-flash:views
``` 


## Example

The package doesn't includes Bootstrap or any other styling or frontend assets frameworks, so you need to import the
necessary stylesheets.

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    @include('flash::message')

    <p>Welcome to my website...</p>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>
```
Success 
<p align="center">
    <img src="https://yd5dya.dm.files.1drv.com/y4mPLzxOupt5n4TV7CfrjdrnZw7I-V4uFZckhZInhipr3yac08H3NL46yv13RCr5hZAwlwgSFpD7Skc8_MZbUfWZ2bg6Qc9eD2kVaQW3gZhcbumvYW_NoGAxeqve4nk5oks7SwXZdnN9UPQhYeY7ZRtzT1F_5yL844_AskgvyJ9-PdXHJLZqaEJe4gGkeo9ahwPVWLL2apNJgbh4JHo6xacTw?width=959&height=468&cropmode=none" style="max-width: 100%; height: auto;" />
</p>

Error
<p align="center">
    <img src="https://yd7c6w.dm.files.1drv.com/y4m3iSJ-pGxRrw5ymIy9Ku9FjVfZUq-Ptmb0se3hT8HeVaMokznf5C9QaUbz0tjcEPGxCHre2dJ0woGTVHPckPr4PwzUp8GzeNu85v4aTVsL_ww0xTYBdtrgVdfTgaxXTQ0PXJvayVRF1TaDqwM28JjNSUiITmkcBP5VD2vzWVuZqgvNQc_WvIL8Ax_jsViGsqjC3ZPh1rDU8cPp6umRj52Lw?width=962&height=480&cropmode=none" style="max-width: 100%; height: auto;" />
</p>

Dismissible
<p align="center">
    <img src="https://yd4ndw.dm.files.1drv.com/y4mdMfxci20dQeNpvd_mVpK2YVahJ3ZmqnJRyONJv-R8dzNVVjVdLF5RrEfxvzCNXdU1IyaYKbk2FgBM6f5fCgGb9Cit7SpsMXanWD80MPYg4kdYTyz7FA0DNWi44cyuLs-meXARmeTAFFPd_Xbk0rdsILLqKbStGnwylMyUOBpiS6DelFsvmVb0VQM7yAcGb37ZJ3VR56fllyRtHWLADgM5A?width=958&height=470&cropmode=none" style="max-width: 100%; height: auto;" />
</p>

Static
<p align="center">
    <img src="https://yd6mag.dm.files.1drv.com/y4m_4iMCMfzfoHVFUKGaiyzc13sCVgSwkM44xjKnY6PN6MoYj307R71tteo5YdHZ5ZLFyWZvm_p0RxGcuGIXT-NaWj2GUXlFAdfZua7f_jWWcQaZTqwZX8YEeUqjAlqvPUAXLtCShkWS50HWEYIxLpDKcLlr4HLHtouy1bzyhm29I8qLlyMb1YSG5ZuI8cm4wCL8KDIIoMW9VgGNh-K2GkT_Q?width=961&height=473&cropmode=none" style="max-width: 100%; height: auto;" />
</p>

Validations
<p align="center">
    <img src="https://y7nbmw.dm.files.1drv.com/y4mI2nhOE5IHfD52aJnfKh3Kb3mtvmCY4_HfQ9jHaz-2VC2y7HH9Ih3W4zv8lapLnZbWdiCxlEXay94BvronRsTSbBF9s_rPhxuDWTmP4afyezsCdf01dV4gjX8OFgX_4tCbc1A0mfO2AKHdbbeq6T-4XOPSQW4CaAXKPb_6FXx6ZhBTIvWjAMX5Gph-aboTjexVC4_kwoZpFCFveVQVBBClg?width=974&height=528&cropmode=none" style="max-width: 100%; height: auto;"/>
</p>

## Tips

### All alerts dismissible by default

By default, all alerts are dismissible. You can disable this by changing `flash.dismissible` to `false`.
If you set `flash.dismissible` `false`, you still can make dismissible a certain alert by chaining:
 ```php
    flash()->dismissible();
``` 

Or make a certain alert static by calling:
 ```php 
    flash()->dismissible(false);
```

## Why another flash package?

There are great packages to create flash messages:

- [flash](https://github.com/laracasts/flash) by [Jeffrey Way](https://github.com/JeffreyWay)
- [laravel-flash](https://github.com/spatie/laravel-flash) by [Spatie](https://github.com/spatie)
- [laravel-flash](https://github.com/coderello/laraflash) by [Coderello](https://github.com/coderello)

The main difference with each one is the ability to set a default message for most common actions 
(a success action, a model stored, a model updated, a model deleted..).

I decided to create this package to suit my own needs, as most of the time I end up working with many controllers with
the basic CRUD operations (Cread, Read, Update, Delete) and writing a message for each operation does not seem to me
to be the best way to handle the same message for each operation. 

## Testing

``` bash
composer test
```
