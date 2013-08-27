#!/bin/bash

all: update install-rel

install-dev:
	composer update
	cd public && bower update
	lessc public/style/main.less public/style/main.css

install-rel:
	composer install
	cd public && bower install --allow-root
	lessc public/style/main.less public/style/main.css --yui-compress

update:
	git reset --hard
	git pull
	git submodule update --init --recursive

