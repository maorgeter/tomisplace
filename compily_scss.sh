#!/bin/bash

# Watch SCSS files in assets/css folder and compile to CSS without .map files
sass --watch assets/css:assets/css --no-source-map &

# Watch SCSS files in assets/css/layouts folder and compile to CSS without .map files
sass --watch assets/css/layouts:assets/css/layouts --no-source-map &

sass --watch assets/css/themes:assets/css/themes --no-source-map &

# Wait for both processes to finish
wait
