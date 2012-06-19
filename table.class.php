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
 * //WBN generic functions to manipulate common data (like dates, hex colors, money) to most readable format
 *
 */


namespace tablestrap;

class table
{
    protected $data;
    protected $table_class = 'table ';
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


    //KTD add ability to take away stripes or bordered
    //KTD make stripped and bordered the default
    //KTD add comments to these functions
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

        $keys = $this->keys();

        $html = '<table class="' . $this->table_class . '">';
        $html .= '<thead>';

        foreach ($keys as $key) {

            $html .= '<th>' . $key . '</th>';
        }
        $html .= '</thead>';

        foreach ($this->data as $rows) {
            $html .= '<tr>';
            foreach ($rows as $key => $value) {
                if (in_array($key, $keys)) {
                    $html .= '<td>' . $value . '</td>';
                }
            }
        }
        $html .= '</tr>';
        $html .= '</table>';

        return $html;
    }

    /*
     * Find Keys
     * @author          Will
     * @description     finds the keys that should be used in TH
     *
     * used in render function
     * checks to see if the keys are in the array of hidden columns
     *
     * @returns array of the keys
     *
     */
    private function keys()
    {

        $keys = array();

        foreach ($this->data[0] as $key => $value) {
            if (!in_array($key, $this->hidden_columns)) {
                $keys[] = $key;
            }
        }

        return $keys;
    }

    /*
     * Hide Rows
     * @author          Will
     * @description     will not display the cols listed
     *
     * adds the keys to an array that is used in render function
     *
     * @example
     * $panel->hide_columns('fb_key', 'fb_app_id', 'fb_secret');
     *
     *
     * //WBN add ability to pass an array as well as an argument
     *
     */
    public function hide_columns( /* Array of columns */)
    {
        $columns_to_hide = func_get_args();

        foreach ($columns_to_hide as $col) {
            $this->hidden_columns[$col] = $col;
        }

        return true;
    }
}







