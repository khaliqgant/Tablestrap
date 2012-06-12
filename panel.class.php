<?php
/**
 * Created by Khaliq Gant
 * Date: 6/12/12
 * Time: 3:09 PM
 * @use
 * @description
 */

namespace tablestrap;;

include_once 'table.class.php';

class panel extends table
{

    public function render()
    {
        $html    = '<table class="' . $this->table_class . '">';
        foreach ($this->data as $key=>$value){
            $html .= '<tr><th>'.$key . '</th>';
            $html .= '<td>' .$value.'</td></tr>';
        }
        $html   .= '</table>';

        return $html;
    }

}


