<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use PhpOption\None;

class PagesController extends Controller
{
    public function mainPage()
    {
        return view('pages.index');
    }

    public function page($slug)
    {
        $page='';
        $slg='';
        $data='';
        ($slug === 'contacts') ? $slg='contacts' : '';
        ($slug === 'products') ? $slg='products' : '';
        ($slug === 'services') ? $slg='services' : '';
        ($slug === 'projects') ? $slg='projects' : '';
        ($slug === 'mediaplayers') ? $slg='mediaplayers' : '';
        ($slug === 'software') ? $slg='software' : '';
        if($slug === 'services') {
            $slg='services';
            $data=Page::where('id', '<', 4)->get();
        }
        if($slug === 'wiki') {
            $slg='wiki';
            $data=Page::where('id', '>', 5)->get();
        }

        if(!$slg){
            $page = Page::where('slug', $slug)->firstOrFail();
            $slg = 'page';
        }

        return view('pages.' . $slg, [
            'page' => $page,
            'data' => $data,
        ]);
    }
}
