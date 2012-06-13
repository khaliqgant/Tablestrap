<?php
/**
 * Created by Khaliq Gant
 * Date: 6/12/12
 * Time: 3:09 PM
 * @use to make a panel table quickly
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
            $html .= '<td>"' .$value.'"</td></tr>';
        }
        $html   .= '</table>';

        return $html;
    }

}

class form_panel extends panel{
    private $form_action, $form_method, $form_class;

    public function render(){
        $html     = '<form action="submit">';
        $html    .= '<table class="' . $this->table_class . '">';
        foreach ($this->data as $key=>$value){
            $html .= '<tr><th>'.$key . '</th>';
            $html .= '<td><input type="text" name="' .$key.'" value="' .$value.'"</td></tr>';
        }
        $html   .= '</table>';
        $html   .= '</form>';

        return $html;
    }
}


