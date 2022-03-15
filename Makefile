phpunit:
	php ./vendor/bin/phpunit --colors --testdox ./tests

phpunit-coverage-text:
	php ./vendor/bin/phpunit --colors --testdox \
		--coverage-text \
		--whitelist ./src/ \
		./tests
phpunit-coverage-html:
	php ./vendor/bin/phpunit --colors --testdox \
		--coverage-html ./coverage \
		--whitelist ./src/ \
		./tests