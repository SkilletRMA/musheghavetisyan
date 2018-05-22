<?php
add_filter('show_admin_bar', '__return_false');
function my_enqueue_scripts() {

    //wp_enqueue_style('da_hm_log_style-css', '/wp-content/themes/avetisyan/css/header/lib/log-style7bcd.css');
    wp_enqueue_style('load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
    wp_enqueue_style('wpdreams-asp-basic-css', '/wp-content/themes/avetisyan/css/header/style.basic08ef.css');
    wp_enqueue_style('wpdreams-asp-chosen-css', '/wp-content/themes/avetisyan/css/header/chosen08ef.css');
    wp_enqueue_style('new-royalslider-core-css-css', '/wp-content/themes/avetisyan/css/header/royalslider46df.css');
    wp_enqueue_style('rsDefaultInv-css-css', '/wp-content/themes/avetisyan/css/header/rs-default-inverted46df.css');
    wp_enqueue_style('slider_rs_home-css-css', '/wp-content/themes/avetisyan/css/header/rs-home-template46df.css');


    //wp_enqueue_style('font-awesome-css', '/wp-content/themes/avetisyan/css/header/lib/font-awesome.css');
    wp_enqueue_style('font-awesome-47-style', '/wp-content/themes/avetisyan/css/header/lib/4.7.0/font-awesome.css');
    wp_enqueue_style('bootstrap-css', '/wp-content/themes/avetisyan/css/header/lib/bootstrap.min.css');
    wp_enqueue_style('lib-css', '/wp-content/themes/avetisyan/css/header/lib/0257ef63-fe24-4ebb-95d5-84903abebe14.css');
    wp_enqueue_style('style29b7-css', '/wp-content/themes/avetisyan/css/header/style29b7.css');
    wp_enqueue_style('magnific-popup-css', '/wp-content/themes/avetisyan/css/header/magnific-popup.css');
    wp_enqueue_style('owl-css', '/wp-content/themes/avetisyan/css/header/owl.css');
    wp_enqueue_style('theme29b7-css', '/wp-content/themes/avetisyan/css/header/theme29b7.css');
	wp_enqueue_style('slick-css', '/wp-content/themes/avetisyan/css/header/lib/slick.css');
    wp_enqueue_style('style-css', get_stylesheet_uri());
    wp_enqueue_script('', '/wp-content/themes/avetisyan/js/header/lib/jquery.min.js');
    wp_enqueue_script('slick.min-script', '/wp-content/themes/avetisyan/js/header/lib/slick.min.js');
    wp_enqueue_script('6055763014-script', '/wp-content/themes/avetisyan/js/header/lib/6055763014.js');
    wp_enqueue_script('jquery-ui.min-script', '/wp-content/themes/avetisyan/js/header/lib/jquery-ui.min.js');
    //wp_enqueue_script('jquery-validate.min-script', '/wp-content/themes/avetisyan/js/header/lib/jquery-validate.min.js');


	//wp_enqueue_style('log-style7bcd-css', '/wp-content/themes/avetisyan/css/header/log-style7bcd.css');




    wp_enqueue_script('bootstrap.min-script', '/wp-content/themes/avetisyan/js/header/lib/bootstrap.min.js');
    wp_enqueue_script('react-script', '/wp-content/themes/avetisyan/js/header/lib/react.js');
    wp_enqueue_script('magnific-script', '/wp-content/themes/avetisyan/js/header/jquery.magnific-popup.min.js');
    wp_enqueue_script('jquery.selectric-script', '/wp-content/themes/avetisyan/js/header/jquery.selectric.js');
    wp_enqueue_script('sticky.tabs-script', '/wp-content/themes/avetisyan/js/header/sticky.tabs.js');


    wp_enqueue_script('js.cookie-script', '/wp-content/themes/avetisyan/js/header/js.cookie.js');
    wp_enqueue_script('backtretch-script', '/wp-content/themes/avetisyan/js/header/jquery.backstretch.min.js');
    wp_enqueue_script('countdown-script', '/wp-content/themes/avetisyan/js/header/jquery.countdown.min.js');
    wp_enqueue_script('cycle2-script', '/wp-content/themes/avetisyan/js/header/jquery.cycle2.min.js');
    wp_enqueue_script('equalizer-script', '/wp-content/themes/avetisyan/js/header/jquery.equalizer.min.js');
    wp_enqueue_script('waypoints-script', '/wp-content/themes/avetisyan/js/header/jquery.waypoints.min.js');
    wp_enqueue_script('velocity-script', '/wp-content/themes/avetisyan/js/header/velocity.min.js');
    wp_enqueue_script('velocityui-script', '/wp-content/themes/avetisyan/js/header/velocity.ui.js');
    wp_enqueue_script('vertical-slider-script', '/wp-content/themes/avetisyan/js/header/vertical-slider.js');
    wp_enqueue_script('informatica.connector-script', '/wp-content/themes/avetisyan/js/header/informatica.connector.js');
    //wp_enqueue_script('additional-methods.min-script', '/wp-content/themes/avetisyan/js/header/lib/additional-methods.min.js');

    wp_enqueue_script('scripts-script', '/wp-content/themes/avetisyan/js/header/scriptsolik.js');
    wp_enqueue_script('velocity.ui-script', '/wp-content/themes/avetisyan/js/header/velocity.ui.js');


    wp_register_script('form', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js');
    //wp_enqueue_script('forms2.min-script', '/wp-content/themes/avetisyan/js/header/lib/forms2.min.js');
    wp_enqueue_script('owl.carousel-script', '/wp-content/themes/avetisyan/js/header/owl.carousel.min.js');
    wp_enqueue_script('mine-script', '/wp-content/themes/avetisyan/js/mine.js', array(), false, true);
    wp_enqueue_script('script-script', '/wp-content/themes/avetisyan/js/script.js', array(), false, true);
    //wp_enqueue_script('pagescroll2id-script', '/wp-content/themes/avetisyan/js/jquery.malihu.PageScroll2id');

    wp_enqueue_script('chosen.jquery.min08ef-script', '/wp-content/themes/avetisyan/js/footer/chosen.jquery.min08ef.js', array(), false, true);
	wp_enqueue_script('core.mine899-script', '/wp-content/themes/avetisyan/js/footer/core.mine899.js', array(), false, true);
	wp_enqueue_script('datepicker.mine899-script', '/wp-content/themes/avetisyan/js/footer/datepicker.mine899.js', array(), false, true);
	wp_enqueue_script('jquery.ajaxsearchpro-noui-isotope.min08ef-script', '/wp-content/themes/avetisyan/js/footer/jquery.ajaxsearchpro-noui-isotope.min08ef.js', array(), false, true);
	wp_enqueue_script('jquery.royalslider.min46df-script', '/wp-content/themes/avetisyan/js/footer/jquery.royalslider.min46df.js', array(), false, true);
	wp_enqueue_script('photostack08ef-script', '/wp-content/themes/avetisyan/js/footer/photostack08ef.js', array(), false, true);
	wp_enqueue_script('scroll-back-to-top-script', '/wp-content/themes/avetisyan/js/footer/scroll-back-to-top.js', array(), false, true);
	//wp_enqueue_script('segment-trackingc66d-script', '/wp-content/themes/avetisyan/js/footer/segment-trackingc66d.js', array(), false, true);
	wp_enqueue_script('wp-embed.min7bcd-script', '/wp-content/themes/avetisyan/js/footer/wp-embed.min7bcd.js', array(), false, true);

}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

function my_setup() {
	load_theme_textdomain('my');
	//it's adding title
	add_theme_support('title-tag');
	/*
	add_theme_support('custom-logo', array(
		'height' => '100%',
		'width' => '100%',
		'flex-height' => true,
		'flex-width' => true
	));
	add_theme_support('post-formats', array(
		'aside',
		'image',
		'video',
		'gallery',
	));
	*/
	add_theme_support('featured-images', array(

	));
	register_nav_menu('primary', 'Primary Menu');
}
add_action('after_setup_theme', 'my_setup');


function featured_images() {
	register_nav_menus(array(
		'primary'=>__('Primary Menu'),
		'footer'=>__('Footer Menu'),
	));
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'featured_images');

global $post;
$post_id = $post->ID;


$pagebloglg = apply_filters( 'wpml_object_id', 5, 'post' );
$pageblog = get_page( $pagebloglg );
//$pagenewslg = apply_filters( 'wpml_object_id', 44, 'post' );
//$pagenews = get_page( $pagenewslg );
//$pagestorylg = apply_filters( 'wpml_object_id', 58, 'post' );
//$pagestory = get_page( $pagestorylg );
//$pagepodcastlg = apply_filters( 'wpml_object_id', 127, 'post' );
//$pagepodcast = get_page( $pagepodcastlg );
$pageteamlg = apply_filters( 'wpml_object_id', 148, 'post' );
$pageteam = get_page( $pageteamlg );
$pagevideobloglg = apply_filters( 'wpml_object_id', 85, 'post' );
$pagevideoblog = get_page( $pagevideobloglg );
$pageasklg = apply_filters( 'wpml_object_id', 172, 'post' );
$pageask = get_page( $pageasklg );
$pageaboutlg = apply_filters( 'wpml_object_id', 190, 'post' );
$pageabout = get_page($pageaboutlg);
$pagecoachinglg = apply_filters( 'wpml_object_id', 204, 'post' );
$pagecoaching = get_page($pagecoachinglg);
$pageeventlg = apply_filters( 'wpml_object_id', 145, 'post' );
$pageevent = get_page($pageeventlg);
$pagehomelg = apply_filters( 'wpml_object_id', 292, 'post');
$pagehome = get_page($pagehomelg);



add_filter('excerpt_more', function($more) {
   return '...';
});

function fontawesome_dashboard() {
    wp_enqueue_style('fontawesome', 'http:////netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css', '', '4.0.3', 'all');
}

add_action('admin_init', 'fontawesome_dashboard');

function fontawesome_icon_dashboard() {
    echo "<style type='text/css' media='screen'>
   		icon16.icon-media:before, #adminmenu .menu-icon-team div.wp-menu-image:before {
   		font-family: Fontawesome !important;
   		content: '\\f0c0';
     }</style>";
    echo "<style type='text/css' media='screen'>
   		icon16.icon-media:before, #adminmenu .menu-icon-ask div.wp-menu-image:before {
   		font-family: Fontawesome !important;
   		content: '\\f0e5';
     }</style>";
    echo "<style type='text/css' media='screen'>
   		icon16.icon-media:before, #adminmenu .menu-icon-faq div.wp-menu-image:before {
   		font-family: Fontawesome !important;
   		content: '\\f059';
     }</style>";
    echo "<style type='text/css' media='screen'>
   		icon16.icon-media:before, #adminmenu .menu-icon-success-story div.wp-menu-image:before {
   		font-family: Fontawesome !important;
   		content: '\\f164';
     }</style>";
}

add_action('admin_head', 'fontawesome_icon_dashboard');



function kama_breadcrumbs( $sep = ' » ', $l10n = array(), $args = array() ){
    $kb = new Kama_Breadcrumbs;
    echo $kb->get_crumbs( $sep, $l10n, $args );
}
class Kama_Breadcrumbs {
    public $arg;

    // Локализация
    static $l10n = array(
        'home'       => 'Home',
        'paged'      => 'Page %d',
        '_404'       => 'Error 404',
        'search'     => 'Результаты поиска по запросу - <b>%s</b>',
        'author'     => 'Архив автора: <b>%s</b>',
        'year'       => 'Архив за <b>%d</b> год',
        'month'      => 'Архив за: <b>%s</b>',
        'day'        => '',
        'attachment' => 'Media: %s',
        'tag'        => 'Записи по метке: <b>%s</b>',
        'tax_tag'    => '%1$s из "%2$s" по тегу: <b>%3$s</b>',
        // tax_tag выведет: 'тип_записи из "название_таксы" по тегу: имя_термина'.
        // Если нужны отдельные холдеры, например только имя термина, пишем так: 'записи по тегу: %3$s'
    );

    // Параметры по умолчанию
    static $args = array(
        'on_front_page'   => true,  // выводить крошки на главной странице
        'show_post_title' => true,  // показывать ли название записи в конце (последний элемент). Для записей, страниц, вложений
        'show_term_title' => true,  // показывать ли название элемента таксономии в конце (последний элемент). Для меток, рубрик и других такс
        'title_patt'      => '<span class="kb_title">%s</span>', // шаблон для последнего заголовка. Если включено: show_post_title или show_term_title
        'last_sep'        => true,  // показывать последний разделитель, когда заголовок в конце не отображается
        'markup'          => 'schema.org', // 'markup' - микроразметка. Может быть: 'rdf.data-vocabulary.org', 'schema.org', '' - без микроразметки
        // или можно указать свой массив разметки:
        // array( 'wrappatt'=>'<div class="kama_breadcrumbs">%s</div>', 'linkpatt'=>'<a href="%s">%s</a>', 'sep_after'=>'', )
        'priority_tax'    => array('category'), // приоритетные таксономии, нужно когда запись в нескольких таксах
        'priority_terms'  => array(), // 'priority_terms' - приоритетные элементы таксономий, когда запись находится в нескольких элементах одной таксы одновременно.
        // Например: array( 'category'=>array(45,'term_name'), 'tax_name'=>array(1,2,'name') )
        // 'category' - такса для которой указываются приор. элементы: 45 - ID термина и 'term_name' - ярлык.
        // порядок 45 и 'term_name' имеет значение: чем раньше тем важнее. Все указанные термины важнее неуказанных...
        'nofollow' => false, // добавлять rel=nofollow к ссылкам?

        // служебные
        'sep'             => '',
        'linkpatt'        => '',
        'pg_end'          => '',
    );

    function get_crumbs( $sep, $l10n, $args ){
        global $post, $wp_query, $wp_post_types;

        self::$args['sep'] = $sep;

        // Фильтрует дефолты и сливает
        $loc = (object) array_merge( apply_filters('kama_breadcrumbs_default_loc', self::$l10n ), $l10n );
        $arg = (object) array_merge( apply_filters('kama_breadcrumbs_default_args', self::$args ), $args );

        $arg->sep = '<span class="kb_sep">'. $arg->sep .'</span>'; // дополним

        // упростим
        $sep = & $arg->sep;
        $this->arg = & $arg;

        // микроразметка ---
        if(1){
            $mark = & $arg->markup;

            // Разметка по умолчанию
            if( ! $mark ) $mark = array(
                'wrappatt'  => '<div class="kama_breadcrumbs">%s</div>',
                'linkpatt'  => '<a href="%s">%s</a>',
                'sep_after' => '',
            );
            // rdf
            elseif( $mark === 'rdf.data-vocabulary.org' ) $mark = array(
                'wrappatt'   => '<div class="kama_breadcrumbs" prefix="v: http://rdf.data-vocabulary.org/#">%s</div>',
                'linkpatt'   => '<span typeof="v:Breadcrumb"><a href="%s" rel="v:url" property="v:title">%s</a>',
                'sep_after'  => '</span>', // закрываем span после разделителя!
            );
            // schema.org
            elseif( $mark === 'schema.org' ) $mark = array(
                'wrappatt'   => '<div class="kama_breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">%s</div>',
                'linkpatt'   => '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="%s" itemprop="item"><span itemprop="name">%s</span></a></span>',
                'sep_after'  => '',
            );

            elseif( ! is_array($mark) )
                die( __CLASS__ .': "markup" parameter must be array...');

            $wrappatt  = $mark['wrappatt'];
            $arg->linkpatt  = $arg->nofollow ? str_replace('<a ','<a rel="nofollow"', $mark['linkpatt']) : $mark['linkpatt'];
            $arg->sep      .= $mark['sep_after']."\n";
        }

        $linkpatt = $arg->linkpatt; // упростим

        $q_obj = get_queried_object();

        // может это архив пустой таксы?
        $ptype = null;
        if( empty($post) ){
            if( isset($q_obj->taxonomy) )
                $ptype = & $wp_post_types[ get_taxonomy($q_obj->taxonomy)->object_type[0] ];
        }
        else $ptype = & $wp_post_types[ $post->post_type ];

        // paged
        $arg->pg_end = '';
        if( ($paged_num = get_query_var('paged')) || ($paged_num = get_query_var('page')) )
            $arg->pg_end = $sep . sprintf( $loc->paged, (int) $paged_num );

        $pg_end = $arg->pg_end; // упростим

        // ну, с богом...
        $out = '';

        if( is_front_page() ){
            return $arg->on_front_page ? sprintf( $wrappatt, ( $paged_num ? sprintf($linkpatt, get_home_url(), $loc->home) . $pg_end : $loc->home ) ) : '';
        }
        // страница записей, когда для главной установлена отдельная страница.
        elseif( is_home() ) {
            $out = $paged_num ? ( sprintf( $linkpatt, get_permalink($q_obj), esc_html($q_obj->post_title) ) . $pg_end ) : esc_html($q_obj->post_title);
        }
        elseif( is_404() ){
            $out = $loc->_404;
        }
        elseif( is_search() ){
            $out = sprintf( $loc->search, esc_html( $GLOBALS['s'] ) );
        }
        elseif( is_author() ){
            $tit = sprintf( $loc->author, esc_html($q_obj->display_name) );
            $out = ( $paged_num ? sprintf( $linkpatt, get_author_posts_url( $q_obj->ID, $q_obj->user_nicename ) . $pg_end, $tit ) : $tit );
        }
        elseif( is_year() || is_month() || is_day() ){
            $y_url  = get_year_link( $year = get_the_time('Y') );

            if( is_year() ){
                $tit = sprintf( $loc->year, $year );
                $out = ( $paged_num ? sprintf($linkpatt, $y_url, $tit) . $pg_end : $tit );
            }
            // month day
            else {
                $y_link = sprintf( $linkpatt, $y_url, $year);
                $m_url  = get_month_link( $year, get_the_time('m') );

                if( is_month() ){
                    $tit = sprintf( $loc->month, get_the_time('F') );
                    $out = $y_link . $sep . ( $paged_num ? sprintf( $linkpatt, $m_url, $tit ) . $pg_end : $tit );
                }
                elseif( is_day() ){
                    $m_link = sprintf( $linkpatt, $m_url, get_the_time('F'));
                    $out = $y_link . $sep . $m_link . $sep . get_the_time('l');
                }
            }
        }
        // Древовидные записи
        elseif( is_singular() && $ptype->hierarchical ){
            $out = $this->_add_title( $this->_page_crumbs($post), $post );
        }
        // Таксы, плоские записи и вложения
        else {
            $term = $q_obj; // таксономии

            // определяем термин для записей (включая вложения attachments)
            if( is_singular() ){
                // изменим $post, чтобы определить термин родителя вложения
                if( is_attachment() && $post->post_parent ){
                    $save_post = $post; // сохраним
                    $post = get_post($post->post_parent);
                }












                if( isset($save_post) ) $post = $save_post; // вернем обратно (для вложений)
            }

            // вывод

            // все виды записей с терминами или термины
            if( $term && isset($term->term_id) ){
                $term = apply_filters('kama_breadcrumbs_term', $term );

                // attachment
                if( is_attachment() ){
                    if( ! $post->post_parent )
                        $out = sprintf( $loc->attachment, esc_html($post->post_title) );
                    else {
                        if( ! $out = apply_filters('attachment_tax_crumbs', '', $term, $this ) ){
                            $_crumbs    = $this->_tax_crumbs( $term, 'self' );
                            $parent_tit = sprintf( $linkpatt, get_permalink($post->post_parent), get_the_title($post->post_parent) );
                            $_out = implode( $sep, array($_crumbs, $parent_tit) );
                            $out = $this->_add_title( $_out, $post );
                        }
                    }
                }
                // single
                elseif( is_single() ){
                    if( ! $out = apply_filters('post_tax_crumbs', '', $term, $this ) ){
                        $_crumbs = $this->_tax_crumbs( $term, 'self' );
                        $out = $this->_add_title( $_crumbs, $post );
                    }
                }
                // не древовидная такса (метки)
                elseif( ! is_taxonomy_hierarchical($term->taxonomy) ){
                    // метка
                    if( is_tag() )
                        $out = $this->_add_title('', $term, sprintf( $loc->tag, esc_html($term->name) ) );
                    // такса
                    elseif( is_tax() ){
                        $post_label = $ptype->labels->name;
                        $tax_label = $GLOBALS['wp_taxonomies'][ $term->taxonomy ]->labels->name;
                        $out = $this->_add_title('', $term, sprintf( $loc->tax_tag, $post_label, $tax_label, esc_html($term->name) ) );
                    }
                }
                // древовидная такса (рибрики)
                else {
                    if( ! $out = apply_filters('term_tax_crumbs', '', $term, $this ) ){
                        $_crumbs = $this->_tax_crumbs( $term, 'parent' );
                        $out = $this->_add_title( $_crumbs, $term, esc_html($term->name) );
                    }
                }
            }
            // влоежния от записи без терминов
            elseif( is_attachment() ){
                $parent = get_post($post->post_parent);
                $parent_link = sprintf( $linkpatt, get_permalink($parent), esc_html($parent->post_title) );
                $_out = $parent_link;

                // вложение от записи древовидного типа записи
                if( is_post_type_hierarchical($parent->post_type) ){
                    $parent_crumbs = $this->_page_crumbs($parent);
                    $_out = implode( $sep, array( $parent_crumbs, $parent_link ) );
                }

                $out = $this->_add_title( $_out, $post );
            }
            // записи без терминов
            elseif( is_singular() ){
                $out = $this->_add_title( '', $post );
            }
        }

        // замена ссылки на архивную страницу для типа записи
        $home_after = apply_filters('kama_breadcrumbs_home_after', '', $linkpatt, $sep, $ptype );

        if( '' === $home_after ){
            // Ссылка на архивную страницу типа записи для: отдельных страниц этого типа; архивов этого типа; таксономий связанных с этим типом.
            if( $ptype && $ptype->has_archive && ! in_array( $ptype->name, array('post','page','attachment') )
                && ( is_post_type_archive() || is_singular() || (is_tax() && in_array($term->taxonomy, $ptype->taxonomies)) )
            ){
                $pt_title = $ptype->labels->name;

                // первая страница архива типа записи
                if( is_post_type_archive() && ! $paged_num )
                    $home_after = $pt_title;
                // singular, paged post_type_archive, tax
                else{
                    $home_after = sprintf( $linkpatt, get_post_type_archive_link($ptype->name), $pt_title );

                    $home_after .= ( ($paged_num && ! is_tax()) ? $pg_end : $sep ); // пагинация
                }
            }
        }

        $before_out = sprintf( $linkpatt, home_url(), $loc->home ) . ( $home_after ? $sep.$home_after : ($out ? $sep : '') );

        $out = apply_filters('kama_breadcrumbs_pre_out', $out, $sep, $loc, $arg );

        $out = sprintf( $wrappatt, $before_out . $out );

        return apply_filters('kama_breadcrumbs', $out, $sep, $loc, $arg );
    }

    function _page_crumbs( $post ){
        $parent = $post->post_parent;

        $crumbs = array();
        while( $parent ){
            $page = get_post( $parent );
            $crumbs[] = sprintf( $this->arg->linkpatt, get_permalink($page), esc_html($page->post_title) );
            $parent = $page->post_parent;
        }

        return implode( $this->arg->sep, array_reverse($crumbs) );
    }

    function _tax_crumbs( $term, $start_from = 'self' ){
        $termlinks = array();
        $term_id = ($start_from === 'parent') ? $term->parent : $term->term_id;
        while( $term_id ){
            $term       = get_term( $term_id, $term->taxonomy );
            $termlinks[] = sprintf( $this->arg->linkpatt, get_term_link($term), esc_html($term->name) );
            $term_id    = $term->parent;
        }

        if( $termlinks )
            return implode( $this->arg->sep, array_reverse($termlinks) ) /*. $this->arg->sep*/;
        return '';
    }

    // добалвяет заголовок к переданному тексту, с учетом всех опций. Добавляет разделитель в начало, если надо.
    function _add_title( $add_to, $obj, $term_title = '' ){
        $arg = & $this->arg; // упростим...
        $title = $term_title ? $term_title : esc_html($obj->post_title); // $term_title чиститься отдельно, теги моугт быть...
        $show_title = $term_title ? $arg->show_term_title : $arg->show_post_title;

        // пагинация
        if( $arg->pg_end ){
            $link = $term_title ? get_term_link($obj) : get_permalink($obj);
            $add_to .= ($add_to ? $arg->sep : '') . sprintf( $arg->linkpatt, $link, $title ) . $arg->pg_end;
        }
        // дополняем - ставим sep
        elseif( $add_to ){
            if( $show_title )
                $add_to .= $arg->sep . sprintf( $arg->title_patt, $title );
            elseif( $arg->last_sep )
                $add_to .= $arg->sep;
        }
        // sep будет потом...
        elseif( $show_title )
            $add_to = sprintf( $arg->title_patt, $title );

        return $add_to;
    }

}


$content = get_the_content();






//META BOXES


//Videoblog Meta Box

    //add meta box
    add_action( 'add_meta_boxes', 'my_video_meta_box' );
    function my_video_meta_box()
    {
        add_meta_box('my-video-meta-box-id', 'Title Video', 'video_meta_box_callback', array('videoblog', 'success-story', 'page', 'custom_video'), 'side', 'high');
    }

    //meta box callback
    function video_meta_box_callback() {
        global $post;
        $values1 = get_post_custom( $post->ID );
        $video = isset( $values1['my_meta_box_video'] ) ? $values1['my_meta_box_video'][0] : '';
        wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
        ?>
        <label for="my_meta_box_text" style="margin-right: 10px;">Video Label</label>
        <input type="text" name="my_meta_box_video" id="my_meta_box_video"  style="border-radius: 5px 5px 5px 5px; margin-top: 5px;" value="<?php echo $video; ?>" />
        <?php
    }

    //saving meta box
    add_action( 'save_post', 'my_video_meta_box_save' );
    function my_video_meta_box_save( $post_id )
    {
        if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
        if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
        if( !current_user_can( 'edit_post' ) ) return;
        if( isset( $_POST['my_meta_box_video'] ) )
            update_post_meta( $post_id, 'my_meta_box_video', wp_kses( $_POST['my_meta_box_video'], $video) );
    }




//Ask title text

//add meta box
add_action( 'add_meta_boxes', 'my_success_meta_box' );
function my_success_meta_box()
{
    add_meta_box('my-success-meta-box-id', 'Title Text', 'success_meta_box_callback', 'success-story', 'side', 'high');
}

//meta box callback
function success_meta_box_callback() {
    global $post;
    $values10 = get_post_custom( $post->ID );
    $success = isset( $values10['my_meta_box_success'] ) ? $values10['my_meta_box_success'][0] : '';
    wp_nonce_field( 'my_success_meta_box_nonce', 'meta_box_nonce_field' );
    ?>
    <label for="my_meta_box_text" style="margin-right: 10px;">Text Label</label>
    <input type="text" name="my_meta_box_success" id="my_meta_box_success"  style="border-radius: 5px 5px 5px 5px; margin-top: 5px;" value="<?php echo $success; ?>" /><br><br>
    <label for="my_meta_box_text" style="margin-bottom: 10px;">Text Area</label>
    <textarea rows="6" cols="35" type="text" name="my_meta_box_success_textarea" id="my_meta_box_success_textarea" ><?php echo get_post_meta($post->ID, 'my_meta_box_success_textarea', true); ?></textarea>
    <?php
}

//saving meta box
add_action( 'save_post', 'my_success_meta_box_save' );
function my_success_meta_box_save( $post_id )
{
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if( !isset( $_POST['meta_box_nonce_field'] ) || !wp_verify_nonce( $_POST['meta_box_nonce_field'], 'my_success_meta_box_nonce' ) ) return;
    if( !current_user_can( 'edit_post' ) ) return;
    if( isset( $_POST['my_meta_box_success'] ) )
        update_post_meta( $post_id, 'my_meta_box_success', wp_kses( $_POST['my_meta_box_success'], $success) );
    if( isset( $_POST['my_meta_box_success_textarea'] ) )
        update_post_meta( $post_id, 'my_meta_box_success_textarea', wp_kses( $_POST['my_meta_box_success_textarea'], $success) );
}






//Team Member Meta Box

    //add meta box
    add_action( 'add_meta_boxes', 'my_team_contact_meta_box' );
    function my_team_contact_meta_box()
    {
        add_meta_box('my-contact-meta-box-id', 'People Information', 'contact_meta_box_callback', 'team', 'side', 'default');
    }

    //meta box callback
    function contact_meta_box_callback() {
        global $post;
        $values3 = get_post_custom( $post->ID );
        $name = isset( $values3['my_meta_box_name'] ) ? $values3['my_meta_box_name'][0] : '';
        $email = isset( $values3['my_meta_box_email'] ) ? $values3['my_meta_box_email'][0] : '';
        $phone = isset( $values3['my_meta_box_phone'] ) ? $values3['my_meta_box_phone'][0] : '';
        $skype = isset( $values3['my_meta_box_skype'] ) ? $values3['my_meta_box_skype'][0] : '';
        wp_nonce_field( 'my_meta_box_nonce2', 'meta_box_nonce2' );
        ?>
        <label for="my_meta_box_name" style="margin-right: 10px;">Name:</label>
        <input type="text" name="my_meta_box_name" id="my_meta_box_name"  style="border-radius: 5px 5px 5px 5px; margin-top: 5px; margin-left: 7px;" value="<?php echo $name; ?>" />
        <label for="my_meta_box_email" style="margin-right: 10px;">Email:</label>
        <input type="text" name="my_meta_box_email" id="my_meta_box_email"  style="border-radius: 5px 5px 5px 5px; margin-top: 5px; margin-left: 11px;" value="<?php echo $email; ?>" />
        <label for="my_meta_box_phone" style="margin-right: 10px;">Phone:</label>
        <input type="text" name="my_meta_box_phone" id="my_meta_box_phone"  style="border-radius: 5px 5px 5px 5px; margin-top: 5px; margin-left: 5px;" value="<?php echo $phone; ?>" />
        <label for="my_meta_box_skype" style="margin-right: 10px;">Skype:</label>
        <input type="text" name="my_meta_box_skype" id="my_meta_box_skype"  style="border-radius: 5px 5px 5px 5px; margin-top: 5px; margin-left: 8px;" value="<?php echo $skype; ?>" />

        <?php
    }

    //saving meta box
    add_action( 'save_post', 'my_team_contact_meta_box_save' );
    function my_team_contact_meta_box_save( $post_id )
    {
        if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
        if( !isset( $_POST['meta_box_nonce2'] ) || !wp_verify_nonce( $_POST['meta_box_nonce2'], 'my_meta_box_nonce2' ) ) return;
        if( !current_user_can( 'edit_post' ) ) return;
        if( isset( $_POST['my_meta_box_name'] ) )
            update_post_meta( $post_id, 'my_meta_box_name', wp_kses( $_POST['my_meta_box_name'], $name) );
        if( isset( $_POST['my_meta_box_email'] ) )
            update_post_meta( $post_id, 'my_meta_box_email', wp_kses( $_POST['my_meta_box_email'], $email) );
        if( isset( $_POST['my_meta_box_phone'] ) )
            update_post_meta( $post_id, 'my_meta_box_phone', wp_kses( $_POST['my_meta_box_phone'], $phone) );
        if( isset( $_POST['my_meta_box_skype'] ) )
            update_post_meta( $post_id, 'my_meta_box_skype', wp_kses( $_POST['my_meta_box_skype'], $skype) );
    }







//Podcast textarea Meta Box

    //add meta box
    add_action( 'add_meta_boxes', 'my_podcast_textarea_meta_box' );
    function my_podcast_textarea_meta_box()
    {
    add_meta_box('my-podcast-textarea-meta-box-id', 'Title Text', 'podcast_textarea_meta_box_callback', array('podcast', 'ask'), 'side', 'high');
    }

    //meta box callback
    function podcast_textarea_meta_box_callback() {
    global $post;
    wp_nonce_field( 'my_meta_box_nonce3', 'meta_box_nonce3' );
    ?>
        <textarea rows="3" cols="35" type="text" name="my_meta_box_textarea" id="my_meta_box_textarea" ><?php echo get_post_meta($post->ID, 'my_meta_box_podcast_textarea', true); ?></textarea>
<?php
}

    //saving meta box
    add_action( 'save_post', 'my_podcast_textarea_meta_box_save' );
    function my_podcast_textarea_meta_box_save( $post_id )
    {
        if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
        if( !isset( $_POST['meta_box_nonce3'] ) || !wp_verify_nonce( $_POST['meta_box_nonce3'], 'my_meta_box_nonce3' ) ) return;
        if( !current_user_can( 'edit_post' ) ) return;
        if( isset( $_POST['my_meta_box_textarea'] ) )
            update_post_meta( $post_id, 'my_meta_box_podcast_textarea', wp_kses( $_POST['my_meta_box_textarea'], $textarea) );
    }





//Biography textarea Meta Box

    //add meta box
    add_action( 'add_meta_boxes', 'my_biography_textarea_meta_box' );
    function my_biography_textarea_meta_box()
    {
    add_meta_box('my-biography-meta-box-id', 'Title & Footer Text', 'biography_textarea_meta_box_callback', 'page', 'side', 'high');
    }

    //meta box callback
    function biography_textarea_meta_box_callback() {
    global $post;
    wp_nonce_field( 'my_meta_box_nonce4', 'meta_box_nonce4' );
    ?>
        <h5>Title text</h5>
        <textarea rows="3" cols="35" type="text" name="title_biography" id="title_biography" ><?php echo get_post_meta($post->ID, 'my_biography_title_textarea', true); ?></textarea>
        <h5>Footer text</h5>
        <textarea rows="3" cols="35" type="text" name="footer_biography" id="footer_biography" ><?php echo get_post_meta($post->ID, 'my_biography_footer_textarea', true); ?></textarea>
    <?php
    }

        //saving meta box
        add_action( 'save_post', 'my_biography_textarea_meta_box_save' );
        function my_biography_textarea_meta_box_save( $post_id )
        {
            if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
            if( !isset( $_POST['meta_box_nonce4'] ) || !wp_verify_nonce( $_POST['meta_box_nonce4'], 'my_meta_box_nonce4' ) ) return;
            if( !current_user_can( 'edit_post' ) ) return;
            if( isset( $_POST['title_biography'] ) )
                update_post_meta( $post_id, 'my_biography_title_textarea', wp_kses( $_POST['title_biography'], $title_biography) );
            if( isset( $_POST['footer_biography'] ) )
                update_post_meta( $post_id, 'my_biography_footer_textarea', wp_kses( $_POST['footer_biography'], $footer_biography) );
        }





//Event video Meta Box

//add meta box
add_action( 'add_meta_boxes', 'my_event_video_meta_box' );
function my_event_video_meta_box()
{
    add_meta_box('event_video', 'Title Video', 'event_video_meta_box_callback', 'event', 'side', 'high');
}

//meta box callback
function event_video_meta_box_callback($post) {
  wp_nonce_field(plugin_basename(__FILE__),'event_video_content_nonce');
  $video = get_post_meta($post->ID ,"_event_video")?get_post_meta($post->ID,"_event_video")[0]:'';
    ?>
    <label for="my_meta_box_text" style="margin-right: 10px;">Video Label</label>
    <input type="text" name="event_video" id="my_event_meta_box_video"  style="border-radius: 5px 5px 5px 5px; margin-top: 5px;" value="<?= $video; ?>" />
    <?php
}

//saving meta box
add_action( 'save_post', 'my_event_video_meta_box_save' );
function my_event_video_meta_box_save( $post_id )
{
   if(isset($_POST['event_video'])){
       update_post_meta($post_id,'_event_video',$_POST['event_video']);
   }
}





//Event video Meta Box

//add meta box
add_action( 'add_meta_boxes', 'my_header_footer_meta_box' );
function my_header_footer_meta_box()
{
    add_meta_box('header_footer', 'Social Labels', 'my_header_footer_meta_box_callback', 'page', 'side', 'high');
}

//meta box callback
function my_header_footer_meta_box_callback($post) {
    wp_nonce_field(plugin_basename(__FILE__),'header_footer_content_nonce');
    $telephone = get_post_meta($post->ID ,"_header_telephone")?get_post_meta($post->ID,"_header_telephone")[0]:'';
    $facebook = get_post_meta($post->ID ,"_header_facebook")?get_post_meta($post->ID,"_header_facebook")[0]:'';
    $twitter = get_post_meta($post->ID ,"_header_twitter")?get_post_meta($post->ID,"_header_twitter")[0]:'';
    $vk = get_post_meta($post->ID ,"_header_vk")?get_post_meta($post->ID,"_header_vk")[0]:'';
    ?>
    <label for="my_meta_box_text" style="margin-right: 10px;">Tel: </label>
    <input type="text" name="header_telephone" id="my_event_meta_box_tel"  style="border-radius: 5px 5px 5px 5px; margin-top: 5px;" value="<?= $telephone; ?>" /><br>
    <label for="my_meta_box_text" style="margin-right: 10px;">Facebook: </label>
    <input type="text" name="header_facebook" id="my_event_meta_box_facebook"  style="border-radius: 5px 5px 5px 5px; margin-top: 5px;" value="<?= $facebook; ?>" /><br>
    <label for="my_meta_box_text" style="margin-right: 10px;">Instagram: </label>
    <input type="text" name="header_twitter" id="my_event_meta_box_twitter"  style="border-radius: 5px 5px 5px 5px; margin-top: 5px;" value="<?= $twitter; ?>" /><br>
    <label for="my_meta_box_text" style="margin-right: 10px;">Youtube: </label>
    <input type="text" name="header_vk" id="my_event_meta_box_vk"  style="border-radius: 5px 5px 5px 5px; margin-top: 5px;" value="<?= $vk; ?>" />
    <?php
}

//saving meta box
add_action( 'save_post', 'my_header_footer_meta_save' );
function my_header_footer_meta_save( $post_id )
{
    if(isset($_POST['header_telephone'])){
        update_post_meta($post_id,'_header_telephone',$_POST['header_telephone']);
    }
    if(isset($_POST['header_facebook'])){
        update_post_meta($post_id,'_header_facebook',$_POST['header_facebook']);
    }
    if(isset($_POST['header_twitter'])){
        update_post_meta($post_id,'_header_twitter',$_POST['header_twitter']);
    }
    if(isset($_POST['header_vk'])){
        update_post_meta($post_id,'_header_vk',$_POST['header_vk']);
    }
}
















//Event Meta Box

//add meta box
add_action( 'admin_menu', 'my_event_category_meta_box' );
function my_event_category_meta_box()
{
    add_meta_box('my-event-category-meta-box-id', 'Event List Information', 'event_category_meta_box_callback', 'post', 'side', 'default');
}


//Term page a avelacnum create-i ejum
function event_category_add_meta_field() {
    ?>
    <div class="form-field">
        <label for="term_meta[video_term_meta]"><?php _e( 'Home page video', 'pippin' ); ?></label>
        <input type="text" name="term_meta[video_term_meta]" id="term_meta[video_term_meta]" value="">
        <p class="description"><?php _e( 'Enter a value for first part','pippin' ); ?></p>

        <label for="term_meta[custom_term_meta]"><?php _e( 'Home page lists', 'pippin' ); ?></label>
        <input type="text" name="term_meta[first_term_meta]" id="term_meta[first_term_meta]" value="">
        <p class="description"><?php _e( 'Enter a value for first part','pippin' ); ?></p>
        <input type="text" name="term_meta[second_term_meta]" id="term_meta[second_term_meta]" value="">
        <p class="description"><?php _e( 'Enter a value for second part','pippin' ); ?></p>
        <input type="text" name="term_meta[thirth_term_meta]" id="term_meta[thirth_term_meta]" value="">
        <p class="description"><?php _e( 'Enter a value for thirth part','pippin' ); ?></p>
        <input type="text" name="term_meta[fourth_term_meta]" id="term_meta[fourth_term_meta]" value="">
        <p class="description"><?php _e( 'Enter a value for fourth part','pippin' ); ?></p>
        <input type="text" name="term_meta[fifth_term_meta]" id="term_meta[fifth_term_meta]" value="">
        <p class="description"><?php _e( 'Enter a value for fifth part','pippin' ); ?></p>

        <label for="term_meta[textarea_term_meta]"><?php _e( 'Category page title text', 'pippin' ); ?></label>
        <textarea name="term_meta[first_textarea_term_meta]" id="term_meta[first_textarea_term_meta]"></textarea>
        <p class="description"><?php _e( 'Enter a title text','pippin' ); ?></p>

        <label for="term_meta[textarea_term_meta]"><?php _e( 'Category page footer text', 'pippin' ); ?></label>
        <textarea name="term_meta[second_textarea_term_meta]" id="term_meta[second_textarea_term_meta]"></textarea>
        <p class="description"><?php _e( 'Enter a footer text','pippin' ); ?></p>
    </div>
<?php
}
add_action('event-categories_add_form_fields', 'event_category_add_meta_field');


//Term page-y update anelu ejy
function event_category_edit_meta_field($term) {
    // put the term ID into a variable
    $t_id = $term->term_id;
    // retrieve the existing value(s) for this meta field. This returns an array
    $term_meta = get_option( "taxonomy_$t_id" );
    ?>
    <tr class="form-field">
        <th scope="row" valign="top"><label for="term_meta[video_term_meta]"><?php _e( 'Video label', 'pippin' ); ?></label></th>
        <td>
            <input type="text" name="term_meta[video_term_meta]" id="term_meta[video_term_meta]" value="<?php echo esc_attr( $term_meta['video_term_meta'] ) ? esc_attr( $term_meta['video_term_meta'] ) : ''; ?>">
            <p class="description"><?php _e( 'Enter a value for video label','pippin' ); ?></p>

        </td>
    </tr>
    <tr class="form-field">
        <th scope="row" valign="top"><label for="term_meta[custom_term_meta]"><?php _e( 'First part', 'pippin' ); ?></label></th>
        <td>
            <input type="text" name="term_meta[first_term_meta]" id="term_meta[first_term_meta]" value="<?php echo esc_attr( $term_meta['first_term_meta'] ) ? esc_attr( $term_meta['first_term_meta'] ) : ''; ?>">
            <p class="description"><?php _e( 'Enter a value for first part','pippin' ); ?></p>

        </td>
    </tr>
    <tr class="form-field">
        <th scope="row" valign="top"><label for="term_meta[second_term_meta]"><?php _e( 'Second part', 'pippin' ); ?></label></th>
        <td>
            <input type="text" name="term_meta[second_term_meta]" id="term_meta[second_term_meta]" value="<?php echo esc_attr( $term_meta['second_term_meta'] ) ? esc_attr( $term_meta['second_term_meta'] ) : ''; ?>">
            <p class="description"><?php _e( 'Enter a value for second part','pippin' ); ?></p>

        </td>
    </tr>
    <tr class="form-field">
        <th scope="row" valign="top"><label for="term_meta[thirth_term_meta]"><?php _e( 'Thirth part', 'pippin' ); ?></label></th>
        <td>
            <input type="text" name="term_meta[thirth_term_meta]" id="term_meta[thirth_term_meta]" value="<?php echo esc_attr( $term_meta['thirth_term_meta'] ) ? esc_attr( $term_meta['thirth_term_meta'] ) : ''; ?>">
            <p class="description"><?php _e( 'Enter a value for thirth part','pippin' ); ?></p>

        </td>
    </tr>
    <tr class="form-field">
        <th scope="row" valign="top"><label for="term_meta[fourth_term_meta]"><?php _e( 'Fourth part', 'pippin' ); ?></label></th>
        <td>
            <input type="text" name="term_meta[fourth_term_meta]" id="term_meta[fourth_term_meta]" value="<?php echo esc_attr( $term_meta['fourth_term_meta'] ) ? esc_attr( $term_meta['fourth_term_meta'] ) : ''; ?>">
            <p class="description"><?php _e( 'Enter a value for fourth part','pippin' ); ?></p>

        </td>
    </tr>
    <tr class="form-field">
        <th scope="row" valign="top"><label for="term_meta[fifth_term_meta]"><?php _e( 'Fifth part', 'pippin' ); ?></label></th>
        <td>
            <input type="text" name="term_meta[fifth_term_meta]" id="term_meta[fifth_term_meta]" value="<?php echo esc_attr( $term_meta['fifth_term_meta'] ) ? esc_attr( $term_meta['fifth_term_meta'] ) : ''; ?>">
            <p class="description"><?php _e( 'Enter a value for fifth part','pippin' ); ?></p>

        </td>
    </tr>




    <tr class="form-field">
        <th scope="row" valign="top"><label for="term_meta[first_textarea_term_meta]"><?php _e( 'Category page title text', 'pippin' ); ?></label></th>
        <td>
            <textarea name="term_meta[first_textarea_term_meta]" id="term_meta[first_textarea_term_meta]"><?php echo get_option("taxonomy_$t_id", true)['first_textarea_term_meta']; ?></textarea>
            <p class="description"><?php _e( 'Enter a title text','pippin' ); ?></p>

        </td>
    </tr>
    <tr class="form-field">
        <th scope="row" valign="top"><label for="term_meta[second_textarea_term_meta]"><?php _e( 'Category page footer text', 'pippin' ); ?></label></th>
        <td>
            <textarea name="term_meta[second_textarea_term_meta]" id="term_meta[second_textarea_term_meta]"><?php echo get_option("taxonomy_$t_id", true)['second_textarea_term_meta']; ?></textarea>
            <p class="description"><?php _e( 'Enter a footer text','pippin' ); ?></p>

        </td>
    </tr>

<?php
}
add_action('event-categories_edit_form_fields', 'event_category_edit_meta_field');

//Save
function save_category_custom_meta( $term_id ) {
    if ( isset( $_POST['term_meta'] ) ) {
        $t_id = $term_id;
        $term_meta = get_option( "taxonomy_$t_id" );
        $cat_keys = array_keys( $_POST['term_meta'] );
        foreach ( $cat_keys as $key ) {
            if ( isset ( $_POST['term_meta'][$key] ) ) {
                $term_meta[$key] = $_POST['term_meta'][$key];
            }
        }
        // Save the option array.
        update_option( "taxonomy_$t_id", $term_meta );
    }
}
add_action( 'edited_event-categories', 'save_category_custom_meta', 10, 2 );
add_action( 'create_event-categories', 'save_category_custom_meta', 10, 2 );



//Event video Meta Box

//add meta box
add_action( 'add_meta_boxes', 'my_videos_video_meta_box' );
function my_videos_video_meta_box()
{
    add_meta_box('videos_video', 'Mail Video', 'videos_video_meta_box_callback', 'video', 'side', 'high');
}

//meta box callback
function videos_video_meta_box_callback($post) {
    wp_nonce_field(plugin_basename(__FILE__),'videos_video_content_nonce');
    $videos = get_post_meta($post->ID ,"_videos_video")?get_post_meta($post->ID,"_videos_video")[0]:'';
    ?>
    <label for="my_meta_box_text" style="margin-right: 10px;">Video Label</label>
    <input type="text" name="videos_video" id="my_videos_meta_box_video"  style="border-radius: 5px 5px 5px 5px; margin-top: 5px;" value="<?= $videos; ?>" />
    <?php
}

//saving meta box
add_action( 'save_post', 'my_videos_video_meta_box_save' );
function my_videos_video_meta_box_save( $post_id )
{
    if(isset($_POST['videos_video'])){
        update_post_meta($post_id,'_videos_video',$_POST['videos_video']);
    }
}





function do_this_in_day() {
    global $wpdb;
    $select_name = "SELECT * FROM `wp_users_subscribe`";
    $result_name = $wpdb->get_results($select_name);
    $t = 0;
    while($result_name[$t]->email != '') {
        $next = intval($result_name[$t]->next);
        $the_query = new WP_Query(array(
            'post_type' => 'video',
            'showposts' => -1,
            'post_status' => 'publish',
            'orderby' => 'publish_date',
            'order' => 'ASC'
        ));
        if($the_query->have_posts()) {
            $i=0;
            $videos = array ();
            $title = array ();
            $content = array();
            while ( $the_query->have_posts() && $i < wp_count_posts('video')->publish) {
                $the_query->the_post();
                $videos[$i] = get_post_meta(get_the_ID() ,"_videos_video")[0];
                $title[$i] = get_the_title(get_the_ID());
                $content[$i] = get_the_content(get_the_ID());
                $i++;
                /* For blog */
                /*
                $content[$i] = get_the_permalink( get_the_ID() );
                $title[$i] = get_the_title( get_the_ID() );
                */
            }
            if ($next < wp_count_posts('video')->publish) {
                wp_mail($result_name[$t]->email, 'Dear '.$result_name[$t]->name.', news from Mushegh Avetisyans', $title[$next].': '.$videos[$next].'<br><br>'.$content[$next], "Content-type: text/html");
            }
            if($result_name[$t]->next < wp_count_posts('video')->publish) {
                $next++;
                $wpdb->update('wp_users_subscribe', array('next' => $next), array('name' => $result_name[$t]->name), array('%d'), array( '%d' ));
            }
        }
        $t++;
    }

}
add_action( 'cronjob_wp_minute','do_this_in_day' );



function wp_users_subscribe() {
    global $wpdb;
    $data = $_POST;
    $name = trim($data['contact-name']);
    $phone = trim($data['contact-phone']);
    $email = trim($data['contact-email']);
    if( isset($data['submit']) ) {
        $errors = array();
        if( $name == '' ) {
            $errors[] = "type name";
        }
        if( $phone == '' ) {
            $errors[] = "type surname";
        }
        if( $email == '' ) {
            $errors[] = "type email";
        }


        $sqi = "SELECT COUNT(*) as rows_count FROM `wp_users_subscribe` WHERE email = '$email'";
        $result = $wpdb->get_results($sqi);

        if (intval($result[0]->rows_count) > 0) {
            echo '<div style="color: yellow;">People with that email already registered</div><hr>';
        }
        else {
            if ( empty($errors) ) {
                echo '<div style="color: green;">You have successfully registered</div><hr>';;
                $wpdb->insert('wp_users_subscribe', array('name' => $name, 'phone' => $phone, 'email'=>$email), array('%s'), array( '%s' ));
            }
            else {
                echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
            }
        }
    }
}



//function wp_coach_subscribe() {
//    global $wpdb;
//    $data = $_POST;
//    $name = trim($data['cont-name']);
//    $surname = trim($data['cont-surname']);
//    $phone = trim($data['cont-phone']);
//    $email = trim($data['cont-email']);
//    $country = trim($data['cont-country']);
//    $message = trim($data['cont-message']);
//    if( isset($data['cont-submit']) ) {
//        $errors = array();
//        if( $name == '' ) {
//            $errors[] = "type name";
//        }
//        if( $surname == '' ) {
//            $errors[] = "type surname";
//        }
//        if( $email == '' ) {
//            $errors[] = "type email";
//        }
//        if( $country == '' ) {
//            $errors[] = "type country";
//        }
//        if( $phone == '' ) {
//            $errors[] = "type phone";
//        }
//        if( $message == '' ) {
//            $errors[] = "type message";
//        }
//
//        $sqn = "SELECT COUNT(*) as rows_count FROM `wp_coach_subscribe` WHERE email = '$email'";
//        $resulti = $wpdb->get_results($sqn);
//
//        if (intval($resulti[0]->rows_count) > 0) {
//            echo '<div style="color: yellow;">People with that email already registered</div><hr>';
//        }
//        else {
//            if ( empty($errors) ) {
//                echo '<div style="color: green;">You have successfully registered</div><hr>';;
//                $wpdb->insert('wp_coach_subscribe', array('name' => $name, 'phone' => $phone, 'email'=>$email, 'surname'=>$surname, 'country'=>$country), array('%s'), array( '%s' ));
//            }
//            else {
//                echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
//            }
//        }
//
//
//    }
//}


//function wp_newsseller_subscribe() {
//    global $wpdb;
//    $data = $_POST;
//    $name = trim($data['news-name']);
//    $surname = trim($data['news-surname']);
//    $email = trim($data['news-email']);
//    if( isset($data['news-submit']) ) {
//        $errors = array();
//        if( $name == '' ) {
//            $errors[] = "type name";
//        }
//        if( $surname == '' ) {
//            $errors[] = "type surname";
//        }
//        if( $email == '' ) {
//            $errors[] = "type email";
//        }
//
//        $sqn = "SELECT COUNT(*) as rows_count FROM `wp_newsseller_subscribe` WHERE email = '$email'";
//        $resulti = $wpdb->get_results($sqn);
//
//        if (intval($resulti[0]->rows_count) > 0) {
//            echo '<div style="color: yellow;">You are already subscribed</div><hr>';
//        }
//        else {
//            if ( empty($errors) ) {
//                echo '<div style="color: green;">You have successfully subscribed</div><hr>';;
//                $wpdb->insert('wp_newsseller_subscribe', array('name' => $name, 'email'=>$email, 'surname'=>$surname), array('%s'), array( '%s' ));
//            }
//            else {
//                echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
//            }
//        }
//
//
//    }
//}



//function wp_events_subscribe() {
//    global $wpdb;
//    $data = $_POST;
//    $name = trim($data['contact-name']);
//    $surname = trim($data['contact-surname']);
//    $phone = trim($data['contact-phone']);
//    $email = trim($data['contact-email']);
//    $country = trim($data['contact-country']);
//    if( isset($data['submit']) ) {
//        $errors = array();
//        if( $name == '' ) {
//            $errors[] = "type name";
//        }
//        if( $surname == '' ) {
//            $errors[] = "type surname";
//        }
//        if( $email == '' ) {
//            $errors[] = "type email";
//        }
//        if( $country == '' ) {
//            $errors[] = "type country";
//        }
//        if( $phone == '' ) {
//            $errors[] = "type phone";
//        }
//
//        $sqn = "SELECT COUNT(*) as rows_count FROM `wp_events_subscribe` WHERE email = '$email'";
//        $resulti = $wpdb->get_results($sqn);
//
//        if (intval($resulti[0]->rows_count) > 0) {
//            echo '<div style="color: yellow;">People with that email already registered</div><hr>';
//        }
//        else {
//            if ( empty($errors) ) {
//                echo '<div style="color: green;">You have successfully subscribed</div><hr>';
//                $wpdb->insert('wp_events_subscribe', array('name' => $name, 'phone' => $phone, 'email'=>$email, 'surname'=>$surname, 'country'=>$country), array('%s'), array( '%s' ));
//            }
//            else {
//                echo '<div style="color: yellow;">'.array_shift($errors).'</div><hr>';
//            }
//        }
//    }
//}


//function wp_ask_subscribe() {
//    global $wpdb;
//    $data = $_POST;
//    $name = trim($data['ask-name']);
//    $surname = trim($data['ask-surname']);
//    $email = trim($data['ask-email']);
//    $question = trim($data['ask-question']);
//    if( isset($data['ask-submit']) ) {
//        $errors = array();
//        if( $name == '' ) {
//            $errors[] = "type name";
//        }
//        if( $surname == '' ) {
//            $errors[] = "type surname";
//        }
//        if( $email == '' ) {
//            $errors[] = "type email";
//        }
//        if( $question == '' ) {
//            $errors[] = "type your question";
//        }
//            if ( empty($errors) ) {
//                echo '<div style="color: green;">Your question is sent successfully</div><hr>';
//                $wpdb->insert('wp_ask_subscribe', array('name' => $name, 'surname' => $surname, 'email'=>$email, 'question'=>$question), array('%s'), array( '%s' ));
//            }
//            else {
//                echo '<div style="color: yellow;">'.array_shift($errors).'</div><hr>';
//            }
//
//    }
//}

//add category to vblogs

function custom_post_type() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Movies', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Movie', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Movies', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Movie', 'twentythirteen' ),
        'all_items'           => __( 'All Movies', 'twentythirteen' ),
        'view_item'           => __( 'View Movie', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Movie', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Movie', 'twentythirteen' ),
        'update_item'         => __( 'Update Movie', 'twentythirteen' ),
        'search_items'        => __( 'Search Movie', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'movies', 'twentythirteen' ),
        'description'         => __( 'Movie news and reviews', 'twentythirteen' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',

        // This is where we add taxonomies to our CPT
        'taxonomies'          => array( 'category' ),
    );

    // Registering your Custom Post Type
    register_post_type( 'movies', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type', 0 );

add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
    if( is_category() ) {
        $post_type = get_query_var('post_type');
        if($post_type)
            $post_type = $post_type;
        else
            $post_type = array('nav_menu_item', 'post', 'movies'); // don't forget nav_menu_item to allow menus to work!
        $query->set('post_type',$post_type);
        return $query;
    }
}



//Product custom post type / add to hot
function my_custom_post_product() {
    $labels = array(
        'name'               => _x( 'Products', 'post type general name' ),
        'singular_name'      => _x( 'Product', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'book' ),
        'add_new_item'       => __( 'Add New Product' ),
        'edit_item'          => __( 'Edit Product' ),
        'new_item'           => __( 'New Product' ),
        'all_items'          => __( 'All Products' ),
        'view_item'          => __( 'View Product' ),
        'search_items'       => __( 'Search Products' ),
        'not_found'          => __( 'No products found' ),
        'not_found_in_trash' => __( 'No products found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Products'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our products and product specific data',
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments',  'custom-fields'),
        'public' => true,
        'has_archive' => true,
    );
    register_post_type( 'product', $args );
    add_theme_support( 'post-thumbnails' );

//
//checkbox
    function checkbox_content( $content ) {
        global $post;
        $text = __( 'Add to top', 'prefix' );
        $id = '_add_to_top';
        $value = esc_attr( get_post_meta( $post->ID, $id, true ) );
        $label = '<label for="' . $id . '" class="selectit"><input name="' . $id . '" type="checkbox" id="' . $id . '" value="' . $value . ' "'. checked( $value, 1, false) .'> ' . $text .'</label>';
        return $content .= $label;
    }
    add_filter( 'admin_post_thumbnail_html', 'checkbox_content' );

    function save_checkbox_result( $post_id ) {
        $value = 0;
        if ( isset( $_REQUEST['_add_to_top'] ) ) {
            $value = 1;
        }

        // Set meta value to either 1 or 0
        update_post_meta( $post_id, '_add_to_top', $value );

    }
    add_action( 'save_post', 'save_checkbox_result', 10, 3 );
}
add_action( 'init', 'my_custom_post_product' );






//custom post type product taxonomies
function my_taxonomies_product() {
    $labels = array(
        'name'              => _x( 'Product Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Product Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Product Categories' ),
        'all_items'         => __( 'All Product Categories' ),
        'parent_item'       => __( 'Parent Product Category' ),
        'parent_item_colon' => __( 'Parent Product Category:' ),
        'edit_item'         => __( 'Edit Product Category' ),
        'update_item'       => __( 'Update Product Category' ),
        'add_new_item'      => __( 'Add New Product Category' ),
        'new_item_name'     => __( 'New Product Category' ),
        'menu_name'         => __( 'Product Categories' ),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
    );
    register_taxonomy( 'product_category', 'product', $args );
}
add_action( 'init', 'my_taxonomies_product', 0 );

//custom product  features
function features() {
    $labels = array(
        'name'              => _x( 'Features', 'taxonomy general name' ),
        'singular_name'     => _x( 'Features', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Features' ),
        'all_items'         => __( 'All Features' ),
        'parent_item'       => __( 'Parent Feature' ),
        'parent_item_colon' => __( 'Parent Feature:' ),
        'edit_item'         => __( 'Edit Feature' ),
        'update_item'       => __( 'Update Feature' ),
        'add_new_item'      => __( 'Add New Feature' ),
        'new_item_name'     => __( 'New Feature' ),
        'menu_name'         => __( 'Features' ),
    );
    $args = array(
        'labels' => $labels,
        'show_admin_column' => true,
        'hierarchical' => true,

    );
    register_taxonomy( 'feature', 'product', $args );
}
add_action( 'init', 'features', 0 );
