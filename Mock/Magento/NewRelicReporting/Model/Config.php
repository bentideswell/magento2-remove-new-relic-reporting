<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\NewRelicReporting\Model;

/**
 * NewRelic configuration model
 */
class Config
{
    /**#@+
     * Names of parameters to be sent to database tables
     */
    const ORDER_ITEMS = 'lineItemCount';
    const ORDER_VALUE = 'orderValue';
    const ORDER_PLACED = 'Order';
    const ADMIN_USER_ID = 'adminId';
    const ADMIN_USER = 'adminUser';
    const ADMIN_NAME = 'adminName';
    const CUSTOMER_ID = 'customerId';
    const CUSTOMER_NAME = 'CustomerName';
    const CUSTOMER_COUNT = 'CustomerCount';
    const FLUSH_CACHE = 'systemCacheFlush';
    const STORE = 'store';
    const STORE_VIEW_COUNT = 'StoreViewCount';
    const WEBSITE = 'website';
    const WEBSITE_COUNT = 'WebsiteCount';
    const PRODUCT_CHANGE = 'adminProductChange';
    const PRODUCT_COUNT = 'productCatalogSize';
    const CONFIGURABLE_COUNT = 'productCatalogConfigurableSize';
    const ACTIVE_COUNT = 'productCatalogActiveSize';
    const CATEGORY_SIZE = 'productCatalogCategorySize';
    const CATEGORY_COUNT = 'CatalogCategoryCount';
    const ENABLED_MODULE_COUNT = 'enabledModuleCount';
    const MODULES_ENABLED = 'ModulesEnabled';
    const MODULES_DISABLED = 'ModulesDisabled';
    const MODULES_INSTALLED = 'ModulesInstalled';
    const MODULE_INSTALLED = 'moduleInstalled';
    const MODULE_UNINSTALLED = 'moduleUninstalled';
    const MODULE_ENABLED = 'moduleEnabled';
    const MODULE_DISABLED = 'moduleDisabled';
    /**#@-*/

    /**#@+
     * Text flags for states
     */
    const INSTALLED = 'installed';
    const UNINSTALLED = 'uninstalled';
    const ENABLED = 'enabled';
    const DISABLED = 'disabled';
    const TRUE = 'true';
    const FALSE = 'false';
    /**#@-*/

    /**
     * Returns module's enabled status
     *
     * @return bool
     */
    public function isNewRelicEnabled()
    {
        return false;
    }

    /**
     * @return string
     */
    public function getNewRelicApiUrl()
    {
        return '';
    }

    /**
     * Returns configured URL for Insights API
     *
     * @return string
     */
    public function getInsightsApiUrl()
    {
        return '';
    }

    /**
     * Returns configured account ID for New Relic
     *
     * @return string
     */
    public function getNewRelicAccountId()
    {
        return '';
    }

    /**
     * Return configured NR Application ID
     *
     * @return int
     */
    public function getNewRelicAppId()
    {
        return 0;
    }

    /**
     * Returns configured API key for APM
     *
     * @return string
     */
    public function getNewRelicApiKey()
    {
        return '';
    }

    /**
     * Returns configured Insights insert key for New Relic events related to cron jobs
     *
     * @return string
     */
    public function getInsightsInsertKey()
    {
        return '';
    }

    /**
     * Returns configured NR Application name
     *
     * @return string
     */
    public function getNewRelicAppName()
    {
        return '';
    }

    /**
     * Returns configured separate apps value
     *
     * @return bool
     */
    public function isSeparateApps()
    {
        return false;
    }

    /**
     * Returns config setting for overall cron to be enabled
     *
     * @return bool
     */
    public function isCronEnabled()
    {
        return false;
    }

    /**
     * @return void
     */
    public function disableModule()
    {

    }
}
