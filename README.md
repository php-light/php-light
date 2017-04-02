# PHP Light Starter

### Configure your host

From a terminal, edit your hosts file:
```
sudo vim /etc/hosts
```

and add the following:
```
127.0.0.1	php-light.dev
```

Create a new apache configuration file:
```
sudo touch /etc/apache2/sites-available/php_light.conf
```

Edit the newly created file to point to your project:
```
sudo vim /etc/apache2/sites-available/php_light.conf
```

add the following content:
```
<VirtualHost *:80>
    ServerName php-light.dev
    DocumentRoot /var/www/php-light

    # optionally disable the RewriteEngine for the asset directories
    # which will allow apache to simply reply with a 404 when files are
    # not found instead of passing the request into the full symfony stack

    ErrorLog /var/log/apache2/php_light_error.log
    CustomLog /var/log/apache2/php_light_access.log combined
</VirtualHost>
```

Enable the newly create apache2 conf:
```
sudo a2ensite php_light.conf
```

Restart apache
```
sudo service apache2 restart
```
