# Информатор по IP

## Требования

- PHP 8.2

## Установка

```shell
composer require modes/ip-info
```

## Использование  
```php
<?php

$ipInfoApi = new IpInfoApi();
echo $ipInfoApi->getIpInfo('83.220.236.105');
```