<?php
namespace app\api\controller;

class Products {
    public function Banners(){
    	$data = db('shop_banners')
    			-> select();
    	if(!$data){
    		return json_encode(['code'=>1,'msg'=>'fail','data'=>null],JSON_UNESCAPED_UNICODE);
    	}
    	return json_encode(['code'=>200,'msg'=>'success','data'=>$data],JSON_UNESCAPED_UNICODE);
	}
	public function SingleDetail(){
		$oid = input('oid','');
    	$data = db('products') -> where('Id',$oid)
    			-> find();
    	if(!$data){
    		return json_encode(['code'=>1,'msg'=>'fail','data'=>null],JSON_UNESCAPED_UNICODE);
    	}
    	return json_encode(['code'=>200,'msg'=>'success','data'=>$data],JSON_UNESCAPED_UNICODE);
    }
}