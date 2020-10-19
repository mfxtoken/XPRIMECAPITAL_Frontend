@extends('layout.layout')

@section('content')
<!-- Research Start -->
<section class="research-section section-content noheadtitle">
    <div class="container">

        <!-- Title -->
        <div class="research-sitetitle">
            <div class="sitetitle sitetitle-xl sitetitle-dark sitetitle-center sitetitle-width900">
                <h2>Economic Calendar 2020</h2>
                <p>Use our economic calendar to explore key global events on the horizon that could subtly shift or substantially shake up the financial markets.</p>
            </div>
        </div>
        <!-- Title -->

        <!-- Economic Calendar -->
        <div class="research-calendar sitetabs">
            <ul class="research-calendar-tabnav nav nav-tabs nav-space-between" role="tablist">
                <li class="nav-item"><a data-range="today" class="nav-link active" href="#" id="tab-Forex"><span>TODAY</span></a></li>
                <li class="nav-item"><a data-range="tomorrow" class="nav-link" href="#" id="tab-Commodities"><span>TOMORROW</span></a></li>
                <li class="nav-item"><a data-range="thisweek" class="nav-link" href="#" id="tab-Indices"><span>THIS WEEK</span></a></li>
                <li class="nav-item"><a data-range="nextweek" class="nav-link" href="#" id="tab-EquityCFD"><span>NEXT WEEK</span></a></li>
            </ul>
            <div class="research-calendar-currenttime">
                <p>Current Time: <span class="sitecolorcyan">08:28 GMT</span></p>
            </div>
            <div class="research-calendar-tablearea">
                <div class="table-responsive">
                    <table class="research-calendar-table sitetable hovergreentable table" id="calendarTable">
                        <thead>
                        <tr>
                            <th class="calendartable-time"><span>TIME</span></th>
                            <th class="calendartable-event"><span>EVENT</span></th>
                            <th class="calendartable-impact"><span>IMPACT</span></th>
                            <th class="calendartable-actual"><span>ACTUAL</span></th>
                            <th class="calendartable-forecast"><span>FORECAST</span></th>
                            <th class="calendartable-previous"><span>PREVIOUS</span></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="tdcolspan tablecolinfo">
                            <td colspan="7"><span>2020-08-17</span></td>
                        </tr>
                        <tr>
                            <td><span>03:00</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">Reserve Assets Total (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>904.94B</span></td>
                        </tr>
                        <tr>
                            <td><span>03:00</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">Eurogroup Meetings</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>
                        <tr>
                            <td><span>05:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">NY Empire State Manufacturing Index (Aug)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>15.00</span></td>
                            <td><span>17.20</span></td>
                        </tr>
                        <tr>
                            <td><span>05:30</span></td>
                            <td>
                                <span class="calendartd-curreny CAD">(CAD)</span>
                                <span><a href="#">Foreign Securities Purchases (Jun)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>22.41B</span></td>
                        </tr>
                        <tr>
                            <td><span>05:30</span></td>
                            <td>
                                <span class="calendartd-curreny CAD">(CAD)</span>
                                <span><a href="#">Foreign Securities Purchases by Canadians (Jun)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>13.37B</span></td>
                        </tr>
                        <tr>
                            <td><span>07:00</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">NAHB Housing Market Index (Aug)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>73</span></td>
                            <td><span>72</span></td>
                        </tr>
                        <tr>
                            <td><span>08:05</span></td>
                            <td>
                                <span class="calendartd-curreny RUB">(RUB)</span>
                                <span><a href="#">Industrial Production (YoY) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>0.8%</span></td>
                            <td><span>-6.7%</span></td>
                        </tr>
                        <tr>
                            <td><span>09:30</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">German Buba Beermann Speaks</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>
                        <tr>
                            <td><span>10:00</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">MBA Delinquency Rates (QoQ)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>4.36%</span></td>
                        </tr>
                        <tr>
                            <td><span>13:00</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">US Foreign Buying, T-bonds (Jun)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>-27.70B</span></td>
                        </tr>
                        <tr>
                            <td><span>13:00</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">Overall Net Capital Flow (Jun)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>-4.50B</span></td>
                        </tr>
                        <tr>
                            <td><span>13:00</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">TIC Net Long-Term Transactions (Jun)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>127.0B</span></td>
                        </tr>
                        <tr>
                            <td><span>13:00</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">TIC Net Long-Term Transactions including Swaps (Jun)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>93.80B</span></td>
                        </tr>
                        <tr>
                            <td><span>16:00</span></td>
                            <td>
                                <span class="calendartd-curreny JPY">(JPY)</span>
                                <span><a href="#">Reuters Tankan Index (Aug)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>-44</span></td>
                        </tr>
                        <tr>
                            <td><span>18:30</span></td>
                            <td>
                                <span class="calendartd-curreny AUD">(AUD)</span>
                                <span><a href="#">RBA Meeting Minutes</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-03 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>
                        <tr>
                            <td><span>20:00</span></td>
                            <td>
                                <span class="calendartd-curreny NZD">(NZD)</span>
                                <span><a href="#">RBNZ Offshore Holdings (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>41.40%</span></td>
                        </tr>
                        <tr>
                            <td><span>20:35</span></td>
                            <td>
                                <span class="calendartd-curreny JPY">(JPY)</span>
                                <span><a href="#">30-Year JGB Auction</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>0.612%</span></td>
                        </tr>
                        <tr class="tdcolspan tablecolinfo">
                            <td colspan="7"><span>2020-08-18</span></td>
                        </tr>
                        <tr>
                            <td><span>01:00</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">ECB's De Guindos Speaks</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>
                        <tr>
                            <td><span>03:00</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">EU Finance Ministers Meeting</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>
                        <tr>
                            <td><span>03:45</span></td>
                            <td>
                                <span class="calendartd-curreny GBP">(GBP)</span>
                                <span><a href="#">30-Year Treasury Gilt Auction</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>0.683%</span></td>
                        </tr>
                        <tr>
                            <td><span>05:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">Building Permits (MoM) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>3.5%</span></td>
                        </tr>
                        <tr>
                            <td><span>05:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">Building Permits (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-03 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>1.313M</span></td>
                            <td><span>1.258M</span></td>
                        </tr>
                        <tr>
                            <td><span>05:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">Housing Starts (MoM) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>17.3%</span></td>
                        </tr>
                        <tr>
                            <td><span>05:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">Housing Starts (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>1.237M</span></td>
                            <td><span>1.186M</span></td>
                        </tr>
                        <tr>
                            <td><span>08:05</span></td>
                            <td>
                                <span class="calendartd-curreny RUB">(RUB)</span>
                                <span><a href="#">PPI (MoM) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>0.8%</span></td>
                            <td><span>0.5%</span></td>
                        </tr>
                        <tr>
                            <td><span>08:20</span></td>
                            <td>
                                <span class="calendartd-curreny NZD">(NZD)</span>
                                <span><a href="#">GlobalDairyTrade Price Index</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>-5.1%</span></td>
                        </tr>
                        <tr>
                            <td><span>15:45</span></td>
                            <td>
                                <span class="calendartd-curreny NZD">(NZD)</span>
                                <span><a href="#">PPI Input (QoQ) (Q2)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>-0.3%</span></td>
                        </tr>
                        <tr>
                            <td><span>15:45</span></td>
                            <td>
                                <span class="calendartd-curreny NZD">(NZD)</span>
                                <span><a href="#">PPI Output (QoQ) (Q2)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>0.1%</span></td>
                        </tr>
                        <tr>
                            <td><span>16:50</span></td>
                            <td>
                                <span class="calendartd-curreny JPY">(JPY)</span>
                                <span><a href="#">Core Machinery Orders (YoY) (Jun)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>-17.6%</span></td>
                            <td><span>-16.3%</span></td>
                        </tr>
                        <tr>
                            <td><span>16:50</span></td>
                            <td>
                                <span class="calendartd-curreny JPY">(JPY)</span>
                                <span><a href="#">Core Machinery Orders (MoM) (Jun)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>2.0%</span></td>
                            <td><span>1.7%</span></td>
                        </tr>
                        <tr>
                            <td><span>16:50</span></td>
                            <td>
                                <span class="calendartd-curreny JPY">(JPY)</span>
                                <span><a href="#">Exports (YoY) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>-21.0%</span></td>
                            <td><span>-26.2%</span></td>
                        </tr>
                        <tr>
                            <td><span>16:50</span></td>
                            <td>
                                <span class="calendartd-curreny JPY">(JPY)</span>
                                <span><a href="#">Imports (YoY) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>-22.8%</span></td>
                            <td><span>-14.4%</span></td>
                        </tr>
                        <tr>
                            <td><span>16:50</span></td>
                            <td>
                                <span class="calendartd-curreny JPY">(JPY)</span>
                                <span><a href="#">Trade Balance (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>3.216B</span></td>
                        </tr>
                        <tr>
                            <td><span>16:50</span></td>
                            <td>
                                <span class="calendartd-curreny JPY">(JPY)</span>
                                <span><a href="#">Adjusted Trade Balance</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>-0.42T</span></td>
                        </tr>
                        <tr>
                            <td><span>17:30</span></td>
                            <td>
                                <span class="calendartd-curreny AUD">(AUD)</span>
                                <span><a href="#">MI Leading Index (MoM)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>0.4%</span></td>
                        </tr>
                        <tr>
                            <td><span>23:00</span></td>
                            <td>
                                <span class="calendartd-curreny GBP">(GBP)</span>
                                <span><a href="#">Core CPI MoM (MoM) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>-0.1%</span></td>
                            <td><span>0.2%</span></td>
                        </tr>
                        <tr>
                            <td><span>23:00</span></td>
                            <td>
                                <span class="calendartd-curreny GBP">(GBP)</span>
                                <span><a href="#">Core CPI (YoY) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>3.0%</span></td>
                        </tr>
                        <tr>
                            <td><span>23:00</span></td>
                            <td>
                                <span class="calendartd-curreny GBP">(GBP)</span>
                                <span><a href="#">Core PPI Output (YoY) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>0.3%</span></td>
                            <td><span>0.5%</span></td>
                        </tr>
                        <tr>
                            <td><span>23:00</span></td>
                            <td>
                                <span class="calendartd-curreny GBP">(GBP)</span>
                                <span><a href="#">Core PPI Output (MoM) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>0.1%</span></td>
                            <td><span>0.0%</span></td>
                        </tr>
                        <tr>
                            <td><span>23:00</span></td>
                            <td>
                                <span class="calendartd-curreny GBP">(GBP)</span>
                                <span><a href="#">Core RPI (MoM) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>0.2%</span></td>
                        </tr>
                        <tr>
                            <td><span>23:00</span></td>
                            <td>
                                <span class="calendartd-curreny GBP">(GBP)</span>
                                <span><a href="#">Core RPI (YoY) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>1.3%</span></td>
                        </tr>
                        <tr>
                            <td><span>23:00</span></td>
                            <td>
                                <span class="calendartd-curreny GBP">(GBP)</span>
                                <span><a href="#">CPI, n.s.a (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>108.60</span></td>
                        </tr>
                        <tr>
                            <td><span>23:00</span></td>
                            <td>
                                <span class="calendartd-curreny GBP">(GBP)</span>
                                <span><a href="#">PPI Input (YoY) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>-6.1%</span></td>
                            <td><span>-6.4%</span></td>
                        </tr>
                        <tr>
                            <td><span>23:00</span></td>
                            <td>
                                <span class="calendartd-curreny GBP">(GBP)</span>
                                <span><a href="#">PPI Input (MoM) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>1.1%</span></td>
                            <td><span>2.4%</span></td>
                        </tr>
                        <tr>
                            <td><span>23:00</span></td>
                            <td>
                                <span class="calendartd-curreny GBP">(GBP)</span>
                                <span><a href="#">PPI Output (YoY) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>-0.9%</span></td>
                            <td><span>-0.8%</span></td>
                        </tr>
                        <tr>
                            <td><span>23:00</span></td>
                            <td>
                                <span class="calendartd-curreny GBP">(GBP)</span>
                                <span><a href="#">PPI Output (MoM) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>0.2%</span></td>
                            <td><span>0.3%</span></td>
                        </tr>
                        <tr>
                            <td><span>23:00</span></td>
                            <td>
                                <span class="calendartd-curreny GBP">(GBP)</span>
                                <span><a href="#">RPI (YoY) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>1.2%</span></td>
                            <td><span>1.1%</span></td>
                        </tr>
                        <tr>
                            <td><span>23:00</span></td>
                            <td>
                                <span class="calendartd-curreny GBP">(GBP)</span>
                                <span><a href="#">RPI (MoM) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>0.1%</span></td>
                            <td><span>0.2%</span></td>
                        </tr>
                        <tr>
                            <td><span>23:00</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">German WPI (YoY) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>-3.3%</span></td>
                        </tr>
                        <tr>
                            <td><span>23:00</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">German WPI (MoM) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>0.6%</span></td>
                        </tr>
                        <tr class="tdcolspan tablecolinfo">
                            <td colspan="7"><span>2020-08-19</span></td>
                        </tr>
                        <tr>
                            <td><span>01:00</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">Current Account (Jun)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>8.0B</span></td>
                        </tr>
                        <tr>
                            <td><span>01:30</span></td>
                            <td>
                                <span class="calendartd-curreny GBP">(GBP)</span>
                                <span><a href="#">House Price Index (YoY)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>2.1%</span></td>
                        </tr>
                        <tr>
                            <td><span>01:30</span></td>
                            <td>
                                <span class="calendartd-curreny HKD">(HKD)</span>
                                <span><a href="#">Unemployment Rate (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>6.1%</span></td>
                            <td><span>6.2%</span></td>
                        </tr>
                        <tr>
                            <td><span>02:00</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">Core CPI (MoM) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>0.3%</span></td>
                        </tr>
                        <tr>
                            <td><span>02:00</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">CPI ex Tobacco (YoY) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>0.1%</span></td>
                        </tr>
                        <tr>
                            <td><span>02:00</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">CPI ex Tobacco (MoM) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>0.3%</span></td>
                        </tr>
                        <tr>
                            <td><span>02:00</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">HICP ex Energy &amp; Food (YoY) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>1.3%</span></td>
                            <td><span>1.3%</span></td>
                        </tr>
                        <tr>
                            <td><span>02:00</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">HICP ex Energy and Food (MoM) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>0.3%</span></td>
                            <td><span>0.3%</span></td>
                        </tr>
                        <tr>
                            <td><span>02:40</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">German 30-Year Bund Auction</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>-0.060%</span></td>
                        </tr>
                        <tr>
                            <td><span>04:00</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">MBA 30-Year Mortgage Rate</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>3.06%</span></td>
                        </tr>
                        <tr>
                            <td><span>04:00</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">MBA Mortgage Applications (WoW)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>6.8%</span></td>
                        </tr>
                        <tr>
                            <td><span>05:30</span></td>
                            <td>
                                <span class="calendartd-curreny CAD">(CAD)</span>
                                <span><a href="#">Wholesale Sales (MoM) (Jun)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>10.0%</span></td>
                            <td><span>5.7%</span></td>
                        </tr>
                        <tr>
                            <td><span>05:30</span></td>
                            <td>
                                <span class="calendartd-curreny CAD">(CAD)</span>
                                <span><a href="#">Common CPI (YoY)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>1.5%</span></td>
                        </tr>
                        <tr>
                            <td><span>05:30</span></td>
                            <td>
                                <span class="calendartd-curreny CAD">(CAD)</span>
                                <span><a href="#">Median CPI (YoY)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>1.9%</span></td>
                        </tr>
                        <tr>
                            <td><span>05:30</span></td>
                            <td>
                                <span class="calendartd-curreny CAD">(CAD)</span>
                                <span><a href="#">Trimmed CPI (YoY)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>1.8%</span></td>
                        </tr>
                        <tr>
                            <td><span>06:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">Seevol Cushing Storage Report</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>1.731M</span></td>
                        </tr>
                        <tr>
                            <td><span>07:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">Crude Oil Inventories</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-03 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>-4.512M</span></td>
                        </tr>
                        <tr>
                            <td><span>07:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">EIA Refinery Crude Runs (WoW)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>0.021M</span></td>
                        </tr>
                        <tr>
                            <td><span>07:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">Crude Oil Imports</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>-0.713M</span></td>
                        </tr>
                        <tr>
                            <td><span>07:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">Cushing Crude Oil Inventories</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>1.336M</span></td>
                        </tr>
                        <tr>
                            <td><span>07:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">Distillate Fuel Production</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>-0.120M</span></td>
                        </tr>
                        <tr>
                            <td><span>07:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">EIA Weekly Distillates Stocks</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>-2.322M</span></td>
                        </tr>
                        <tr>
                            <td><span>07:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">Gasoline Production</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>0.300M</span></td>
                        </tr>
                        <tr>
                            <td><span>07:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">Heating Oil Stockpiles</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>-0.230M</span></td>
                        </tr>
                        <tr>
                            <td><span>07:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">EIA Weekly Refinery Utilization Rates (WoW)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>1.4%</span></td>
                        </tr>
                        <tr>
                            <td><span>10:00</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">20-Year Bond Auction</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>1.059%</span></td>
                        </tr>
                        <tr>
                            <td><span>11:00</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">FOMC Meeting Minutes</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-03 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>
                        <tr>
                            <td><span>16:50</span></td>
                            <td>
                                <span class="calendartd-curreny JPY">(JPY)</span>
                                <span><a href="#">Foreign Bonds Buying</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>1,434.9B</span></td>
                        </tr>
                        <tr>
                            <td><span>16:50</span></td>
                            <td>
                                <span class="calendartd-curreny JPY">(JPY)</span>
                                <span><a href="#">Foreign Investments in Japanese Stocks</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>233.8B</span></td>
                        </tr>
                        <tr>
                            <td><span>18:30</span></td>
                            <td>
                                <span class="calendartd-curreny CNY">(CNY)</span>
                                <span><a href="#">PBoC Loan Prime Rate</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-03 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>3.85%</span></td>
                        </tr>
                        <tr>
                            <td><span>23:00</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">German PPI (YoY) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>-1.8%</span></td>
                            <td><span>-1.8%</span></td>
                        </tr>
                        <tr>
                            <td><span>23:00</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">German PPI (MoM) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>0.1%</span></td>
                            <td><span>0.0%</span></td>
                        </tr>
                        <tr class="tdcolspan tablecolinfo">
                            <td colspan="7"><span>2020-08-20</span></td>
                        </tr>
                        <tr>
                            <td><span>02:00</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">Construction Output (MoM) (Jun)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>27.86%</span></td>
                        </tr>
                        <tr>
                            <td><span>03:00</span></td>
                            <td>
                                <span class="calendartd-curreny GBP">(GBP)</span>
                                <span><a href="#">CBI Industrial Trends Orders (Aug)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>-46</span></td>
                        </tr>
                        <tr>
                            <td><span>03:00</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">Spanish 5-Year Bonos Auction</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>-0.194%</span></td>
                        </tr>
                        <tr>
                            <td><span>03:00</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">Spanish 10-Year Obligacion Auction</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>0.263%</span></td>
                        </tr>
                        <tr>
                            <td><span>03:00</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">Spanish 3-Year Bonos Auction</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>-0.392%</span></td>
                        </tr>
                        <tr>
                            <td><span>04:30</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">ECB Publishes Account of Monetary Policy Meeting</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-03 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>
                        <tr>
                            <td><span>05:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">Philadelphia Fed Manufacturing Index (Aug)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-03 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>20.5</span></td>
                            <td><span>24.1</span></td>
                        </tr>
                        <tr>
                            <td><span>05:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">Philly Fed Business Conditions (Aug)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>36.0</span></td>
                        </tr>
                        <tr>
                            <td><span>05:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">Philly Fed CAPEX Index (Aug)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>26.60</span></td>
                        </tr>
                        <tr>
                            <td><span>05:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">Philly Fed Employment (Aug)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>20.1</span></td>
                        </tr>
                        <tr>
                            <td><span>05:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">Philly Fed New Orders (Aug)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>23.0</span></td>
                        </tr>
                        <tr>
                            <td><span>05:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">Philly Fed Prices Paid (Aug)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>15.70</span></td>
                        </tr>
                        <tr>
                            <td><span>05:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">Continuing Jobless Claims</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>15,898K</span></td>
                            <td><span>15,486K</span></td>
                        </tr>
                        <tr>
                            <td><span>05:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">Initial Jobless Claims</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-03 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>893K</span></td>
                            <td><span>963K</span></td>
                        </tr>
                        <tr>
                            <td><span>05:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">Jobless Claims 4-Week Avg.</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>1,252.75K</span></td>
                        </tr>
                        <tr>
                            <td><span>05:30</span></td>
                            <td>
                                <span class="calendartd-curreny CAD">(CAD)</span>
                                <span><a href="#">ADP Nonfarm Employment Change</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>1,042.9K</span></td>
                        </tr>
                        <tr>
                            <td><span>07:00</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">US Leading Index (MoM) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>1.1%</span></td>
                            <td><span>2.0%</span></td>
                        </tr>
                        <tr>
                            <td><span>07:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">Natural Gas Storage</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>58B</span></td>
                        </tr>
                        <tr>
                            <td><span>08:00</span></td>
                            <td>
                                <span class="calendartd-curreny RUB">(RUB)</span>
                                <span><a href="#">GDP Monthly (YoY)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>-6.4%</span></td>
                        </tr>
                        <tr>
                            <td><span>08:05</span></td>
                            <td>
                                <span class="calendartd-curreny RUB">(RUB)</span>
                                <span><a href="#">Russian Real Wage Growth (YoY) (Jun)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>0.1%</span></td>
                            <td><span>1.0%</span></td>
                        </tr>
                        <tr>
                            <td><span>08:05</span></td>
                            <td>
                                <span class="calendartd-curreny RUB">(RUB)</span>
                                <span><a href="#">Retail Sales (YoY) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>0.1%</span></td>
                            <td><span>-1.6%</span></td>
                        </tr>
                        <tr>
                            <td><span>08:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">4-Week Bill Auction</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>0.080%</span></td>
                        </tr>
                        <tr>
                            <td><span>08:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">8-Week Bill Auction</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>0.100%</span></td>
                        </tr>
                        <tr>
                            <td><span>16:00</span></td>
                            <td>
                                <span class="calendartd-curreny AUD">(AUD)</span>
                                <span><a href="#">Manufacturing PMI</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-03 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>53.3</span></td>
                        </tr>
                        <tr>
                            <td><span>16:00</span></td>
                            <td>
                                <span class="calendartd-curreny AUD">(AUD)</span>
                                <span><a href="#">Services PMI</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-03 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>56.5</span></td>
                        </tr>
                        <tr>
                            <td><span>16:01</span></td>
                            <td>
                                <span class="calendartd-curreny GBP">(GBP)</span>
                                <span><a href="#">GfK Consumer Confidence (Aug)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>-25</span></td>
                            <td><span>-27</span></td>
                        </tr>
                        <tr>
                            <td><span>16:30</span></td>
                            <td>
                                <span class="calendartd-curreny JPY">(JPY)</span>
                                <span><a href="#">CPI, n.s.a (MoM) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>-0.1%</span></td>
                        </tr>
                        <tr>
                            <td><span>16:30</span></td>
                            <td>
                                <span class="calendartd-curreny JPY">(JPY)</span>
                                <span><a href="#">National Core CPI (YoY) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>0.1%</span></td>
                            <td><span>-0.2%</span></td>
                        </tr>
                        <tr>
                            <td><span>16:30</span></td>
                            <td>
                                <span class="calendartd-curreny JPY">(JPY)</span>
                                <span><a href="#">National CPI (YoY) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>0.1%</span></td>
                        </tr>
                        <tr>
                            <td><span>16:30</span></td>
                            <td>
                                <span class="calendartd-curreny JPY">(JPY)</span>
                                <span><a href="#">National CPI (MoM)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>0.1%</span></td>
                        </tr>
                        <tr>
                            <td><span>17:30</span></td>
                            <td>
                                <span class="calendartd-curreny JPY">(JPY)</span>
                                <span><a href="#">Manufacturing PMI (Aug)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>51.8</span></td>
                            <td><span>50.9</span></td>
                        </tr>
                        <tr>
                            <td><span>20:00</span></td>
                            <td>
                                <span class="calendartd-curreny NZD">(NZD)</span>
                                <span><a href="#">Credit Card Spending (YoY)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>-9.2%</span></td>
                        </tr>
                        <tr>
                            <td><span>23:00</span></td>
                            <td>
                                <span class="calendartd-curreny GBP">(GBP)</span>
                                <span><a href="#">Core Retail Sales (YoY) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>1.5%</span></td>
                            <td><span>1.7%</span></td>
                        </tr>
                        <tr>
                            <td><span>23:00</span></td>
                            <td>
                                <span class="calendartd-curreny GBP">(GBP)</span>
                                <span><a href="#">Core Retail Sales (MoM) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>0.2%</span></td>
                            <td><span>13.5%</span></td>
                        </tr>
                        <tr>
                            <td><span>23:00</span></td>
                            <td>
                                <span class="calendartd-curreny GBP">(GBP)</span>
                                <span><a href="#">Public Sector Net Borrowing (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>34.30B</span></td>
                            <td><span>34.80B</span></td>
                        </tr>
                        <tr>
                            <td><span>23:00</span></td>
                            <td>
                                <span class="calendartd-curreny GBP">(GBP)</span>
                                <span><a href="#">Public Sector Net Cash Requirement (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>44.033B</span></td>
                        </tr>
                        <tr>
                            <td><span>23:00</span></td>
                            <td>
                                <span class="calendartd-curreny GBP">(GBP)</span>
                                <span><a href="#">Retail Sales (MoM) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-03 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>2.3%</span></td>
                            <td><span>13.9%</span></td>
                        </tr>
                        <tr class="tdcolspan tablecolinfo">
                            <td colspan="7"><span>2020-08-21</span></td>
                        </tr>
                        <tr>
                            <td><span>00:15</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">French Manufacturing PMI (Aug)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>53.0</span></td>
                            <td><span>52.4</span></td>
                        </tr>
                        <tr>
                            <td><span>00:15</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">French Markit Composite PMI (Aug)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>57.3</span></td>
                        </tr>
                        <tr>
                            <td><span>00:15</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">French Services PMI (Aug)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>56.0</span></td>
                            <td><span>57.3</span></td>
                        </tr>
                        <tr>
                            <td><span>00:30</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">German Composite PMI (Aug)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>55.7</span></td>
                            <td><span>55.3</span></td>
                        </tr>
                        <tr>
                            <td><span>00:30</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">German Manufacturing PMI (Aug)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-03 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>52.5</span></td>
                            <td><span>51.0</span></td>
                        </tr>
                        <tr>
                            <td><span>00:30</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">German Services PMI (Aug)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>55.5</span></td>
                            <td><span>55.6</span></td>
                        </tr>
                        <tr>
                            <td><span>01:00</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">Spanish Trade Balance</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>0.12B</span></td>
                        </tr>
                        <tr>
                            <td><span>01:00</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">Markit Composite PMI (Aug)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>50.3</span></td>
                        </tr>
                        <tr>
                            <td><span>01:00</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">Services PMI (Aug)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>51.0</span></td>
                            <td><span>50.0</span></td>
                        </tr>
                        <tr>
                            <td><span>01:30</span></td>
                            <td>
                                <span class="calendartd-curreny GBP">(GBP)</span>
                                <span><a href="#">Composite PMI</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-03 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>57.0</span></td>
                        </tr>
                        <tr>
                            <td><span>05:30</span></td>
                            <td>
                                <span class="calendartd-curreny CAD">(CAD)</span>
                                <span><a href="#">Core Retail Sales (MoM) (Jun)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-03 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>15.0%</span></td>
                            <td><span>10.6%</span></td>
                        </tr>
                        <tr>
                            <td><span>05:30</span></td>
                            <td>
                                <span class="calendartd-curreny CAD">(CAD)</span>
                                <span><a href="#">New Housing Price Index (MoM) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>0.1%</span></td>
                            <td><span>0.1%</span></td>
                        </tr>
                        <tr>
                            <td><span>06:30</span></td>
                            <td>
                                <span class="calendartd-curreny BRL">(BRL)</span>
                                <span><a href="#">Federal Tax Revenue</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>86.30B</span></td>
                        </tr>
                        <tr>
                            <td><span>07:00</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">Existing Home Sales (MoM) (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>14.8%</span></td>
                            <td><span>20.7%</span></td>
                        </tr>
                        <tr>
                            <td><span>07:00</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">Existing Home Sales (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-03 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>5.39M</span></td>
                            <td><span>4.72M</span></td>
                        </tr>
                        <tr>
                            <td><span>07:00</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">Consumer Confidence (Aug)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>-15.0</span></td>
                            <td><span>-15.0</span></td>
                        </tr>
                        <tr class="tdcolspan tablecolinfo">
                            <td colspan="7"><span>2020-08-23</span></td>
                        </tr>
                        <tr>
                            <td><span>15:45</span></td>
                            <td>
                                <span class="calendartd-curreny NZD">(NZD)</span>
                                <span><a href="#">Retail Sales (QoQ) (Q2)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>-0.7%</span></td>
                        </tr>
                        <tr>
                            <td><span>15:45</span></td>
                            <td>
                                <span class="calendartd-curreny NZD">(NZD)</span>
                                <span><a href="#">Retail Sales Quarterly Vs. Year Ago (Q2)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>2.3%</span></td>
                        </tr>
                        <tr class="tdcolspan tablecolinfo">
                            <td colspan="7"><span>2020-08-24</span></td>
                        </tr>
                        <tr>
                            <td><span>04:00</span></td>
                            <td>
                                <span class="calendartd-curreny BRL">(BRL)</span>
                                <span><a href="#">FGV Consumer confidence (Aug)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>78.8</span></td>
                        </tr>
                        <tr>
                            <td><span>05:30</span></td>
                            <td>
                                <span class="calendartd-curreny USD">(USD)</span>
                                <span><a href="#">Chicago Fed National Activity (Jul)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-01 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>4.11</span></td>
                        </tr>
                        <tr>
                            <td><span>23:00</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">German GDP (QoQ) (Q2)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-03 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>-2.2%</span></td>
                            <td><span>-10.1%</span></td>
                        </tr>
                        <tr>
                            <td><span>23:00</span></td>
                            <td>
                                <span class="calendartd-curreny EUR">(EUR)</span>
                                <span><a href="#">German GDP (YoY) (Q2)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span>-1.9%</span></td>
                            <td><span>-11.7%</span></td>
                        </tr>
                        <tr>
                            <td><span>23:30</span></td>
                            <td>
                                <span class="calendartd-curreny CHF">(CHF)</span>
                                <span><a href="#">Employment Level (Q2)</a></span>
                            </td>
                            <td><div class="calendarimpact calendarimpact-02 progress"><div class="progress-bar" role="progressbar"></div></div></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span>5.102M</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Economic Calendar -->

    </div>
</section>
<!-- Research End -->

<x-common-about-us/>
@endsection
