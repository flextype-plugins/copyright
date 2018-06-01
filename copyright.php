<?php

/**
 *
 * Flextype Copyright Plugin
 *
 * @author Romanenko Sergey / Awilum <awilum@yandex.ru>
 * @link http://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype;

use Flextype\Component\{Event\Event, Registry\Registry};

// Event: onShortcodesInitialized
Event::addListener('onShortcodesInitialized', function () {

    // Shortcode: [copyright]
    Content::shortcode()->addHandler('copyright', function() {
        return copyright();
    });
});


function copyright() : string
{
    return str_replace("{year}", getdate()['year'], Registry::get('plugins.copyright.copyright'));
}
