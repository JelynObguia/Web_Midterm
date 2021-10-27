<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Seafoodresto;
use App\Repositories\SeafoodrestoRepository;
use Illuminate\Http\Request;
use Flash;
use Response;

class UsersController extends Controller {

    public $successStatus = 200;

    public function restoQuery() {
        $seafoodresto = Seafoodresto::all();

        if (count($seafoodresto) > 0) {
            return response()->json($seafoodresto, $this->successStatus);
        } else {
            return response()->json(['Error' => 'There is no orders in the database'], 404);
        }
    }
}
?>