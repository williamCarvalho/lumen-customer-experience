<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Collaborator;
use Illuminate\Http\Request;

/**
 * @group 2 - Collaborator
 *
 * APIs for managing collaborators
 */
class CollaboratorController extends Controller
{
    /**
     * List collaborators
     * 
     * Returns a list of collaborators.
     * 
     * @OA\Get(
     *     tags={"collaborator"},
     *     operationId="getCollaboratorsList",
     *     summary="Returns a list of collaborators",
     *     description="Returns a object of collaborators",
     *     path="/collaborators",
     *     @OA\Response(response="200", description="A list with collaborators"),
     * ),
     * 
    */
    public function index() {

        $collaborators = Collaborator::where('status', 'A');

        return response()->json($collaborators->get());
    }

    /**
     * Insert collaborator
     * 
     * Store a new collaborator.
     * 
     * @OA\Post(
     *     tags={"collaborator"},
     *     operationId="storeCollaborator",
     *     summary="Store a new collaborator",
     *     description="Store a collaborator and returns a message",
     *     path="/collaborators",
     *     @OA\Response(response="200", description="Store a collaborator and returns a message."),
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

        Collaborator::create($request->all());

        return response()->json("Saved successfully.");
    }

    /**
     * Update collaborator
     * 
     * Update a existing collaborator.
     * 
     * @OA\Put(
     *     tags={"collaborator"},
     *     operationId="updateCollaborator",
     *     summary="Update a existing collaborator",
     *     description="Update a collaborator and returns a message",
     *     path="/collaborators/{id}",
     *     @OA\Response(response="200", description="Update a collaborator and returns a message."),
     *     @OA\Parameter(
     *          name="id",
     *          description="Collaborator id",
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

        $collaborator = Collaborator::where(['id' => $id, 'status' => 'A'])->first();

        if ($collaborator) {
            $collaborator->fill($request->all());

            $collaborator->save();

            return response()->json("Updated successfully.");
        } else
            return response()->json("Register not found.");
    }

    /**
     * Delete collaborator
     * 
     * Deletes a existing collaborator.
     * 
     * @OA\Delete(
     *     tags={"collaborator"},
     *     operationId="deleteCollaborator",
     *     summary="Deletes a existing collaborator",
     *     description="Deletes a collaborator and returns a message",
     *     path="/collaborators/{id}",
     *     @OA\Response(response="200", description="Deletes a collaborator and returns a message."),
     *     @OA\Parameter(
     *          name="id",
     *          description="Collaborator id",
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

        $collaborator = Collaborator::where(['id' => $id, 'status' => 'A']);

        if (count($collaborator->get())) {
            $collaborator->update(['status' => 'D']);

            return response()->json("Removed successfully.");
        } else
            return response()->json("Register not found.");
    }
}