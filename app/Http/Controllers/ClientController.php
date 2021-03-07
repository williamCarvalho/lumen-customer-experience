<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Client;
use Illuminate\Http\Request;

/**
 * @group 1 - Client
 *
 * APIs for managing clients
 */
class ClientController extends Controller
{
    /**
     * List clients
     * 
     * Returns a list of clients.
     * 
     * @OA\Get(
     *     tags={"client"},
     *     operationId="getClientsList",
     *     summary="Returns a list of clients",
     *     description="Returns a object of clients",
     *     path="/clients",
     *     @OA\Response(response="200", description="A list with clients"),
     * ),
     * 
    */
    public function index() {

        $clients = Client::where('status', 'A');

        return response()->json($clients->get());
    }

    /**
     * Insert client
     * 
     * Store a new client.
     * 
     * @OA\Post(
     *     tags={"client"},
     *     operationId="storeClient",
     *     summary="Store a new client",
     *     description="Store a client and returns a message",
     *     path="/clients",
     *     @OA\Response(response="200", description="Store a client and returns a message."),
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

        $request->merge(
            array(
                'phone' => preg_replace('/[^A-Za-z0-9]/', '', $request->phone),
                'cpf' => preg_replace('/[^A-Za-z0-9]/', '', $request->cpf)
            )
        );

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => ['required', 'string', 'min:8', 'regex:/^(?:(?:\+|00)?(55)\s?)?(?:\(?([1-9][0-9])\)?\s?)?(?:((?:9\d|[2-9])\d{3})\-?(\d{4}))$/'],
            'cpf' => 'required|cpf',
        ]);

        if ($validator->fails()) {
            $messages = $validator->errors();

            foreach ($messages->all() as $message)
                return response()->json($message);
        }

        $client = Client::where(['cpf' => $request->cpf, 'status' => 'A'])->first();

        if ($client)
            return response()->json("CPF already registered.");
        else {
            Client::create($request->all());

            return response()->json("Saved successfully.");
        }
    }

    /**
     * Update client
     * 
     * Update a existing client.
     * 
     * @OA\Put(
     *     tags={"client"},
     *     operationId="updateClient",
     *     summary="Update a existing client",
     *     description="Update a client and returns a message",
     *     path="/clients/{id}",
     *     @OA\Response(response="200", description="Update a client and returns a message."),
     *     @OA\Parameter(
     *          name="id",
     *          description="Client id",
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

        $request->merge(
            array(
                'phone' => preg_replace('/[^A-Za-z0-9]/', '', $request->phone),
                'cpf' => preg_replace('/[^A-Za-z0-9]/', '', $request->cpf)
            )
        );

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => ['required', 'string', 'min:10', 'regex:/^(?:(?:\+|00)?(55)\s?)?(?:\(?([1-9][0-9])\)?\s?)?(?:((?:9\d|[2-9])\d{3})\-?(\d{4}))$/'],
            'cpf' => 'required|cpf',
        ]);

        if ($validator->fails()) {
            $messages = $validator->errors();

            foreach ($messages->all() as $message)
                return response()->json($message);
        }

        if (!is_numeric($id))
            return response()->json("The id must be a number.");

        $client = Client::where(['cpf' => $request->cpf, 'status' => 'A'])->first();

        if ($client)
            if ($id != $client->id)
                return response()->json("CPF already registered.");

        $client = Client::where(['id' => $id, 'status' => 'A'])->first();

        if ($client) {
            $client->fill($request->all());

            $client->save();

            return response()->json("Updated successfully.");
        } else
            return response()->json("Register not found.");
    }

    /**
     * Delete client
     * 
     * Deletes a existing client.
     * 
     * @OA\Delete(
     *     tags={"client"},
     *     operationId="deleteClient",
     *     summary="Deletes a existing client",
     *     description="Deletes a client and returns a message",
     *     path="/clients/{id}",
     *     @OA\Response(response="200", description="Deletes a client and returns a message."),
     *     @OA\Parameter(
     *          name="id",
     *          description="Client id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     * ),
     * 
    */
    public function destroy($id) {

        $client = Client::where(['id' => $id, 'status' => 'A']);

        if (count($client->get())) {
            $client->update(['status' => 'D']);

            return response()->json("Removed successfully.");
        } else
            return response()->json("Register not found.");
    }
}