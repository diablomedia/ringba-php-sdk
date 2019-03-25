docker run --rm -v ${PWD}:/local swaggerapi/swagger-codegen-cli generate \
    -i https://api.ringba.com/swagger/docs/v1 -l php \
    -c /local/config.json \
    -o /local
