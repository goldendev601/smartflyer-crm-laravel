#!/usr/bin/env bash
docker-compose --project-name smartflyer-crm --file docker-compose-production.yml up --detach --remove-orphans
