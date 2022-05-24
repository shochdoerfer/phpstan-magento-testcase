# PHPStan 1.7 testcase

See this issue for details: https://github.com/phpstan/phpstan/issues/7293

## How to run

```
composer install
./vendor/bin/phpstan analyze
```

## Error to expect

With PHPStan 1.7 the following error appears:
```
Internal error: Internal error: Could not write data to cache file /tmp/phpstan/cache/PHPStan/49/95/4995e0fedb4494a407e17549e4b41bf64f3ab0ce.php. in file
     /home/shochdoerfer/Workspace/phpstan-magento-testcase/Ui/DataProvider/WebBehaviourTracking.php
     Run PHPStan with -v option and post the stack trace to:
     https://github.com/phpstan/phpstan/issues/new?template=Bug_report.md
     Child process error (exit code 1):
```

The exception is thrown here: https://github.com/bitExpert/phpstan-magento/blob/master/src/bitExpert/PHPStan/Magento/Autoload/Cache/FileCacheStorage.php#L107

