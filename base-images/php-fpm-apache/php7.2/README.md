# Docker Stack for Apache2.4 and php7.2 environment

## Summary

A simple Dockerfile for apache 2.4 and php-fpm 7.2

- Based on debian
- With apache 2.4 + php-fpm7.2
- Custom apache 2.4, php7.2 and supervisord configurations

## Usage

### Development Local

```
docker build -t rajivnix/php-apache:7.2 .;

```

### Debugging

Exec to container:

```
docker run -it rajivnix/php-apache:7.2 /bin/bash
```