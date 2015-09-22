<?php
/**
 * Gallery Page Controller
 *
 * @package plato-silverstripe-gallery
 */
class GalleryPage_Controller extends Page_Controller
{

    /**
     * @var array
     */
    private static $allowed_actions = array ();

    public function init()
    {
        parent::init();

        Requirements::combine_files(
            'gallery.css',
            array(
                GALLERY_DIR . '/thirdparty/fancybox/source/jquery.fancybox.css',
                GALLERY_DIR . '/css/gallery.css'
            )
        );

        Requirements::javascript(FRAMEWORK_DIR . '/thirdparty/jquery/jquery.js');

        Requirements::combine_files(
            'gallery.js',
            array(
                GALLERY_DIR . '/thirdparty/fancybox/source/jquery.fancybox.pack.js',
                GALLERY_DIR . '/thirdparty/fancybox/source/helpers/jquery.fancybox-media.js',
                GALLERY_DIR . '/js/gallery.js'
            )
        );

    }

}
