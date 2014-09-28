CHANGE LOG
==========

**September 28th 2014**
- manual loading of files via index.php has been removed, composer's autoloader is now used 
- unit tests are integrated
- phpunit is loaded via composer
- phpunit.xml has been added to root, contains basic setup for stress-free unit testing

**January 4th 2014**
- fixed htaccess issue when there's a controller named "index" and a base index.php (which collide)

**December 29th 2013**
- fixed case-sensitive model file loading (thanks @grrnikos for the fix)
