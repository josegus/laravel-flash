# Flash messages an validations for your Laravel apps

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

## Tips

### All alerts dismissible by default

By default, all alerts are dismissible. You can disable this by changing `flash.dismissible` to `false`.
If you set `flash.dismissible` `false`, you still can make dismissible a certain alert by chaining:
 ```php
    flash()->dismissible();
``` 

Or disabling dismissible by calling:
 ```php 
    flash()->dismissible(false);
```

## Examples

Success 
<img src="https://y7mzpq.dm.files.1drv.com/y4mc7i265bKo66PzVtKNhakIWbZ40vjKZcVwCuTpSQs8aMpyFP3fLssuf2oFHzHP_8YSQXhuAExIFbmZ6fzc9aBuIk9iJHpFiaWg-gNzDzKZ8EybL4PHbHoPOKzL8BrJIsb1Y7ZJenSmQotFAmqEbHa1sJ1wRj7CwiYFdgfjzNfqrM4QNOII2zRBi1xGt9lbgNqiCA4Yl6N-cMhU-c5actxaQ?width=1917&height=920&cropmode=none" style="max-width: 100%; height: auto;" />

Error
<img src="https://y7nw1q.dm.files.1drv.com/y4mvegKmtEkOLCg2mFd20zxFLLHRjQG8CET3nmK2Nxw2dtFVAjsU1HAfpAxOd6TJszXJhVoEDbOTTHIeGabXv9zqJgxhD7KdrfFEsIL8tdQb7B40igHbkGOh-GdHch9HHU67SfWV5LBWAHzE_YjNFkn4RTn4OpQ6VjgC7n0LrpBajEAGUbawtbNyU6ogjyQfg8RRumAIgDkImW10p2XFZDo1w?width=1919&height=913&cropmode=none" style="max-width: 100%; height: auto;" />

Warning
<img src="https://y7pvya.dm.files.1drv.com/y4moGIAIFDzOfNP-HhXT6WHHGo3_ggWMTkzV3XJTIWB4AD52BVW4GpVUH6_YCeWiI7jn6MRjzfQM59Oi9ZetY8mJYyYNjkEisGsvXe3AcYmwfP8ue1NCPMdwBuhP3BCHjEGXiWkUn72jjDx3JvZLVZREzp_kG_T1FBCuIxOlPyh1ufFhK96PP3-cVxUDXlBnUeA5sQTD1Z8qk9HtIVIqg7-dg?width=1917&height=897&cropmode=none" style="max-width: 100%; height: auto;" />

Dismissible
<img src="https://y7m67a.dm.files.1drv.com/y4mx1XfpKTvbO8z8fXK94VMdmKHWE8CCPkaWrZnUDkYeLJoVIM5XYam1UUps-31lZm_N00NSI6KiDrsy2QCmuEODzpRnmrYuIMjn05qFBUS8s4eIgE5LUm8dLugEvw-AR_rqBHdAumvbtKrYmgdGY0xIjmGknrJrLpEdyVqp_M0VUTY-8aUv-vE4-aeWB6Wi7XyjjyZHX0X5A8_xlLnGZs8sA?width=1915&height=906&cropmode=none" style="max-width: 100%; height: auto;" />

Static
<img src="https://y7ofdw.dm.files.1drv.com/y4mIqDIp7sEF08BvYNZCTLj1BoDSoz4U1phc4mgUo4uZrP83n2Khr0CKh0QxU5chP7vBjhRtTfIpofW8dQYNRGK6ReaT8ggPmzJBOYCtMy78MHooiu097jWOp185_Gq4B6_K3thriMWHZjtrQSLSFWqGMwm_i5fzQljwr9Fk_ZxCVvHXeD5XnQcoqNRaqDYHrieyPuxUzI0YRufcPT8JIzTKg?width=1913&height=906&cropmode=none" style="max-width: 100%; height: auto;" />

Validations
<img src="https://y7pcpw.dm.files.1drv.com/y4moLRHOpF7Y8299I07oflSwramWTwtxa8hBuIlSotYIBfCu3BUFSHywUEREbKKmaR6g2h8_TWUMtWo87yKiFc4cV3YT_-PZYuN_4vb6ZnUg83IoitxSIKlHs0VnJJ3jU6QVSsJ_jaTgi17FV4EbgnVbbMcPnqWNZXKgM1VupX02MpOZOAuhtyrh8FBTOXXIJfDsuoCVsMthCNjDFqmZk514Q?width=1914&height=908&cropmode=none" style="max-width: 100%; height: auto;" />