<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <jdoc:include type="head" />
            <link href="<?php echo $this->baseurl . '/templates/' . $this->template; ?>/css/template.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="top">top
            <div class="topUpper"> upper
                <div class="topMenu">
                    <jdoc:include type="modules" name="position-1" style="xhtml" />
                </div>
                <div class="topLogin">
                    <jdoc:include type="modules" name="position-2" style="xhtml" />
                </div>
                <div class="topCurrencies">
                    <jdoc:include type="modules" name="position-3" style="xhtml" />
                </div>
            </div>
            <div class="topLower">  lower
                <div class="topLogo"><jdoc:include type="modules" name="position-4" style="xhtml" /></div>
                <div class="topSearch"><jdoc:include type="modules" name="position-5" style="xhtml" /></div>
                <div class="topcart"><jdoc:include type="modules" name="position-6" style="xhtml" /></div>
            </div>
        </div>
        <div class="menu">menu

        </div>
        <div class="carousel">carousel<jdoc:include type="modules" name="position-7" style="xhtml" /></div>
        <main id="content" role="main" class="mainContent">
            <jdoc:include type="component" />
            <div class="mainCategoriesImageList"><jdoc:include type="modules" name="position-8" style="xhtml" /></div>
            <div class="featuredProductsList"><jdoc:include type="modules" name="position-9" style="xhtml" /></div>
        </main>
        <div class="footer">footert
            <jdoc:include type="modules" name="footer" style="xhtml" />
        </div>
    </body>
</html>
