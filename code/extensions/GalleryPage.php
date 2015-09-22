<?php
/**
 * Gallery Page
 *
 * @package plato-silverstripe-gallery
 */
class GalleryPage extends Page
{
    /**
     * @return string
     */
    private static $description = 'Add a page of media items like images and videos';

    /**
     * @var array
     */
    private static $has_many = array(
        "GalleryItems" => "GalleryItem"
    );

    /**
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $galleryConfig = new GridFieldConfig_RelationEditor();
        if(class_exists('GridFieldSortableRows')) $galleryConfig->addComponent(new GridFieldSortableRows('Sort'));

        if ($this->owner->GalleryItems()->Count() == $this->owner->config()->ItemLimit) {
            $galleryConfig->removeComponentsByType('GridFieldAddNewButton');
        }

		$galleryGrid = GridField::create('GalleryItems', 'GalleryItems', $this->GalleryItems(), $galleryConfig);
		$fields->addFieldToTab('Root.Gallery', $galleryGrid);

        return $fields;
    }

}
