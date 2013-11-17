<?php $con=mysql_connect("193.0.61.200","fonarik_fonarik2","221976");
	      if($con){ mysql_select_db("fonarik_fonarik2",$con); $test=""; }
	      else{ $test="fail"; }
		  mysql_query('SET character_set_database = utf8');
		  mysql_query('SET NAMES utf8');
		  $sql = "SELECT * FROM wp_posts AS p 
					LEFT JOIN wp_postmeta AS m ON p.ID = m.post_id 
					LEFT JOIN wp_terms AS t ON t.slug = 'market'
					LEFT JOIN wp_term_taxonomy AS tt ON tt.term_id = t.term_id
					LEFT JOIN wp_term_relationships AS tr ON tr.term_taxonomy_id = tt.term_taxonomy_id					
					WHERE post_type = 'nav_menu_item' 
					AND post_status = 'publish' 
					AND m.meta_key = '_menu_item_menu_item_parent' 
					AND m.meta_value = 0
					AND p.ID = tr.object_id
					ORDER BY p.menu_order";
					
		  $rsd = mysql_query($sql);
		  
		  while($menu_item = mysql_fetch_array($rsd)) {	
		  
		  $sql_meta = 'SELECT meta_value, meta_key FROM wp_postmeta WHERE post_id = '.$menu_item['ID'].'';
		  $rsd_meta = mysql_query($sql_meta);
		  $menu_meta = array();
		  while($metaarr = mysql_fetch_array($rsd_meta)) {
			  $menu_meta[$metaarr['meta_key']] = $metaarr['meta_value'];
		  }
		  
		  $test .= '<li><a href="'.$menu_meta['_menu_item_url'].'">'.$menu_item['post_title'];
		  if($menu_item['post_excerpt'] && $menu_item['post_excerpt'] != ''){
		  $test .= '&nbsp;<img src="'.$menu_item['post_excerpt'].'" alt="'.$menu_item['post_title'].'"  />';
		  }
		 $test .= '</a>';
		  
		  $sqlsub = "SELECT * FROM wp_posts AS p 
					LEFT JOIN wp_postmeta AS m ON p.ID = m.post_id 
					WHERE post_type = 'nav_menu_item' 
					AND post_status = 'publish' 
					AND meta_key = '_menu_item_menu_item_parent' 
					AND meta_value = ".$menu_item['ID']."
					ORDER BY menu_order";
		  	
		  $rsdsub = mysql_query($sqlsub);
		  if(mysql_num_rows($rsdsub) > 0){
	      $test .=  '<ul class="sub">';
		  while($submenu_item = mysql_fetch_array($rsdsub)) {	
		   
		  $subsql_meta = 'SELECT meta_value, meta_key FROM wp_postmeta WHERE post_id = '.$submenu_item['ID'].'';
		  $subrsd_meta = mysql_query($subsql_meta);
		  $submenu_meta = array();
		  while($submetaarr = mysql_fetch_array($subrsd_meta)) {
			  $submenu_meta[$submetaarr['meta_key']] = $submetaarr['meta_value'];
		  }
		  
		  $test .= '<li><a href="'.$submenu_meta['_menu_item_url'].'">'.$submenu_item['post_title'];		  
		  $test .= '</a></li>';
		   
		  }
		  $test .=  '</ul>';
		  }
            //$menu_meta = get_post_meta($menu_item->ID,'');
		   
		   
				 /*  $menu_meta_data = get_post_meta($menu_meta['_menu_item_object_id'][0], 'vulcan_meta_options', true );
				   $thumbURL = wp_get_attachment_image_src( get_post_thumbnail_id($menu_meta['_menu_item_object_id'][0]), '' );
				   if ($menu_meta['_menu_item_type'][0] == 'custom'){ $url = $menu_meta['_menu_item_url'][0];  }
				   else if 	($menu_meta['_menu_item_type'][0] == 'post_type')
				   { $url =  get_permalink($menu_meta['_menu_item_object_id'][0]);  }
				   else if 	($menu_meta['_menu_item_type'][0] == 'taxonomy')
				   { $url =  get_term_link(intval($menu_meta['_menu_item_object_id'][0]), $menu_meta['_menu_item_object'][0]);  } 

				   if($menu_item->post_title) { $title=$menu_item->post_title; }				  
				   else { $title=get_the_title($menu_meta['_menu_item_object_id'][0]); }
				   ?>    
                   <li id="menu-item-<?php echo $menu_item->ID ?>" class="">
                   <a href="<?php echo $url; ?>"><?php echo $title; ?>
                   <?php if($menu_item->post_excerpt && $menu_item->post_excerpt!= ''){ ?>
                   <img src="<?php echo $menu_item->post_excerpt; ?>" alt="><?php echo $title; ?>" /><?php } ?>
                   </a>
                   <?php $submenu_items = $wpdb->get_results("SELECT * FROM $wpdb->posts AS p 
					LEFT JOIN $wpdb->postmeta AS m ON p.ID = m.post_id 
					WHERE post_type = 'nav_menu_item' 
					AND post_status = 'publish' 
					AND meta_key = '_menu_item_menu_item_parent' 
					AND meta_value = ".$menu_item->ID."
					ORDER BY menu_order");
					if($submenu_items){ $j=1; ?>                    
                    <ul class="sub">                   
                   <?php foreach ($submenu_items  as $submenu_item) { 
				   $submenu_meta = get_post_meta($submenu_item->ID,'');
				   if ($submenu_meta['_menu_item_type'][0] == 'custom'){ $suburl = $submenu_meta['_menu_item_url'][0];  }
				   else if 	($submenu_meta['_menu_item_type'][0] == 'post_type')
				   { $suburl =  get_permalink($submenu_meta['_menu_item_object_id'][0]);  }  				    
				   else if 	($submenu_meta['_menu_item_type'][0] == 'taxonomy')
				   { $suburl =  get_term_link(intval($submenu_meta['_menu_item_object_id'][0]), $submenu_meta['_menu_item_object'][0]);  } 
				   if($submenu_item->post_title) { $subtitle=$submenu_item->post_title; }
				   else if($submenu_meta['_menu_item_object'][0] == 'product_cats'){ 
				   $sterm = get_term_by('id', $submenu_meta['_menu_item_object_id'][0], 'product_cats');
				   $subtitle=$sterm->name;  }
				   else { $subtitle=get_the_title($submenu_meta['_menu_item_object_id'][0]); }
				   ?>
                    <li><a href="<?php echo $suburl; ?>"><?php echo $subtitle; ?></a></li>	  
                   <?php $j++; }  ?>                         
                   </ul>   
                   </li>                 
               	   <?php } else { ?>
				  </li> 
				 <?php  } } ?> */ 
				 $test .= '</li>'; 
      	}
		  $this->assign('wa_test', $test);
		  
		  
		  
		  $sql_banner = "SELECT DISTINCT p.post_title, p.guid, p.ID, p.post_date, m.meta_value FROM wp_posts AS p
		  LEFT JOIN wp_postmeta AS m ON p.ID = m.post_id 
		  WHERE p.post_status = 'publish' AND p.post_type = 'slideshow'
		  AND m.meta_key = 'meta_options' ORDER BY p.post_date";					
		  $rsd_banner = mysql_query($sql_banner);
		  $b = 1; $controller = ''; $slider = ''; $slider_small='';
		  while($banner = mysql_fetch_array($rsd_banner)) {
			  $banner_meta = unserialize($banner['meta_value']);
			  $sql_file = 'SELECT guid FROM wp_posts WHERE ID = '.$banner_meta['image_id'].' LIMIT 0,1';
			  $rsd_file = mysql_query($sql_file);
			  $file = mysql_fetch_assoc($rsd_file);		
			  if($banner_meta['type'] == '0'){	  
			  $slider .='<div id="slide'.$b.'">
			 <a href="'.$banner_meta['link'].'"><img src="'.$file['guid'].'" alt="" title="" width="984"/></a>
			 <div class="slid_text"> <h3 class="slid_title"><span>'.$banner_meta['slogan1'].'</span></h3>			
			 <p><span><a href="'.$banner_meta['link'].'" style="color:#999;">'.$banner_meta['slogan2'].'</a></span></p></div>	  
            </div>';
			  $controller .= '<div class="control"><span>'.$b.'</span></div>';
			  $b++;
			  } else if($banner_meta['type'] == '1'){
				$slider_small .= '<div class="grid_4" style="width:320px;margin:0px 0px 0px 12px;">
                 <a href="'.$banner_meta['link'].'" class="button_block best_price">
                 <img src="'.$file['guid'].'" alt="Banner 1" width="320" height="101"/>
                 </a></div>';
			  }

		  }
		  
		  $this->assign('wa_banner', $slider); 
		  $this->assign('wa_small_banner', $slider_small); 
		  $this->assign('wa_controller', $controller);?>