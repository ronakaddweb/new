
For this module to work, you need to run some commands on your asterisk machine to give
access to a user that you then set in the admin section for this module.

The commands are listed below, replace youruser, yourip and yourpass with details that
you want to use and run these from the mysql command prompt on the asterisk server


CREATE USER 'youruser'@'yourip' IDENTIFIED BY 'yourpass';

GRANT USAGE ON *.* TO 'youruser'@'yourip' IDENTIFIED BY 'yourpass' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;

GRANT ALL PRIVILEGES ON asteriskcdrdb.* TO 'youruser'@'yourip' IDENTIFIED BY 'yourpass';



