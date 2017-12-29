<?php 
include( TEMPLATEPATH . '/banner.php' );
//分页函数
function wpyou_pagenavi($range = 9){
global $paged,$wp_query;
if ( !$max_page ) {$max_page = $wp_query->max_num_pages;}
if($max_page >1){if(!$paged){$paged = 1;}
if($paged != 1){echo "<a href='".get_pagenum_link(1) ."' class='extend' title='第一页'>第一页</a>";}
previous_posts_link('上一页');
if($max_page >$range){
if($paged <$range){for($i = 1;$i <= ($range +1);$i++){echo "<a href='".get_pagenum_link($i) ."'";
if($i==$paged)echo " class='current'";echo ">$i</a>";}}
elseif($paged >= ($max_page -ceil(($range/2)))){
for($i = $max_page -$range;$i <= $max_page;$i++){echo "<a href='".get_pagenum_link($i) ."'";
if($i==$paged)echo " class='current'";echo ">$i</a>";}}
elseif($paged >= $range &&$paged <($max_page -ceil(($range/2)))){
for($i = ($paged -ceil($range/2));$i <= ($paged +ceil(($range/2)));$i++){echo "<a href='".get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";}}}
else{for($i = 1;$i <= $max_page;$i++){echo "<a href='".get_pagenum_link($i) ."'";
if($i==$paged)echo " class='current'";echo ">$i</a>";}}
next_posts_link('下一页');
if($paged != $max_page){echo "<a href='".get_pagenum_link($max_page) ."' class='extend' title='最后一页'>最后一页</a>";}
}
}
//menv
if ( function_exists('register_nav_menus')) {register_nav_menus(array('primary' =>'&nbsp;菜单设置'));}
//背景
add_custom_background();
//shezhi
$themename = "当前主题";
$theme_dir=get_bloginfo('template_url');
if ( is_admin() ){
wp_enqueue_style("functions",$theme_dir."/options/css/wpyouthemeoption.css",false,"all");
}
function wpbaike_add_option() {
global $themename;
add_menu_page($themename.'设置',''.$themename.'设置',10,'theme-setup','wpbaike_options',get_bloginfo('template_url').'/images/sezi.png','3') ;
add_submenu_page('theme-setup','主题设置','主题设置',10,'theme-setup','wpbaike_options');
add_action( 'admin_init','register_mysettings' );
}
function register_mysettings() {
register_setting( 'wpbaike-settings','wpbaike_left_id');
register_setting( 'wpbaike-settings','wpbaike_center_id');
register_setting( 'wpbaike-settings','wpbaike_right_id');
register_setting( 'wpbaike-settings','wpbaike_homepage_title');
register_setting( 'wpbaike-settings','wpbaike_homepage_description');
register_setting( 'wpbaike-settings','wpbaike_homepage_keywords');
register_setting( 'wpbaike-settings','wpbaike_homepage_keywords_separater');
register_setting( 'wpbaike-settings','wpbaike_footer');
register_setting( 'wpbaike-settings','wpbaike_if_friendlink');
}
function wpbaike_options() {
global $themename;
echo '<!-- Options Form begin -->
<div class="wrap">
	<div id="icon-options-general" class="icon32"><br/></div>
	<h2>淘宝客主题设置</h2>
    <ul class="subsubsub wpyounavi">
        <li><a href="#wpbaike_hp"><strong>首页设置</strong></a> |</li>
    	<li><a href="#wpbaike_seo"><strong>SEO设置</strong></a> |</li>
        <li><a href="#wpbaike_ft"><strong>底部设置</strong></a></li>
    </ul>
	<form method="post" action="options.php">';settings_fields('wpbaike-settings');;
	echo '		<table class="form-table wpbaike-form">            
			<tr valign="top" class="toptitle">
            	<th><h3 id="wpbaike_hp">首页设置</h3></th>
                <td style="margin-top:10px"><br/>自定义设置网站首页栏目</td>
        	</tr>
            <tr valign="top">
                <th scope="row"><label>左边模块分类ID<span class="description">(唯一数值)</span></label></th>
                <td>
                    <input class="regular-text" style="width:15em;" type="text" name="wpbaike_left_id" value="';echo get_option('wpbaike_left_id');;echo '" />
                </td>
				
        	</tr>
			            <tr valign="top">
                <th scope="row"><label>中间模块分类ID<span class="description">(唯一数值)</span></label></th>
                <td>
                    <input class="regular-text" style="width:15em;" type="text" name="wpbaike_center_id" value="';echo get_option('wpbaike_center_id');;echo '" />
                </td>
				
        	</tr>

			            <tr valign="top">
                <th scope="row"><label>右边模块分类ID<span class="description">(唯一数值)</span></label></th>
                <td>
                    <input class="regular-text" style="width:15em;" type="text" name="wpbaike_right_id" value="';echo get_option('wpbaike_right_id');;echo '" />
                </td>
				
        	</tr>
            <tr valign="top">
                <th scope="row"></th>
                <td>
                    <input type="submit" name="save" id="button-primary" class="button-primary" value="';_e('Save Changes') ;echo '" />
                </td>
            </tr>
			
            <tr valign="top" class="toptitle">
            	<th><h3 id="wpbaike_seo">SEO设置</h3></th>
                <td><br/>自定义网站的SEO设置,更加有利于搜索引擎优化收录</td>
        	</tr>
            <tr valign="top">
                <th scope="row"><label>首页标题<span class="description">(文本)</span></label></th>
                <td>
                    <input class="regular-text" style="width:35em; height:3em;" type="text" value="';echo get_option('wpbaike_homepage_title');;echo '" name="wpbaike_homepage_title"/>
                    <br />
                    <span class="description">设置首页标题, 此项内容将和网站名称一起组成首页的Title </span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"><label>首页描述<span class="description">(文本)</span></label></th>
                <td>
                    <textarea class="txtad" style="width:35em; height:6em;" name="wpbaike_homepage_description">';echo get_option('wpbaike_homepage_description');;echo '</textarea>
                    <br />
                    <span class="description">设置首页描述信息</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"><label>首页关键字列表<span class="description">(文本)</span></label></th>
                <td>
                    <textarea class="txtad" style="width:35em; height:6em;" name="wpbaike_homepage_keywords">';echo get_option('wpbaike_homepage_keywords');;echo '</textarea>
                    <br />
                    <span class="description">设置首页关键字列表(多个关键字之间用英文","逗号隔开) </span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"></th>
                <td>
                    <input type="submit" name="save" id="button-primary" class="button-primary" value="';_e('Save Changes') ;echo '" />
                </td>
            </tr>
            
            <tr valign="top" class="toptitle">
            	<th><h3 id="wpbaike_ft">底部设置</h3></th>
                <td><br/>自定义设置网站底部内容</td>
        	</tr>
            <tr valign="top">
            	<th scope="row"><label>友情链接显示位置<span class="description"></span></label></th>
                <td>
                	<select name="wpbaike_if_friendlink">
                    	<option value="2" ';if (get_option('wpbaike_if_friendlink') == '2') {echo 'selected="selected"';};echo '>不显示</option>
                        <option value="1" ';if (get_option('wpbaike_if_friendlink') == '1') {echo 'selected="selected"';};echo '>首页显示</option>
                        <option value="0" ';if (get_option('wpbaike_if_friendlink') == '0') {echo 'selected="selected"';};echo '>全站显示</option>
                    </select>
                     <span class="description">(默认为 全站显示) 
</span>
                    <br />
                    <span class="description">设置网站底部 友情链接 模块的显示位置</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"><label>底部内容设置 <span class="description">(文本)</span></label></th>
                <td>
                    <textarea class="wpyoutextarea" style="width:35em; height:6em;" name="wpbaike_footer">';echo get_option('wpbaike_footer');;echo '</textarea>
                    <br/><span class="description">设置网站底部显示的内容 (支持HTML) </span>
					
                </td>
        	</tr>
            <tr valign="top">
                <th scope="row"></th>
                <td>
                    <input type="submit" name="save" id="button-primary" class="button-primary" value="';_e('Save Changes') ;echo '" />
                </td>
            </tr>
		</table>
	</form>
	<p style="margin-bottom:100px;">本淘宝客网站主题由<a href="http://wwww.xuejianzhan.com/" target="_blank">学建站网</a>开发设计, 支持<a href="http://wwww.wpbaike.net/" target="_blank">WP百科网</a>, 获得免费更新和升级服务.
</p>
</div>
<!-- Options Form begin -->
';}
$theme_dir=get_bloginfo('template_url');
add_action('admin_menu','wpbaike_add_option');
//links
add_filter( 'pre_option_link_manager_enabled', '__return_true' );   
?>