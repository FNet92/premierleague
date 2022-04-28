#!/bin/bash
set -e

if [ "$1" = 'web' ]; then

    export APP_NAME='premierleague~web'
    export APP_MODE='api'

    exec unitd --log /dev/stdout --no-daemon

elif [ "$1" = 'api' ]; then

    export APP_NAME='premierleague~api'
    export APP_MODE='api'

    exec unitd --log /dev/stdout --no-daemon

elif [ -n "$1" ]; then
    exec "$@"
else
    printf "\033[0;31mNO COMMAND PASSED TO ENTRYPOINT! Available commands: web, api \033[0m\n"
    exit 1
fi
