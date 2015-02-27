<?php

class ezdatetimeAttributeHandler extends DefaultDatatypeAttributeHandler {

    static public function toString( eZContentObjectAttribute $attribute ) {
        return self::fetchTpl( $attribute );
    }
}
?>