<?php
  
namespace App\Http\Middleware;

  
use Closure;
   
class IsAdmin
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
        if(auth()->user()->is_admin == 0){
            return redirect()->route('denied');

        }
        if(auth()->user()->is_admin == 1){
            return $next($request);
        }

        return redirect()->route('denied');

     

        // if(auth()->user()->is_admin =! 1){
        //     return redirect()->route('denied');
        // }
        // return $next($request);
        // return redirect()->route('admin.categories');
        
        // return View('home');
        // return redirect(‘welcome’)->with(‘error’,"You don't have admin access.");
        
    }
    // public function handle($request, Closure $next)
    // {
       
    
    //     if(auth()->user()->is_admin =! 1){
    //         return redirect()->route('denied');
    //     }
    
    //     return $next($request); 
    // }
    
    
}