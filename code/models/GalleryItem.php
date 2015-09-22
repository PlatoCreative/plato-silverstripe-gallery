<?php
/**
* Gallery Item
*
* @package plato-silverstripe-gallery
*/
class GalleryItem extends DataObject {

    /**
	 * @var string
	 */
    private static $default_sort = "Sort";

    /**
	 * @var array
	 */
    private static $db = array(
        "Title" => "Varchar(255)",
        "Sort" => "Int"
    );

    /**
	 * @var array
	 */
    private static $has_one = array(
        "GalleryPage" => "GalleryPage",
        "Image" => "Image"
    );

    /**
	 * @var array
	 */
    private static $summary_fields = array(
        "Title" => "Title",
        "Image.CMSThumbnail" => "Image"
    );

    /**
     * @return FieldList
     */
    public function getCMSFields() {
        $fields = new FieldList(
            TextField::create('Title', 'Title')->setDescription("Title of the gallery item"),
            UploadField::create('Image', 'Image')->setFolderName("GalleryItems")
        );
        return $fields;
    }

}
