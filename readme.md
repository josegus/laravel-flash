# Flash messages an validations for your Laravel apps

This composer package offers an easy way to manage and show laravel flash message notifications.

It includes defaults messages for most commonly use cases such as default "success" o "error" message, 
or CRUD operations (stored, updated, deleted.)


## Installation

Require the package by executing:

```bash
composer require josegus/flash
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
php artisan vendor:publish --tag=flash:config
```

Now you should have a `flash.php` file inside the config folder. Don't forget to use `--force` if you need to force to re-publish the config file.


## Customizing views

You can export the included views to adapt to your needs. You may do su executing:

```bash
php artisan vendor:publish --tag=flash:views
```

Now you should have views inside `resources/views/vendor/flash` folder. Don't forget to use `--force` if you need to force to re-publish the config file.


## Using default validations view

The package includes a view to show validation errors as an unordered list by default.

You can modify this view to adapt to your needs, or disable this view by changing `flash.validations.enabled` to "false".


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

## Tips

### All alerts dismissible by default

By default, all alerts are dismissible. You can disable this by changing `flash.dismissible` to `false`.
If you set this to false, you still can make dismissible a certain alert when calling `->dismissible()`, or disabling 
dismissible by calling `->dismissible(false)`.
 
 