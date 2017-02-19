<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
                            <fieldset>
                                <input type="text" name="s"  data-placeholder="<?php esc_html_e( 'Search...', 'mf' ); ?>" value="<?php esc_html_e( 'Search...', 'mf' ); ?>" />
                                <input type="submit"  value="Search" />
                            </fieldset>
                            <input type='hidden' name='lang' value='en' />
</form>