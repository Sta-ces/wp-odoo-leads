<?php
require_once(__DIR__.'/pecl/xmlrpc.stub.php');
require_once(__DIR__.'/ripcord/ripcord.php');

class OdooConnexion extends ripcord{
    
    protected $client_uri;
    protected $host;
    protected $database;
    protected $username;
    protected $password;

    function __construct($client_uri, $database, $username, $password)
    {
        $this->client_uri = $client_uri;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;

        $info = self::client("$client_uri/start")->start();
        $common = self::client("$client_uri/xmlrpc/2/common");
        $common->version();
        echo "<pre style='margin: 50px 0 50px 250px;'>";
        print_r("Plugin Odoo leads is activated");
        echo "</pre>";
    }
}
