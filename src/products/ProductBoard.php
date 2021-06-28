<?php

namespace demo\products;

use \koolreport\dashboard\Dashboard;

use \koolreport\dashboard\containers\Row;
use \koolreport\dashboard\containers\Panel;
use \koolreport\dashboard\widgets\Text;
use \koolreport\dashboard\widgets\StateHolder;

use \koolreport\dashboard\menu\MenuItem;
use \koolreport\dashboard\Client;

class ProductBoard extends Dashboard
{

    protected function widgets()
    {
        return [
            Row::create()->sub([
                Panel::create()
                ->header("<b>Product By Line</b>")
                ->type("primary")
                ->sub([
                    Text::create()
                        ->text("<p style='font-style:italic'>Click to chart to view the detail list of that product</p>")
                        ->asHtml(true),
                    ProductByLine::create()
                        ->detailShowable(true)
                        ->pdfExportable(true),
                ])
                ->menu([
                    "See details"=>MenuItem::create()
                        ->onClick(Client::widget("ProductByLine")->showDetail()),
                    "Export to PDF"=>MenuItem::create()
                    ->onClick(Client::widget("ProductByLine")->exportToPDF())
                ])
                ->width(1/3),
                
                Panel::create()
                ->header("<b>Product List</b>")
                ->type("warning")
                ->sub([
                    Text::create("guide")->text(function(){
                        $selectedProductLine = $this->dashboard()->widget("ProductByLine")->selectedProductLine();
                        if($selectedProductLine!==null) {
                            return "<p>List of <b>$selectedProductLine</b> products</p>";
                        }
                        return null;
                    })->asHtml(true),
                    ProductTable::create(),
                ])
            ]),
        ];
    }
}