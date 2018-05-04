<?php

namespace App\Http\Middleware;

use Closure;
use App\Dog;
use App\User;
use Auth;
class all_use
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
         /*  $dog = new Dog();
            $s2= $dog->find(1);
           echo $s2->name;*/

        /*  $user= new User();
           $info_user= $user->find(1);
          echo $info_user->name;*/

        $user= new Auth();
        if($user = Auth::user())
        {
            echo " User : ".Auth::user()->name." @".Auth::user()->email;
        }
        else
        {
            echo " guest ".Auth::guest()->name;
        }



      
        return $next($request);
    }
}
