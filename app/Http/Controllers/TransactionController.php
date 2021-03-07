<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\Models\Transaction;
use App\Models\Client;
use App\Models\Store;
use App\Models\Collaborator;
use Illuminate\Http\Request;

/**
 * @group 4 - Transaction
 *
 * APIs for managing transactions
 */
class TransactionController extends Controller
{
    /**
     * List transactions
     * 
     * Returns a list of transactions.
     * 
     * @OA\Get(
     *     tags={"transaction"},
     *     operationId="getTransactionsList",
     *     summary="Returns a list of transactions",
     *     description="Returns a object of transactions",
     *     path="/transactions",
     *     @OA\Response(response="200", description="A list with transactions"),
     * ),
     * 
    */
    public function index() {

        $transactions = Transaction::All();

        return response()->json($transactions);
    }

    /**
     * Insert transaction
     * 
     * Store a new transaction.
     * 
     * @OA\Post(
     *     tags={"transaction"},
     *     operationId="storeTransaction",
     *     summary="Store a new transaction",
     *     description="Store a transaction and returns a message",
     *     path="/transactions",
     *     @OA\Response(response="200", description="Store a transaction and returns a message."),
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
            'date' => 'required|date|date_format:d/m/Y',
            'value' => 'required|numeric',
            'id_client' => 'required|integer|min:1',
            'id_store' => 'required|integer|min:1',
            'id_collaborator' => 'required|integer|min:1',
        ]);

        if ($validator->fails()) {
            $messages = $validator->errors();

            foreach ($messages->all() as $message)
                return response()->json($message);
        }

        $date = $request->date;
        $date = Carbon::createFromFormat('d/m/Y', $request->date)->format('Y-m-d');
        $request->merge(['date' => $date]);

        $client = Client::where(['id' => $request->id_client, 'status' => 'A'])->first();

        if (!$client)
            return response()->json("Client not found.");

        $store = Store::where(['id' => $request->id_store, 'status' => 'A'])->first();

        if (!$store)
            return response()->json("Store not found.");

        $collaborator = Collaborator::where(['id' => $request->id_collaborator, 'status' => 'A'])->first();

        if (!$collaborator)
            return response()->json("Collaborator not found.");

        Transaction::create($request->all());

        return response()->json("Saved successfully.");
    }

    /**
     * Update transaction
     * 
     * Update a existing transaction.
     * 
     * @OA\Put(
     *     tags={"transaction"},
     *     operationId="updateTransaction",
     *     summary="Update a existing transaction",
     *     description="Update a transaction and returns a message",
     *     path="/transactions/{id}",
     *     @OA\Response(response="200", description="Update a transaction and returns a message."),
     *     @OA\Parameter(
     *          name="id",
     *          description="Transaction id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *     ),
     *     @OA\RequestBody(
     *          required=true,
     *          @OA\MediaType(
     *              mediaType="multipart/form-data",
     *          )
     *      ),
     * ),
     * 
    */
    public function update(Request $request, $id) {

        $validator = Validator::make($request->all(), [
            'date' => 'required|date|date_format:d/m/Y',
            'value' => 'required|numeric',
            'id_client' => 'required|integer|min:1',
            'id_store' => 'required|integer|min:1',
            'id_collaborator' => 'required|integer|min:1',
        ]);

        if ($validator->fails()) {
            $messages = $validator->errors();

            foreach ($messages->all() as $message)
                return response()->json($message);
        }

        if (!is_numeric($id))
            return response()->json("The id must be a number.");

        $date = $request->date;
        $date = Carbon::createFromFormat('d/m/Y', $request->date)->format('Y-m-d');
        $request->merge(['date' => $date]);

        $client = Client::where(['id' => $request->id_client, 'status' => 'A'])->first();

        if (!$client)
            return response()->json("Client not found.");

        $store = Store::where(['id' => $request->id_store, 'status' => 'A'])->first();

        if (!$store)
            return response()->json("Store not found.");

        $collaborator = Collaborator::where(['id' => $request->id_collaborator, 'status' => 'A'])->first();

        if (!$collaborator)
            return response()->json("Collaborator not found.");

        $transaction = Transaction::find($id);

        if ($transaction) {
            $transaction->fill($request->all());

            $transaction->save();

            return response()->json("Updated successfully.");
        } else
            return response()->json("Register not found.");
    }
}