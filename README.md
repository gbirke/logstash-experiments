# Logstash email output proof-of-concept

This setup uses logstash and filebeat in two Docker containers, communicating with each other. It's purpose is to test the email output.

## Start the environment

    docker-compose up

## Send a log entry logstash

The filebeat daemon checks the file `logs/test.log` for changes and sends all new lines to logstash. To add a line from the console, do

    echo "New entry" >> logs/test.log

To add a new line from a PHP script, use

```php
error_log( "Another entry\n", 3, "logs/test.log" );
```
