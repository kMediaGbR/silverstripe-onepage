<?php

namespace Kmedia\Onepage;

use SilverStripe\CMS\Controllers\ModelAsController;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\ORM\DataExtension;
use SilverStripe\View\SSViewer;

class OnePageExtension extends DataExtension
{
    public function getOnePageContent()
    {
        $templateNames = SSViewer::get_templates_by_class(
            $this->owner->Classname,
            '_onepage',
            SiteTree::class
        )
            ?: ['Page_onepage', 'type' => 'Layout'];

        foreach ($templateNames as $templateName) {
            if (!is_array($templateName)) {
                $templateNames[] = [$templateName, 'type' => 'Layout'];
            }
        }

        $controller = ModelAsController::controller_for($this->owner);
        return $controller->renderWith($templateNames);
    }
}
