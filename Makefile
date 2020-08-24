bin=vendor/bin
chrome:=$(shell command -v google-chrome 2>/dev/null)
codeSnifferRuleset=codesniffer-ruleset.xml
coverage=$(temp)/coverage
php=php
src=src
temp=temp
tests=tests
dirs:=$(src) $(tests) $(examples)

all:
	 @$(MAKE) -pRrq -f $(lastword $(MAKEFILE_LIST)) : 2>/dev/null | awk -v RS= -F: '/^# File/,/^# Finished Make data base/ {if ($$1 !~ "^[#.]") {print $$1}}' | sort | egrep -v -e '^[^[:alnum:]]' -e '^$@$$'

# Setup

composer:
	composer install

reset:
	composer dumpautoload

di: reset
	bin/extract-services

fix: reset check-syntax phpcbf phpcs phpstan test

# QA

check-syntax:
	$(bin)/parallel-lint -e $(php) $(dirs)

phpcs:
	$(bin)/phpcs -sp --standard=$(codeSnifferRuleset) --extensions=php $(dirs)

phpcbf:
	$(bin)/phpcbf -spn --standard=$(codeSnifferRuleset) --extensions=php $(dirs) ; true

phpstan:
	$(bin)/phpstan analyze $(dirs) --level max

# Tests

test:
	$(bin)/phpunit

test-coverage: reset
	$(bin)/phpunit --coverage-html=$(coverage)

test-coverage-open: test-coverage
ifndef chrome
	open -a 'Google Chrome' $(coverage)/index.html
else
	google-chrome $(coverage)/index.html
endif

ci: phpcs phpstan test
