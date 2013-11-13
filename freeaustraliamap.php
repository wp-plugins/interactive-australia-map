<?php
/*
Plugin Name: Interactive Australia Map
Plugin URI: http://fla-shop.com
Description: Free WordPress plugin for embedding an interactive map of Australia with clickable states. Easy to install and configure. To get started: 1) Click the "Activate" link to the left of this description, 2) Edit the map settings, and 3) After that, insert the shortcode <strong>[freeaustraliamap01]</strong> into the text of a page or a post where you want the map to be.
Version: 1.0
Author: Fla-shop.com
Author URI: http://fla-shop.com
License: GPLv2 or later
*/

add_action('admin_menu', 'free_australia_map_plugin_menu');

function free_australia_map_plugin_menu() {

    add_menu_page(__('Australia Map Settings','free-australia-html5-map'), __('Australia Map Settings','free-australia-html5-map'), 'manage_options', 'free-australia-map-plugin-options', 'free_australia_map_plugin_options' );

    add_submenu_page('free-australia-map-plugin-options', __('Detailed settings','free-australia-html5-map'), __('Detailed settings','free-australia-html5-map'), 'manage_options', 'free-australia-map-plugin-states', 'free_australia_map_plugin_states');
    add_submenu_page('free-australia-map-plugin-options', __('Map Preview','free-australia-html5-map'), __('Map Preview','free-australia-html5-map'), 'manage_options', 'free-australia-map-plugin-view', 'free_australia_map_plugin_view');

}

function free_australia_map_plugin_options() {
    include('editmainconfig.php');
}

function free_australia_map_plugin_states() {
    include('editstatesconfig.php');
}

function free_australia_map_plugin_view() {
    ?>
    <h1>Map Preview</h1>

    <?php

    echo free_australia_map_plugin_content('[freeaustraliamap01]');

    ?>
        <h2>Installation</h2>

        Insert the tag <strong>[freeaustraliamap01]</strong> into the text of a page or a post where you want the map to be..<br />
<hr width="90%" color="#dfdfdf" align=left noshade size="1">
        <h2>Try our PREMIUM plugins</h2>

		Improve your website with premium map plugin. <a href="http://www.fla-shop.com/products/wp-plugins/oceania/au/" target="_blank">Buy Now and Save Money!</a>
<table>
<tr>
<td width="110">
<a href="http://www.fla-shop.com/products/wp-plugins/oceania/au/" target="_blank"><img src="data:image/jpg;base64,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"></a>
</td>
</tr>       
</table>

        <div class="map-vendor-info" style="margin: 30px 10px 20px 10px;">

        </div>
    <?php
}

add_action('admin_init','free_australia_map_plugin_scripts');

function free_australia_map_plugin_scripts(){
    if ( is_admin() ){

        wp_register_style('jquery-tipsy', plugins_url('/static/css/tipsy.css', __FILE__));
        wp_enqueue_style('jquery-tipsy');
        wp_register_style('free-australia-html5-mapadm', plugins_url('/static/css/mapadm.css', __FILE__));
        wp_enqueue_style('free-australia-html5-mapadm');
        wp_enqueue_style('farbtastic');
        wp_enqueue_script('jquery-ui-core');
        wp_enqueue_script('farbtastic');
        wp_enqueue_script('tiny_mce');
        wp_register_script('jquery-tipsy', plugins_url('/static/js/jquery.tipsy.js', __FILE__));
        wp_enqueue_script('jquery-tipsy');
        wp_enqueue_style('thickbox');
        wp_enqueue_script('thickbox');

    }
    else {

    }
}

add_action('wp_enqueue_scripts', 'free_australia_map_plugin_scripts_method');

function free_australia_map_plugin_scripts_method() {
    wp_enqueue_script('jquery');
}

add_filter('the_content', 'free_australia_map_plugin_content', 15);

function free_australia_map_plugin_content($content) {

    $dir = WP_PLUGIN_URL.'/interactive-australia-map/static/';
    $siteURL = get_site_url();

    $fontSize = get_option('freefreeaustraliahtml5map_nameFontSize', '11');
    $fontColor = get_option('freefreeaustraliahtml5map_nameColor', '#000');
    $freeMapData = get_option('freefreeaustraliahtml5map_map_data', '{}');
    $freeMapDataJ = json_decode($freeMapData, true);

    foreach($freeMapDataJ as $k=>$v) {
        if($v['link'] == '') {
            $freeMapDataJ[$k]['link'] = '#';
            $freeMapDataJ[$k]['target'] = '';
        }
        else {
            $freeMapDataJ[$k]['target'] = '_blank';
        }

    }

    $mapInit = "
        <div class='freeaustraliaHtmlMapbottom'>
            <style>
            .over-area {
                z-index: 1;
                background-image: url('{$dir}img/aus.png');
                width: 1px;
                height: 1px;
                position: absolute;
            }

            .freefreeaustralia1.over-area { background-position: 0px -471px; height: 36px; left: 410px; top: 329px; width: 78px; }
            .freefreeaustralia2.over-area { background-position: 0px -608px; height: 133px; left: 328px; top: 241px; width: 162px; }
            .freefreeaustralia3.over-area { background-position: -194px -471px; height: 206px; left: 189px; top: 9px; width: 128px; }
            .freefreeaustralia4.over-area { background-position: 0px -741px; height: 262px; left: 299px; top: 6px; width: 196px; }
            .freefreeaustralia5.over-area { background-position: 0px -1003px; height: 173px; left: 194px; top: 200px; width: 155px; }
            .freefreeaustralia6.over-area { background-position: -365px -491px; height: 63px; left: 361px; top: 387px; width: 53px; }
            .freefreeaustralia7.over-area { background-position: 0px -524px; height: 84px; left: 324px; top: 306px; width: 109px; }
            .freefreeaustralia8.over-area { background-position: -211px -698px; height: 299px; left: 9px; top: 46px; width: 202px; }

            #toolTip {
                display: none;
                position: absolute;
                z-index: 4 ;
                min-width:250px;
            }
            body .ToolTipFrameClass {
                background-color: #fff;
                border: 2px solid #bbb;
                border-radius: 10px;
                padding: 5px;
                opacity: .90;
                max-width: 300px;
                border-collapse: separate;
            /* test */
                line-height: 15px;
                margin: 0;
            }
            .ToolTipFrameClass TD {
                background-color:inherit;
            /* test */
                padding: 0px;
                margin: 0px;
                border:0px none;
                vertical-align: top;
            }

            .ToolTipFrameClass TD:last-child {
                padding-left: 5px;
            }

            .toolTipCommentClass {
                font-size: 11px;
                font-family: arial;
                color: #000000;
            }
            body #toolTipName {
                color: {$fontColor};
                text-shadow: -1px 0 white, 0 1px white, 1px 0 white, 0 -1px white;
                font-size: {$fontSize};
                font-weight:bold;
                padding: 5px;
                font-family: arial;
                margin: 0px;
            }
            </style>
            <script>
                var IsIE		= navigator.userAgent.indexOf(\"MSIE\")		!= -1;
                var freeMapData = {$freeMapData};
                function moveToolTipFree(e) {
                    var elementToolTip = document.getElementById(\"toolTip\");
                    var	floatTipStyle = elementToolTip.style;
                    var	X;
                    var	Y;
                    if (IsIE){
                        if(e) {
                            X = e.layerX - document.documentElement.scrollLeft;
                            Y = e.layerY - document.documentElement.scrollTop;
                        }
                        else {
                            X = window.event.x;
                            if(prevX != 0 && X - prevX > 100) {
                                X = prevX;
                            }
                            prevX = X;

                            Y = window.event.y;
                            if(prevY != 0 && Y - prevY > 100) {
                                Y = prevY;
                            }
                            prevY = Y;
                        }
                    }else{
                        X = e.layerX;
                        Y = e.layerY;
                    };

                    if( X+Y > 0 ) {
                        floatTipStyle.left = X + \"px\";
                        floatTipStyle.top = Y + 20 + \"px\";
                    }
                };

                function toolTipFree(img, msg, name, linkUrl, linkName, isLink) {
                    var	floatTipStyle = document.getElementById(\"toolTip\").style;

                    if (msg || name) {

                        if (name){
                            document.getElementById(\"toolTipName\").innerHTML = name;
                            document.getElementById(\"toolTipName\").style.display = \"block\";
                        } else {
                            document.getElementById(\"toolTipName\").style.display = \"none\";
                        };

                        if (msg) {
                            var repReg = new RegExp(String.fromCharCode(13), 'g')
                            var repReg2 = new RegExp(\"\\r\\n\", 'g')
                            var repReg3 = new RegExp(\"\\n\", 'g')
                            document.getElementById(\"toolTipComment\").innerHTML = msg.replace(repReg2,\"<br>\").replace(repReg3,\"<br>\").replace(repReg,\"<br>\");
                            document.getElementById(\"ToolTipFrame\").style.display = \"block\";
                        } else {
                            document.getElementById(\"ToolTipFrame\").style.display = \"none\";
                        };

                        if (img){
                            document.getElementById(\"toolTipImage\").innerHTML = \"<img src='\" + img + \"'>\";
                        } else{
                            document.getElementById(\"toolTipImage\").innerHTML = \"\";
                        };

                        floatTipStyle.display = \"block\";
                    } else {
                        floatTipStyle.display = \"none\";
                    }
                };


                function freeaustraliaMapIn(num) {
                    var el = document.getElementById('freeaustralia-over-area');
                    el.className = 'freefreeaustralia'+num+' over-area';

                    var areaData = freeMapData['st'+num];

                    toolTipFree(areaData.image, areaData.comment, areaData.name, areaData.link);
                }

                function freeaustraliaMapOut() {
                    var el = document.getElementById('freeaustralia-over-area');
                    el.className = 'over-area';

                    toolTipFree();
                }
            </script>
            <script type='text/javascript' src='{$siteURL}/index.php?freefreeaustraliamap_js_data=true'></script>
            <div style=\"position: relative\">
                <div id=\"toolTip\"><table id=\"ToolTipFrame\" class=\"ToolTipFrameClass\"><tr id=\"ToolTipFrame\" class=\"ToolTipFrameClass\" valign=\"top\"><td id=\"toolTipImage\"></td><td id=\"toolTipComment\" class=\"toolTipCommentClass\"></td></tr></table><div id=\"toolTipName\"></div></div>
                <div style=\"width: 500px; height: 449px; background-image: url('{$dir}img/aus.png')\"></div>
                <img style=\"position: absolute; top: 0; left: 0; z-index: 2;\" width=\"500\" height=\"449\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\" usemap=\"#us_imageready_Map\" border=0 />
                <map onmousemove='moveToolTipFree(event);' name=\"us_imageready_Map\">
                    <area onmouseover=\"freeaustraliaMapIn(1)\" onmouseout=\"freeaustraliaMapOut()\" shape=\"poly\" alt=\"div1\" coords=\"417,338, 420,333, 425,335, 425,338, 423,341, 422,344, 443,344, 443,341, 444,338, 448,335, 476,335, 479,336, 481,338, 482,341, 482,354, 481,356, 479,358, 478,359, 447,359, 445,357, 443,355, 443,344, 422,344, 422,347, 417,347, 415,341\" target='{$freeMapDataJ['st1']['target']}' a href=\"{$freeMapDataJ['st1']['link']}\">
                    <area onmouseover=\"freeaustraliaMapIn(2)\" onmouseout=\"freeaustraliaMapOut()\" shape=\"poly\" alt=\"div2\" coords=\"484,251, 480,268, 476,280, 472,293, 464,303, 463,308, 458,311, 448,322, 444,331, 437,340, 434,344, 430,344, 422,344, 423,341, 425,338, 425,335, 420,333, 415,341, 417,347, 422,347, 422,344, 434,344, 431,352, 429,360, 428,368, 409,354, 408,344, 404,344, 399,345, 395,343, 391,343, 386,342, 382,338, 377,338, 377,343, 374,343, 369,338, 365,332, 360,328, 361,324, 354,320, 354,324, 350,318, 347,313, 342,315, 335,312, 339,247, 430,255, 437,250, 442,251, 445,251, 450,253, 453,254, 457,259, 460,257, 464,260, 465,253, 470,251, 476,253\" target='{$freeMapDataJ['st2']['target']}' a href=\"{$freeMapDataJ['st2']['link']}\">
                    <area onmouseover=\"freeaustraliaMapIn(3)\" onmouseout=\"freeaustraliaMapOut()\" shape=\"poly\" alt=\"div3\" coords=\"195,65, 203,50, 211,45, 215,34, 203,21, 219,18, 236,15, 250,23, 270,27, 283,26, 294,27, 302,34, 294,45, 299,55, 290,59, 284,57, 281,64, 290,70, 294,77, 301,77, 308,84, 306,207, 201,207\" target='{$freeMapDataJ['st3']['target']}' a href=\"{$freeMapDataJ['st3']['link']}\">
                    <area onmouseover=\"freeaustraliaMapIn(4)\" onmouseout=\"freeaustraliaMapOut()\" shape=\"poly\" alt=\"div4\" coords=\"306,207, 308,84, 320,89, 326,90, 335,101, 347,97, 354,73, 355,55, 355,43, 358,27, 373,8, 375,26, 384,43, 383,55, 384,61, 391,58, 404,72, 405,90, 413,98, 413,126, 434,137, 447,155, 459,174, 463,182, 467,194, 484,212, 484,235, 484,251, 476,253, 470,251, 465,253, 464,260, 460,257, 457,259, 453,254, 444,251, 441,251, 437,250, 430,255, 339,248, 342,207\" target='{$freeMapDataJ['st4']['target']}' a href=\"{$freeMapDataJ['st4']['link']}\">
                    <area onmouseover=\"freeaustraliaMapIn(5)\" onmouseout=\"freeaustraliaMapOut()\" shape=\"poly\" alt=\"div5\" coords=\"203,281, 200,207, 342,207, 335,312, 331,368, 320,355, 320,344, 312,333, 298,338, 289,338, 284,332, 278,321, 274,311, 268,303, 262,296, 261,292, 251,289, 248,286, 242,285, 234,280, 216,280\" target='{$freeMapDataJ['st5']['target']}' a href=\"{$freeMapDataJ['st5']['link']}\">
                    <area onmouseover=\"freeaustraliaMapIn(6)\" onmouseout=\"freeaustraliaMapOut()\" shape=\"poly\" alt=\"div6\" coords=\"369,400, 377,405, 383,409, 388,408, 395,406, 399,404, 402,392, 406,392, 406,403, 403,408, 403,416, 403,421, 400,426, 398,432, 395,435, 389,438, 386,442, 382,443, 379,441, 375,439, 371,432, 370,423, 367,415, 367,404\" target='{$freeMapDataJ['st6']['target']}' a href=\"{$freeMapDataJ['st6']['link']}\">
                    <area onmouseover=\"freeaustraliaMapIn(7)\" onmouseout=\"freeaustraliaMapOut()\" shape=\"poly\" alt=\"div7\" coords=\"331,368, 335,312, 342,315, 347,313, 354,325, 354,320, 361,324, 360,328, 365,332, 374,343, 377,343, 377,338, 382,338, 386,342, 390,343, 395,343, 400,345, 405,344, 408,344, 409,354, 428,368, 421,372, 409,372, 395,379, 391,382, 386,383, 379,377, 373,368, 365,373, 360,379, 354,377, 348,373\" target='{$freeMapDataJ['st7']['target']}' a href=\"{$freeMapDataJ['st7']['link']}\">
                    <area onmouseover=\"freeaustraliaMapIn(8)\" onmouseout=\"freeaustraliaMapOut()\" shape=\"poly\" alt=\"div8\" coords=\"39,158, 50,149, 61,150, 78,138, 92,136, 105,126, 109,117, 112,112, 112,98, 121,90, 154,61, 169,50, 183,60, 195,64, 203,281, 194,289, 173,291, 154,302, 148,315, 123,316, 109,320, 97,331, 90,336, 77,338, 59,331, 54,321, 59,317, 59,298, 45,276, 46,268, 35,252, 28,238, 18,231, 24,225, 22,211, 17,207, 15,197, 19,190, 15,181, 20,168, 23,175, 31,165\" target='{$freeMapDataJ['st8']['target']}' a href=\"{$freeMapDataJ['st8']['link']}\">
                </map>
                <div id=\"freeaustralia-over-area\" class=\"over-area\"></div>
            </div>
            <div style='clear: both'></div>
		</div>
		<script>
		    toolTipFree();
		</script>
    ";

    $content = str_ireplace(array(
        '<freeaustraliamap01></freeaustraliamap01>',
        '<freeaustraliamap01 />',
        '[freeaustraliamap01]'
    ), $mapInit, $content);

    return $content;
}

$plugin = plugin_basename(__FILE__);
add_filter("plugin_action_links_$plugin", 'free_australia_map_plugin_settings_link' );

function free_australia_map_plugin_settings_link($links) {
    $settings_link = '<a href="admin.php?page=free-australia-map-plugin-options">Settings</a>';
    array_push($links, $settings_link);
    return $links;
}

add_action( 'parse_request', 'free_australia_map_plugin_wp_request' );

function free_australia_map_plugin_wp_request( $wp ) {
    if( isset($_GET['freefreeaustraliamap_js_data']) ) {
        header( 'Content-Type: application/javascript' );
       ?>
    var
        nameColor		= "<?php echo get_option('freefreeaustraliahtml5map_nameColor')?>",
        nameFontSize		= "<?php echo get_option('freefreeaustraliahtml5map_nameFontSize')?>",
        map_data = <?php echo get_option('freefreeaustraliahtml5map_map_data')?>;
        <?php
        exit;
    }

    if(isset($_GET['freefreeaustraliamap_get_state_info'])) {
        $stateId = (int) $_GET['freefreeaustraliamap_get_state_info'];
        echo nl2br(get_option('freefreeaustraliahtml5map_state_info_'.$stateId));
        exit;
    }
}

register_activation_hook( __FILE__, 'free_australia_map_plugin_activation' );

function free_australia_map_plugin_activation() {
    $initialStatesPath = dirname(__FILE__).'/static/settings_tpl.json';
    add_option('freefreeaustraliahtml5map_map_data', file_get_contents($initialStatesPath));
    add_option('freefreeaustraliahtml5map_nameColor', "#000000");
    add_option('freefreeaustraliahtml5map_nameFontSize', "12px");

    for($i = 1; $i <= 8; $i++) {
        add_option('freefreeaustraliahtml5map_state_info_'.$i, '');
    }
}

register_deactivation_hook( __FILE__, 'free_australia_map_plugin_deactivation' );

function free_australia_map_plugin_deactivation() {

}

register_uninstall_hook( __FILE__, 'free_australia_map_plugin_uninstall' );

function free_australia_map_plugin_uninstall() {
    delete_option('freefreeaustraliahtml5map_map_data');
    delete_option('freefreeaustraliahtml5map_nameColor');
    delete_option('freefreeaustraliahtml5map_nameFontSize');

    for($i = 1; $i <= 8; $i++) {
        delete_option('freefreeaustraliahtml5map_state_info_'.$i);
    }
}

