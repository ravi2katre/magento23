<?php
namespace Tiu\Ravi\Model;

use Magento\Framework\Model\AbstractModel;
use Tiu\Ravi\Api\Data\ListingInterface;

class TiuRaviTopics extends AbstractModel implements ListingInterface
{
    public function _construct()
    {
        $this->_init("Tiu\Ravi\Model\ResourceModel\TiuRaviTopics");
    }

    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getEntityId()
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * Set EntityId.
     */
    public function setEntityId($entityId)
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    /**
     * Get Title.
     *
     * @return varchar
     */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    /**
     * Set Title.
     */
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }

    /**
     * Get getContent.
     *
     * @return varchar
     */
    public function getContent()
    {
        return $this->getData(self::CONTENT);
    }

    /**
     * Set Content.
     */
    public function setContent($content)
    {
        return $this->setData(self::CONTENT, $content);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getPost($param)
    {
        return 'api GET return the $param ' . $param;
    }

}
