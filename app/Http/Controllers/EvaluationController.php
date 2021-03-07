<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Evaluation;
use App\Models\Transaction;
use Illuminate\Http\Request;

/**
 * @group 5 -Evaluation
 *
 * APIs for managing evaluations
 */
class EvaluationController extends Controller
{
    /**
     * List evaluations
     * 
     * Returns a list of evaluations.
     * 
     * @OA\Get(
     *     tags={"evaluation"},
     *     operationId="getEvaluationsList",
     *     summary="Returns a list of evaluations",
     *     description="Returns a object of evaluations",
     *     path="/evaluations",
     *     @OA\Response(response="200", description="A list with evaluations"),
     * ),
     * 
    */
    public function index() {

        $evaluations = Evaluation::all();

        return response()->json($evaluations);
    }

    /**
     * Insert evaluation
     * 
     * Store and update an evaluation.
     * 
     * @OA\Post(
     *     tags={"evaluation"},
     *     operationId="storeEvaluation",
     *     summary="Store and update an evaluation",
     *     description="Store a evaluation and returns a message",
     *     path="/evaluations",
     *     @OA\Response(response="200", description="Store a evaluation and returns a message."),
     *     @OA\RequestBody(
     *          required=true,
     *          @OA\MediaType(
     *              mediaType="multipart/form-data",
     *          )
     *      ),
     * ),
     * 
    */
    public function store(Request $request) {

        $validator = Validator::make($request->all(), [
            'comment' => 'required|string',
            'note' => 'required|integer|min:0|max:10',
            'id_transaction' => 'required|integer|min:1',
        ]);

        if ($validator->fails()) {
            $messages = $validator->errors();

            foreach ($messages->all() as $message)
                return response()->json($message);
        }

        $transaction = Transaction::find($request->id_transaction);

        if (!$transaction)
            return response()->json("Transaction not found.");

        $evaluation = Evaluation::where(['id_transaction' => $request->id_transaction])->first();

        if ($evaluation) {
            $evaluation->fill($request->all());

            $evaluation->save();
        } else
            Evaluation::create($request->all());

        return response()->json("Saved successfully.");
    }
}