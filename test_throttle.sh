#!/bin/sh

# With a throttle of 15 seconds and a message key, this should produce the following messages:
# - Event One
# - Event Two
# - Event One (20 seconds later)

echo "Event One" >> logs/test.log
echo "Event One" >> logs/test.log
echo "Event One" >> logs/test.log
echo "Event Two" >> logs/test.log
echo "Event Two" >> logs/test.log
sleep 10
echo "Event One" >> logs/test.log
echo "Event Two" >> logs/test.log
sleep 10
echo "Event One" >> logs/test.log
echo "Event One" >> logs/test.log
