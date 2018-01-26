<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Basic Project</h1>
    <br>
</p>

REQUIREMENTS
------------

- Web server supports PHP 5.4 or higher
- Composer
- Git


INSTALLATION
------------
 - Go to Web-accessible folder
 - Git clone [expedia-exercise](https://github.com/moh-mousa/expedia-exercise.git)
 - Run composer install
 - Configure your web server or use the built-in PHP web server

### Using Built-in PHP web server
running the following console command while in the project `web` directory:
~~~
php yii serve
~~~
You can use your browser to access the installed Yii application with the following URL:
~~~
http://localhost:8080/
~~~

### Configure your web server
By setting basic/web as the document root in Apache/Nginx Configuration


#### Any assumptions you've made about the API or the runtime environment ?
It would be great if the provided API is OPTIONS method supported to return available HTTP methods and other options like allowed query parameters.

#### Any known issues with your example ?