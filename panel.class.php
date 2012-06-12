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
    private $table_class;
    private $data;

    /*
     * Constructor
     * @oa Khaliq
     * table class defined by Bootstrap
     */

    public function __construct($data, $table_class='default')
    {
        $this->panel_class  = $table_class;
        $this->data         = $data;

    }

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



