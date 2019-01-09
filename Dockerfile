FROM docker.elastic.co/logstash/logstash:5.6.14

RUN logstash-plugin install logstash-output-gelf
