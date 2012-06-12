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
    private $data, $key, $value;



    /*
     * Constructor
     * @oa Khaliq
     * $data is the array of information to create the table
     */

    public function __construct($table_class = 'default', $data = array())
    {
        $this->table_class = $table_class;
        $this->data

    }



    public function render()
    {

        $html   = '<table class="' . $this->table_class . '">';
            foreach ($data[0] as $key=>$value){
        $html  .= '<thead><th>"' . $key. '"</th></thead>';
            }
            foreach ($data as $value['id']){
                $html   .= '<tr><td>"' .$value. '"</td></tr>';
            }
        $html  .= '</table>';
        return $html;
    }
}








