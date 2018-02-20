<?php
namespace model;

/**
 * Einstellungen für die Datenbank
 *
 * @author Oliver Melle
 *        
 */
class DatabaseSettings
{

    private $driver = "mysql";

    private $dbname = "artikel_verwaltung";

    private $host = "127.0.0.1";

    private $port = "3306";

    private $dbuser = "root";

    private $password = "";

    /**
     *
     * @return string
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     *
     * @return string
     */
    public function getDbname()
    {
        return $this->dbname;
    }

    /**
     *
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     *
     * @return string
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     *
     * @return string
     */
    public function getDbuser()
    {
        return $this->dbuser;
    }

    /**
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
}
