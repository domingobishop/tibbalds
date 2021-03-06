<?php
add_action('after_setup_theme', 'register_my_menu');
function register_my_menu()
{
    register_nav_menu('primary', __('Navigation Menu', 'blankcanvas'));
}

add_action('init', 'my_add_excerpts_to_pages');
function my_add_excerpts_to_pages()
{
    add_post_type_support('page', 'excerpt');
}

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more)
{
    global $post;
    return '&nbsp;<a class="moretag" href="' . get_permalink($post->ID) . '">Read&nbsp;more&nbsp;&raquo;</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');

function twentythirteen_wp_title($title, $sep)
{
    global $paged, $page;

    if (is_feed())
        return $title;

    // Add the site name.
    $title .= get_bloginfo('name', 'display');

    // Add the site description for the home/front page.
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && (is_home() || is_front_page()))
        $title = "$title $sep $site_description";

    // Add a page number if necessary.
    if (($paged >= 2 || $page >= 2) && !is_404())
        $title = "$title $sep " . sprintf(__('Page %s', 'twentythirteen'), max($paged, $page));

    return $title;
}

add_filter('wp_title', 'twentythirteen_wp_title', 10, 2);

// Register footer widgets
add_action('widgets_init', 'theme_slug_widgets_init');
function theme_slug_widgets_init()
{
    register_sidebar(array(
        'name' => __('Footer logos', 'theme-slug'),
        'id' => 'footer-logos',
        'description' => __('Widget area for logos.', 'theme-slug'),
        'before_widget' => '<div id="%1$s" class="widget footer-col col-xs-4 col-sm-2 %2$s">',
        'after_widget' => '</div>',
    ));
}

function add_image_responsive_class($content)
{
    global $post;
    $pattern = "/<img(.*?)class=\"(.*?)\"(.*?)>/i";
    $replacement = '<img$1class="$2 img-responsive"$3>';
    $content = preg_replace($pattern, $replacement, $content);
    return $content;
}

add_filter('the_content', 'add_image_responsive_class');

/** Tell WordPress to run yourtheme_setup() when the 'after_setup_theme' hook is run. */
add_action('after_setup_theme', 'yourtheme_setup');
if (!function_exists('yourtheme_setup')):
    /**
     * @uses add_custom_image_header() To add support for a custom header.
     * @uses register_default_headers() To register the default custom header images provided with the theme.
     *
     * @since 3.0.0
     */
    function yourtheme_setup()
    {
// This theme uses post thumbnails
        add_theme_support('post-thumbnails');
// Your changeable header business starts here
        define('HEADER_TEXTCOLOR', '');
// No CSS, just IMG call. The %s is a placeholder for the theme template directory URI.
        define('HEADER_IMAGE', '%s/img/sky.jpg');
// The height and width of your custom header. You can hook into the theme's own filters to change these values.
// Add a filter to yourtheme_header_image_width and yourtheme_header_image_height to change these values.
        define('HEADER_IMAGE_WIDTH', apply_filters('yourtheme_header_image_width', 940));
        define('HEADER_IMAGE_HEIGHT', apply_filters('yourtheme_header_image_height', 198));
// We'll be using post thumbnails for custom header images on posts and pages.
// We want them to be 940 pixels wide by 198 pixels tall (larger images will be auto-cropped to fit).
        set_post_thumbnail_size(HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, true);
// Don't support text inside the header image.
        define('NO_HEADER_TEXT', true);
// Add a way for the custom header to be styled in the admin panel that controls
// custom headers. See yourtheme_admin_header_style(), below.
        add_custom_image_header('', 'yourtheme_admin_header_style');
    }
endif;
if (!function_exists('yourtheme_admin_header_style')) :
    /**
     * Styles the header image displayed on the Appearance > Header admin panel.
     *
     * Referenced via add_custom_image_header() in yourtheme_setup().
     *
     * @since 3.0.0
     */
    function yourtheme_admin_header_style()
    {
        ?>
        <style type="text/css">
            #headimg {
                height: <?php echo HEADER_IMAGE_HEIGHT;
?>px;
                width: <?php echo HEADER_IMAGE_WIDTH;
?>px;
            }

            #headimg h1, #headimg #desc {
                display: none;
            }
        </style>
        <?php
    }
endif;

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="btn btn-default btn-sm"';
}

?>

