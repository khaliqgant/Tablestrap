<?php
/*
 * Class to create tables from an array
 * @oa Khaliq
 */

namespace tablestrap;

class table{
    /*
     * table class can be as defined by Bootstrap default, striped, bordered, condensed, or a combination of these
     */
    private $table_class;
    private $data;



    /*
     * Constructor
     * @oa Khaliq
     * $data is the array of information to create the table
     */

    public function __construct($data, $table_class = 'default')
    {
        $this->table_class = $table_class;
        $this->data        = $data;
    }



    public function render()
    {

        $html   = '<table class="' . $this->table_class . '">';
        $html  .=
        foreach ($this->data[0] as $key => $value){
        $html  .= '<thead><th>"' . $key. '"</th></thead>';
            }
            foreach ($this->data[0] as $value['id']){
                $html   .= '<tr><td>"' .$value. '"</td></tr>';
            }
        $html  .= '</table>';

        return $html;
    }
}








