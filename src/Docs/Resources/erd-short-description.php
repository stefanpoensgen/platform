<?php declare(strict_types=1);

return [
    'Shopware\\Core\\Framework\\Attribute' => 'Attributes/EAV',
    'Shopware\\Core\\Framework\\Event' => 'Business events',
    'Shopware\\Core\\Framework\\MessageQueue' => 'Asynchronous messaging',
    Shopware\Core\Framework\Plugin::class => 'Plugins',
    'Shopware\\Core\\Framework\\ScheduledTask' => 'Scheduled messages',
    'Shopware\\Core\\Framework\\Tag' => 'Tags',
    'Shopware\\Core\\System\\SalesChannel' => 'Sales channels',
    'Shopware\\Core\\System\\Country' => 'Countries',
    'Shopware\\Core\\System\\Currency' => 'Currencies',
    'Shopware\\Core\\System\\Locale' => 'Locales',
    'Shopware\\Core\\Framework\\Snippet' => 'Custom placeholder translations',
    'Shopware\\Core\\System\\Salutation' => 'Solutations',
    'Shopware\\Core\\System\\Tax' => 'Taxes',
    'Shopware\\Core\\System\\Unit' => 'Units',
    'Shopware\\Core\\System\\User' => 'Admin Accounts',
    'Shopware\\Core\\System\\Language' => 'Languages',
    'Shopware\\Core\\System\\Integration' => 'O-Auth integrations',
    'Shopware\\Core\\System\\StateMachine' => 'State machine',
    'Shopware\\Core\\System\\SystemConfig' => 'System configuration',
    'Shopware\\Core\\System\\NumberRange' => 'Number ranges',
    'Shopware\\Core\\Content\\Category' => 'Categories',
    'Shopware\\Core\\Content\\Media' => 'Media/File management',
    'Shopware\\Core\\Content\\Product' => 'Products',
    'Shopware\\Core\\Framework\\Search' => 'Search',
    'Shopware\\Core\\Content\\Navigation' => 'Navigation',
    'Shopware\\Core\\Content\\Rule' => 'Rules',
    'Shopware\\Core\\Content\\ProductStream' => 'Product streams',
    'Shopware\\Core\\Content\\Configuration' => 'Product configuration',
    'Shopware\\Core\\Checkout\\Customer' => 'Customer',
    'Shopware\\Core\\Checkout\\Order' => 'Orders',
    'Shopware\\Core\\Checkout\\Payment' => 'Payments',
    'Shopware\\Core\\Checkout\\Shipping' => 'Shipping',
    'Shopware\\Core\\Checkout\\DiscountSurcharge' => 'Discount/Surcharge',
    'Shopware\\Storefront' => 'Storefront',
    Shopware\Core\Framework\Attribute\AttributeDefinition::class => 'Attribute configuration',
    Shopware\Core\Framework\Attribute\Aggregate\AttributeSet\AttributeSetDefinition::class => 'Attribute set/group',
    Shopware\Core\Framework\Attribute\Aggregate\AttributeSetRelation\AttributeSetRelationDefinition::class => 'Set to entity relation',
    Shopware\Core\Framework\Event\EventAction\EventActionDefinition::class => 'Configurable event handling',
    Shopware\Core\Framework\MessageQueue\DeadMessage\DeadMessageDefinition::class => 'Failing messages',
    Shopware\Core\Framework\MessageQueue\MessageQueueStatsDefinition::class => 'Stats',
    Shopware\Core\Framework\Plugin\PluginDefinition::class => 'Plugin',
    Shopware\Core\Framework\Plugin\Aggregate\PluginTranslation\PluginTranslationDefinition::class => 'Translations',
    Shopware\Core\Framework\ScheduledTask\ScheduledTaskDefinition::class => 'Cron job',
    Shopware\Core\Framework\Tag\TagDefinition::class => 'Taxonomy',
    Shopware\Core\System\SalesChannel\SalesChannelDefinition::class => 'Sales Channel',
    Shopware\Core\System\SalesChannel\Aggregate\SalesChannelTranslation\SalesChannelTranslationDefinition::class => 'Translations',
    Shopware\Core\System\SalesChannel\Aggregate\SalesChannelDomain\SalesChannelDomainDefinition::class => 'Domain names of a sales channels',
    Shopware\Core\System\SalesChannel\Aggregate\SalesChannelType\SalesChannelTypeDefinition::class => 'Type',
    Shopware\Core\System\SalesChannel\Aggregate\SalesChannelTypeTranslation\SalesChannelTypeTranslationDefinition::class => 'Translations',
    Shopware\Core\System\Country\CountryDefinition::class => 'Country',
    Shopware\Core\System\Country\Aggregate\CountryState\CountryStateDefinition::class => 'A countries state',
    Shopware\Core\System\Country\Aggregate\CountryStateTranslation\CountryStateTranslationDefinition::class => 'Translations',
    Shopware\Core\System\Country\Aggregate\CountryTranslation\CountryTranslationDefinition::class => 'Translations',
    Shopware\Core\System\Currency\CurrencyDefinition::class => 'Currency',
    Shopware\Core\System\Currency\Aggregate\CurrencyTranslation\CurrencyTranslationDefinition::class => 'Translations',
    Shopware\Core\System\Locale\LocaleDefinition::class => 'A locale',
    Shopware\Core\System\Locale\Aggregate\LocaleTranslation\LocaleTranslationDefinition::class => 'Translations',
    Shopware\Core\Framework\Snippet\Aggregate\SnippetSet\SnippetSetDefinition::class => 'Sets of snippets',
    Shopware\Core\Framework\Snippet\SnippetDefinition::class => 'Translation Strings',
    Shopware\Core\System\Salutation\SalutationDefinition::class => 'Salutation configuration',
    Shopware\Core\System\Salutation\Aggregate\SalutationTranslation\SalutationTranslationDefinition::class => 'Translations',
    Shopware\Core\System\Tax\TaxDefinition::class => 'Available tax settings',
    Shopware\Core\System\Unit\UnitDefinition::class => 'Measuring unit',
    Shopware\Core\System\Unit\Aggregate\UnitTranslation\UnitTranslationDefinition::class => 'Translations',
    Shopware\Core\System\User\UserDefinition::class => 'Administration/ Management Account user',
    Shopware\Core\System\User\Aggregate\UserAccessKey\UserAccessKeyDefinition::class => 'oAuth access key',
    Shopware\Core\System\User\Aggregate\UserRecovery\UserRecoveryDefinition::class => 'User / Account recovery process',
    Shopware\Core\System\Language\LanguageDefinition::class => 'Language',
    Shopware\Core\System\Integration\IntegrationDefinition::class => 'O-Auth integration',
    Shopware\Core\System\StateMachine\StateMachineDefinition::class => 'State machine',
    Shopware\Core\System\StateMachine\StateMachineTranslationDefinition::class => 'Translations',
    Shopware\Core\System\StateMachine\Aggregation\StateMachineState\StateMachineStateDefinition::class => 'State',
    Shopware\Core\System\StateMachine\Aggregation\StateMachineState\StateMachineStateTranslationDefinition::class => 'Translations',
    Shopware\Core\System\StateMachine\Aggregation\StateMachineTransition\StateMachineTransitionDefinition::class => 'State transition',
    Shopware\Core\System\StateMachine\Aggregation\StateMachineHistory\StateMachineHistoryDefinition::class => 'State transition history',
    Shopware\Core\System\SystemConfig\SystemConfigDefinition::class => 'System configuration',
    Shopware\Core\System\NumberRange\NumberRangeDefinition::class => 'Number range',
    Shopware\Core\System\NumberRange\Aggregate\NumberRangeState\NumberRangeStateDefinition::class => 'Current number range max value',
    Shopware\Core\System\NumberRange\Aggregate\NumberRangeType\NumberRangeTypeDefinition::class => 'Type',
    Shopware\Core\Content\Category\CategoryDefinition::class => 'Category tree',
    Shopware\Core\Content\Category\Aggregate\CategoryTranslation\CategoryTranslationDefinition::class => 'Translations',
    Shopware\Core\Content\Media\MediaDefinition::class => 'Media / Files',
    Shopware\Core\Content\Media\Aggregate\MediaDefaultFolder\MediaDefaultFolderDefinition::class => 'Default folders',
    Shopware\Core\Content\Media\Aggregate\MediaThumbnail\MediaThumbnailDefinition::class => 'Generated Thumbnail',
    Shopware\Core\Content\Media\Aggregate\MediaTranslation\MediaTranslationDefinition::class => 'Translations',
    Shopware\Core\Content\Media\Aggregate\MediaFolder\MediaFolderDefinition::class => 'Folder structure',
    Shopware\Core\Content\Media\Aggregate\MediaThumbnailSize\MediaThumbnailSizeDefinition::class => 'Generated Thumbnails',
    Shopware\Core\Content\Media\Aggregate\MediaFolderConfiguration\MediaFolderConfigurationDefinition::class => 'Configuration',
    Shopware\Core\Content\Product\ProductDefinition::class => 'Product',
    Shopware\Core\Content\Product\Aggregate\ProductConfigurator\ProductConfiguratorDefinition::class => 'The root product configurator.',
    Shopware\Core\Content\Product\Aggregate\ProductPriceRule\ProductPriceRuleDefinition::class => 'Staggered pricing',
    Shopware\Core\Content\Product\Aggregate\ProductManufacturer\ProductManufacturerDefinition::class => 'Manufacturer',
    Shopware\Core\Content\Product\Aggregate\ProductManufacturerTranslation\ProductManufacturerTranslationDefinition::class => 'Translations',
    Shopware\Core\Content\Product\Aggregate\ProductMedia\ProductMediaDefinition::class => 'Product media/images',
    Shopware\Core\Framework\Search\SearchDocumentDefinition::class => 'Composite search',
    Shopware\Core\Content\Product\Aggregate\ProductTranslation\ProductTranslationDefinition::class => 'Translations',
    Shopware\Core\Content\Product\Aggregate\ProductVisibility\ProductVisibilityDefinition::class => 'Visibility in sales channels',
    Shopware\Core\Content\Navigation\NavigationDefinition::class => 'SalesChannel Navigation',
    Shopware\Core\Content\Navigation\Aggregate\NavigationTranslation\NavigationTranslationDefinition::class => 'Translations',
    Shopware\Core\Content\Rule\RuleDefinition::class => 'Rule',
    Shopware\Core\Content\Rule\Aggregate\RuleCondition\RuleConditionDefinition::class => 'Rule condition',
    Shopware\Core\Content\ProductStream\ProductStreamDefinition::class => 'Product streams',
    Shopware\Core\Content\ProductStream\Aggregate\ProductStreamTranslation\ProductStreamTranslationDefinition::class => 'Translations',
    Shopware\Core\Content\ProductStream\Aggregate\ProductStreamFilter\ProductStreamFilterDefinition::class => 'A Product stream filter term',
    Shopware\Core\Content\Configuration\ConfigurationGroupDefinition::class => 'Product variant configuration',
    Shopware\Core\Content\Configuration\Aggregate\ConfigurationGroupOption\ConfigurationGroupOptionDefinition::class => 'Product variant option',
    Shopware\Core\Content\Configuration\Aggregate\ConfigurationGroupOptionTranslation\ConfigurationGroupOptionTranslationDefinition::class => 'Translations',
    Shopware\Core\Content\Configuration\Aggregate\ConfigurationGroupTranslation\ConfigurationGroupTranslationDefinition::class => 'Translations',
    Shopware\Core\Checkout\Customer\CustomerDefinition::class => 'The sales channel customer',
    Shopware\Core\Checkout\Customer\Aggregate\CustomerGroupTranslation\CustomerGroupTranslationDefinition::class => 'Translations',
    Shopware\Core\Checkout\Customer\Aggregate\CustomerAddress\CustomerAddressDefinition::class => 'The customer addresses.',
    Shopware\Core\Checkout\Customer\Aggregate\CustomerGroup\CustomerGroupDefinition::class => 'Customer groups',
    'Shopware\\Core\\Checkout\\Customer\\Aggregate\\CustomerGroupDiscount\\CustomerGroupDiscountDefinition' => 'Customer group discount',
    Shopware\Core\Checkout\Order\OrderDefinition::class => 'Order root table',
    Shopware\Core\Checkout\Order\Aggregate\OrderAddress\OrderAddressDefinition::class => 'Order address',
    Shopware\Core\Checkout\Order\Aggregate\OrderCustomer\OrderCustomerDefinition::class => 'Order customer',
    Shopware\Core\Checkout\Order\Aggregate\OrderDelivery\OrderDeliveryDefinition::class => 'Delivery',
    Shopware\Core\Checkout\Order\Aggregate\OrderDeliveryPosition\OrderDeliveryPositionDefinition::class => 'Delivery position',
    Shopware\Core\Checkout\Order\Aggregate\OrderLineItem\OrderLineItemDefinition::class => 'Order line item',
    Shopware\Core\Checkout\Order\Aggregate\OrderTransaction\OrderTransactionDefinition::class => 'Order transaction',
    Shopware\Core\Checkout\Payment\PaymentMethodDefinition::class => 'Payment method',
    Shopware\Core\Checkout\Payment\Aggregate\PaymentMethodTranslation\PaymentMethodTranslationDefinition::class => 'Translations',
    Shopware\Core\Checkout\Shipping\ShippingMethodDefinition::class => 'Shipping method',
    'Shopware\\Core\\Checkout\\Shipping\\Aggregate\\ShippingMethodPrice\\ShippingMethodPriceDefinition' => 'Prices of a shipping method',
    Shopware\Core\Checkout\Shipping\Aggregate\ShippingMethodTranslation\ShippingMethodTranslationDefinition::class => 'Translations',
    Shopware\Core\Checkout\DiscountSurcharge\DiscountSurchargeDefinition::class => 'Discounts/Surcharges',
    Shopware\Core\Checkout\DiscountSurcharge\Aggregate\DiscountSurchargeTranslation\DiscountSurchargeTranslationDefinition::class => 'Translations',
    'Shopware\\Storefront\\Framework\\Seo\\SeoUrlDefinition' => 'SEO urls',
    Shopware\Core\System\SalesChannel\Aggregate\SalesChannelCountry\SalesChannelCountryDefinition::class => 'M:N Mapping',
    Shopware\Core\System\SalesChannel\Aggregate\SalesChannelCurrency\SalesChannelCurrencyDefinition::class => 'M:N Mapping',
    Shopware\Core\System\SalesChannel\Aggregate\SalesChannelLanguage\SalesChannelLanguageDefinition::class => 'M:N Mapping',
    Shopware\Core\System\SalesChannel\Aggregate\SalesChannelPaymentMethod\SalesChannelPaymentMethodDefinition::class => 'M:N Mapping',
    Shopware\Core\System\SalesChannel\Aggregate\SalesChannelShippingMethod\SalesChannelShippingMethodDefinition::class => 'M:N Mapping',
    Shopware\Core\System\NumberRange\Aggregate\NumberRangeSalesChannel\NumberRangeSalesChannelDefinition::class => 'M:N Mapping',
    Shopware\Core\Content\Category\Aggregate\CategoryTag\CategoryTagDefinition::class => 'M:N Mapping',
    Shopware\Core\Content\Media\Aggregate\MediaFolderConfigurationMediaThumbnailSize\MediaFolderConfigurationMediaThumbnailSizeDefinition::class => 'M:N Mapping',
    Shopware\Core\Content\Media\Aggregate\MediaTag\MediaTagDefinition::class => 'M:N Mapping',
    Shopware\Core\Content\Product\Aggregate\ProductCategory\ProductCategoryDefinition::class => 'M:N Mapping',
    Shopware\Core\Content\Product\Aggregate\ProductTag\ProductTagDefinition::class => 'M:N Mapping',
    Shopware\Core\Content\Product\Aggregate\ProductDatasheet\ProductDatasheetDefinition::class => 'M:N Mapping',
    Shopware\Core\Content\Product\Aggregate\ProductVariation\ProductVariationDefinition::class => 'M:N Mapping',
    Shopware\Core\Content\Product\Aggregate\ProductCategoryTree\ProductCategoryTreeDefinition::class => 'M:N Mapping',
    Shopware\Core\Checkout\Customer\Aggregate\CustomerTag\CustomerTagDefinition::class => 'M:N Mapping',
    Shopware\Core\Checkout\Order\Aggregate\OrderTag\OrderTagDefinition::class => 'M:N Mapping',
    Shopware\Core\Framework\Store\StoreSettingsDefinition::class => 'Plugin store settings',
    Shopware\Core\Content\NewsletterReceiver\NewsletterReceiverDefinition::class => 'Newsletter receiver',
    Shopware\Core\Checkout\Payment\Aggregate\PaymentMethodRules\PaymentMethodRuleDefinition::class => 'M:N Mapping',
    Shopware\Core\Checkout\Shipping\Aggregate\ShippingMethodPriceRule\ShippingMethodPriceRuleDefinition::class => 'Shipping rule prices',
    Shopware\Core\Checkout\Shipping\Aggregate\ShippingMethodRules\ShippingMethodRuleDefinition::class => 'M:N Mapping',
    Shopware\Storefront\Framework\Seo\SeoUrl\SeoUrlDefinition::class => 'Seo urls',
    Shopware\Storefront\Framework\Seo\SeoUrlTemplate\SeoUrlTemplateDefinition::class => 'Template',
];
