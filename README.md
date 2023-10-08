# Getting Started

### Step 1 - Add to Composer.json

In `composer.json`,

```json

"license": "MIT",
"repositories": [
        {
            "type":"vcs",
            "url":"https://github.com/lobeliatechnology/inspire"
        }
    ],

```

### Step 2 - Installation
```cmd
composer require lobeliatechnology/inspire
```

### Step 3 - Provider Registration

In `config/app.php`, add `InspirationProvider` class

```php
Lobeliatechnology\Inspire\Providers\InspirationProvider::class,
```

and then run

```cmd
php artisan serve

```

and can test like

```http
http://127.0.0.1:8000/inspire
```

and you will see inspiration quotes randomly.
