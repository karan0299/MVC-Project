How to run :-
1. git clone https://github.com/alphadose/MVC-Project ~/mvc
2. cd ~/mvc
3. Change the paths in mvc.sdslabs.local.conf pointing to the public folder of this project
4. sudo cp ~/mvc/mvc.sdslabs.local.conf /etc/apache2/sites-available/.
5. Add `mvc.sdslabs.local` entry to your /etc/hosts
6. sudo a2ensite mvc.sdslabs.local.conf
7. sudo service apache2 restart
8. Open http://mvc.sdslabs.local in your browser
