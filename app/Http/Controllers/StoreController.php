<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Store;
use Illuminate\Http\Request;

/**
 * @group 3 - Store
 *
 * APIs for managing stores
 */
class StoreController extends Controller
{
    /**
     * List stores
     * 
     * Returns a list of stores.
     * 
     * @OA\Get(
     *     tags={"store"},
     *     operationId="getStoresList",
     *     summary="Returns a list of stores",
     *     description="Returns a object of stores",
     *     path="/stores",
     *     @OA\Response(response="200", description="A list with stores"),
     * ),
     * 
    */
    public function index() {

        $store = Store::where('status', 'A');

        return response()->json($store->get());
    }

    /**
     * Insert store
     * 
     * Store a new store.
     * 
     * @OA\Post(
     *     tags={"store"},
     *     operationId="storeStore",
     *     summary="Store a new store",
     *     description="Store a store and returns a message",
     *     path="/stores",
     *     @OA\Response(response="200", description="Store a store and returns a message."),
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
            'name' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            $messages = $validator->errors();

            foreach ($messages->all() as $message)
                return response()->json($message);
        }

        Store::create($request->all());

        return response()->json("Saved successfully.");
    }

    /**
     * Update store
     * 
     * Update a existing store.
     * 
     * @OA\Put(
     *     tags={"store"},
     *     operationId="updateStore",
     *     summary="Update a existing store",
     *     description="Update a store and returns a message",
     *     path="/stores/{id}",
     *     @OA\Response(response="200", description="Update a store and returns a message."),
     *     @OA\Parameter(
     *          name="id",
     *          description="Store id",
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
            'name' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            $messages = $validator->errors();

            foreach ($messages->all() as $message)
                return response()->json($message);
        }

        if (!is_numeric($id))
            return response()->json("The id must be a number.");

        $store = Store::where(['id' => $id, 'status' => 'A'])->first();

        if ($store) {
            $store->fill($request->all());

            $store->save();

            return response()->json("Updated successfully.");
        } else
            return response()->json("Register not found.");
    }

    /**
     * Delete store
     * 
     * Deletes a existing store.
     * 
     * @OA\Delete(
     *     tags={"store"},
     *     operationId="deleteStore",
     *     summary="Deletes a existing store",
     *     description="Deletes a store and returns a message",
     *     path="/stores/{id}",
     *     @OA\Response(response="200", description="Deletes a store and returns a message."),
     *     @OA\Parameter(
     *          name="id",
     *          description="Store id",
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

        $store = Store::where(['id' => $id, 'status' => 'A']);

        if (count($store->get())) {
            $store->update(['status' => 'D']);

            return response()->json("Removed successfully.");
        } else
            return response()->json("Register not found.");
    }
}