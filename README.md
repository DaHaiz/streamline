# Streamline for Laravel

Streamline is a laravel package to kickstart your local development and
streamline deployment with docker which aims to hide away all docker specifics and instead provide few simple artisan commands.

## Requirements

- Docker

## Installation

1. ``` composer require dahaiz/streamline ```
2. Add the ```StreamlineSeviceProvider``` to your ```app.php```
3. Publish config ```php artisan vendor:publish --provider="DaHaiz\Streamline\StreamlineServiceProvider"```

## Configuration

You can now enable the services you want to use through your ```app/streamline.php``` and then run ```artisan streamline:dev:setup```.
Streamline will now create the necessary docker configuration files for you. Depending on your operation system you can now start the Docker containers in one of the following ways:

### Linux
1. Start a terminal
2. ```cd``` to your project root
3. run ```docker-compose up -d```
4. Visit your docker machine IP.
   Assuming default settings you can get the IP of your docker machine
   using ```docker-machine ip default```.

### Windows
1. Start your Docker QuickStart Terminal
2. Following steps 2 to 4 in Linux section.