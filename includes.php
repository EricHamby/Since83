<?php 
function admin_since83_twitter() { ?>
<div id="postbox-container" class="postbox-container" style="width:770px;">
  <div id="column3-sortables" class="meta-box-sortables ui-sortable">
    <div id="viral_stats_totals" class="postbox ">
      <h3 class="hndle"><span>Since83 Twitter</span></h3>
      <div class="inside">
        <div class="table table_discussion">
          <p>
          <div id="twitter_div">
            <ul id="twitter_update_list">
            </ul>
          </div>
          <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script> 
          <script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline.json?screen_name=since83_com&include_rts=true&count=10&callback=twitterCallback2"></script>
          </p>
          <p class="textright"><a href="http://twitter.com/since83_com" class="button" target="_blank">Twitter</a> <a href="http://www.facebook.com/pages/Since83Com/197724890240601" class="button" target="_blank">Facebook</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<?php 
function admin_since83_meta() { ?>
<div id="postbox-container" class="postbox-container" style="width:770px;">
  <div id="column3-sortables" class="meta-box-sortables ui-sortable">
    <div id="viral_stats_totals" class="postbox ">
      <h3 class="hndle"><span><?php echo get_name_eh(); ?> SEO</span></h3>
      <div class="inside">
        <div class="table table_discussion">
          <?php eh_table_start('SEO Options','seo');
echo'<tr class="alternate">
<td width="100px">META Description:</td>
<td> <textarea name="eh_meta_description" type="text" id="admin_textarea"/>';
echo (get_option('eh_meta_description'));
echo'</textarea>
</tr>';

echo'<tr class="alternate">
<td width="100px">META Keywords:</td>
<td> <textarea name="eh_meta_keywords" type="text" id="admin_textarea"/>';
echo (get_option('eh_meta_keywords'));
echo'</textarea>
</tr>';

echo'<tr class="alternate">
<td width="100px">META Copyright:</td>
<td> <textarea name="eh_meta_copyright" type="text" id="admin_textarea"/>';
echo (get_option('eh_meta_copyright'));
echo'</textarea>
</tr>';
eh_table_stop(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<?php 
function admin_since83_social() { ?>
<div id="postbox-container" class="postbox-container" style="width:770px;">
  <div id="sortables" class="meta-box-sortables ui-sortable">
    <div id="viral_stats_totals" class="postbox ">
      <h3 class="hndle"><span><?php echo get_name_eh(); ?> Social Links</span></h3>
      <div class="inside">
        <div class="table table_discussion">
          <?php eh_table_start('Social Links','social');

echo'<tr class="alternate">
<td width="100px">Facebook Link</td>
<td><input name="eh_social_facebook" type="text" class="admin_form" value="'.get_option('eh_social_facebook').'" size="60" />
</td>
</tr>'; 

echo'<tr class="alternate">
<td width="100px">Twitter Link</td>
<td><input name="eh_social_twitter" type="text" class="admin_form" value="'.get_option('eh_social_twitter').'" size="60" />
</td>
</tr>'; 

eh_table_stop();?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<?php 
function admin_since83_text() { ?>
<div id="postbox-container" class="postbox-container" style="width:770px;">
  <div id="sortables" class="meta-box-sortables ui-sortable">
    <div id="viral_stats_totals" class="postbox ">
      <h3 class="hndle"><span><?php echo get_name_eh(); ?> Text</span></h3>
      <div class="inside">
        <div class="table table_discussion">
          <?php eh_table_start('Text Options','text');

echo'<tr class="alternate">
<td width="100px">Footer Copyrights</td>
<td><input name="eh_footer_copyright" type="text" class="admin_form" value="'.get_option('eh_footer_copyright').'" size="60" />
<br />Enter your sites footer copyrights here</td>
</tr>'; 

echo'<tr class="alternate">
<td width="100px">404 Page Text</td>
<td><input name="eh_errorpage_text" type="text" class="admin_form" value="'.get_option('eh_errorpage_text').'" size="60" />
<br />Enter your sites footer copyrights here</td>
</tr>'; 

eh_table_stop();?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<?php 
function admin_since83_right() { 
global $itsayes; global $itsano; global $absolutepath; 
?>
<div style="float:left; width:300px;">
  <div id="postbox-container" class="postbox-container" style="width:300px;">
    <div id="column3-sortables" class="meta-box-sortables ui-sortable">
      <div id="viral_stats_totals" class="postbox ">
        <h3><span><?php echo get_name_eh(); ?> Information</span></h3>
        <div class="inside">
          <table class="widefat">
            <tbody>
              <tr class="alternate">
                <td><strong>Theme Name:</strong></td>
                <td><?php echo get_name_eh(); ?></td>
              </tr>
              <tr class="alternate">
                <td><strong>Theme Version:</strong></td>
                <td><?php echo get_version_eh(); ?></td>
              </tr>
              <tr class="alternate">
                <td><strong>Theme Build:</strong></td>
                <td><?php echo get_build_eh(); ?></td>
              </tr>
              <tr class="alternate">
                <td><strong>Theme Type:</strong></td>
                <td><?php echo get_type_eh(); ?></td>
              </tr>
              <tr class="alternate">
                <td><strong>Wordpress Version:</strong></td>
                <td><?php bloginfo('version'); ?></td>
              </tr>
              <tr class="alternate">
                <td><strong>Since83 FrameWorks:</strong></td>
                <td>Activated</td>
              </tr>
              <tr class="alternate">
                <td><strong>Framework Version:</strong></td>
                <td><?php echo get_framework_eh(); ?></td>
              </tr>
              <tr class="alternate">
                <td><strong>Theme Site:</strong></td>
                <td>Since83.Com</td>
              </tr>
              <tr class="alternate">
                <td><strong>Author:</strong></td>
                <td>Eric Hamby</td>
              </tr>
              <tr class="alternate">
                <td><strong>Release Date:</strong></td>
                <td><?php echo get_release_eh(); ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div id="postbox-container" class="postbox-container" style="width:300px;">
    <div id="column3-sortables" class="meta-box-sortables ui-sortable">
      <div id="viral_stats_totals" class="postbox ">
        <h3 class="hndle"><span>Module Invintory</span></h3>
        <div class="inside">
          <table class="widefat">
            <tbody>
              <tr class="alternate">
                <td><strong>Auto Insert:</strong></td>
                <td><?php $filename = $absolutepath.'/module/module_auto-pages.php';
                            if (url_exists($filename)){ echo $itsayes; } else { echo $itsano; } ?></td>
              </tr>
              <tr class="alternate">
                <td><strong>Site Favicon:</strong></td>
                <td><?php $filename = $absolutepath.'/module/module_site-favicon.php';
                            if (url_exists($filename)){ echo $itsayes; } else { echo $itsano;} ?></td>
              </tr>
              <tr class="alternate">
                <td><strong>RSS Admin Widget:</strong></td>
                <td><?php $filename = $absolutepath.'/module/module_rss-widget.php';
                            if (url_exists($filename)){ echo $itsayes; } else { echo $itsano;} ?></td>
              </tr>
              <tr class="alternate">
                <td><strong>Menu Discriptions:</strong></td>
                <td><?php $filename = $absolutepath.'/module/module_menu-discription.php';
                            if (url_exists($filename)){ echo $itsayes; } else { echo $itsano;} ?></td>
              </tr>
              <tr class="alternate">
                <td><strong>Default Avatar:</strong></td>
                <td><?php $filename = $absolutepath.'/module/module_default-avatar.php';
                            if (url_exists($filename)){ echo $itsayes; } else { echo $itsano;} ?></td>
              </tr>
              <tr class="alternate">
                <td><strong>Google Analytics:</strong></td>
                <td><?php $filename = $absolutepath.'/module/module_google-analytics.php';
                            if (url_exists($filename)){ echo $itsayes; } else { echo $itsano;} ?></td>
              </tr>
              <tr class="alternate">
                <td><strong>IE6 Style:</strong></td>
                <td><?php $filename = $absolutepath.'/module/ie_module_six.php';
                            if (url_exists($filename)){ echo $itsayes; } else { echo $itsano;} ?></td>
              </tr>
              <tr class="alternate">
                <td><strong>IE7 Style:</strong></td>
                <td><?php $filename = $absolutepath.'/module/ie_module_seven.php';
                            if (url_exists($filename)){ echo $itsayes; } else { echo $itsano;} ?></td>
              </tr>
              <tr class="alternate">
                <td><strong>IE8 Style:</strong></td>
                <td><?php $filename = $absolutepath.'/module/ie_module_eight.php';
                            if (url_exists($filename)){ echo $itsayes; } else { echo $itsano;} ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div id="postbox-container" class="postbox-container" style="width:300px;">
    <div id="column3-sortables" class="meta-box-sortables ui-sortable">
      <div id="viral_stats_totals" class="postbox ">
        <h3 class="hndle"><span>Activate Installed Modules</span></h3>
        <div class="inside">
          <div class="table table_discussion">
            <?php eh_table_start('Modules','modules'); ?>
            <tr class="alternate">
              <td><strong>Auto Pages:</strong></td>
              <td><input name="eh_auto_pages" value="true" type="checkbox"<?php checked("true", get_option("eh_auto_pages")); ?> 
<?php $filename = $absolutepath.'/module/module_auto-pages.php'; if (!url_exists($filename)){ echo 'disabled';} ?>/></td>
            </tr>
            <tr class="alternate">
              <td><strong>Site Favicon:</strong></td>
              <td><input name="eh_site_favicon" value="true" type="checkbox"<?php checked("true", get_option("eh_site_favicon")); ?> 
<?php $filename = $absolutepath.'/module/module_site-favicon.php'; if (!url_exists($filename)){ echo 'disabled';} ?>/></td>
            </tr>
            <tr class="alternate">
              <td><strong>RSS Admin Widget:</strong></td>
              <td><input name="eh_rss_widget" value="true" type="checkbox"<?php checked("true", get_option("eh_rss_widget")); ?> 
<?php $filename = $absolutepath.'/module/module_rss-widget.php'; if (!url_exists($filename)){ echo 'disabled';} ?>/></td>
            </tr>
            <tr class="alternate">
              <td><strong>Menu Discriptions:</strong></td>
              <td><input name="eh_menu_disc" value="true" type="checkbox"<?php checked("true", get_option("eh_menu_disc")); ?> 
<?php $filename = $absolutepath.'/module/module_menu-discription.php'; if (!url_exists($filename)){ echo 'disabled';} ?>/></td>
            </tr>
            <tr class="alternate">
              <td><strong>Default Avatars:</strong></td>
              <td><input name="eh_default_avatars" value="true" type="checkbox"<?php checked("true", get_option("eh_default_avatars")); ?> 
<?php $filename = $absolutepath.'/module/module_default-avatar.php'; if (!url_exists($filename)){ echo 'disabled';} ?>/></td>
            </tr>
            <tr class="alternate">
              <td><strong>Google Analytics:</strong></td>
              <td><input name="eh_google_stats" value="true" type="checkbox"<?php checked("true", get_option("eh_google_stats")); ?> 
<?php $filename = $absolutepath.'/module/module_google-analytics.php'; if (!url_exists($filename)){ echo 'disabled';} ?>/></td>
            </tr>
            <tr class="alternate">
              <td><strong>IE<em>6</em> Style Support:</strong></td>
              <td><input name="eh_ie6_style" value="true" type="checkbox"<?php checked("true", get_option("eh_ie6_style")); ?> 
<?php $filename = $absolutepath.'/module/ie_module_six.php'; if (!url_exists($filename)){ echo 'disabled';} ?>/></td>
            </tr>
            <tr class="alternate">
              <td><strong>IE<em>7</em> Style Support:</strong></td>
              <td><input name="eh_ie7_style" value="true" type="checkbox"<?php checked("true", get_option("eh_ie7_style")); ?> 
<?php $filename = $absolutepath.'/module/ie_module_seven.php'; if (!url_exists($filename)){ echo 'disabled';} ?>/></td>
            </tr>
            <tr class="alternate">
              <td><strong>IE<em>8</em> Style Support:</strong></td>
              <td><input name="eh_ie8_style" value="true" type="checkbox"<?php checked("true", get_option("eh_ie8_style")); ?> 
<?php $filename = $absolutepath.'/module/ie_module_eight.php'; if (!url_exists($filename)){ echo 'disabled';} ?>/></td>
            </tr>
            <?php eh_table_stop();?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>
