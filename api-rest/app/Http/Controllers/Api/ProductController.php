<?php

namespace App\Http\Controllers\Api;

use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(Product $product){

        $this->product = $product;
    }

    public function index()
    {
        //$data = ['data' => $this->product->paginate(5)];
        //return response()->json($data);
        //return $this->product->all();

        // retornando diretamente o paginate.
        return response()->json( $this->product->paginate(5));
    }

    public function show($id)
    {
        $data = ['data' => $this->product->find($id)];
        return response()->json($data);
    }

    public function store(Request $request)
    {

        try{
            $productData = ($request->all());
            $this->product->create($productData);
            
            return response()->json(['msg' => 'Produto criado com sucesso!'], 201);
        }catch (\Exception $e){
            if(config('app.debug')){
                return response()->json(ApiError::errorMessage($e->getMessage(), 1010));
            }
            return response()->json(ApiError::errorMessage('Houve um erro ao realizar operação', 1010));
        }

        /*
        $productData = ($request->all());
        $this->product->create($productData);
        */
    }

    public function update(Request $request, $id)
    {

        try{
            $productData = ($request->all());
            $product = $this->product->find($id);
            $product->update($productData);
            
            $return = ['data' => ['msg' => 'Produto Atualizado com sucesso']];
            return response()->json($return, 201);
        
        }catch (\Exception $e){
            if(config('app.debug')){
                return response()->json(ApiError::errorMessage($e->getMessage(), 1010));
            }
            return response()->json(ApiError::errorMessage('Houve um erro ao realizar operação', 1010));
        }

        /*
        $productData = ($request->all());
        $this->product->create($productData);
        */
    }

    public function destroy(Product $id){

        try{
            $id->delete();
            return response()->json(['data' => ['msg' => 'Produto: '.$id->name.' Produto removido com sucesso!']], 200);

        }catch (\Exception $e){
            if(config('app.debug')){
                return response()->json(ApiError::errorMessage($e->getMessage(), 1012));
            }
            return response()->json(ApiError::errorMessage('Houve um erro ao realizar remoção', 1012));
        }
    }

}
