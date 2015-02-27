<?php

class ezbinaryfileAttributeHandler extends DefaultDatatypeAttributeHandler {

    static public function toString( eZContentObjectAttribute $attribute ) {
        $result = '';
        if($attribute->hasContent()) {
            $content = $attribute->content();
            if($content instanceof eZBinaryFile) {
                $result = $content->attribute('original_filename');
            }
        }
        return $result;
    }
}
?>