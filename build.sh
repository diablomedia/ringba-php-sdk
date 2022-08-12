#!/bin/sh
set -e

rm -rf ./src/*
rm -rf ./docs/*

npm install

./node_modules/.bin/openapi-generator-cli generate -i ./ringba_v2_openapi.json -g php -o ./ -c openapi-generator-config.json --git-user-id=diablomedia --git-repo-id=ringba-php-sdk

composer update
