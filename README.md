# FatFree
Learning Fat-Free Framework

#VHost setup
<VirtualHost fatfree.local:80>
    ServerName fatfree.local
    DocumentRoot "directory where code is stored"
    <Directory "directory where code is stored">
        Options -Indexes +FollowSymLinks +Includes
        AllowOverride All
        Order allow,deny
        Allow from All
		Require all granted
    </Directory>
</VirtualHost>

#Starting docker:
    docker-compose up

#Debug settings for docker VSCode
    {
        {
        "name": "Listen for XDebug on Docker",
        "type": "php",
        "request": "launch",
        "port": 9003,
        "pathMappings": {
            "/var/www/html/": "${workspaceFolder}"
        }
    }