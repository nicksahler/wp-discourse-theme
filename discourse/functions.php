<?php 
	remove_filter("comment_text", "wpautop", 100);
	function custom_excerpt_length( $length ) 
	{
		return 90;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size( 732, 240, true );
	
	
	function show_pagination_links()
	{
		global $wp_query;

		$page_tot   = $wp_query->max_num_pages;
		$page_cur   = get_query_var( 'paged' );
		$big        = 999999999;

		if ( $page_tot == 1 ) return;

		$args = array(
		    'base'      => str_replace( $big, '%#%', get_pagenum_link( $big ) ), 
            'format'    => '?paged=%#%',
            'current'   => max( 1, $page_cur ),
            'total'     => $page_tot,
            'prev_next' => false,
            'end_size'  => 1,
            'mid_size'  => 2,
            'type'      => 'list',
			'show_all'     => False,
			'prev_text'    => __('Previous'),
			'next_text'    => __('Next'),
			'add_args'     => False,
			'add_fragment' => '');
		echo paginate_links( $args );
	}

	function validate_gravatar($email)
	{
		// Craft a potential url and test its headers
		$hash = md5(strtolower(trim($email)));
		$uri = 'http://www.gravatar.com/avatar/' . $hash . '?d=404';
		$headers = @get_headers($uri);
		if (!preg_match("|200|", $headers[0])) {
			$has_valid_avatar = FALSE;
		} else {
			$has_valid_avatar = TRUE;
		}
		return $has_valid_avatar;
	}

	function readable_time_diff( $from, $to = '' ) {
		if ( empty( $to ))
			$to = time();
		$diff = (int) abs( $to - $from );
		if ( $diff <= 3600 ) {
			$mins = round( $diff / 60 );
			if ( $mins <= 1 ) {
					$mins = 1;
			}
			/* translators: min=minute */
			$since = sprintf( _n( '%s min', '%s mins', $mins ), $mins ) . ' ago';
		} elseif ( ( $diff <= 86400 ) && ( $diff > 3600 ) ) {
			$hours = round( $diff / 3600 );
			if ( $hours <= 1 ) {
					$hours = 1;
			}
			$since = sprintf( _n( '%s hour', '%s hours', $hours ), $hours ) . ' ago';
		} elseif ( ($diff <= 604800 ) && ($diff >= 86400) ) {
				$days = round( $diff / 86400 );
			if ( $days <= 1 ) {
					$days = 1;
			}
			$since = sprintf( _n( '%s day', '%s days', $days ), $days ) . ' ago';
			} elseif (($diff <= 2629740  ) && ($diff >= 604800)) {
				$weeks = round( $diff / 604800 );
			if ( $weeks <= 1 ) {
					$weeks = 1;
			}
			$since = sprintf( _n( '%s week', '%s weeks', $weeks ), $weeks ) . ' ago';
		} elseif (($diff <= 31556900) && ($diff >= 2629740 )) {
				$months = round( $diff / 2629740  );
			if ( $months <= 1 ) {
					$months = 1;
			}
			$since = sprintf( _n( '%s month', '%s months', $months ), $months ) . ' ago';
		} elseif ($diff >= 31556900) {
			$since = date('Y', $from);
		}
		return $since;
	}
?>