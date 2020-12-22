<?php
/**
 * Block Preview
 *
 * @category  Smile
 * @package   Smile\Contact
 * @author    Taras Trubaichuk <taras.goglechuk@gmail.com>
 */

namespace Smile\Contact\Block\Adminhtml;

use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Exception\NoSuchEntityException;
use Smile\Contact\Api\Data\ContactEntityInterface;
use Smile\Contact\ViewModel\ContactEntity as ContactEntityViewModel;

/**
 * Class Preview
 */
class Preview extends Template
{
    /**
     * ContactEntity View Model
     *
     * @var ContactEntityViewModel
     */
    protected $contactEntityViewModel;

    /**
     * Preview constructor
     *
     * @param Context $context
     * @param ContactEntityViewModel $contactEntityViewModel
     * @param array $data
     */
    public function __construct(
        Context $context,
        ContactEntityViewModel $contactEntityViewModel,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->contactEntityViewModel = $contactEntityViewModel;
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->contactEntityViewModel->getContactEntityDataById()->getName();
    }

    /**
     * Get Email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->contactEntityViewModel->getContactEntityDataById()->getEmail();
    }

    /**
     * Get Telephone
     *
     * @return string|null
     */
    public function getTelephone()
    {
        return $this->contactEntityViewModel->getContactEntityDataById()->getTelephone();
    }

    /**
     * Get Comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->contactEntityViewModel->getContactEntityDataById()->getComment();
    }

    /**
     * Get Created at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->contactEntityViewModel->getContactEntityDataById()->getCreatedAt();
    }
}
