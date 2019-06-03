The project is containerised and it runs on docker.
You can find the instructions for the setup at the end of the page.

## Environment Setup
#### Prerequisites

Docker

https://docs.docker.com/engine/installation/

Docker-compose

https://docs.docker.com/v1.11/compose/install/

Note: you should be able to run docker without sudo
Installation

Clone the project

    $ git clone https://github.com/mdundic/bank.git
    $ cd bank

Setup the laravel env

    $ cp .env.example .env

Build the docker environment

    $ docker-compose up -d
    $ docker exec -it php composer install
    $ docker exec -it mysql mysql -proot -uroot -e "CREATE DATABASE IF NOT EXISTS bank;



Access the laravel app on your local machine

http://localhost:8080
