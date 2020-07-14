<?php /**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Tiu\Ravi\Controller\Topics;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class AddTopic extends Action
{
    public function execute()
    {
        /** @var \Magento\Framework\View\Result\Page $page */
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $page;
    }
}