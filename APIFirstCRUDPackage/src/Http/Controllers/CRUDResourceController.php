<?php

namespace Saifkamal\ApiFirstCrudPackage\Http\Controllers;

use App\Http\Controllers\Controller;
use Saifkamal\ApiFirstCrudPackage\Models\CrudResource;
use Saifkamal\ApiFirstCrudPackage\Http\Requests\StoreCrudResourceRequest;
use Saifkamal\ApiFirstCrudPackage\Http\Requests\UpdateCrudResourceRequest;

class CRUDResourceController extends Controller{
    /**
     * Display a Listing of the Resource.
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $crudResource = CrudResource::all();
        //View Index Page with Listed Data
        return view('api-first-crud-package::index',compact('crudResource'));
    }

    /**
     * Show Resource Registration Form Page
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //Create Crud Resource Form
        return view('api-first-crud-package::create');
    }

    /**
     * Store Resource Registration Record
     * @param  Saifkamal\ApiFirstCrudPackage\Http\Requests\StoreCrudResourceRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreCrudResourceRequest $request){
        //Validate Incoming Request
        $validatedRequest   = $request->validated();
        //Store Crud Resource
        $crudResource       = CrudResource::create([
            'name'          => $validatedRequest['name'],
            'content'       => $validatedRequest['content']
        ]);
        return back(); 
    }

    /**
     * Display the Specified Resource.
     * @param  Saifkamal\ApiFirstCrudPackage\Models\CrudResource  $crudResource
     * @return \Illuminate\Http\Response
     */
    public function show(CrudResource $crudResource){
        return view('api-first-crud-package::show',compact('crudResource'));
    }

    /**
     * Edit Resource Form Registration Page
     * @param  Saifkamal\ApiFirstCrudPackage\Models\CrudResource $crudResource
     * @return \Illuminate\Http\Response
     */
    public function edit(CrudResource $crudResource){
        //Edit Crud Resource Form
        return view('api-first-crud-package::edit',compact('crudResource'));
    }

    /**
     * Update Resource Registration Data
     * @param  Saifkamal\ApiFirstCrudPackage\Http\Requests\UpdateCrudResourceRequest  $request
     * @param  Saifkamal\ApiFirstCrudPackage\Models\CrudResource  $crudResource
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateCrudResourceRequest $request, CrudResource $crudResource){
        //Validate Incoming Request
        $validatedRequest       = $request->validated();
        //Update Crud Resource
        $updateBoolCrudResource = CrudResource::where('id',$crudResource->id)->update([
            'name'              => $validatedRequest['name'],
            'content'           => $validatedRequest['content']
        ]);
        return back();
    }

    /**
     * Delete Resource Registration Record
     * @param  Saifkamal\ApiFirstCrudPackage\Models\CrudResource  $crudResource
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(CrudResource $crudResource){
        //Delete Crud Resource
        CrudResource::where('id',$crudResource->id)->delete();
        return back();
    }
}