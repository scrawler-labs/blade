<div align="center">
<img src="https://user-images.githubusercontent.com/7591484/170873489-6aa40fe3-9d5c-476b-9434-f12f0a896c85.png" width="20%">

<h1> Scrawler Blade </h1>

<a href="https://github.com/scrawler-labs/app/actions/workflows/main.yml"><img alt="GitHub Workflow Status" src="https://img.shields.io/github/actions/workflow/status/scrawler-labs/app/main.yml?style=flat-square">
</a>
<a href="[https://github.com/scrawler-labs/blade/actions/workflows/main.yml](https://github.com/scrawler-labs/blade/actions/workflows/main.yml)"><img src="https://img.shields.io/badge/PHPStan-enabled-brightgreen.svg?style=flat-square" alt="PHPStan Enabled"></a>
[![Packagist Version](https://img.shields.io/packagist/v/scrawler/blade?style=flat-square)](https://packagist.org/packages/scrawler/app)
[![Packagist License](https://img.shields.io/packagist/l/scrawler/blade?style=flat-square)](https://packagist.org/packages/scrawler/app)

<br><br>


🔥Blade Templating engine integration for Scrawler🔥<br>
🇮🇳 Made in India 🇮🇳
</div>

## 💻 Installation
You can install Scrawler App via Composer. If you don't have composer installed , you can download composer from [here](https://getcomposer.org/download/)

```sh
composer require scrawler/blade
```


## ✨ Basic usage
```php
<?php

require __DIR__ . '/vendor/autoload.php';

template()->registerDir('my/views/dir','my/cache/dir','my/assets/dir');
tempate()->render('home');

//Or even simpler
view('home');
```

