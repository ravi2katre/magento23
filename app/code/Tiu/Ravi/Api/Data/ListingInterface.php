<?php
/**
 * Grid GridInterface.
 * @category  Webkul
 * @package   Webkul_Grid
 * @author    Webkul
 * @copyright Copyright (c) 2010-2017 Webkul Software Private Limited (https://webkul.com)
 * @license   https://store.webkul.com/license.html
 */

namespace Tiu\Ravi\Api\Data;

interface ListingInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    const ENTITY_ID = 'id';
    const TITLE = 'title';
    const CONTENT = 'content';

    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getEntityId();

    /**
     * Set EntityId.
     * @return string
     */
    public function setEntityId($entityId);

    /**
     * Get Title.
     *
     * @return varchar
     */
    public function getTitle();

    /**
     * Set Title.
     * @return true
     */
    public function setTitle($title);

    /**
     * Get Content.
     *
     * @return varchar
     */
    public function getContent();

    /**
     * Set Content.
     * @return true
     */
    public function setContent($content);

    /**
     * GET for Post api
     * @param string $param
     * @return string
     */
    public function getPost($param);

}
