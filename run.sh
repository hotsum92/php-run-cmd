#!/bin/bash

cat - | sed "1ithis is sample.sh\n\nParams:\n$@\nSTDIN:\n"
