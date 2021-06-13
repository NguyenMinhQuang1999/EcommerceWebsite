<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class AdminSupplierController extends Controller
{
    public function index() {
        $suppliers = Supplier::orderBy('id')->paginate(10);
        return view('admin.supplier.index', compact('suppliers'));
    }
    public function create() {
        return view('admin.supplier.create');
    }

    public function edit($id) {
        $supplier= supplier::find($id);
        return view('admin.supplier.update', compact('supplier'));
    }

    public function update(Request $request, $id) {

            $this->createOrUpdate($request, $id);

            return redirect()->back();



    }

    public function store(Request $request) {
        $this->createOrUpdate($request);
        return redirect()->back();
    }

    public function delete($id) {
        $supplier = supplier::find($id);
        if($supplier) {
            $supplier->delete();
            return redirect()->back();
        }
    }

    public function createOrUpdate(Request $request, $id='')
    {
        $supplier  = new supplier();
        if($id) {
            $supplier = supplier::findOrFail($id);
        }
        $supplier->s_name = ($request->name);
        $supplier->s_phone = $request->phone;
        $supplier->s_email = $request->email;
        $supplier->s_website = $request->website;
        $supplier->s_address = $request->address;
        
        $supplier->save();
    }
}
