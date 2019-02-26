<?php return [
    'plugin'      => [
        'name'        => 'Shopaholic',
        'description' => '🛍️ Kostenlose E-Commerce-Plugin mit einer großen Reihe von Erweiterungen.',
    ],
    'field'       => [
        'vendor_code'         => 'Vendor code',
        'price'               => 'Preis',
        'old_price'           => 'Alter Preis',
        'quantity'            => 'Menge',
        'brand'               => 'Marke',
        'offer'               => 'Offers',
        'currency'            => 'Währung',
        'check_offer_active'  => 'When you receive a list of active products, check for active offers',
        'additional_category' => 'Additional categories',
        'promo_block_type'    => 'Promo block with product list',
        'promo_block'         => 'Promo block',
        'category_parent_id'  => 'Parent category ID',
        'product_id'          => 'Product ID',
        'rate'                => 'Rate',
        'tax_is_global'       => 'Tax will apply to all products',
        'tax_percent'         => 'Tax percent',
        'tax'                 => 'Tax',
        'without_tax'         => 'Without tax',
        'with_tax'            => 'With tax',
        'countries'           => 'Countries',
        'states'              => 'States',
        'main_price_type'     => 'Main price',
        'price_include_tax'   => 'Price includes taxes',
        'discount_price'      => 'Discount price',
    ],
    'menu'        => [
        'main'                      => 'Katalog',
        'categories'                => 'Categories',
        'product'                   => 'Produkte',
        'brands'                    => 'Marken',
        'shop_catalog'              => 'Produktkatalog',
        'shop_category'             => 'Produktkategorie',
        'all_shop_categories'       => 'All categories of products',
        'promo_block'               => 'Promo blocks',
        'promo'                     => 'Promotions',
        'price_type'                => 'Price types',
        'price_type_description'    => 'Manage price types',
        'currency'                  => 'Currency',
        'currency_description'      => 'Manage currencies',
        'tax'                       => 'Taxes',
        'tax_description'           => 'Manage taxes',
        'configuration'             => 'Catalog settings',
        'main_settings'             => 'Basic settings',
        'main_settings_description' => 'Basic settings of your catalog',
    ],
    'tab'         => [
        'offer'       => 'Trade offers',
        'price'       => 'Preise',
        'permissions' => 'Shopaholic',
        'settings'    => 'Catalog configuration',
        'taxes'       => 'Taxes',
    ],
    'category'    => [
        'name'         => 'category',
        'list_title'   => 'Category list',
        'import_title' => 'Import categories',
        'export_title' => 'Export categories',
    ],
    'brand'       => [
        'name'         => 'brand',
        'list_title'   => 'Brand list',
        'import_title' => 'Import brands',
        'export_title' => 'Export brands',
    ],
    'product'     => [
        'name'         => 'product',
        'list_title'   => 'Product list',
        'import_title' => 'Import products',
        'export_title' => 'Export products',
    ],
    'offer'       => [
        'name'         => 'offer',
        'list_title'   => 'Offer list',
        'import_title' => 'Import offers',
        'export_title' => 'Export offers',
    ],
    'promo_block' => [
        'name'       => 'promo block',
        'list_title' => 'Promo block list',
    ],
    'price_type'  => [
        'name'       => 'price type',
        'list_title' => 'Price type list',
    ],
    'currency'    => [
        'name'       => 'currency',
        'list_title' => 'Currency list',
    ],
    'tax'         => [
        'name'       => 'tax',
        'list_title' => 'Tax list',
    ],
    'country'     => [
        'name'       => 'country',
        'list_title' => 'Country list',
    ],
    'state'       => [
        'name'       => 'state',
        'list_title' => 'State list',
    ],
    'component'   => [

        //Product components
        'product_page_name'            => 'Product page',
        'product_page_description'     => 'Get data for product page',
        'product_data_name'            => 'Produktdaten',
        'product_data_description'     => 'Get product data by ID',
        'product_list_name'            => 'Produktliste',
        'product_list_description'     => 'Get product list',

        //Brand components
        'brand_page_name'              => 'Markenseite',
        'brand_page_description'       => 'Get data for brand page',
        'brand_data_name'              => 'Brand data',
        'brand_data_description'       => 'Get brand data by ID',
        'brand_list_name'              => 'Brand list',
        'brand_list_description'       => 'Get brand list',

        //Promo block components
        'promo_block_page_name'        => 'Promo block page',
        'promo_block_page_description' => 'Get data for promo block page',
        'promo_block_data_name'        => 'Promo block data',
        'promo_block_data_description' => 'Get promo block data by ID',
        'promo_block_list_name'        => 'Promo block list',
        'promo_block_list_description' => 'Get promo block list',

        //Category components
        'category_page_name'           => 'Category page',
        'category_page_description'    => 'Get data for category page',
        'category_data_name'           => 'Category data',
        'category_data_description'    => 'Get category data by ID',
        'category_list_name'           => 'Category list',
        'category_list_description'    => 'Get category tree',

        //Currency components
        'currency_list_name'           => 'Currency list',
        'currency_list_description'    => '',

        //Common components
        'breadcrumbs_name'             => 'Breadcrumbs',
        'breadcrumbs_description'      => 'Get data for catalog breadcrumbs',

        //Components settings
        'product_list_sorting'         => 'Standardsortierung',
        'sorting_no'                   => 'Without sorting',
        'sorting_price_desc'           => 'Teuer',
        'sorting_price_asc'            => 'Billig',
        'sorting_new'                  => 'Neu',
        'sorting_popularity_desc'      => 'Populär',
        'sorting_rating_desc'          => 'Hohe Bewertung',
        'sorting_rating_asc'           => 'Niedrige Bewertung',
        'sorting_date_begin_asc'       => 'Datumsanfang (ASC)',
        'sorting_date_begin_desc'      => 'Datumsanfang (DESC)',
        'sorting_date_end_asc'         => 'Datumsende (ASC)',
        'sorting_date_end_desc'        => 'Datumsende (DESC)',
    ],
    'permission'  => [
        'category'    => 'Kategorien verwalten',
        'brand'       => 'Marken verwalten',
        'product'     => 'Produkte verwalten',
        'settings'    => 'Einstellungen verwalten',
        'promo_block' => 'Werbeblöcke verwalten',
        'currency'    => 'Manage currencies',
        'tax'         => 'Manage taxes',
        'price_type'  => 'Manage price types',
    ],
    'message'     => [
        'import_additional_category_info' => 'Set the list of additional product categories separated by commas.',
    ],
    'button'      => [
        'import_offer_button' => 'Importiere Angebote mit CSV',
    ],
];
