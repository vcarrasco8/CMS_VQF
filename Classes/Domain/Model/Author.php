<?php
namespace VQF\MediaVqf\Domain\Model;

/***
 *
 * This file is part of the "media_vqf" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Vincent CARRASCO <carrascovincent8@gmail.com>
 *           Florian DE ALMEIDA <florian.almeida05@gmail.com>
 *           Quentin DUBRAS <dubrasquentin@gmail.com>
 *
 ***/

/**
 * Auteur
 */
class Author extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Nom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * Bio
     *
     * @var string
     */
    protected $bio = '';

    /**
     * Photos
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @cascade remove
     */
    protected $pictures = null;

    /**
     * Réseaux sociaux
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VQF\MediaVqf\Domain\Model\Social>
     * @cascade remove
     * @lazy
     */
    protected $socials = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->pictures = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->socials = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the bio
     *
     * @return string $bio
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Sets the bio
     *
     * @param string $bio
     * @return void
     */
    public function setBio($bio)
    {
        $this->bio = $bio;
    }

    /**
     * Adds a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $picture
     * @return void
     */
    public function addPicture(\TYPO3\CMS\Extbase\Domain\Model\FileReference $picture)
    {
        $this->pictures->attach($picture);
    }

    /**
     * Removes a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $pictureToRemove The FileReference to be removed
     * @return void
     */
    public function removePicture(\TYPO3\CMS\Extbase\Domain\Model\FileReference $pictureToRemove)
    {
        $this->pictures->detach($pictureToRemove);
    }

    /**
     * Returns the pictures
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $pictures
     */
    public function getPictures()
    {
        return $this->pictures;
    }

    /**
     * Sets the pictures
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $pictures
     * @return void
     */
    public function setPictures(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $pictures)
    {
        $this->pictures = $pictures;
    }

    /**
     * Adds a Social
     *
     * @param \VQF\MediaVqf\Domain\Model\Social $social
     * @return void
     */
    public function addSocial(\VQF\MediaVqf\Domain\Model\Social $social)
    {
        $this->socials->attach($social);
    }

    /**
     * Removes a Social
     *
     * @param \VQF\MediaVqf\Domain\Model\Social $socialToRemove The Social to be removed
     * @return void
     */
    public function removeSocial(\VQF\MediaVqf\Domain\Model\Social $socialToRemove)
    {
        $this->socials->detach($socialToRemove);
    }

    /**
     * Returns the socials
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VQF\MediaVqf\Domain\Model\Social> $socials
     */
    public function getSocials()
    {
        return $this->socials;
    }

    /**
     * Sets the socials
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VQF\MediaVqf\Domain\Model\Social> $socials
     * @return void
     */
    public function setSocials(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $socials)
    {
        $this->socials = $socials;
    }
}
