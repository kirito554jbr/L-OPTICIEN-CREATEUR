<?php

namespace App\Repositories\Interfaces;
use App\Models\Orders;

interface ordersInterface
{
    public function index();
    public function create(array $request , $test, $user);
    // public function update(array $request,$id);
    // public function delete($id);
    public function findById($id);
    public function orderDetails(array $request);
    public function updateStatus(array $request, $id);
}