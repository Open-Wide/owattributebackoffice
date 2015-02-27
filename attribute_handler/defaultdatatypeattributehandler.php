<?php

class DefaultDatatypeAttributeHandler {

    static public function toString( eZContentObjectAttribute $attribute ) {
        return $attribute->toString();
    }

    static public function fetchTpl( eZContentObjectAttribute $attribute,  $strip_tags = true, $templateFile = null ) {
        if(is_null($templateFile)) {
            $templateFile = 'design:content/datatype/view/' . $attribute->attribute( 'data_type_string' ) . '.tpl';
        }
        $tpl = eZTemplate::factory();
        $tpl->setVariable( 'attribute', $attribute );
        $result =  trim( $tpl->fetch( $templateFile ) );
        if($strip_tags) {
            $result = strip_tags( $result );
        }

        unset($tpl);
        return $result;
    }
}
?>