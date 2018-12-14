#!/bin/sh

# Write strings to log file to test throttling filter

# With a throttle of 120 seconds and a message key, this should produce the following messages:
# - Event One
# - Event Two
# - Event One (130 seconds later)

# Note: The default filebeat config for log files has scan_frequency:10,
# which means files are scanned only every 10 seconds

echo "sending events"
echo "Event One" >> logs/test.log
echo "Event One" >> logs/test.log
echo "Event One" >> logs/test.log
echo "Event Two" >> logs/test.log
echo "Event Two" >> logs/test.log
echo "sleeping for 20 seconds"
sleep 20

echo "sending events"
echo "Event One" >> logs/test.log
echo "Event Two" >> logs/test.log
echo "sleeping for 110 seconds"
sleep 110

echo "sending events"
echo "Event One" >> logs/test.log
echo "Event One" >> logs/test.log
