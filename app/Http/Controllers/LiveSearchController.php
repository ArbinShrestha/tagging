<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LiveSearchController extends Controller
{
    public function index()
    {
        return view('live_search');
    }

    /**
     * @param Request $request
     * @return Request
     */
    public function action(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');

            if($query != '')
            {
                $data = DB::table('posts')
                    ->where('title', 'like', '%'.$query.'%')
                    ->orWhere('tags', 'like', '%'.$query.'%')
                    ->orderBy('id', 'desc')
                    ->get();

            }

            else
            {
                $data = DB::table('posts')
                    ->orderBy('id', 'desc')
                    ->get();
            }

            $total_row = $data->count();

            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '
                        <tr>
                            <td>'.$row->title.'</td>
                            <td>'.$row->tags.'</td>
                            
                           </tr>
                            ';

                }
            }

            else
            {
                $output = '
                   <tr>
                    <td align="center" colspan="5">No Data Found</td>
                   </tr>
                        ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );

            echo json_encode($data);
        }
         }
}

