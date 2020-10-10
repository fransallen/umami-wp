<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://twitter.com/fransallen
 * @since      1.0.0
 *
 * @package    Umami
 * @subpackage Umami/admin/partials
 */
?>

<div class="wrap">
    <h2>
        <?php _e('Umami Analytics', 'umami'); ?>
    </h2>

    <form method="post" action="options.php">
        <?php settings_fields( 'umami' ); ?>

        <table class="form-table">
            <tr valign="top">
                <th scope="row">
                    <?php _e( 'Umami URL', 'umami' ); ?>
                </th>
                <td>
                    <fieldset>
                        <label for="umami_url">
                            <input type="url" name="umami[url]" id="umami_url" placeholder="https://umami.example.com/umami.js" value="<?php echo $options['url']; ?>" size="64" class="regular-text" required />
                        </label>
                    </fieldset>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">
                    <?php _e( 'Site ID', 'umami' ); ?>
                </th>
                <td>
                    <fieldset>
                        <label for="umami_id">
                            <input type="text" name="umami[id]" id="umami_id" placeholder="c263691a-2900-4d38-8aa1-08145bbfa0e3" value="<?php echo $options['id']; ?>" size="64" class="regular-text" required />
                        </label>
                    </fieldset>
                </td>
            </tr>
        </table>

        <?php submit_button(); ?>
    </form>
</div>