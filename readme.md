
NEY-Disc
=================

Docker commands
-----------------

PHP: `docker run -it --rm --name my-running-script -v "$PWD":/app -w /app php:7.4-cli bash`

Node: `docker run --rm --interactive --tty --volume $PWD:/app -p 80:8080 --workdir /app node sh`

Usage
----------------

For Node

1. Configure the `webhookId` and `webhookToken` in config.json file
2. On node container, run `node index.js`

For PHP

1. Configure `webhookURL` in index.php file
2. On PHP container, run `php index.php`
