
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
2. On node container, run `npm install` and `node index.js`

For PHP

1. Configure `webhookURL` in index.php file
2. On PHP container, run `php index.php`


Useful links
----------------
Node: https://discordjs.guide/popular-topics/webhooks.html#using-webhooks

PHP: https://gist.github.com/Mo45/cb0813cb8a6ebcd6524f6a36d4f8862c

SDK's: https://discord.com/developers/docs/topics/community-resources
