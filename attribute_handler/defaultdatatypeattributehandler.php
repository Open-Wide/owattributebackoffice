<?php

class DefaultDatatypeAttributeHandler {

    static public function toString( eZContentObjectAttribute $attribute ) {
        return $attribute->toString();
    }
}
?>