<?php
/*
 * Class to create tables from an array
 * @author          Khaliq
 * @contributor     Will
 *
 *
 * //KTD add a license
 * //KTD add common uses
 *
 */


namespace tablestrap;

class table
{
    protected $data;
    protected $table_class = '';
    protected $hidden_columns = array();

    /*
    * Constructor
    * @oa Khaliq
    * $data is the array of information to create the table
    */

    public function __construct($data)
    {
        $this->data = $data;
    }


    public function striped()
    {
        $this->table_class .= ' table-striped';
    }

    public function bordered()
    {
        $this->table_class .= ' table-bordered';
    }


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
        $html .= '<thead>';

        foreach ($this->data[0] as $key => $value) {

            $html .= '<th>' . $key . '</th>';
        }
        $html .= '</thead>';

        foreach ($this->data as $rows) {
            $html .= '<tr>';
            foreach ($rows as $value) {
                $html .= '<td>' . $value . '</td>';
            }
        }
        $html .= '</tr>';
        $html .= '</table>';

        return $html;
    }

    /*
     * Hide Rows
     * @author          Will
     * @description     will not display the cols listed
     *
     * adds the keys to an array that is used in render function
     *
     */
    public function hide_columns(/* Array of columns */) {
        $columns_to_hide = func_get_args();

        foreach($columns_to_hide as $col ) {
            $this->hidden_columns[$col] = $col;
        }

        return true;
    }
}







