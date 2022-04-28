#!/usr/bin/env bash
set -e

docker-compose --file ./docker/docker-compose.yaml up -d --remove-orphans
