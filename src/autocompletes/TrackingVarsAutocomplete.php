<?php
/**
 * Twigfield for Craft CMS
 *
 * Provides a twig editor field with Twig & Craft API autocomplete
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2022 nystudio107
 */

namespace nystudio107\seomatic\autocompletes;

use Craft;
use nystudio107\twigfield\base\Autocomplete;
use nystudio107\twigfield\models\CompleteItem;
use nystudio107\twigfield\types\AutocompleteTypes;
use nystudio107\twigfield\types\CompleteItemKind;

/**
 * @author    nystudio107
 * @package   SEOmatic
 * @since     3.4.43
 */
class TrackingVarsAutocomplete extends Autocomplete
{
    // Constants
    // =========================================================================

    const TRACKING_VARS_CACHE_DURATION = 600;

    const TRACKING_VARS_CACHE_KEY = 'SEOmaticTrackingVars';

    // Public Properties
    // =========================================================================

    /**
     * @var string The name of the autocomplete
     */
    public $name = 'TrackingVarsAutocomplete';

    /**
     * @var string The type of the autocomplete
     */
    public $type = AutocompleteTypes::TwigExpressionAutocomplete;

    /**
     * @var string Whether the autocomplete should be parsed with . -delimited nested sub-properties
     */
    public $hasSubProperties = false;

    /**
     * @var array Variables to add from the Tracking Scripts settings
     */
    public $vars = [];

    // Public Methods
    // =========================================================================

    /**
     * @inerhitDoc
     */
    public function init(): void
    {
        $cache = Craft::$app->getCache();
        $vars = $cache->get(self::TRACKING_VARS_CACHE_KEY);
        if ($vars !== false && is_array($vars)) {
            $this->vars = $vars;
        }
    }

    /**
     * Core function that generates the autocomplete array
     */
    public function generateCompleteItems(): void
    {
        foreach ($this->vars as $key => $value) {
            CompleteItem::create()
                ->insertText($key)
                ->label($key)
                ->detail($value['title'])
                ->documentation($value['instructions'])
                ->kind(CompleteItemKind::VariableKind)
                ->add($this);
        }
    }
}