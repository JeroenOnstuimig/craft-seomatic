<?php
/**
 * SEOmatic plugin for Craft CMS 3.x
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful,
 * and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2017 nystudio107
 */

use nystudio107\seomatic\helpers\Config;
use nystudio107\seomatic\services\MetaBundles;

/**
 * @author    nystudio107
 * @package   Seomatic
 * @since     3.0.0
 */

return [
    'bundleVersion'         => '1.0.0',
    'sourceBundleType'      => MetaBundles::GLOBAL_META_BUNDLE,
    'sourceId'              => 1,
    'sourceName'            => MetaBundles::GLOBAL_META_BUNDLE,
    'sourceHandle'          => MetaBundles::GLOBAL_META_BUNDLE,
    'sourceType'            => MetaBundles::GLOBAL_META_BUNDLE,
    'sourceTemplate'        => '',
    'sourceSiteId'          => null,
    'sourceAltSiteSettings' => [
    ],
    'sourceDateUpdated'     => new \DateTime(),
    'metaGlobalVars'        => Config::getConfigFromFile('globalmeta/GlobalVars'),
    'metaSitemapVars'       => Config::getConfigFromFile('globalmeta/SitemapVars'),
    'metaTagContainer'      => Config::getConfigFromFile('globalmeta/TagContainer'),
    'metaLinkContainer'     => Config::getConfigFromFile('globalmeta/LinkContainer'),
    'metaScriptContainer'   => Config::getConfigFromFile('globalmeta/ScriptContainer'),
    'metaJsonLdContainer'   => Config::getConfigFromFile('globalmeta/JsonLdContainer'),
    'metaTitleContainer'    => Config::getConfigFromFile('globalmeta/TitleContainer'),
    'redirectsContainer'    => Config::getConfigFromFile('globalmeta/RedirectsContainer'),
];
