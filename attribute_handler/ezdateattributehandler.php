<?php

class ezdateAttributeHandler extends DefaultDatatypeAttributeHandler {

    static public function toString( eZContentObjectAttribute $attribute ) {
        return self::fetchTpl( $attribute );
    }
}
?>