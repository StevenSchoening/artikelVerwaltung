<?php
namespace model;

use model\DatabaseSettings;

/**
 *
 * @author Oliver Melle
 *        
 */
class Database implements \model\IDatabase
{

    private function initDatabase()
    {
        $dbSettings = new DatabaseSettings();
        if ($dbSettings->getDriver() == "mysql") {
            $dsn = "mysql:dbname=" . $dbSettings->getDbname() . ";host=" .
                 $dbSettings->getHost() . ";port=" . $dbSettings->getPort() .
                 ";charset=utf8";
            $dbConn = new \PDO($dsn, $dbSettings->getDbuser(),
                $dbSettings->getPassword());
        }
    }

    /**
     *
     * {@inheritdoc}
     * @see \model\IDatabase::numrows()
     */
    public function numrows($querystring)
    {}

    /**
     *
     * {@inheritdoc}
     * @see \model\IDatabase::query()
     */
    public function query($query)
    {}
}

