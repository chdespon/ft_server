#!/bin/sh

sudo docker build . -t server

sudo docker run -it server
