#!/bin/bash

LOCALHOST = localhost
PORT = 8080
URL = http://$(LOCALHOST):$(PORT)

all: start_server start_client

start_server:
	@echo "Starting server..."
	@php -S $(LOCALHOST):$(PORT)
	@echo "Server started at $(URL)"

start_client:
	@echo "Starting client..."
	@open $(URL)

start_scss:
	@echo "Starting scss..."
	@sass --watch sass