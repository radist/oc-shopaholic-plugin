<?php return [
    'plugin'      => [
        'name'        => 'Shopaholic',
        'description' => '🛍️ Бесплатный eCommerce-плагин с большим набором расширений.',
    ],
    'field'       => [
        'vendor_code'         => 'Артикул',
        'price'               => 'Цена',
        'old_price'           => 'Старая цена',
        'quantity'            => 'Количество',
        'brand'               => 'Бренд',
        'offer'               => 'Товарные предложения',
        'currency'            => 'Валюта',
        'check_offer_active'  => 'Проверять наличие активных торговых предложений при получении списка активных товаров.',
        'additional_category' => 'Дополнительные категории',
        'promo_block_type'    => 'Промо-блок со списком товаров',
        'promo_block'         => 'Промо-блок',
        'category_parent_id'  => 'ID родительской категории',
        'product_id'          => 'ID товара',
        'rate'                => 'Rate',
        'tax_is_global'       => 'Tax will apply to all products',
        'tax_percent'         => 'Tax percent',
        'countries'           => 'Countries',
        'states'              => 'States',
        'main_price_type'     => 'Main price',
        'price_include_tax'   => 'Price includes taxes',
    ],
    'menu'        => [
        'main'                      => 'Каталог',
        'categories'                => 'Категории',
        'product'                   => 'Товары',
        'brands'                    => 'Бренды',
        'shop_catalog'              => 'Каталог товаров',
        'shop_category'             => 'Категория товаров',
        'all_shop_categories'       => 'Все категории товаров',
        'promo_block'               => 'Промо-блоки',
        'promo'                     => 'Промо-акции',
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
        'offer'       => 'Торговые предложения',
        'price'       => 'Цены',
        'permissions' => 'Shopaholic',
        'settings'    => 'Catalog configuration',
    ],
    'category'    => [
        'name'         => 'категории',
        'list_title'   => 'Список категорий',
        'import_title' => 'Импорт категорий',
        'export_title' => 'Экспорт категорий',
    ],
    'brand'       => [
        'name'         => 'бренда',
        'list_title'   => 'Список брендов',
        'import_title' => 'Импорт брендов',
        'export_title' => 'Экспорт брендов',
    ],
    'product'     => [
        'name'         => 'товара',
        'list_title'   => 'Список товаров',
        'import_title' => 'Импорт товаров',
        'export_title' => 'Экспорт товаров',
    ],
    'offer'       => [
        'name'         => 'торгового предложения',
        'list_title'   => 'Список торговых предложений',
        'import_title' => 'Импорт торговых предложений',
        'export_title' => 'Экспорт торговых предложений',
    ],
    'promo_block' => [
        'name'       => 'промо-блока',
        'list_title' => 'Список промо-блоков',
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
        'product_page_name'            => 'Страница товара',
        'product_page_description'     => 'Получить данные для страницы товара',
        'product_data_name'            => 'Данные товара',
        'product_data_description'     => 'Получить данные товара по ID',
        'product_list_name'            => 'Список товаров',
        'product_list_description'     => 'Получить список товаров',

        //Brand components
        'brand_page_name'              => 'Страница бренда',
        'brand_page_description'       => 'Получить данные для страницы бренда',
        'brand_data_name'              => 'Данные бренда',
        'brand_data_description'       => 'Получить данные бренда по ID',
        'brand_list_name'              => 'Список брендов',
        'brand_list_description'       => 'Получить список брендов',

        //Promo block components
        'promo_block_page_name'        => 'Страница промо-блока',
        'promo_block_page_description' => 'Получить данные для страницы промо-блока',
        'promo_block_data_name'        => 'Данные промо-блока',
        'promo_block_data_description' => 'Получить данные промо-блока по ID',
        'promo_block_list_name'        => 'Список промо-блоков',
        'promo_block_list_description' => 'Получить список промо-блоков',

        //Category components
        'category_page_name'           => 'Страница категории',
        'category_page_description'    => 'Получить данные для страницы категории',
        'category_data_name'           => 'Данные категории',
        'category_data_description'    => 'Получить данные категории по ID',
        'category_list_name'           => 'Список категорий',
        'category_list_description'    => 'Получить дерево категорий',

        //Currency components
        'currency_list_name'           => 'Currency list',
        'currency_list_description'    => '',

        //Common components
        'breadcrumbs_name'             => 'Хлебные крошки',
        'breadcrumbs_description'      => 'Получить данные для формирования хлебных крошек каталога',

        //Components settings
        'product_list_sorting'         => 'Сортировка по умолчанию',
        'sorting_no'                   => 'Без сортировки',
        'sorting_price_desc'           => 'Дорогие',
        'sorting_price_asc'            => 'Дешёвые',
        'sorting_new'                  => 'Новые',
        'sorting_popularity_desc'      => 'Популярные',
        'sorting_rating_desc'          => 'Высокий рейтинг',
        'sorting_rating_asc'           => 'Низкий рейтинг',
        'sorting_date_begin_asc'       => 'Дата начала (ASC)',
        'sorting_date_begin_desc'      => 'Дата начала (DESC)',
        'sorting_date_end_asc'         => 'Дата окончания (ASC)',
        'sorting_date_end_desc'        => 'Дата окончания (DESC)',
    ],
    'permission'  => [
        'category'    => 'Управление категориями',
        'brand'       => 'Управление брендами',
        'product'     => 'Управление товарами',
        'settings'    => 'Управление настройками',
        'promo_block' => 'Управление промо-блоками',
        'currency'    => 'Manage currencies',
        'tax'         => 'Manage taxes',
        'price_type'  => 'Manage price types',
    ],
    'message'     => [
        'import_additional_category_info' => 'Укажите через запятую список дополнительных категорий товаров.',
    ],
    'button'      => [
        'import_offer_button' => 'Импортировать предложения из CSV',
    ],
];
