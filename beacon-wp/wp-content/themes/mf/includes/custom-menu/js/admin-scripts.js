( function($) {

    $('.mf-upload').each(function(){

            "use strict";

            var custom_uploader;
            var $this   = $(this);
            var upload  = $this.find('.mf-button-upload');
            var path    = $this.find('.mf-upload-path');
            var preview = $this.find('.mf-preview-upload');
            var pattern = $this.find('.mf-pattern-preview');
            var remove  = $this.find('.mf-button-remove');

            upload.click(function(e) {
                e.preventDefault();

                if (custom_uploader) {
                    custom_uploader.open();
                    return;
                }

                custom_uploader = wp.media.frames.file_frame = wp.media({
                    title: 'Upload background image',
                    button: {
                        text: 'Upload background image'
                    },
                    multiple: false
                });

                custom_uploader.on('select', function() {
                    var attachment = custom_uploader.state().get('selection').first().toJSON();
                    path.val(attachment.url);
                    preview.attr('src',attachment.url).show(0);
                    pattern.css({
                        'background-image':'url('+attachment.url+')',
                        'height':'200px',
                        'margin':'15px 0'
                    });
                });

                custom_uploader.open();
            });

            remove.click(function(e){
                e.preventDefault();
                path.val("");
                preview.attr('src',"").hide(0);
                pattern.attr('style',"");
            });

            if (path.val()) {
                pattern.css({
                    'background-image':'url('+path.val()+')',
                    'height':'200px',
                    'margin':'15px 0'
                });
                preview.show(0);
            }
    })

})(jQuery);

(function($){

    "use strict";

    // Accordion
    var accordionTitle = $('.mf-accordion-container > .mf-accordion-title');

        accordionTitle.on('click', function(){
            var $this      = $(this),
                index      = $('.mf-ui').index(this),
                layerIndex = $('.mf-hidden').eq(index);

            if(!$this.hasClass('active')){
                $this.addClass('active');
                $this.next('.mf-accordion-content').slideUp(0, function(){
                    if($this.hasClass('mf-ui')){
                        layerIndex.val('active');
                    }
                });
            } else if ($this.hasClass('active')){
                $this.removeClass('active');
                $this.next('.mf-accordion-content').slideDown(0, function(){
                    if($this.hasClass('mf-ui')){
                        layerIndex.val('');
                    }
                }); 
            }
        });

})(jQuery);

(function($){

    "use strict";
    
    $('.mf-color-picker').wpColorPicker();

    $('.delay').spinner({
        min:0,
        step: 50
    });

    $('.duration').spinner({
        min:0,
        step: 50
    });

    $('.zindex').spinner({
        min:1,
        max:98
    });

    $('.speed').spinner({
        min:0,
        step: 5,
        max:100
    });


})(jQuery);

( function($) {

    "use strict";

    $('.mf-slider-excrepts')
    .sortable({
        axis: 'y',
        placeholder: 'ui-state-highlight',
        forcePlaceholderSize: true,
        update: function(event, ui) {
            var theOrder = $(this).sortable('toArray');
            var data = {
                action: 'mf_update_post_order',
                postType: $(this).attr('data-post-type'),
                order: theOrder
            };
            $.ajax({
                type: "POST",
                url: ajaxurl,
                data: data,
                success: function(){
                    $(".mf-success").show();
                },
                error: function(){
                    $(".mf-error").show();
                }
            })
        }
    })
    .disableSelection();

})(jQuery);

( function($) {

    "use strict";

    var mfPostFormatOptionsPostFormatOptions = $('#mf-post-format-options');
    var postFormatInput         = $("#post-formats-select input.post-format");
    var featuredImages          = $('#post-feature-image-2, #post-feature-image-3, #post-feature-image-4, #post-feature-image-5');
    var defaultFeaturedImage    = $('#postimagediv');
    var editor                  = $('#postdivrich');
    var postFeatureMedia        = $('#mf-post-featured-media');

    function switchPostFormatOptions(target){

        mfPostFormatOptions.show();
        var mfPostOption = mfPostFormatOptions.find('#mf-'+target.attr("id")).show();

        if(target.val() == 'gallery'){
            featuredImages.show();
        } else {
            featuredImages.hide();
        }

        mfPostFormatOptions.find('.mf-post-option').not(mfPostOption).hide();

    }

    postFormatInput.each(function(){

        var $this = $(this);

        $this.on('click', function(){
            if ($this.val() == "video" || $this.val() == "audio") {
                postFeatureMedia.hide();
            } else {
                postFeatureMedia.show();
            }
            switchPostFormatOptions($this);
        });

        if($this.is(":checked")){
            switchPostFormatOptions($this);
            if ($this.val() == "video" || $this.val() == "audio") {
                postFeatureMedia.hide();
            } else {
                postFeatureMedia.show();
            }
        }

    });

})(jQuery);

( function($) {

    "use strict";

    var sidebarPos  = $('#mf-page-options .sidebar-pos'),
        sidebar     = $('#mf-page-options select[name="sidebar"]'),
        blank       = $('input[name="blank"]'),
        headerstuck = $('.header-stuck');

    if (blank.attr("value") == "true" && blank.is(":checked")) {
        headerstuck.hide();
    } else {
        headerstuck.show();
    }

    blank.on("click",function(){
       if (blank.attr("value") == "true" && blank.is(":checked")) {
            headerstuck.hide();
        } else {
            headerstuck.show();
        }
    });

    if ( sidebar.val() == "none") {sidebarPos.hide();};

    sidebar.on("change",function(){
        if ($(this).val() == "none") {
            sidebarPos.hide();
        } else {
            sidebarPos.show();
        }
    });

})(jQuery);

( function($) {

    "use strict";

    var mmo = $('.megamenu-options');

    mmo.each(function(){

        var $this = $(this),
            mms   = $this.find('.mms select'),
            mmc   = $this.find('.mmc'),
            mmb   = $this.find('.mmb');
           
        if ( mms.val() == "true") {
            mmc.show();mmb.show();
        }

        mms.on("change",function(){
            if ($(this).val() == "false") {
                mmc.hide();mmb.hide();
            } else {
                mmc.show();mmb.show();
            }
        });

    });

})(jQuery);
