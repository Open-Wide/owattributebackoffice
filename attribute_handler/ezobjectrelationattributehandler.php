<?php

class ezobjectrelationAttributeHandler extends DefaultDatatypeAttributeHandler {

    static public function toString( eZContentObjectAttribute $attribute ) {
        $result = '';
        if($attribute->hasContent()) {
            $content = $attribute->content();
            if($content instanceof eZContentObject) {
                $result = $content->attribute('name');
            }
        }
        return $result;
    }
}
?>