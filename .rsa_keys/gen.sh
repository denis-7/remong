#!/bin/bash

openssl genrsa -out rsa.private.key 1024
openssl rsa -in rsa.private.key -out rsa.public.pem -pubout -outform PEM
