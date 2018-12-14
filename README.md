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

## Check the emails from logstash

The setup uses [MailHog](https://github.com/mailhog/MailHog) to receive and display the emails. You can see the web UI of MailHog at http://localhost:8025

## Next steps
- [ ] Set up graylog input and output:
    - Input for receiving events (and forwarding them to the email output).
    - output for relaying events that arrive via filebeat to graylog.
    - The input must add the tag `from_graylog`, the output must drop events have that tag, to avoid circular event passing.
    - Set up PHP test script (with monolog) to send events to graylog
- [ ] Create email template
