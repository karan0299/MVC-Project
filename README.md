How to run :-
1. Copy the alpha.mvc.dev.conf file to /etc/httpd/conf/vhosts/ after changing the path in it to the public folder of the
   application in your system.
2. Add the following line in /etc/httpd/conf/httpd.conf :- "Include conf/vhosts/alpha.mvc.dev.conf".
3. Restart apache.
4. Create a database named link and import link2.sql.
5. Configure the credentials.php file and fill in the details accordingly.
6. Go to alpha.mvc.dev in your browser to use it.
7. Enjoy :)
