#!/bin/bash

backend=`docker ps -a --filter name="backend" | awk '{print $1}' | grep -v CONTAINER`
docker exec -it $backend vendor/bin/phpunit
