<?php
    //Create objects
    $object = array(
        '1' => array(
            'name'=>'Nguyễn Văn Cường',
            'blog'=>'freetuts.net',
            'position'=>'author'
        ),
        '2' => array(
            'name'=>'Trương Phúc Hoài Minh',
            'blog'=>'freetuts.net',
            'position'=>'author'
        ),
        '3' => array(
            'name'=>'Trương Phúc Hoài Minh',
            'blog'=>'freetuts.net',
            'position'=>'author'
        ),
        '4' => array(
            'name'=>'Trương Phúc Hoài Minh',
            'blog'=>'freetuts.net',
            'position'=>'author'
        )
        );
    //Delete one objects
    unset($object[1]);
    //Show them
    foreach( $object as $key => $val){
        foreach ($val as $props => $valprops) {
            echo "$props : $valprops <br/>";
        }
        echo '<hr/>';
    }

