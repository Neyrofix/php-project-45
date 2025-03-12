install:
	composer install

brain-games:
	./bin/brain-games

validate:
	composer validate

autoload:
	composer dump-autoload

test-coverage:
	XDEBUG_MODE=coverage composer exec --verbose phpunit tests -- --coverage-clover build/logs/clover.xml
