<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LayoutTicker extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $marketPrices;
    public $cryptoPrices;
    public function __construct()
    {
        $this->marketPrices = getMarketPrices();
        $this->cryptoPrices = getCryptoPrices();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.layout-ticker');
    }
}
