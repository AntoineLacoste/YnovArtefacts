<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ThemeBibliographie
 *
 * @ORM\Table(name="theme_bibliographie", indexes={@ORM\Index(name="FK_theme_bibliographie_theme", columns={"id_theme"}), @ORM\Index(name="FK_theme_bibliographie_bibliographie_v2", columns={"id_bibliographie"})})
 * @ORM\Entity
 */
class ThemeBibliographie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_theme_bibliographie", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idThemeBibliographie;

    /**
     * @var \AppBundle\Entity\BibliographieV2
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\BibliographieV2")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_bibliographie", referencedColumnName="id_bibliographie")
     * })
     */
    private $idBibliographie;

    /**
     * @var \AppBundle\Entity\Theme
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Theme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_theme", referencedColumnName="id_theme")
     * })
     */
    private $idTheme;

    /**
     * @return int
     */
    public function getIdThemeBibliographie() {
        return $this->idThemeBibliographie;
    }

    /**
     * @param int $idThemeBibliographie
     */
    public function setIdThemeBibliographie($idThemeBibliographie) {
        $this->idThemeBibliographie = $idThemeBibliographie;
    }

    /**
     * @return BibliographieV2
     */
    public function getIdBibliographie() {
        return $this->idBibliographie;
    }

    /**
     * @param BibliographieV2 $idBibliographie
     */
    public function setIdBibliographie($idBibliographie) {
        $this->idBibliographie = $idBibliographie;
    }

    /**
     * @return Theme
     */
    public function getIdTheme() {
        return $this->idTheme;
    }

    /**
     * @param Theme $idTheme
     */
    public function setIdTheme($idTheme) {
        $this->idTheme = $idTheme;
    }


}

