<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('user', 'book')->get();

        if ($transactions->isEmpty()) {
            return response()->json([
                'success' => true,
                'message' => 'Transaction data not found!',
                'data' => $transactions,
            ], 200);
        }

        return response()->json([
            'success' => true,
            'message' => 'Get All Transaction Data',
            'data' => $transactions,
        ], 200);
    }

    public function history()
    {
        $user = auth('api')->user();
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized',
            ], 401);
        }

        $transactions = Transaction::with('book')
            ->where('customer_id', $user->id)
            ->latest()
            ->get();

        return response()->json([
            'success' => true,
            'message' => 'Get transaction history',
            'data' => $transactions,
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer|min:1',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'data' => $validator->errors(),
            ], 422);
        }

        $uniqueCode = 'ORD-' . strtoupper(uniqid());

        $user = auth('api')->user();
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized',
            ], 401);
        }

        $book = Book::find($request->book_id);

        if ($book->stock < $request->quantity) {
            return response()->json([
                'success' => false,
                'message' => 'Not enough stock!',
            ], 400);
        }

        $totalAmount = $book->price * $request->quantity;

        $book->stock -= $request->quantity;
        $book->save();

        $transactions = Transaction::create([
            'order_number' => $uniqueCode,
            'customer_id' => $user->id,
            'book_id' => $request->book_id,
            'total_amount' => $totalAmount,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Transaction created successfully!',
            'data' => $transactions,
        ], 201);
    }

    public function show(string $id)
    {

        $transactions = Transaction::with('user', 'book')->find($id);

        if (!$transactions) {
            return response()->json([
                'success' => false,
                'message' => 'Transactions not found!',
            ], 404);
        }

        $user = auth('api')->user();
        if ($transactions->customer_id !== $user->id) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized',
            ], 403);
        }
        return response()->json([
            'success' => true,
            'message' => 'Get detail transactions',
            'data' => $transactions,
        ], 200);
    }

    public function destroy(string $id)
    {

        $transactions = Transaction::find($id);

        if (!$transactions) {
            return response()->json([
                'success' => false,
                'message' => 'Transactions not found!',
            ], 404);
        }
        $transactions->delete();

        return response()->json([
            'success' => true,
            'message' => 'Transactions deleted successfully!',
        ], 200);
    }
}
