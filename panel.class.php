<?php
/**
 * Created by Khaliq Gant
 * Date: 6/12/12
 * Time: 3:09 PM
 * @use
 * @description
 */

namespace tablestrap;;

class panel
{
    private $panel_class;
    private $data;


    public function __construct($data, $panel_class='default')
    {
        $this->panel_class  = $panel_class;
        $this->data         = $data;

    }

    public function render()
    {
        $html    = '<table class="' . $this->table_class . '">';
        foreach ($this->data as $key=>$value){
            $html .= '<tr>'.$key . '</tr>';
        }
        foreach ($this->data as $rows){
            foreach ($rows as $value){
            $html .= '<tr><th>' .$value. '</th></tr>';
        }}
    }

}



