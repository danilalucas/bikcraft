<?php
function bikcraft_register_menu(){
    register_nav_menu( 'menu-navegacao', 'Menu' );
}

add_action( 'init', 'bikcraft_register_menu');

function bikcraft_add_theme_resources(){
    add_theme_support( 'custom-logo');
    add_theme_support( 'post-thumbnails');
}

add_action( 'after_setup_theme', 'bikcraft_add_theme_resources');

// create options page
add_action('admin_menu', 'option_create_menu');

function option_create_menu() {

	//create new top-level menu
	add_menu_page('Opções do Tema', 'Opções do Tema', 'administrator', __FILE__, 'options_settings_page' , get_template_directory_uri() . '/assets/img/option_icon.svg');

	//call register settings function
	add_action( 'admin_init', 'register_options_settings' );
}


function register_options_settings() {
	//register our settings
	register_setting( 'options-settings-group', 'citation_footer' );
    register_setting( 'options-settings-group', 'author_citation_footer' );
    register_setting( 'options-settings-group', 'our_story_footer' );
    register_setting( 'options-settings-group', 'phone_contact_footer' );
    register_setting( 'options-settings-group', 'email_contact_footer' );
    register_setting( 'options-settings-group', 'address_contact_footer' );
    register_setting( 'options-settings-group', 'facebook_social_network_footer' );
    register_setting( 'options-settings-group', 'instagram_social_network_footer' );
    register_setting( 'options-settings-group', 'twitter_social_network_footer' );
    register_setting( 'options-settings-group', 'copyright_footer' );
}

function options_settings_page() {
?>
<div class="wrap">
<h1>Opções do Tema</h1>

<form method="post" action="options.php">
    <?php settings_fields( 'options-settings-group' ); ?>
    <?php do_settings_sections( 'options-settings-group' ); ?>

    <h3>Citação</h3>

    <table class="form-table">
        <tr valign="top">
            <th scope="row">Citação</th>
            <td>
                <textarea name="citation_footer" rows="5" cols="100"><?php echo esc_attr( get_option('citation_footer') ); ?>
                </textarea>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row">Autor</th>
            <td>
                <input type="text" name="author_citation_footer"
                       value="<?php echo esc_attr( get_option('author_citation_footer') ); ?>" />
            </td>
        </tr>
    </table>

    <h3>Nossa História</h3>

    <table class="form-table">
        <tr valign="top">
            <th scope="row">Texto</th>
            <td>
                <textarea name="our_story_footer" rows="5" cols="100"><?php echo esc_attr( get_option('our_story_footer') ); ?>
                </textarea>
            </td>
        </tr>
    </table>

    <h3>Contatos</h3>

    <table class="form-table">
        <tr valign="top">
            <th scope="row">Telefone</th>
            <td>
                <input type="text" name="phone_contact_footer"
                       value="<?php echo esc_attr( get_option('phone_contact_footer') ); ?>" />
            </td>
        </tr>
        <tr valign="top">
            <th scope="row">Email</th>
            <td>
                <input type="email" name="email_contact_footer"
                       value="<?php echo esc_attr( get_option('email_contact_footer') ); ?>" />
            </td>
        </tr>
        <tr valign="top">
            <th scope="row">Endereço</th>
            <td>
                <input type="text" name="address_contact_footer"
                       value="<?php echo esc_attr( get_option('address_contact_footer') ); ?>" />
            </td>
        </tr>
    </table>

    <h3>Redes Sociais</h3>

    <table class="form-table">
        <tr valign="top">
            <th scope="row">Facebook</th>
            <td>
                <input type="text" name="facebook_social_network_footer"
                       value="<?php echo esc_attr( get_option('facebook_social_network_footer') ); ?>" />
            </td>
        </tr>
        <tr valign="top">
            <th scope="row">Instagram</th>
            <td>
                <input type="text" name="instagram_social_network_footer"
                       value="<?php echo esc_attr( get_option('instagram_social_network_footer') ); ?>" />
            </td>
        </tr>
        <tr valign="top">
            <th scope="row">Twitter</th>
            <td>
                <input type="text" name="twitter_social_network_footer"
                       value="<?php echo esc_attr( get_option('twitter_social_network_footer') ); ?>" />
            </td>
        </tr>
    </table>

    <h3>Copyright</h3>

    <table class="form-table">
        <tr valign="top">
            <th scope="row">Texto</th>
            <td>
                <input type="text" name="copyright_footer"
                       value="<?php echo esc_attr( get_option('copyright_footer') ); ?>" />
            </td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>
<?php } ?>