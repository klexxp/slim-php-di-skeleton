# slim-php-di-skeleton
## Skeleton for using slim 3 with php-di

When working with Slim you have the possibility to change the dependecy injection from pimple to anything else. I like to work with PHP-DI which gives me more possibilities.

This took me some time to understand, so I pushed this github as a reference.

To make php-di work with slim 3 you need to have slim-bridge (from the PHP-DI project website) installed. You can do that via Composer. 

### app/App.php

This is where you add your config into the the container and prepare the Objects you want to have injected. I always try to use Interfaces, as this gives me the most flexibilty. If the Object needs other dependencies you just have to define them before and then get them from the container with the full namespace.

### Resources
[Slim Micro Framwork Documentation](http://www.slimframework.com/docs/)
[PHP-DI](http://php-di.org/)