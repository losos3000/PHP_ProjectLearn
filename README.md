# -=(Loh Divorce Project V0.1)=-

## System
[PHP](https://windows.php.net/download#php-8.3)
```
PHP 8.3.12 (cli) (built: Sep 24 2024 20:22:41) (ZTS Visual C++ 2019 x64)
Copyright (c) The PHP Group
Zend Engine v4.3.12, Copyright (c) Zend Technologies
```

[Composer](https://getcomposer.org/download/)
```
Composer version 2.7.9 2024-09-04 14:43:28
```

[Laravel](https://laravel.com/docs/11.x/installation)
```
Laravel Framework 11.25.0
```

In `php.ini`uncomment fields:
```ini
extension=pdo_sqlite
extension=openssl
extension=zip
extension=fileinfo
```


## Dependencies
Composer dependencies from `composer.json`:
```bash
php composer install
```

NPM dependencies from `package.json`:
```bash
npm install
```


## Start
Start local server:
```bash
php artisan serve
```

Open in browser [http://127.0.0.1:8000]
