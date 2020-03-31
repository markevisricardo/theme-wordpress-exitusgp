<?php 

add_theme_support( 'custom-logo');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('movie', 'image'));
set_post_thumbnail_size( 1280, 720, true );
// -----------------------------------------------

// Ocultar categorias o Widget no WordPress

// -----------------------------------------------

function exclude_widget_categories($args) {

// ID da categoria que queremos ocultar.
 // Se forem várias, separe com vírgulas: '25,32,65'

$excluded = ' 1'; //Ocultei a categoria 25
 $args['exclude'] = $excluded;
 return $args;
 }

add_filter( 'widget_categories_args', 'exclude_widget_categories', 1 ); // Se utiliza esse formato de lista na barra lateral

// -----------------------------------------------

// Chamar a tag Title e adicionar os formatos de posts
function bs4wp_theme_support() {
    // Chamar a tag Title
    add_theme_support('title-tag');
    // Adicionar os formatos de posts
    add_theme_support('post-formats', array('aside', 'image'));
    // Adicionar o logotipo
    add_theme_support( 'custom-logo' );
}
add_action('after_setup_theme', 'bs4wp_theme_support');
// Previnir o erro na tag Title em versões antigas
if (!function_exists('_wp_render_title_tag')) {
    function bs4wp_render_title() {
        ?>
        <title><?php wp_title('|', true, 'right'); ?></title>
        <?php
    }
    add_action('wp_head', 'bs4wp_render_title');
}
// Registra o Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
// Registrar os menus
register_nav_menus( array(
    'principal' => __('Menu principal', 'bs4wp')
));
// Definir as miniaturas dos posts
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1280, 720, true );
// Definir o tamanho o resumo
add_filter( 'excerpt_length', function($length) {
    return 50;
} );
// Definir o estilo da paginação
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');
function posts_link_attributes() {
    return 'class="btn bg-primary text-white"';
}
// Criar a barra lateral
register_sidebar(
    array(
        'name' => 'Barra lateral',
        'id' => 'sidebar',
        'before_widget' => '<div class="card mb-4">',
        'after_widget' => '</div></div>',
        'before_title' => '<h5 class="card-header bg-primary text-white">',
        'after_title' => '</h5><div class="card-body">',
));
// Criar o campo de busca
register_sidebar(
    array(
        'name' => 'Busca',
        'id' => 'busca',
        'before_widget' => '<div class="blog-search">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
));
// Ativar o fomrulário para respostas nos comentários
function theme_queue_js() {
    if ( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') ) wp_enqueue_script('comment-reply');
}
add_action('wp_print_scripts', 'theme_queue_js');
// Personalizar os comentários
function format_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>

    <div <?php comment_class('ml-4'); ?> id="comment-<?php comment_ID(); ?>">

        <div class="card mb-3">
            <div class="card-body">

            <div class="comment-intro">

                <h5 class="card-title"><?php printf(__('%s'), get_comment_author_link()) ?></h5>
                <h6 class="card-subtitle mb-3 text-muted">Comentou em <?php printf(__('%1$s'), get_comment_date('d/m/y'), get_comment_time()) ?></h6>
            
            </div>

            <?php comment_text(); ?>

            <div class="reply">
                <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            </div>

            </div>
        </div>

    <?php
}
// Criar o tipo de post para o banner
function create_post_type() {
    register_post_type('banners',
    // Definir as opções
    array(
        'labels' => array(
            'name' => __('Banners'),
            'singular_name' => __('Banners')
        ),
        'supports' => array(
            'title', 'editor', 'thumbnail'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'rewrite' => array('slug' => 'banners'),
    ));
}

//Iniciar o tipo de post
add_action('init', 'create_post_type');
// Incluir as funções de personalização
require get_template_directory(). '/inc/customizer.php';

add_action( 'widgets_init', 'exitus_sidebars' );
function exitus_sidebars(){
    register_sidebar(
        array(
            'name' => 'Contador de Projetos',
            'id' => 'contador',
            'description' => 'Embora o contador seja manual, tempos em tempos, atualize os dados.',
            'before_widget' => ' <div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<strong class="widget-title number" >',
            'after_title' => '</strong>',
            

        )
    );
    register_sidebar(
        array(
            'name' => 'Contador de Clientes',
            'id' => 'clientes',
            'description' => 'Embora o contador seja manual, tempos em tempos, atualize os dados.',
            'before_widget' => ' <div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<strong class="widget-title number" >',
            'after_title' => '</strong>',
            

        )
    );
    register_sidebar(
        array(
            'name' => 'Contador de Café',
            'id' => 'cafe',
            'description' => 'Embora o contador seja manual, tempos em tempos, atualize os dados.',
            'before_widget' => ' <div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<strong class="widget-title number" >',
            'after_title' => '</strong>',
            

        )
    );
    register_sidebar(
        array(
            'name' => 'Contador de Anos',
            'id' => 'anos',
            'description' => 'Embora o contador seja manual, tempos em tempos, atualize os dados.',
            'before_widget' => ' <div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<strong class="widget-title number" >',
            'after_title' => '</strong>',
            

        )
    );
    register_sidebar(
        array(
            'name' => 'empresa',
            'id' => 'empresa',
            'description' => 'Fale mais sobre a empresa.',
            'before_widget' => ' <div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<strong class="widget-title number" >',
            'after_title' => '</strong>',
            

        )
    );
    register_sidebar(
        array(
            'name' => 'clientes-filter',
            'id' => 'clientes-filter',
            'description' => 'Fale mais sobre clientes.',
            'before_widget' => ' <div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<strong class="widget-title number" >',
            'after_title' => '</strong>',
            

        )
    );
    register_sidebar(
        array(
            'name' => 'mercado',
            'id' => 'mercado',
            'description' => 'Fale mais sobre o mercado.',
            'before_widget' => ' <div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<strong class="widget-title number" >',
            'after_title' => '</strong>',
            

        )
    );
    register_sidebar(
        array(
            'name' => 'novidades',
            'id' => 'novidades',
            'description' => 'Conte as novidades aqui.',
            'before_widget' => ' <div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<strong class="widget-title number" >',
            'after_title' => '</strong>',
            

        )
    );
}
