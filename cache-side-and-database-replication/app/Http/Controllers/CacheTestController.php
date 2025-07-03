<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CacheTestController extends Controller
{
   public function index()
   {
      // Salva um valor no cache Redis
      Cache::put('foo', 'bar', 600); // 10 minutos
      // Recupera o valor do cache
      $value = Cache::get('foo');
      return response()->json(['foo' => $value]);
   }
}
