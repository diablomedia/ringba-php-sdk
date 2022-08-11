docker run --rm \
    -v $PWD:/local openapitools/openapi-generator-cli generate \
    -i /local/ringba_v2_openapi.yml \
    -g php \
    -o /local