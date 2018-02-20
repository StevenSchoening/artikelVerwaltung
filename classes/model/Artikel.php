<?php
namespace model;

/**
 * Das Datenbankobjekt "Artikel"
 * 
 * @author Oliver Melle
 *        
 */
class Artikel implements \model\IArtikel
{

    /**
     *
     * @var int
     */
    private $id;

    /**
     *
     * @var int
     */
    private $artikelnummer;

    /**
     *
     * @var string
     */
    private $bezeichnung;

    /**
     *
     * @var float
     */
    private $einkaufspreis;

    /**
     *
     * @var float
     */
    private $verkaufspreis;

    /**
     *
     * @var string
     */
    private $beschreibung;

    /**
     *
     * @var string
     */
    private $erstellungsdatum;

    /**
     *
     * {@inheritdoc}
     * @see \model\IArtikel::getId()
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * {@inheritdoc}
     * @see \model\IArtikel::getArtikelnummer()
     */
    public function getArtikelnummer()
    {
        return $this->artikelnummer;
    }

    /**
     *
     * {@inheritdoc}
     * @see \model\IArtikel::setArtikelnummer()
     */
    public function setArtikelnummer($artikelnummer)
    {
        $this->artikelnummer = $artikelnummer;
    }

    /**
     *
     * {@inheritdoc}
     * @see \model\IArtikel::getBezeichnung()
     */
    public function getBezeichnung()
    {
        return $this->bezeichnung;
    }

    /**
     *
     * {@inheritdoc}
     * @see \model\IArtikel::setBezeichnung()
     */
    public function setBezeichnung($bezeichnung)
    {
        $this->bezeichnung = $bezeichnung;
    }

    /**
     *
     * {@inheritdoc}
     * @see \model\IArtikel::getEinkaufspreis()
     */
    public function getEinkaufspreis()
    {
        return $this->einkaufspreis;
    }

    /**
     *
     * {@inheritdoc}
     * @see \model\IArtikel::setEinkaufspreis()
     */
    public function setEinkaufspreis($einkaufspreis)
    {
        $this->einkaufspreis = $einkaufspreis;
    }

    /**
     *
     * {@inheritdoc}
     * @see \model\IArtikel::getVerkaufspreis()
     */
    public function getVerkaufspreis()
    {
        return $this->verkaufspreis;
    }

    /**
     *
     * {@inheritdoc}
     * @see \model\IArtikel::setVerkaufspreis()
     */
    public function setVerkaufspreis($verkaufspreis)
    {
        $this->verkaufspreis = $verkaufspreis;
    }

    /**
     *
     * {@inheritdoc}
     * @see \model\IArtikel::getBeschreibung()
     */
    public function getBeschreibung()
    {
        return $this->beschreibung;
    }

    /**
     *
     * {@inheritdoc}
     * @see \model\IArtikel::setBeschreibung()
     */
    public function setBeschreibung($beschreibung)
    {
        $this->beschreibung = $beschreibung;
    }

    /**
     *
     * {@inheritdoc}
     * @see \model\IArtikel::getErstellungsdatum()
     */
    public function getErstellungsdatum()
    {
        return $this->erstellungsdatum;
    }
}

