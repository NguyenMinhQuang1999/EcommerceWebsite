<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequestSlide;
use App\Models\Slider;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminSliderController extends Controller
{
    //
    public function index() {
        $sliders = Slider::paginate(10);
        return view('admin.slider.index', compact('sliders'));
    }

    public function create() {
        return view('admin.slider.create');
    }

    public function store(AdminRequestSlide $request)
    {
        $data = $request->except('_token', 'sd_image');
       
        $data['created_at'] = Carbon::now();
        if($request->sd_image) {
            $image = upload_image('sd_image');
            if($image['code'] == 1) {
                $data['sd_image'] = $image['name'];
            }
        }

        $id = Slider::insertGetId($data);

        return redirect()->back();
    }

    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.slider.update', compact('slider'));
    }

    public function update(AdminRequestSlide $request, $id) 
    {
     
        $slider = Slider::find($id);
        $data = $request->except('_token', 'sd_image');
       
        $data['created_at'] = Carbon::now();
        if($request->sd_image) {
            $image = upload_image('sd_image');
            if($image['code'] == 1) {
                $data['sd_image'] = $image['name'];
             //   dd($data['sd_image']);
            }
        }

      $slider->update($data);

        return redirect()->back();
    }

    public function active($id) 
    {
        $slider = Slider::find($id);
        $slider->sd_active = !$slider->sd_active;
        $slider->save();
        return redirect()->back();
    }

    public function delete($id)
    {
        $slider = Slider::find($id);
        if($slider) {
            $slider->delete();
            return redirect()->back();
        }

    }
}
