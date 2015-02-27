<?php

class DefaultDatatypeAttributeHandler {

    static public function toString( eZContentObjectAttribute $attribute ) {
        return $attribute->toString();
    }

    static public function fetchTpl( eZContentObjectAttribute $attribute, $templateFile = null ) {
        if(is_null($templateFile)) {
            $templateFile = 'design:content/datatype/view/' . $attribute->attribute( 'data_type_string' ) . '.tpl';
        }
        $tpl = eZTemplate::factory();
        $tpl->setVariable( 'attribute', $attribute );
        $result = strip_tags( trim( $tpl->fetch( $templateFile ) ) );
        unset($tpl);
        return $result;
    }
}
?>