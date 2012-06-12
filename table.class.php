<?php
/*
 * Class to create tables from an array
 * @oa Khaliq
 */


namespace tablestrap;

class table {
    /*
     * Constructor
     * @oa Khaliq
     * $data is the array of information to create the table
     */

    public function __construct($data)
    {
        $this->data        = $data;
    }

    protected $data;
    protected $table_class='';


    public function striped(){
        $this->table_class.=' table-striped';
    }
    public function bordered (){
        $this->table_class.=' table-bordered';
    }


    public function render()
    {

        $html   = '<table class="' . $this->table_class . '">';
        $html  .= '<thead>';

        foreach ($this->data[0] as $key=>$value){

        $html  .= '<th>' . $key. '</th>';
        }
        $html  .= '</thead>';

        foreach ($this->data as $rows){
        $html  .= '<tr>';
            foreach ($rows as $value){
                $html   .= '<td>' .$value. '</td>';
            }}
        $html  .= '</tr>';
        $html  .= '</table>';

        return $html;
    }

}







