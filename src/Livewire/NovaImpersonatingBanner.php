<?php

namespace RhysLees\NovaImpersonatingBanner\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Nova\Contracts\ImpersonatesUsers;
use Livewire\Component;

class NovaImpersonatingBanner extends Component
{
    public $isImpersonating = false;

    public $impersonating;

    public function mount()
    {
        $impersonating = app(ImpersonatesUsers::class)->impersonating(request());

        if ($impersonating) {
            $this->isImpersonating = true;
            $this->impersonating = Auth::user();
        } else {
            $this->isImpersonating = false;
        }
    }

    public function render()
    {
        return view('nova-impersonating-banner::nova-impersonating-banner');
    }

    public function stopImpersonating()
    {
        app(ImpersonatesUsers::class)->stopImpersonating(request(), Auth::guard('web'), User::class);

        return redirect(config('nova-impersonating-banner.redirect_url', request()->header('Referer')));
    }
}
