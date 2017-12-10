<?php
/**
 * Created by PhpStorm.
 * User: florianbuis
 * Date: 08/12/2017
 * Time: 03:01
 * @param $id
 * @return string
 */
function input ( $id )
{
    $value = isset( $_POST[ $id ] ) ? $_POST[ $id ] : '';
    return "<input type='text' class='form-control'
               id='$id' name='$id'
               value='$value'>";
}