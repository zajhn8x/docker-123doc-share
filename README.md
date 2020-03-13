Docker 123doc
==================================

Supports:
------------------------

- MySQL, MariaDB or PerconaDB
- PostgreSQL
- Solr (disabled, without configuration)
- Memcached (disabled)
- PhpMyAdmin
- maybe more later... 


Install : Pull Code
------------------------

- cd /home/123doc_gitlab_share
- git clone https://gitlab.com/123doc.org/123doc-dev.git
 
Start Docker
------------------------ 
- cd docker-123doc-share 
- docker-compose up

Install : Import mysql
------------------------ 

- phpmyadmin http://localhost:8010/   user: root   pass:root
- Create database: db_tailieu  utf8_general_ci
- Create database: db_tailieu_static  utf8_general_ci
- import all file on folder db_tailieu   source: /home/123doc_gitlab_share/install/mysql/db_tailieu
- import all file on folder db_tailieu_statistic   source: /home/123doc_gitlab_share/install/mysql/db_statistic

 
 
 
 

