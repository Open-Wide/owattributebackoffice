<?php

class ezobjectrelationlistAttributeHandler extends DefaultDatatypeAttributeHandler {

    static public function toString( eZContentObjectAttribute $attribute ) {
        $result = '';
        if($attribute->hasContent()) {
            $data = array();
            $content = $attribute->content();
            foreach($content['relation_list'] as $relation) {
                $node = eZFunctionHandler::execute('content', 'node', array(
                    'node_id' => $relation['node_id']
                ));
                if($node instanceof eZContentObjectTreeNode) {
                    array_push($data, $node->getName());
                }
            }
            $result = implode(', ', $data);
            unset($content, $data);
        }
        return $result;
    }
}
?>