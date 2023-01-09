#!/bin/bash

git pull

sh production-stop.sh;
sh launch-production.sh;


