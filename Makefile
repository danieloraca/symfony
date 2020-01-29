unit:
	vendor/bin/phpunit --bootstrap vendor/autoload.php src/

standards:
	vendor/bin/phpstan analyse src tests

fix-standards:
	vendor/bin/phpcbf --standard=cs-ruleset.xml src