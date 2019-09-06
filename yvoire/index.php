<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("YVOIRE");
?>
    <script>
        $(function () {
            productLoader.init();
            var curTab = location.href.split("?")[1];
            switch (curTab) {
                case "01":
                    $(".yvoire_view .tab_list ul li").removeClass("active");
                    $(".yvoire_view .tab_list ul li").eq(0).addClass("active");
                    $(".yvoire_view .yvoire").removeClass("blind");
                    $(".yvoire_view .solution").addClass("blind");
                    break;
                case "02":
                    $(".yvoire_view .tab_list ul li").removeClass("active");
                    $(".yvoire_view .tab_list ul li").eq(1).addClass("active");
                    $(".yvoire_view .yvoire").addClass("blind");
                    $(".yvoire_view .solution").removeClass("blind");
                    break;
                default:
                    break;
            }
        });
    </script>

    <!-- container -->
    <div class="container subPage ctx_yvoire">
        <!-- sub visual -->
        <div class="sub_visual">
            <div class="visual_content">
                <div class="inner">
                    <h2>Product</h2>
                    <h3>Various properties provide a complete treatment.</h3>
                    <span class="page_navi left"><a href="/whyyvoire/"><img
                                    src="/local/templates/yvoire/images/icon/page_navigator_left.png" alt="LEFT PAGE"/></a></span>
                    <span class="page_navi right"><a href="/review/"><img
                                    src="/local/templates/yvoire/images/icon/page_navigator_right.png"
                                    alt="RIGHT PAGE"/></a></span>
                </div>
            </div>
        </div>
        <!-- //sub visual -->
        <!-- contents -->
        <div class="contents">
            <!-- location -->
            <div class="location">
                <div class="inner">
                    <div>
                        <ul>
                            <li class="home"><img src="/local/templates/yvoire/images/icon/location.png" alt="home"/>
                            </li>
                            <li><p>YVOIRE</p></li>
                            <li class="step"><p>></p></li>
                            <li><p>YVOIRE PRODUCTS</p></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- //location -->
            <div class="yvoire_view">
                <div class="inner">
                    <div class="tab_list">
                        <ul>
                            <li class="active"><a href="javascript:;">YVOIRE</a></li>
                            <li><a href="javascript:;">Y-SOLUTION</a></li>
                        </ul>
                    </div>
                    <div class="listbox yvoire">
                        <p class="tit">YVOIRE<span class="suffix">Ⓡ</span> Products</p>
                        <!-- <p class="subtit">YVOIREⓇ provides diverse product options meeting the needs of doctors and patients</p>-->
                        <div class="tbl_list classic">
                            <table>
                                <tbody>
                                <tr>
                                    <td colspan="3">
                                        <img src="/local/templates/yvoire/images/sub/yvoire/product_list00.jpg"
                                             alt="classic product" class="pc"/>
                                        <img src="/local/templates/yvoire/images/sub/yvoire/product_mlist00.jpg"
                                             alt="classic product" class="mobile"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Practical uses</p></td>
                                    <td colspan="2"><p>Fine wrinkle correction & Volumizing</p></td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Relative HA particle size</p></td>
                                    <td colspan="2">
                                        <p>Cross-linked HA
                                            <span class="small"></span>
                                            <span class="medium"></span>
                                            <span class="large"></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Lidocaine</p></td>
                                    <td colspan="2"><p class="tRight">0.3% lidocaine</p></td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Enclosed needles</p></td>
                                    <td colspan="2"><p>30 G, 27 G</p></td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Volume per syringe</p></td>
                                    <td><p>1ml</p></td>
                                    <td><p>1ml</p></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tbl_list volume">
                            <table>
                                <tbody>
                                <tr>
                                    <td colspan="3">
                                        <img src="/local/templates/yvoire/images/sub/yvoire/product_list01.jpg"
                                             alt="classic product" class="pc"/>
                                        <img src="/local/templates/yvoire/images/sub/yvoire/product_mlist01.jpg"
                                             alt="classic product" class="mobile"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Practical uses</p></td>
                                    <td colspan="2"><p>Deep wrinkle correction & Volumizing</p></td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Relative HA particle size</p></td>
                                    <td colspan="2">
                                        <p>
                                            Cross-linked HA
                                            <span class="small"></span>
                                            <span class="medium"></span>
                                            <span class="large"></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Lidocaine</p></td>
                                    <td colspan="2"><p class="tRight">0.3% lidocaine</p></td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Enclosed needles</p></td>
                                    <td colspan="2"><p>27 G</p></td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Volume per syringe</p></td>
                                    <td><p>1ml</p></td>
                                    <td><p>1ml</p></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tbl_list contour">
                            <table>
                                <tbody>
                                <tr>
                                    <td colspan="3">
                                        <img src="/local/templates/yvoire/images/sub/yvoire/product_list02.jpg"
                                             alt="classic product" class="pc"/>
                                        <img src="/local/templates/yvoire/images/sub/yvoire/product_mlist02.jpg"
                                             alt="classic product" class="mobile"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Practical uses</p></td>
                                    <td colspan="2"><p>Volumizing & Contouring</p></td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Relative HA particle size</p></td>
                                    <td colspan="2">
                                        <p>
                                            Cross-linked HA
                                            <span class="small"></span>
                                            <span class="medium"></span>
                                            <span class="large"></span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Lidocaine</p></td>
                                    <td colspan="2"><p class="tRight">0.3% lidocaine</p></td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Enclosed needles</p></td>
                                    <td><p>21G, 23G</p></td>
                                    <td><p>23G, 23G cannula</p></td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Volume per syringe</p></td>
                                    <td><p>2ml</p></td>
                                    <td><p>1ml</p></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="warn_txt">* YVOIRE is composed of 3 step product line according to difference of
                            physical properties</p>
                    </div>
                    <div class="listbox solution blind">
                        <p class="tit">Y-Solution<span class="suffix">TM</span> Products</p>
                        <p class="subtit">Y-Solution expresses the new property of Yvoire® with high elasticity and
                            cohesiveness.</p>
                        <p class="subtit">The Y in Y-Solution stands for You, Young, and Youth, and Solution signifying
                            the solution for anti-aging.</p>
                        <p class="subtit">Y-Solution is divided into three steps of product line-up [360-540-720]
                            depending on the different property.</p>
                        <div class="tbl_list pc">
                            <table>
                                <tbody>
                                <tr>
                                    <td colspan="4">
                                        <img src="/local/templates/yvoire/images/sub/yvoire/solution00.jpg"
                                             alt="classic product"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Ingredients</p></td>
                                    <td><p>Cross-linked Hyaluronic Acid</p></td>
                                    <td><p>Cross-linked Hyaluronic Acid</p></td>
                                    <td><p>Cross-linked Hyaluronic Acid</p></td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>HA content</p></td>
                                    <td><p>12 mg/mL</p></td>
                                    <td><p>20 mg/mL</p></td>
                                    <td><p>20 mg/mL</p></td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Lidocaine content</p></td>
                                    <td><p>0.3%</p></td>
                                    <td><p>0.3%</p></td>
                                    <td><p>0.3%</p></td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Volume</p></td>
                                    <td><p>1 mL</p></td>
                                    <td><p>1 mL</p></td>
                                    <td><p>1 mL</p></td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Enclosed needle</p></td>
                                    <td><p>Terumo TW 29GX2</p></td>
                                    <td><p>Terumo TW 27GX2</p></td>
                                    <td><p>Terumo TW 27GX2</p></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tbl_list mobile">
                            <table>
                                <tbody>
                                <tr>
                                    <td colspan="3">
                                        <img src="/local/templates/yvoire/images/sub/yvoire/solution01.jpg"
                                             alt="SOLUTION PRODUCT"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Ingredients</p></td>
                                    <td colspan="2"><p>Cross-linked Hyaluronic Acid</p></td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>HA content</p></td>
                                    <td colspan="2"><p>12 mg/mL</p></td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Lidocaine content</p></td>
                                    <td colspan="2"><p>0.3%</p></td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Volume</p></td>
                                    <td colspan="2"><p>1 mL</p></td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Enclosed needle</p></td>
                                    <td colspan="2"><p>Terumo TW 29GX2</p></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tbl_list mobile">
                            <table>
                                <tbody>
                                <tr>
                                    <td colspan="3">
                                        <img src="/local/templates/yvoire/images/sub/yvoire/solution02.jpg"
                                             alt="SOLUTION PRODUCT"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Ingredients</p></td>
                                    <td colspan="2"><p>Cross-linked Hyaluronic Acid</p></td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>HA content</p></td>
                                    <td colspan="2"><p>20 mg/mL</p></td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Lidocaine content</p></td>
                                    <td colspan="2"><p>0.3%</p></td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Volume</p></td>
                                    <td colspan="2"><p>1 mL</p></td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Enclosed needle</p></td>
                                    <td colspan="2"><p>Terumo TW 27GX2</p></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tbl_list mobile">
                            <table>
                                <tbody>
                                <tr>
                                    <td colspan="3">
                                        <img src="/local/templates/yvoire/images/sub/yvoire/solution03.jpg"
                                             alt="SOLUTION PRODUCT"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Ingredients</p></td>
                                    <td colspan="2"><p>Cross-linked Hyaluronic Acid</p></td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>HA content</p></td>
                                    <td colspan="2"><p>20 mg/mL</p></td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Lidocaine content</p></td>
                                    <td colspan="2"><p>0.3%</p></td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Volume</p></td>
                                    <td colspan="2"><p>1 mL</p></td>
                                </tr>
                                <tr>
                                    <td class="tit"><p>Enclosed needle</p></td>
                                    <td colspan="2"><p>Terumo TW 27GX2</p></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- <p class="warn_txt">* Y-solution<span>TM</span> is composed of 3 step product line according to difference of physical properties</p>-->
                        <p class="warn_txt">* All Y-Solution product has 0.3% lidocaine.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- //contents -->
    </div>
    <!-- //container -->

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>