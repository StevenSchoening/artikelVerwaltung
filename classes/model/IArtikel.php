<?php
namespace model;

/**
 * Das Interface für das Datenbankobjekt "Artikel"
 *
 * @author Oliver Melle
 *        
 */
interface IArtikel
{

    /**
     * Gibt die Datenbank-ID des Objektes zurück
     *
     * @return int
     */
    public function getId();

    /**
     * Gibt die Artikelnummer zurück
     *
     * @return int
     */
    public function getArtikelnummer();

    /**
     * Setzt die Artikelnummer
     *
     * @param int $artikelnummer
     */
    public function setArtikelnummer($artikelnummer);

    /**
     * Gibt den Artikelnamen zurück
     *
     * @return string
     */
    public function getBezeichnung();

    /**
     * Setzt den Artikelnamen
     *
     * @param string $bezeichnung
     */
    public function setBezeichnung($bezeichnung);

    /**
     * Gibt den Einkaufspreis zurück
     *
     * @return float
     */
    public function getEinkaufspreis();

    /**
     * Setzt den Einkaufspreis
     *
     * @param float $einkaufspreis
     */
    public function setEinkaufspreis($einkaufspreis);

    /**
     * Gibt den Verkaufspreis zurück
     *
     * @return float
     */
    public function getVerkaufspreis();

    /**
     * Setzt den Verkaufspreis
     *
     * @param float $verkaufspreis
     */
    public function setVerkaufspreis($verkaufspreis);

    /**
     * Gibt die Artikelbeschreibung zurück
     *
     * @return string
     */
    public function getBeschreibung();

    /**
     * Setzt die Artikelbeschreibung
     *
     * @param string $beschreibung
     */
    public function setBeschreibung($beschreibung);

    /**
     * Gibt das Erstellungsdatums des Artikels zurück
     *
     * @return string
     */
    public function getErstellungsdatum();
}
