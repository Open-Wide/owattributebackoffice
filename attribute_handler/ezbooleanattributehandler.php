<?php

class ezbooleanAttributeHandler extends DefaultDatatypeAttributeHandler {

    static public function toString( eZContentObjectAttribute $attribute ) {
        return self::fetchTpl( $attribute );
    }
}
?>