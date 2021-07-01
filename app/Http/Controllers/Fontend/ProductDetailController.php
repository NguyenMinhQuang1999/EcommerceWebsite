<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Rating;
use App\Services\ProcessViewService;

class ProductDetailController extends Controller
{
    //
    public function index(Request $request, $slug)
    {
        $arraySlug = explode('-', $slug); // tach chuoi thanh mang theo ki tu phan cach
        $id = array_pop($arraySlug); // xoa phan tu cuoi mang tra ve phan tu do
        ProcessViewService::view('products', 'pro_view', 'product', $id);

        $ratings = Rating::with('user:id,name')
            ->where('r_product_id', $id)
            ->orderByDesc('id')
            ->limit(2)
            ->get();


        $ratingDashboard = Rating::groupBy('r_number')
            ->where('r_product_id', $id)
            ->select(\DB::raw('count(r_number) as count_number'), \DB::raw('sum(r_number) as total'))
            ->addSelect('r_number')
            ->get()->toArray();
        /*Tra ra mang nhom theo so sao, dieu kien theo san pham chom so luong so va  tong so sao
    5 => array:3 [▼
    "count_number" => 1
    "total" => "5"
    "r_number" => 5
  ]
        */
        $ratingDefault = $this->mapRatingDefault();

        foreach ($ratingDashboard as $key => $item) {

            $ratingDefault[$item['r_number']] = $item;
        }





        if ($id) {
            $product = Product::with('category:id,c_name,c_slug', 'keywords')->findOrFail($id);
            $viewData = [
                'ratingDefault' => $ratingDefault,
                'product' => $product,
                'ratings' => $ratings,
                'productSuggests' => $this->getProductSuggests($product->pro_category_id, $id),
                'title_page' => $product->pro_name
            ];
            return view('frontend.pages.product_detail.index', $viewData);
        }
        return redirect()->to('/');
    }

    public function mapRatingDefault()
    {
        $ratingDefault = [];
        for ($i = 1; $i <= 5; $i++) {
            $ratingDefault[$i] = [
                'count_number' => 0,
                "total" => 0,
                'r_number' => 0
            ];
        }
        return $ratingDefault;
    }


    public function getProductSuggests($categoryId, $id)
    {
        $products = Product::where([
            'pro_active' => 1,
            'pro_category_id' => $categoryId
        ])
            ->whereNotIn('id', [$id])
            ->orderByDesc('id')
            ->select('id', 'pro_name', 'pro_sale', 'pro_avatar', 'pro_price')
            ->limit(12)
            ->get();

        return $products;
    }
    //List danh gia san pham
    public function getListRatingProduct(Request $request,  $slug)
    {
        $arraySlug = explode('-', $slug);
        $id = array_pop($arratSlug);
        if ($id) {
            $viewData = [];
            return view('frontend.pages.product_detail.product_rating', $viewData);
        }
        return redirect()->to('/');
    }
}
