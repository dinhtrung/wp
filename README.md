# Wordpress Development Starting Points

~~~bash
$ docker-compose up -d
$ gunzip < wp.clean.sql.gz | docker exec -i wp_db_1 mysql -u root wp
~~~

Then login with `administrator / abcd$56789`
