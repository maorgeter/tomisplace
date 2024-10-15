#!/bin/bash

# Base directory where the assets folder is located
base_dir="assets"

# Find all .scss files within the assets directory recursively and compile both regular .css and .min.css
find "$base_dir" -name "*.scss" | while read file; do
  # Extract the directory and file name without extension
  dir=$(dirname "$file")
  filename=$(basename "$file" .scss)

  # Compile regular CSS
  sass "$file":"$dir/$filename.css" --no-source-map

  # Compile minified CSS
  sass "$file":"$dir/$filename.min.css" --style compressed --no-source-map
done

