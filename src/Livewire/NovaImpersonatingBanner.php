<?php

namespace RhysLees\NovaImpersonatingBanner\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Nova\Contracts\ImpersonatesUsers;
use Livewire\Component;

class NovaImpersonatingBanner extends Component
{
    public bool $isImpersonating = false;

    public mixed $impersonating;

    public function mount()
    {
        if (app(ImpersonatesUsers::class)->impersonating(request())) {
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
        app(ImpersonatesUsers::class)
            ->stopImpersonating(request(), Auth::guard('web'), User::class);

        ray('stopImpersonating');

        return redirect(config('nova.impersonation.stopped', request()->header('Referer')));
    }
}
