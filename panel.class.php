<?php
/*
 * Created by Khaliq Gant
 * Date: 6/12/12
 * Time: 3:09 PM
 * @use to make a panel table quickly
 * @description
 *
 *
 * //KTD put comments on the functions that describe what they do, what they are expected to return etc
 *
 */

namespace tablestrap;
;

include_once 'table.class.php';

class panel extends table
{

    /*
    * Render
    * @author          Khaliq
    * @contributor     Will
    *
    * take the data and create a table
    *  ->checks hidden colums and doesnt show the ones in the list
    *
    */
    public function render()
    {

        $html = '<table class="' . $this->table_class . '">';
        foreach ($this->data as $key => $value) {
            if (!in_array($key, $this->hidden_columns)) {
                $html .= '<tr><th>' . $key . '</th>';
                $html .= '<td>"' . $value . '"</td></tr>';
            }
        }
        $html .= '</table>';

        return $html;
    }


    public function add_form()
    {
    }

    private $form_action, $form_method, $form_class;

//params should be update the form and what it

    public function render2()
    {
        $html = '<form action="submit">';
        $html .= '<table class="' . $this->table_class . '">';
        foreach ($this->data as $key => $value) {
            $html .= '<tr><th>' . $key . '</th>';
            $html .= '<td><input type="text" name="' . $key . '" value="' . $value . '"</td></tr>';
        }
        $html .= '</table>';
        $html .= '</form>';

        return $html;
    }


}


