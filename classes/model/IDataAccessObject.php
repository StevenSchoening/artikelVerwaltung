<?php
namespace model;

/**
 * Interface für das DAO
 *
 * @author Oliver Melle
 *        
 */
interface IDataAccessObject
{

    public function getArtikel($id);

    public function getAllArtikel();

    public function getArtikelByArtikelnummer($artikelnummer);

    public function search($searchterm);

    public function update($artikel);

    public function create();
}
