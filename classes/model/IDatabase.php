<?php
namespace model;

/**
 * Interface für den Datenbankzugriff
 *
 * @author Oliver Melle
 *        
 */
interface IDatabase
{

    /**
     * Query auf Datenbank ausführen
     *
     * @param string $query
     * @return callable
     */
    public function query($query);

    /**
     * Gibt die Anzahl der zurückgegebenen Zeilen zurück
     *
     * @param callable $querystring
     * @return int
     */
    public function numrows($querystring);
}
