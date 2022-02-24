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

namespace nystudio107\seomatic\models\jsonld;

use nystudio107\seomatic\models\jsonld\Intangible;

/**
 * Occupation - A profession, may involve prolonged training and/or a formal
 * qualification.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @since     3.0.0
 * @see       http://schema.org/Occupation
 */
class Occupation extends Intangible
{
    // Static Public Properties
    // =========================================================================

    /**
     * The Schema.org Type Name
     *
     * @var string
     */
    static public $schemaTypeName = 'Occupation';

    /**
     * The Schema.org Type Scope
     *
     * @var string
     */
    static public $schemaTypeScope = 'https://schema.org/Occupation';

    /**
     * The Schema.org Type Description
     *
     * @var string
     */
    static public $schemaTypeDescription = 'A profession, may involve prolonged training and/or a formal qualification.';

    /**
     * The Schema.org Type Extends
     *
     * @var string
     */
    static public $schemaTypeExtends = 'Intangible';

    /**
     * The Schema.org composed Property Names
     *
     * @var array
     */
    static public $schemaPropertyNames = [];

    /**
     * The Schema.org composed Property Expected Types
     *
     * @var array
     */
    static public $schemaPropertyExpectedTypes = [];

    /**
     * The Schema.org composed Property Descriptions
     *
     * @var array
     */
    static public $schemaPropertyDescriptions = [];

    /**
     * The Schema.org composed Google Required Schema for this type
     *
     * @var array
     */
    static public $googleRequiredSchema = [];

    /**
     * The Schema.org composed Google Recommended Schema for this type
     *
     * @var array
     */
    static public $googleRecommendedSchema = [];

    // Public Properties
    // =========================================================================
    /**
     * The Schema.org Property Names
     *
     * @var array
     */
    static protected $_schemaPropertyNames = [
        'educationRequirements',
        'estimatedSalary',
        'experienceRequirements',
        'occupationLocation',
        'occupationalCategory',
        'qualifications',
        'responsibilities',
        'skills'
    ];
    /**
     * The Schema.org Property Expected Types
     *
     * @var array
     */
    static protected $_schemaPropertyExpectedTypes = [
        'educationRequirements' => ['EducationalOccupationalCredential', 'Text'],
        'estimatedSalary' => ['MonetaryAmount', 'MonetaryAmountDistribution', 'Number'],
        'experienceRequirements' => ['Text'],
        'occupationLocation' => ['AdministrativeArea'],
        'occupationalCategory' => ['CategoryCode', 'Text'],
        'qualifications' => ['EducationalOccupationalCredential', 'Text'],
        'responsibilities' => ['Text'],
        'skills' => ['DefinedTerm', 'Text']
    ];
    /**
     * The Schema.org Property Descriptions
     *
     * @var array
     */
    static protected $_schemaPropertyDescriptions = [
        'educationRequirements' => 'Educational background needed for the position or Occupation.',
        'estimatedSalary' => 'An estimated salary for a job posting or occupation, based on a variety of variables including, but not limited to industry, job title, and location. Estimated salaries are often computed by outside organizations rather than the hiring organization, who may not have committed to the estimated value.',
        'experienceRequirements' => 'Description of skills and experience needed for the position or Occupation.',
        'occupationLocation' => 'The region/country for which this occupational description is appropriate. Note that educational requirements and qualifications can vary between jurisdictions.',
        'occupationalCategory' => 'A category describing the job, preferably using a term from a taxonomy such as BLS O*NET-SOC, ISCO-08 or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided. Note: for historical reasons, any textual label and formal code provided as a literal may be assumed to be from O*NET-SOC.',
        'qualifications' => 'Specific qualifications required for this role or Occupation.',
        'responsibilities' => 'Responsibilities associated with this role or Occupation.',
        'skills' => 'A statement of knowledge, skill, ability, task or any other assertion expressing a competency that is desired or required to fulfill this role or to work in this occupation.'
    ];
    /**
     * The Schema.org Google Required Schema for this type
     *
     * @var array
     */
    static protected $_googleRequiredSchema = [
    ];
    /**
     * The Schema.org composed Google Recommended Schema for this type
     *
     * @var array
     */
    static protected $_googleRecommendedSchema = [
    ];
    /**
     * Educational background needed for the position or Occupation.
     *
     * @var mixed|EducationalOccupationalCredential|string [schema.org types: EducationalOccupationalCredential, Text]
     */
    public $educationRequirements;
    /**
     * An estimated salary for a job posting or occupation, based on a variety of
     * variables including, but not limited to industry, job title, and location.
     * Estimated salaries are often computed by outside organizations rather than
     * the hiring organization, who may not have committed to the estimated value.
     *
     * @var mixed|MonetaryAmount|MonetaryAmountDistribution|float [schema.org types: MonetaryAmount, MonetaryAmountDistribution, Number]
     */
    public $estimatedSalary;
    /**
     * Description of skills and experience needed for the position or Occupation.
     *
     * @var string [schema.org types: Text]
     */
    public $experienceRequirements;

    // Static Protected Properties
    // =========================================================================
    /**
     * The region/country for which this occupational description is appropriate.
     * Note that educational requirements and qualifications can vary between
     * jurisdictions.
     *
     * @var AdministrativeArea [schema.org types: AdministrativeArea]
     */
    public $occupationLocation;
    /**
     * A category describing the job, preferably using a term from a taxonomy such
     * as BLS O*NET-SOC, ISCO-08 or similar, with the property repeated for each
     * applicable value. Ideally the taxonomy should be identified, and both the
     * textual label and formal code for the category should be provided. Note:
     * for historical reasons, any textual label and formal code provided as a
     * literal may be assumed to be from O*NET-SOC.
     *
     * @var mixed|CategoryCode|string [schema.org types: CategoryCode, Text]
     */
    public $occupationalCategory;
    /**
     * Specific qualifications required for this role or Occupation.
     *
     * @var mixed|EducationalOccupationalCredential|string [schema.org types: EducationalOccupationalCredential, Text]
     */
    public $qualifications;
    /**
     * Responsibilities associated with this role or Occupation.
     *
     * @var string [schema.org types: Text]
     */
    public $responsibilities;
    /**
     * A statement of knowledge, skill, ability, task or any other assertion
     * expressing a competency that is desired or required to fulfill this role or
     * to work in this occupation.
     *
     * @var mixed|DefinedTerm|string [schema.org types: DefinedTerm, Text]
     */
    public $skills;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init(): void
    {
        parent::init();
        self::$schemaPropertyNames = array_merge(
            parent::$schemaPropertyNames,
            self::$_schemaPropertyNames
        );

        self::$schemaPropertyExpectedTypes = array_merge(
            parent::$schemaPropertyExpectedTypes,
            self::$_schemaPropertyExpectedTypes
        );

        self::$schemaPropertyDescriptions = array_merge(
            parent::$schemaPropertyDescriptions,
            self::$_schemaPropertyDescriptions
        );

        self::$googleRequiredSchema = array_merge(
            parent::$googleRequiredSchema,
            self::$_googleRequiredSchema
        );

        self::$googleRecommendedSchema = array_merge(
            parent::$googleRecommendedSchema,
            self::$_googleRecommendedSchema
        );
    }

    /**
     * @inheritdoc
     */
    public function rules(): array
    {
        $rules = parent::rules();
        $rules = array_merge($rules, [
            [['educationRequirements', 'estimatedSalary', 'experienceRequirements', 'occupationLocation', 'occupationalCategory', 'qualifications', 'responsibilities', 'skills'], 'validateJsonSchema'],
            [self::$_googleRequiredSchema, 'required', 'on' => ['google'], 'message' => 'This property is required by Google.'],
            [self::$_googleRecommendedSchema, 'required', 'on' => ['google'], 'message' => 'This property is recommended by Google.']
        ]);

        return $rules;
    }
}
