<?php

namespace demo\apexcharts;

use \koolreport\dashboard\widgets\apexcharts\HeatMapChart;
use \koolreport\dashboard\fields\Text;
use \koolreport\dashboard\fields\Currency;
use \koolreport\dashboard\ColorList;

use  \demo\AutoMaker;

class HeatMapChartDemo extends HeatMapChart
{
    protected function onInit()
    {
        $this
        ->settings([
            "title" => "HeatMap Chart with Color Range",
            "autoCategoryColumn" => "numeric",
            'widthHeightAutoRatio' => 1.9,
            'strokeWidth' => 1,
        ])
        ->colorScheme(ColorList::random())
        ;
    }

    protected function dataSource()
    {
        return [
            [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep"
            ],
            [
                -30,
                15,
                2,
                55,
                36,
                18,
                40,
                37,
                5
            ],
            [
                15,
                42,
                -8,
                -14,
                -8,
                26,
                15,
                -20,
                -30
            ],
            [
                33,
                33,
                0,
                28,
                27,
                -25,
                -20,
                0,
                0
            ],
            [
                -8,
                -24,
                25,
                4,
                48,
                12,
                4,
                -11,
                16
            ],
            [
                2,
                16,
                1,
                7,
                10,
                9,
                -19,
                -5,
                -14
            ],
            [
                -14,
                -19,
                -26,
                34,
                7,
                -30,
                39,
                -16,
                44
            ],
            [
                53,
                44,
                15,
                -15,
                49,
                30,
                3,
                52,
                48
            ],
            [
                14,
                9,
                -17,
                39,
                10,
                3,
                -24,
                32,
                52
            ],
            [
                15,
                10,
                9,
                39,
                54,
                8,
                21,
                20,
                38
            ],
            [
                -8,
                8,
                -2,
                -22,
                -3,
                50,
                -2,
                14,
                -10
            ],
            [
                -21,
                -10,
                -14,
                -28,
                38,
                -20,
                -9,
                12,
                13
            ],
            [
                40,
                -29,
                -25,
                -19,
                44,
                6,
                3,
                1,
                -14
            ],
            [
                47,
                -29,
                54,
                24,
                33,
                -5,
                -3,
                -5,
                44
            ],
            [
                8,
                55,
                16,
                2,
                17,
                5,
                23,
                3,
                39
            ],
            [
                -9,
                48,
                -23,
                -9,
                41,
                -10,
                -13,
                5,
                54
            ],
            [
                -9,
                37,
                55,
                13,
                15,
                1,
                -6,
                6,
                -1
            ],
            [
                -14,
                19,
                7,
                14,
                -4,
                31,
                55,
                -3,
                24
            ],
            [
                -3,
                36,
                30,
                -22,
                -1,
                50,
                -14,
                0,
                28
            ],
            [
                -22,
                23,
                -14,
                54,
                -4,
                -29,
                26,
                -21,
                46
            ],
            [
                39,
                -1,
                16,
                -1,
                8,
                11,
                14,
                32,
                -20
            ]
        ];
    }

    protected function fields()
    {
        return [
            Text::create('Jan'),
            Text::create('Feb'),
            Text::create('Mar'),
            Text::create('Apr'),
            Text::create('May'),
            Text::create('Jun'),
            Text::create('Jul'),
            Text::create('Aug'),
            Text::create('Sep'),
        ];
    }
}