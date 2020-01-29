unit:
	vendor/bin/phpunit --bootstrap vendor/autoload.php src/

standards:
	vendor/bin/phpstan analyse src tests
