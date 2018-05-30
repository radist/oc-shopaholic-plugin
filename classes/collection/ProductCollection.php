<?php namespace Lovata\Shopaholic\Classes\Collection;

use Lovata\Toolbox\Classes\Collection\ElementCollection;

use Lovata\Shopaholic\Classes\Item\OfferItem;
use Lovata\Shopaholic\Classes\Item\ProductItem;
use Lovata\Shopaholic\Classes\Store\OfferListStore;
use Lovata\Shopaholic\Classes\Store\ProductListStore;

/**
 * Class ProductCollection
 * @package Lovata\Shopaholic\Classes\Collection
 * @author Andrey Kharanenka, a.khoronenko@lovata.com, LOVATA Group
 *
 * @link https://github.com/lovata/oc-shopaholic-plugin/wiki/ProductCollection
 *
 * Filter for Shopaholic plugin
 * @method $this filterByPrice(float $fStartPrice, float $fStopPrice)
 * @method $this filterByBrandList(array $arBrandIDList)
 * @method $this filterByDiscount()
 * @method $this filterByQuantity()
 * @method $this filterByProperty(array $arFilterList, \Lovata\FilterShopaholic\Classes\Collection\FilterPropertyCollection $obPropertyList)
 *
 * Tags for Shopaholic plugin
 * @method $this tag(int $iTagID)
 *
 * Search for Shopaholic, Sphinx for Shopaholic
 * @method $this search(string $sSearch)
 *
 * Compare for Shopaholic
 * @method $this compare()
 *
 * Viewed products for Shopaholic
 * @method $this viewed()
 */
class ProductCollection extends ElementCollection
{
    const ITEM_CLASS = ProductItem::class;

    /**
     * @var ProductListStore
     */
    protected $obListStore;

    /**
     * ProductCollection constructor.
     */
    public function __construct()
    {
        $this->obListStore = ProductListStore::instance();
        parent::__construct();
    }

    /**
     * Sort list by
     * @see \Lovata\Shopaholic\Tests\Unit\Collection\ProductCollectionTest::testSortingByID()
     * @see \Lovata\Shopaholic\Tests\Unit\Collection\ProductCollectionTest::testSortingByPrice()
     * @param string $sSorting
     * @return $this
     */
    public function sort($sSorting)
    {
        //Get sorting list
        $arResultIDList = $this->obListStore->sorting->get($sSorting);

        return $this->applySorting($arResultIDList);
    }

    /**
     * Apply filter by active product list
     * @see \Lovata\Shopaholic\Tests\Unit\Collection\ProductCollectionTest::testActiveList()
     * @see \Lovata\Shopaholic\Tests\Unit\Collection\ProductCollectionTest::testActiveListWithCheckingOffer()
     * @return $this
     */
    public function active()
    {
        $arResultIDList = $this->obListStore->active->get();

        return $this->intersect($arResultIDList);
    }

    /**
     * Filter product list by category ID
     * @see \Lovata\Shopaholic\Tests\Unit\Collection\ProductCollectionTest::testCategoryFilter()
     * @param int $iCategoryID
     * @return $this
     */
    public function category($iCategoryID)
    {
        $arResultIDList = $this->obListStore->category->get($iCategoryID);

        return $this->intersect($arResultIDList);
    }

    /**
     * Filter product list by category ID
     * @see \Lovata\Shopaholic\Tests\Unit\Collection\ProductCollectionTest::testBrandFilter()
     * @param int $iBrandID
     * @return $this
     */
    public function brand($iBrandID)
    {
        $arResultIDList = $this->obListStore->brand->get($iBrandID);

        return $this->intersect($arResultIDList);
    }

    /**
     * Get offer with min price
     * @see \Lovata\Shopaholic\Tests\Unit\Collection\ProductCollectionTest::testOfferMinPriceMethod()
     * @return OfferItem
     */
    public function getOfferMinPrice()
    {
        $obProductList = clone $this;
        $obProductList->sort(ProductListStore::SORT_PRICE_ASC);

        //Get product with min price
        /** @var \Lovata\Shopaholic\Classes\Item\ProductItem $obProductItem */
        $obProductItem = $obProductList->first();

        if ($obProductItem->isEmpty()) {
            return OfferItem::make(null);
        }

        //Get offer with min price
        $obOfferCollection = $obProductItem->offer;
        if ($obOfferCollection->isEmpty()) {
            return OfferItem::make(null);
        }

        /** @var OfferItem $obOfferItem */
        $obOfferItem = $obOfferCollection->sort(OfferListStore::SORT_PRICE_ASC)->first();

        return $obOfferItem;
    }

    /**
     * Get offer with max price
     * @see \Lovata\Shopaholic\Tests\Unit\Collection\ProductCollectionTest::testOfferMaxPriceMethod()
     * @return OfferItem
     */
    public function getOfferMaxPrice()
    {
        $obProductList = clone $this;
        $obProductList->sort(ProductListStore::SORT_PRICE_ASC);

        //Get product with min price
        /** @var \Lovata\Shopaholic\Classes\Item\ProductItem $obProductItem */
        $obProductItem = $obProductList->last();

        if ($obProductItem->isEmpty()) {
            return OfferItem::make(null);
        }

        //Get offer with min price
        $obOfferCollection = $obProductItem->offer;
        if ($obOfferCollection->isEmpty()) {
            return OfferItem::make(null);
        }

        /** @var OfferItem $obOfferItem */
        $obOfferItem = $obOfferCollection->sort(OfferListStore::SORT_PRICE_ASC)->last();

        return $obOfferItem;
    }
}
