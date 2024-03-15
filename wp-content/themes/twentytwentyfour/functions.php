<?php
/**
 * Twenty Twenty-Four functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Four
 * @since Twenty Twenty-Four 1.0
 */

/**
 * Register block styles.
 */

if ( ! function_exists( 'twentytwentyfour_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_styles() {

		register_block_style(
			'core/details',
			array(
				'name'         => 'arrow-icon-details',
				'label'        => __( 'Arrow icon', 'twentytwentyfour' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\2193\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __( 'Pill', 'twentytwentyfour' ),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--base-2);
					padding: 0.375rem 0.875rem;
					border-radius: var(--wp--preset--spacing--20);
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--contrast-3);
				}',
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'twentytwentyfour' ),
				/*
				 * Styles for the custom checkmark list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
		register_block_style(
			'core/navigation-link',
			array(
				'name'         => 'arrow-link',
				'label'        => __( 'With arrow', 'twentytwentyfour' ),
				/*
				 * Styles for the custom arrow nav link block style
				 */
				'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'         => 'asterisk',
				'label'        => __( 'With asterisk', 'twentytwentyfour' ),
				'inline_style' => "
				.is-style-asterisk:before {
					content: '';
					width: 1.5rem;
					height: 3rem;
					background: var(--wp--preset--color--contrast-2, currentColor);
					clip-path: path('M11.93.684v8.039l5.633-5.633 1.216 1.23-5.66 5.66h8.04v1.737H13.2l5.701 5.701-1.23 1.23-5.742-5.742V21h-1.737v-8.094l-5.77 5.77-1.23-1.217 5.743-5.742H.842V9.98h8.162l-5.701-5.7 1.23-1.231 5.66 5.66V.684h1.737Z');
					display: block;
				}

				/* Hide the asterisk if the heading has no content, to avoid using empty headings to display the asterisk only, which is an A11Y issue */
				.is-style-asterisk:empty:before {
					content: none;
				}

				.is-style-asterisk:-moz-only-whitespace:before {
					content: none;
				}

				.is-style-asterisk.has-text-align-center:before {
					margin: 0 auto;
				}

				.is-style-asterisk.has-text-align-right:before {
					margin-left: auto;
				}

				.rtl .is-style-asterisk.has-text-align-left:before {
					margin-right: auto;
				}",
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_styles' );

/**
 * Enqueue block stylesheets.
 */

if ( ! function_exists( 'twentytwentyfour_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_stylesheets() {
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'twentytwentyfour-button-style-outline',
				'src'    => get_parent_theme_file_uri( 'assets/css/button-outline.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/button-outline.css' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_stylesheets' );

/**
 * Register pattern categories.
 */

if ( ! function_exists( 'twentytwentyfour_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_pattern_categories() {

		register_block_pattern_category(
			'page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category', 'twentytwentyfour' ),
				'description' => __( 'A collection of full page layouts.', 'twentytwentyfour' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_pattern_categories' );


function testimonials_custom_post(){


	$args = array(
		'public' =>true,
		'label' => 'Testimonials',
		'rewrite' => array('slug' => 'testimonials'),
		'supports' => array('title','editor','author','thumbnail','excerpt','comments'),
		'taxonomies' => array('category','post_tag')
	);

	register_post_type('testimonials',$args);
}

add_action('init','testimonials_custom_post');

// Add Custom Fields to Testimonials Post Type
function add_testimonial_custom_fields() {
    add_meta_box(
        'testimonial_custom_fields',
        'Testimonial Details',
        'render_testimonial_custom_fields',
        'testimonials',
        'normal',
        'high'
    );

	add_meta_box(
        'testimonial_status',
        'Testimonial Status',
        'render_testimonial_status_field',
        'testimonials',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_testimonial_custom_fields');

// Render Custom Fields
function render_testimonial_custom_fields($post) {
    $fields = array(
        array(
            'id' => 'testimonial_text',
            'label' => 'Testimonial Text',
            'type' => 'textarea',
        ),
        array(
            'id' => 'testimonial_author',
            'label' => 'Author Name',
            'type' => 'user_select',
        ),
        array(
            'id' => 'testimonial_category',
            'label' => 'Category',
            'type' => 'category_select',
        ),
        array(
            'id' => 'testimonial_tags',
            'label' => 'Tags',
            'type' => 'tag_select',
        ),
        array(
            'id' => 'testimonial_date',
            'label' => 'Date',
            'type' => 'date',
        ),
        array(
            'id' => 'testimonial_rating',
            'label' => 'Rating',
            'type' => 'number',
            'min' => 1,
            'max' => 5,
        ),
        array(
            'id' => 'testimonial_website',
            'label' => "Author's Website",
            'type' => 'text',
        ),
    );

    echo '<table class="form-table">';
    foreach ($fields as $field) {
        echo '<tr>';
        echo '<th><label for="' . $field['id'] . '">' . $field['label'] . '</label></th>';
        echo '<td>';
        $value = get_post_meta($post->ID, $field['id'], true);
        switch ($field['type']) {
            case 'textarea':
                echo '<textarea id="' . $field['id'] . '" name="' . $field['id'] . '">' . esc_textarea($value) . '</textarea>';
                break;
			case 'user_select':
				$users = get_users(array('role__in' => array('author', 'editor', 'administrator'))); // Get all users
				echo '<select id="' . $field['id'] . '" name="' . $field['id'] . '">';
				echo '<option value="">Select Author</option>';
				foreach ($users as $user) {
					echo '<option value="' . $user->ID . '"' . selected($value, $user->ID, false) . '>' . esc_html($user->display_name) . '</option>';
				}
				echo '</select>';
				break;
            case 'category_select':
                wp_dropdown_categories(array(
                    'name' => $field['id'],
                    'taxonomy' => 'category',
                    'orderby' => 'name',
                    'selected' => $value,
                    'show_option_none' => 'Select Category',
                    'hide_empty' => false,
                ));
                break;
            case 'tag_select':
                wp_dropdown_categories(array(
                    'name' => $field['id'],
                    'taxonomy' => 'post_tag',
                    'orderby' => 'name',
                    'selected' => $value,
                    'show_option_none' => 'Select Tag',
                    'hide_empty' => false,
                ));
                break;
            case 'number':
                echo '<input type="number" id="' . $field['id'] . '" name="' . $field['id'] . '" value="' . esc_attr($value) . '" min="' . $field['min'] . '" max="' . $field['max'] . '" />';
                break;
            default:
                echo '<input type="' . $field['type'] . '" id="' . $field['id'] . '" name="' . $field['id'] . '" value="' . esc_attr($value) . '" />';
        }
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
}

// Save Custom Field Data
function save_testimonial_custom_fields($post_id) {
    $fields = array(
        'testimonial_text',
        'testimonial_author',
        'testimonial_category',
        'testimonial_tags',
        'testimonial_date',
        'testimonial_rating',
        'testimonial_website',
		'testimonial_status',
    );

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
    }
}
add_action('save_post', 'save_testimonial_custom_fields');

function render_testimonial_status_field($post) {
    $testimonial_status = get_post_meta($post->ID, 'testimonial_status', true);
    ?>
    <label for="testimonial_status">Testimonial Status:</label>
    <select name="testimonial_status" id="testimonial_status">
        <option value="valid" <?php selected($testimonial_status, 'valid'); ?>>Valid</option>
        <option value="not_valid" <?php selected($testimonial_status, 'not_valid'); ?>>Not Valid</option>
    </select>
    <?php
}


// Register the widget area
function my_theme_widgets_init() {
   
	// Register Sidebar
    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar-1',
        'description'   => 'Widgets in this area will be shown on the sidebar.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'my_theme_widgets_init' );

// Custom widget class
class My_Random_Testimonials_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'my_random_testimonials_widget', // Base ID
            'Random Testimonials', // Widget Name
            array( 
                'description' => 'Displays a random testimonial.',
            ) 
        );
    }

    // Front-end display of widget
    public function widget( $args, $instance ) {
        echo $args['before_widget'];

        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }

        // Fetch testimonials from your custom source
        $testimonials = $this->get_testimonials( $instance['number_of_testimonials'] );

        if ( ! empty( $testimonials ) ) {
            foreach ( $testimonials as $testimonial ) {
                echo '<blockquote>' . esc_html( $testimonial ) . '</blockquote>';
            }
        }

        echo $args['after_widget'];
    }

    // Function to get testimonials from the database
	private function get_testimonials( $num_testimonials = 1 ) {
		$args = array(
			'post_type'      => 'testimonials',
			'posts_per_page' => $num_testimonials,
			'orderby'        => 'rand', // Display random testimonials
		);

		$query = new WP_Query( $args );

		$testimonials = array();

		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				// $testimonials[] = '<a href="' . esc_url(get_permalink()) . '">' . get_the_title() . '</a>: ' . get_the_content();
				echo '<a href="' . esc_url(get_permalink()) . '">' . get_the_title() . '</a><br>';
			}
			wp_reset_postdata();
		}

		return $testimonials;
	}


    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : '';
        $number_of_testimonials = ! empty( $instance['number_of_testimonials'] ) ? absint( $instance['number_of_testimonials'] ) : 1;
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">Title:</label>
            <input type="text" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo esc_attr( $title ); ?>" class="widefat" />
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'number_of_testimonials' ) ); ?>">Number of Testimonials to Display:</label>
            <input type="number" id="<?php echo esc_attr( $this->get_field_id( 'number_of_testimonials' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number_of_testimonials' ) ); ?>" value="<?php echo esc_attr( $number_of_testimonials ); ?>" class="widefat" />
        </p>
        <?php 
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
        $instance['number_of_testimonials'] = ( ! empty( $new_instance['number_of_testimonials'] ) ) ? absint( $new_instance['number_of_testimonials'] ) : 1;
        return $instance;
    }
}

// Register the widget
function register_custom_widgets() {
    register_widget( 'My_Random_Testimonials_Widget' );
}
add_action( 'widgets_init', 'register_custom_widgets' );

// Enqueue script for AJAX functionality
function enqueue_custom_scripts() {
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);

    wp_localize_script('custom-scripts', 'ajax_testimonials_params', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'security' => wp_create_nonce('load_more_testimonials_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

function testimonials_list_shortcode($atts) {

    $atts = shortcode_atts(array(
        'category' => '',
        'date' => '',
        'author' => '',
        'posts_per_page' => 1,
    ), $atts);

    $output = '<div id="testimonials-container">';

    $args = array(
        'post_type' => 'testimonials',
        'posts_per_page' => 1,
        'orderby' => 'rand',
        'meta_query' => array(
            array(
                'key' => 'testimonial_status',
                'value' => 'valid',
                'compare' => '=',
            ),
        ),
    );

    if (!empty($atts['category'])) {
        $args['category_name'] = $atts['category'];
    }

    if (!empty($atts['date'])) {
        $args['date_query'] = array(
            array(
                'after' => $atts['date'],
                'inclusive' => true,
            ),
        );
    }

    if (!empty($atts['author'])) {
        $args['author_name'] = $atts['author'];
    }

	$testimonials_query = new WP_Query($args);

	if (is_user_logged_in() && current_user_can('subscriber')) {
	
		if ($testimonials_query->have_posts()) {
			while ($testimonials_query->have_posts()) {
				$testimonials_query->the_post();
				$output .= '<div class="testimonial">';
				$output .= '<h3  href="' . esc_url(get_permalink()) . '">' . get_the_title() . '</h3>';
				$output .= '<div class="content">' . get_the_content() . '</div>';
				$output .= '</div>';
			}
			// Button for loading more testimonials
			$output .= '<div id="load-more-testimonials" data-page="2">Load More</div>';
		} else {
			$output .= 'No testimonials found';
		}
	}
    $output .= '</div>';

    return $output;
}
add_shortcode('testimonials_details', 'testimonials_list_shortcode');

//[testimonials_details category="example" date="2022-01-01" author="John Doe"]


function custom_sidebar_shortcode($atts) {

	$atts = shortcode_atts(array(
		'id' => 'sidebar-1',
	), $atts);

	ob_start();

	if (is_active_sidebar($atts['id'])) {
		dynamic_sidebar($atts['id']);
	}

	$sidebar_content = ob_get_clean();
	return $sidebar_content;
}
add_shortcode('widgets_sidebar', 'custom_sidebar_shortcode');

// AJAX handler for fetching additional testimonials
function load_more_testimonials() {
    check_ajax_referer('load_more_testimonials_nonce', 'security');

    $page = isset($_POST['page']) ? intval($_POST['page']) : 1;

    $args = array(
        'post_type' => 'testimonials',
        'posts_per_page' => 1,
        'paged' => $page,
        'meta_query' => array(
            array(
                'key' => 'testimonial_status',
                'value' => 'valid',
                'compare' => '=',
            ),
        ),
    );

    $testimonials_query = new WP_Query($args);

    ob_start();

    if ($testimonials_query->have_posts()) {
        while ($testimonials_query->have_posts()) {
            $testimonials_query->the_post();
            ?>
            <div class="testimonial">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <div class="content"><?php the_content(); ?></div>
            </div>
            <?php
        }
        wp_reset_postdata();
    } else {
        echo 'No more testimonials found';
    }

    $output = ob_get_clean();

    wp_send_json_success($output);
}
add_action('wp_ajax_load_more_testimonials', 'load_more_testimonials');
add_action('wp_ajax_nopriv_load_more_testimonials', 'load_more_testimonials');
