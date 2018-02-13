<?php 
namespace App\Http\Middleware;

use Closure, Auth;

class CheckMember
{
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if ($user) {
            if ($user->role_id != 2) {
              return redirect()->route('member_login');
            }
        }
        return $next($request);
    }

}