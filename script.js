jQuery(document).ready(function(){


    jQuery(".gallery-titles a").first().addClass("title_active");
    jQuery(".port_multi-gallery-field .port_gallery-item").first().addClass("gallery_active");

    jQuery(".gallery-titles a").click(function () {
        jQuery('.gallery-titles a.title_active').removeClass('title_active');
        jQuery(this).addClass('title_active');
        //jquery(".port_multi-gallery-field .port_gallery-item").get
        jQuery.each(jQuery(".port_multi-gallery-field .port_gallery-item"),function(index, value){
            jQuery(value).removeClass("gallery_active");
        });
        var element = jQuery(".port_multi-gallery-field .port_gallery-item")
            .get(jQuery(".gallery-titles a").index(this));
        jQuery(element).addClass("gallery_active");

    });
});