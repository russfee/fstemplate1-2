
<?php // Module Loop ;


if( have_rows('flexible_content_field_name') ):
    while ( have_rows('flexible_content_field_name') ) : the_row();

        if( get_row_layout() == 'quote_box' ):
        get_template_part('layout/modules/parts/module', 'quote');

        elseif( get_row_layout() == 'banner_-_sidekick' ):
            get_template_part('layout/modules/parts/module', 'sidekick');
            
        elseif( get_row_layout() == 'banner_-_hero' ):
            get_template_part('layout/modules/parts/module', 'hero');
            
        elseif( get_row_layout() == 'paragraph' ):
            get_template_part('layout/modules/parts/module', 'paragraph');
            
        elseif( get_row_layout() == 'image' ):
            get_template_part('layout/modules/parts/module', 'image');
            
        elseif( get_row_layout() == 'callout' ):
            get_template_part('layout/modules/parts/module', 'callout');
            
    

        endif;
    endwhile;
endif; ?>

