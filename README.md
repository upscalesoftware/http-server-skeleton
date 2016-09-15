HTTP Server Skeleton for RESTful API
====================================

This is a skeleton of a bare-bones RESTful API wired with request parsing, routing, and dependency injection capabilities.
It defines the directory structure, router configuration, and the entry point that bootstraps the server.


## Installation

Install via [Composer](https://getcomposer.org/) to a directory of your choice (say, `/tmp/rest-api-project`):

```shell
composer create-project upscale/http-server-skeleton /tmp/rest-api-project
```

Launch the server via the PHP's built-in web server:

```shell
php -S 127.0.0.1:8080 /tmp/rest-api-project/server.php
```

Open [http://127.0.0.1:8080](http://127.0.0.1:8080) in a browser to confirm the server is running.


## Performance

The project is powered by the lightweight [HTTP server engine](https://github.com/upscalesoftware/http-server-engine) focused on speed and minimalism.


## License

Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).
